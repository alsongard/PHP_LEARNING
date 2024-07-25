<?php

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $username = $_POST["username"];
    $userpasswd = $_POST["pwd"];

    try
    {
        require_once "./dbh.inc.php";

        //query to delete user data
        $query = "DELETE FROM userdata WHERE username = :usrname AND pwd = :usrpasswd;";

        //prepare the statement
        $stmt = $pdo->prepare($query);
        
        //bind parameters
        $stmt -> bindParam(":usrname", $username);
        $stmt -> bindParam(":usrpasswd", $userpasswd);

        $stmt->execute();

        $pdo = null;
        $stmt = null;
        
        header("Location: ../index.php");
        exit();
    
    }
    catch(PDOException $e)
    {
        echo "Query failed : ". $e->getMessage();
    }
}
else
{
    header("Location: ../index.php");
    exit(); 
}