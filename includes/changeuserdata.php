<?php

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $username = $_POST["username"];
    $userpasswd = $_POST["pwd"];
    $useremail = $_POST["email"];

    try
    {
        require_once "./dbh.inc.php";
        //update data for the user
        $query = "UPDATE userdata SET email= :usremail WHERE username = :usrname AND pwd = :usrpwd;";
        
        //prepare the statement
        $stmt = $pdo->prepare($query);

        $stmt->bindParam(":usrname", $username);
        $stmt->bindParam(":usremail", $useremail);
        $stmt->bindParam(":usrpwd", $userpasswd);

        $stmt->execute();


        $pdo = null;
        $stmt = null;
        header("Location: ../index.php");
        exit();
    }
    catch(PDOException $e)
    {
        die("Query failed : ". $e->getMessage());
    }
}
else
{
    header("Location: ../index.php");
    exit(); 
}   