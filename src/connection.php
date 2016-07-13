<?php 

try{
	$db = new PDO("mysql:host=localhost;dbname=Restaurant;port=3306","root","");
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(Exception $e){
	echo $e->getMessage();
	exit;
}

try{
	$results = $db->query("SELECT * FROM TableStatus");
	var_dump($results->fetchAll(PDO::FETCH_ASSOC));
} catch(Exception $e){
	echo $e->getMessage();
	exit;
}