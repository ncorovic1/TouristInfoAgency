<?php
    use PayPal\Api\Payer;
    use PayPal\Api\Item;
    use PayPal\Api\ItemList;
    use PayPal\Api\Details;
    use PayPal\Api\Amount;
    use PayPal\Api\Transaction;
    use PayPal\Api\RedirectUrls;
    use PayPal\Api\Payment;

    require 'app/start.php';
    require_once('database.php'); 
    include 'mail.php'; 

    if( !isset($_POST['submit']) ) {
        die();
    }

    $type         = $_POST['tourName'] != ""  ? $_POST['tourName'] : "Not specified";
    $month        = $_POST['month']    != ""  ? $_POST['month']    : 0;
    $day          = $_POST['day']      != ""  ? $_POST['day']      : "XX";
    $year         = $_POST['year']     != ""  ? $_POST['year']     : 0;
    $fullname     = $_POST['fullname'] != ""  ? $_POST['fullname'] : "Not specified";
    $email        = $_POST['email']    != ""  ? $_POST['email']    : "Not specified";
    $num          = $_POST['num']      != ""  ? $_POST['num']      : 1;
    $phone        = $_POST['phone']    != ""  ? $_POST['phone']    : "Not specified";
    $payments     = isset($_POST['payments']) ? 1                  : 0;
    $paid         = 0;
    $confirmation = bin2hex(openssl_random_pseudo_bytes(5));

    $months = array("XXXXXXXXX", "January", "February", "March", "April", "May", "June", "July", "August", "September", 
                    "October", "November", "December");
    $month = $months[$month];

    $years = array("XXXX", 2016, 2017, 2018);
    $year = $years[$year];

    $tours  = array("Dubrovnik", "Srebrenica", "Jajce/Travnik", "Rafting", "Skakavac", "Bijambare", "Lukomir/Bjelasnica",
                    "Times of Misfortune", "Judaism, Christianity and Islam", "Tunnel Tour", "Islam Tour", "Mostar Tour", 
                    "Sarajevo Grand Tour", "Free Tour");

    $prices = array("Dubrovnik" => 90.25, "Srebrenica" => 52.25, "Jajce/Travnik" => 61.75, "Rafting" => 47.50,
                    "Skakavac" => 28.50, "Bijambare" => 38, "Lukomir/Bjelasnica" => 38, "Times of Misfortune" => 23.75,
                    "Judaism, Christianity and Islam" => 19, "Tunnel Tour" => 14.25, "Islam Tour" => 9.50, "Mostar Tour" => 61.75,
                    "Sarajevo Grand Tour" => 14.25, "Free Tour" => 0.00);

    $product = $tours[$type];
    $price   = $prices[$product];
    $total = $price * $num;
    if( $payments == 0 ) {
        $id = "";
        try {
            $base = new Database();
            $connection = $base->connect();      
            $connection->exec("set names utf8");
           
            $query = $connection->prepare("INSERT
                                           INTO   transactions(`tour`, `dep_day`, `dep_month`, `dep_year`, `full_name`, `email`, `phone`, `paid`, `num`, `confirmation`) 
                                           VALUES (:tour, :dep_day, :dep_month, :dep_year, :full_name, :email, :phone, :paid,   
                                                   :num, :confirmation)
                                           ");
            
            $query->bindParam(':tour',         $product,      PDO::PARAM_STR);
            $query->bindParam(':dep_day',      $day,          PDO::PARAM_STR);
            $query->bindParam(':dep_month',    $month,        PDO::PARAM_STR);
            $query->bindParam(':dep_year',     $year,         PDO::PARAM_STR);
            $query->bindParam(':full_name',    $fullname,     PDO::PARAM_STR);
            $query->bindParam(':email',        $email,        PDO::PARAM_STR);
            $query->bindParam(':phone',        $phone,        PDO::PARAM_STR);
            $query->bindParam(':paid',         $paid,         PDO::PARAM_STR);
            $query->bindParam(':num',          $num,          PDO::PARAM_STR);
            $query->bindParam(':confirmation', $confirmation, PDO::PARAM_STR);
            $rezultat = $query->execute();

            $query = $connection->prepare("SELECT id
                                           FROM  transactions
                                           WHERE confirmation = :confirmation
                                           ");
            
            $query->bindParam(':confirmation', $confirmation, PDO::PARAM_STR);
            $rezultat = $query->execute();
            $id = current($query->fetchAll())['id'];
            $datum = $day . ' ' . $month . ', ' . $year;

            //$email_to       = "violetvision2015@gmail.com";
            $email_to       = "info@infobosniatours.com";
            $email_subject  = "Rezervacija ture ";
            $email_message  = "Postovani, detalji ture u nastavku:\r\n\r\n";
            $email_message .= "ID rezervacije: "  . $id       . "\r\n";
            $email_message .= "Ime ture je: "     . $product      . "\r\n";
            $email_message .= "Broj osoba: "      . $num          . "\r\n";
            $email_message .= "Ime i prezime: "   . $fullname     . "\r\n";
            $email_message .= "Datum ture: "      . $datum        . "\r\n";
            $email_message .= "E-mail: "          . $email        . "\r\n";
            $email_message .= "Telefon: "         . $phone        . "\r\n";
            $email_message .= "Confirmation id: " . $confirmation . "\r\n";
            $email_message .= "Platio: "          . "NE"      . "\r\n";

            $headers = 'Od: ' . $tour['email'] . "\r\n" . 'Reply-To: ' . $tour['email'] . "\r\n";
            $headers = $headers . 'X-Mailer: PHP/' . phpversion();

            @mail($email_to, $email_subject, $email_message, $headers);  

            if (!$rezultat) {
                $greska = $query->errorInfo();
                print "SQL greska: ".$greska[2];
                exit();
            }
        } catch(PDOException $e) {
            echo $e->getMessage();
        } finally {
            $connection = null;
        }
        header('Location: http://infobosniatours.com/confirmation.php?id=' . $id);
        die();
    }

    $payer = new Payer();
    $payer->setPaymentMethod('paypal');

    $item = new Item();
    $item->setName($product)
        ->setCurrency('EUR')
        ->setQuantity($num)
        ->setPrice($price);

    $itemList = new ItemList();
    $itemList->setItems([$item]);

    $details = new Details();
    $details->setSubTotal($total);

    $amount = new Amount();
    $amount->setCurrency('EUR')
        ->setDetails($details)
        ->setTotal($total);

    $transaction = new Transaction();
    $transaction->setAmount($amount)
        ->setItemList($itemList)
        ->setDescription($product . 'payment confirmation.')
        ->setInvoiceNumber(uniqid());

    $redirectUrls = new RedirectUrls();
    $redirectUrls->setReturnUrl(SITE_URL . '/paypal/pay.php?success=true')
        ->setCancelUrl(SITE_URL . '/paypal/pay.php?success=false');

    $payment = new Payment();
    $payment->setIntent('sale')
        ->setPayer($payer)
        ->setRedirectUrls($redirectUrls)
        ->setTransactions([$transaction]);

    try {
        $payment->create($paypal);
        $payment_id = $payment->getId();
        try {
            $base = new Database();
            $connection = $base->connect();      
            $connection->exec("set names utf8");
           
            $query = $connection->prepare("INSERT
                                           INTO   transactions(`tour`, `dep_day`, `dep_month`, `dep_year`, `full_name`, `email`, 
                                                               `phone`, `paid`, `num`, `payment_id`, `confirmation`) 
                                           VALUES (:tour, :dep_day, :dep_month, :dep_year, :full_name, :email, :phone, :paid,   
                                                   :num, :payment_id, :confirmation)
                                           ");
            
            $query->bindParam(':tour',         $product,      PDO::PARAM_STR);
            $query->bindParam(':dep_day',      $day,          PDO::PARAM_STR);
            $query->bindParam(':dep_month',    $month,        PDO::PARAM_STR);
            $query->bindParam(':dep_year',     $year,         PDO::PARAM_STR);
            $query->bindParam(':full_name',    $fullname,     PDO::PARAM_STR);
            $query->bindParam(':email',        $email,        PDO::PARAM_STR);
            $query->bindParam(':phone',        $phone,        PDO::PARAM_STR);
            $query->bindParam(':paid',         $paid,         PDO::PARAM_STR);
            $query->bindParam(':num',          $num,          PDO::PARAM_STR);
            $query->bindParam(':payment_id',   $payment_id,   PDO::PARAM_STR);
            $query->bindParam(':confirmation', $confirmation, PDO::PARAM_STR);
            $rezultat = $query->execute();

            if (!$rezultat) {
                $greska = $query->errorInfo();
                print "SQL greska: ".$greska[2];
                exit();
            }
        } catch(PDOException $e) {
            echo $e->getMessage();
        } finally {
            $connection = null;
        }
    } catch (PayPal\Exception\PayPalConnectionException $e) {
        die($e->getData());
    }

    $approvalUrl = $payment->getApprovalLink();
    header("Location: $approvalUrl");
?>
