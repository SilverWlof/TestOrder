<?php
	$connection = null;
	function dbConnection ($dbname, $password){
		global $connection;
		$connection = new PDO("mysql:host=localhost; dbname=$dbname",$dbname, $password);
	}
function dbQuery ($query){
	global $connection;
	return $connection->query($query)->fetchAll(PDO::FETCH_ASSOC);
}
function clean($text){
	global $connection;
	return $connection->quote($text);
}
dbConnection("w99638ot_bd","qwe123")
?>