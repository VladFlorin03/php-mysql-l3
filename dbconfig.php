<?php


$DB_host = "remotemysql.com";
$DB_user = "1PPXVzQkIN";
$DB_pass = "Sj2U1uEguK";
$DB_name = "1PPXVzQkIN";

try
{
	$DB_con = new PDO("mysql:host={$DB_host};dbname={$DB_name}",$DB_user,$DB_pass);
	$DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
	echo $e->getMessage();
}
include_once 'class.crud.php';
$crud = new crud($DB_con);
?>
