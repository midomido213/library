<?php

function db_connect(){
	$dsn = '***';
	$user = '***';
	$password = '***';

	try{
		$dbh = new PDO($dsn, $user, $password);
		return $dbh;
	}catch (PDOException $e){
	    	print('Error:'.$e->getMessage());
	    	die();
	}
}
