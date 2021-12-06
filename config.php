<?php

$db_host = "localhost";
//$db_user = "root";
//$db_password = "";
//$db_name = "moduleconnexion";

$db_user = "maxime-hadj";
$db_password = "Telecaster0603";
$db_name = "maxime-hadj_moduleconnexion";


try{
    $db = new PDO("mysql:host={$db_host};dbname={$db_name}",$db_user,$db_password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    /*echo "Connected !";*/
}
catch(PDOEXCEPTION $e){
    echo $e->getMessage();
}
