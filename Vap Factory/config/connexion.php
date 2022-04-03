<?php

try {
	if (strcmp($_SERVER['ENVIRONMENT_TYPE'], "production") == 0) {
	 $access=new pdo('mysql:host=109.234.164.161;dbname=sc1lgvu9627_armougom-thomas.sprint-06;charset=utf8', $_SERVER['DB_USER'], $_SERVER['DB_PASSWORD']);
     
     $access->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

} catch (Exception $e) 
{
	$e->getMessage();
}
    
     


?>