<?php

    declare(strict_types=1);

    function get_userdetails(object $pdo,string $givenEmail)
    {
        //query the data
        $query = "SELECT * FROM registration WHERE email = :useremail;";

        //prepared statement
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(":useremail", $givenEmail);
        $stmt->execute();
        

        $result = $stmt->fetch(PDO::FETCH_ASSOC);;
        return $result;
    }
