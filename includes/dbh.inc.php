<?php

#data source name (dsn)

$dsn = "mysql: host=localhost; dbname=myfirstdatabase";
$dpuser = "root";
$dbpasswd = "";

try {
    $pdo = new PDO($dsn, $dbuser, $dbpasswd);
    $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e){
    echo "Connection failed " . $e->getMesssage();
}