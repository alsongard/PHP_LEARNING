<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $userName = $_POST["user_name"];
        $email = $_POST["user_email"];
        $userId = $_POST["id_number"];
        $userPasswd = $_POST["user_password"];
        $confirmPasswd = $_POST["confirm_password"];
        

        
        try 
        {
            require_once "./dbh.inc.php";
            require_once "./signup_model.inc.php";
            require_once "./signup_contr.inc.php";
            require_once "./signup_view.inc.php";
            //tableName should be added after

            //create an array for errors
            $errors = [];

            //error handlers given function are form signup.contr.inc.php 
            if (compare_passwd($confirmPasswd, $userPasswd))
            {
                //execute this only if the compare_passwd() return true
                $errors["password_not_mathc"] = "The passwords do not match.";
            }
            if (is_input_empty($userName, $email, $userId, $userPasswd, $confirmPasswd))
            {
                //associative name for the given error message is error["associative_key"]
                $errors["empty_field"] = "Fill all fields!";   
            }
            if  (is_valid_email($pdo, $email))
            {
                $errors["invalid_email"] = "Provide a valid email!";
            }
            if (is_username_taken($pdo, $userName))
            {
                $errors["username_taken "] = "Username already used!";
            }
            if (is_email_taken($pdo, $email))
            {
                $errors["email_taken"] = "Email already taken!";   
            }
            if (is_id_taken($pdo, $userId))
            {
                $errors["id_taken"] = "Id already taken";
            }

            require_once "./config.php";
            // To check error check array errors
            if ($errors) //check if array has elements == true 
            {
                $_SESSION["signup_errors"] = $errors;
                header("Location: ../user_login_signup.php");
                die();
            }

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
    else
    {
        header("Location: ../user_login_signup.php");
    }
