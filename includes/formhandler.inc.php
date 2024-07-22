<?php
//data source name
$dsn = "mysql:host=localhost;dbname=myfirstdatabase";
$dbuser = "root";
$dbpasswd = "";


try{
    $pdo = new PDO($dsn,$dbuser, $dbpasswd );
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION)
}
catch(PDOException $e){
    echo "Connection Failed : " . $e->getMessage();
}