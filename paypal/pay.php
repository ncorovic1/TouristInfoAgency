<?php

use PayPal\Api\Payment;
use PayPal\Api\PaymentExecution;
require 'app/start.php';
require_once('database.php');
include 'mail.php'; 

if( !isset($_GET['success'], $_GET['paymentId'], $_GET['PayerID']) ) {
	header('Location: http://infobosniatours.com/');
    die();
}

$id = "";
if( (bool)$_GET['success'] === false ) {
	//Canceled
    $id = send_mail($_GET['paymentId']); 
	header('Location: http://infobosniatours.com/confirmation.php?id=' . $id);
    die();
}

$paymentId = $_GET['paymentId'];
$payerId = $_GET['PayerID'];

$payment = Payment::get($paymentId, $paypal);

$execute = new PaymentExecution();
$execute->setPayerId($payerId);

try {
    $result = $payment->execute($execute, $paypal);
} catch (Exception $e) {
    //Ako reloada stranicu da ne pokaze error...
    // $data = json_decode($e->getData());
    // //Message je za usera da mu kaze gdje je pogrijesio
    // echo $data->message;
    // var_dump($data);
    header('Location: http://infobosniatours.com');
}

try {
    $base = new Database();
    $connection = $base->connect();      
    $connection->exec("set names utf8");
   
    $query = $connection->prepare("UPDATE transactions
    							   SET 	  paid = 1 
                                   WHERE  payment_id = :payment_id
                                   ");
    
    $query->bindParam(':payment_id', $paymentId, PDO::PARAM_STR);
    $rezultat = $query->execute();

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

$id = send_mail($_GET['paymentId']); 
header('Location: http://infobosniatours.com/confirmation.php?id=' . $id);

