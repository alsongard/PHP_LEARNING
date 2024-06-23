<?php

#data source name (dsn)

$dsn = "mysql: host=localhost; dbname=myfirstdatabase";
$dbuser = "root";
$dbpasswd = "";

try {
    #php data objects more flexible 
    #mysqli good for data bases
    $pdo = new PDO($dsn, $dbuser, $dbpasswd);
    $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e){ # used to capture error message
    echo "Connection failed " . $e->getMesssage();
}