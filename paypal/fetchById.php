<?php
	require_once('database.php'); 
	// ini_set('display_errors', 1);
	// ini_set('display_startup_errors', 1);
	// error_reporting(E_ALL);
	function fetchById($id) {
		try {
		    $base = new Database();
		    $connection = $base->connect();      
		    $connection->exec("set names utf8");
		   
		    $query = $connection->prepare("SELECT id, tour, dep_day, dep_month, dep_year, full_name, email, phone, paid, num, 									  payment_id, confirmation
		    							   FROM   transactions
		                                   WHERE  id = :id
		                                   ");
		    
		    $query->bindParam(':id', $id, PDO::PARAM_STR);
		    $rezultat = $query->execute();
		    $tour = current($query->fetchAll());

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
		return $tour;
    }
?>