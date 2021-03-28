<?php

function db_connect(){
	$db_user="ss742955_casavd"; 
	$db_pass="df853zf"; 
	$db_host="mysql5.star.ne.jp";
	$db_name="ss742955_casavd";
	$db_type="mysql";

	$dsn = "$db_type:host=$db_host;dbname=$db_name;charset=utf8";

	try{
		$pdo = new PDO($dsn, $db_user,$db_pass);
		$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
	}catch(PDOException $Exception){
		die('エラー:'.$Exception->getMessage());
	}
	return $pdo;
}
?>