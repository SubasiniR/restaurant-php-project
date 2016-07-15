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
	$rows = $results->fetchAll(PDO::FETCH_ASSOC);
	//var_dump($rows);
} catch(Exception $e){
	echo $e->getMessage();
	exit;
}

try{
	$option = $db->query("SELECT TableNumber FROM TableStatus");
	$opt = $option->fetchAll(PDO::FETCH_ASSOC);
	//var_dump($opt);
} catch(Exception $e){
	echo $e->getMessage();
	exit;
}