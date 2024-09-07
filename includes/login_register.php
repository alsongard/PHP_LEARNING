<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $userEmail = $_POST["user_email"];
        $userPasswd = $_POST["user_password"];
        try
        {
            require_once "./dbh.inc.php ";
            require_once "./login_model.inc.php";
            require_once "./login_contr.inc.php";
            require_once "./login_view.inc.php";
            

            //errors
            $loginErrors = [];
            if (is_empty_input($userEmail, $userPasswd))
            {
                $loginErrors["empty_input"] = "Fill all fields";
            }
            if (is_email_valid($userEmail))
            {
                $loginErrors["invalid_email"] = "Enter valid email";
            }
            $result = get_userdetails($pdo, $userEmail);
            
            //check if the usermail exist
            if(is_useremail_wrong($result))
            {
                $loginErrors["usermail_not_exit"] = "Incorrect email";                
            }
            if (!is_useremail_wrong($result) && is_password_wrong($userPasswd, $result["userPasswd"]))
            {
                $loginErrors["Incorrect"] = "Incorrect Login Details";
            }
            require_once "./config.php";

            if ($loginErrors)
            {
                $_SESSION["login_errors"] = $loginErrors;
                header("Location: ../user_login_signup.php");
                die();
            }

            $newSessionId = session_create_id(); //used to create a new session id
            $sessionId = $newSessionId . "_" . $result["id"];
            session_id($sessionId);

            //login the user
            $_SESSION["user_id"] = $result["id"]; //id column in the database
            $_SESSION["username"] = htmlspecialchars($result["username"]);

            $_SESSION["last_regeneration"] = time();
            header("Location: ../landing_page.php?login=success");
            $pdo = null;
            $stmt = null;

            die();
        }
        catch(PDOException $e)
        {
            die("Query failed ".  $e->getMessage());
        }
        


    }
    else
    {
        header("Location: ../user_login_signup.php");
        die();
    }