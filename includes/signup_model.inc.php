<?php
    // this file is used to query and interact with the database
    declare(strict_types = 1); //ensure that data types required is always true , prevent syntax errors

    function get_username(object $pdo, string $userName)
    {
        //$query = "SELECT columnName FROM tableName WHERE condition
        $query = "SELECT username FROM registration WHERE  username=:username;";
        // the statement above will get data if username exist
        $stmt = $pdo->prepare($query); // setting prepared statement $pdo = connection
        //binding Data
        $stmt->bindParam(":username",$userName);
        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result; // return if username exist
    }

    function get_email(object $pdo, string $email)
    {
        //query
        $query = "SELECT email FROM registration WHERE email=:email;";

        $stmt = $pdo->prepare($query);
        $stmt->bindParam(":email", $email);
        $stmt->execute();

        //fetch data if email exist
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
    function get_id(object $pdo, string $userid)
    {
        $query = "SELECT userId FROM registration WHERE userId=:userid;";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(":userid", $userid);
        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }