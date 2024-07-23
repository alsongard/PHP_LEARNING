<?php


if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $username = $_POST["username"];
    $userPasswd = $_POST["pwd"];
    $email  = $_POST["email"];

    try{
        require_once "./dbh.inc.php";
        //capture data
        // $query = "INSERT INTO userdata(username, email, pwd) VALUES (?, ?, ?) ;"; 
        $query = "INSERT INTO userdata(username, email, pwd) VALUES (:username,:email,:pwd);";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":pwd", $userPasswd);
        $stmt->bindParam(":email", $email);

        $stmt->execute();
        //connect database & prepared statement
        // $stmt = $pdo->prepare($query);
        // $stmt->execute([$username, $email, $userPasswd]);

        $pdo = null;
        $stmt = null;
        header("Location: ../index.php");

    }
    catch(PDOException  $e)
    {
        die("Query failed : ".  $e);
    }
}
else
{
    header("Location: ../index.php");
}