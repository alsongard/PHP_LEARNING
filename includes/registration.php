<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $userName = $_POST["user_name"];
        $email = $_POST["user_email"];
        $userId = $_POST["id_number"];
        $userPasswd = $_POST["user_password"];
        $confirmPasswd = $_POST["confirm_password"];
        

        if (!$userPasswd === $confirmPasswd)
        {
            echo "<p>Password do not math</p>";
        }
        else
        {
            try 
            {
                require_once "./dbh.inc.php";
                //tableName should be added after

                //hash passowrd first
                $query = "INSERT INTO registration(username, email, userId, userPasswd) VALUES (:username,:email,:userId,:userPasswd);";
                
                
                $options = [
                    "cost"=>12
                ];
                $hashedPwd = password_hash($userPasswd, PASSWORD_BCRYPT,$options );
                
                $stmt = $pdo->prepare($query);
                $stmt->bindParam(":username", $userName);
                $stmt->bindParam(":email", $email);
                $stmt->bindParam(":userId", $userId);
                $stmt->bindParam(":userPasswd", $hashedPwd);
                $stmt->execute();

                $pdo = null;
                $stmt = null;
                header("Location: ../login_sign.php");
            }
            catch(PDOException $e)
            {
                die("Query failed : ". $e);
            }

        }

    }
    else{
        header("Location: ../login_sign.php");
    }
