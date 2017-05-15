<?php
	require_once('database.php'); 
	// ini_set('display_errors', 1);
	// ini_set('display_startup_errors', 1);
	// error_reporting(E_ALL);
	function send_mail($payment_id) {
		try {
		    $base = new Database();
		    $connection = $base->connect();      
		    $connection->exec("set names utf8");
		   
		    $query = $connection->prepare("SELECT id, tour, dep_day, dep_month, dep_year, full_name, email, phone, paid, num, 									  payment_id 
		    							   FROM   transactions
		                                   WHERE  payment_id = :payment_id
		                                   ");
		    
		    $query->bindParam(':payment_id', $payment_id, PDO::PARAM_STR);
		    $rezultat = $query->execute();
		    $tour = current($query->fetchAll());
		    $datum = $tour['dep_month'] . ' ' . $tour['dep_day'] . ', ' . $tour['dep_year'];

	      //$email_to       = "violetvision2015@gmail.com";
	        $email_to       = "info@infobosnia.com";
		    $email_subject  = "Rezervacija ture ";
	        $email_message  = "Postovani, detalji ture u nastavku:\r\n\r\n";
	        $email_message .= "ID rezervacije: " . $tour['id'] 			       		 . "\r\n";
	        $email_message .= "Ime ture je: "    . $tour['tour'] 			   		 . "\r\n";
	        $email_message .= "Broj osoba: "     . $tour['num']  			   		 . "\r\n";
	        $email_message .= "Ime i prezime: "  . $tour['full_name'] 		   		 . "\r\n";
	        $email_message .= "Datum ture: "     . $datum                      		 . "\r\n";
	        $email_message .= "E-mail: "         . $tour['email'] 			   		 . "\r\n";
	        $email_message .= "Telefon: "        . $tour['phone'] 			   	 	 . "\r\n";
	        $email_message .= "Platio: "         .($tour['paid'] == 1) ? "DA" : "NE" . "\r\n";
	        
	        if( $tour['paid'] )
	        	$email_message .= "Payment ID: " . $tour['payment_id']         . "\r\n";

	        //echo "<script type='text/javascript'>alert('usao');</script>";
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
		    var_dump($e);
		} finally {
		    $connection = null;
		}
		return $tour['id'];
    }
?>