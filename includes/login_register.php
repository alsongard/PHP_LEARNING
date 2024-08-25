<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        require_once "./dbh.inc.php";

        $userEmail = $_POST["user_email"];
        $userPasswd = $_POST["user_password"];

        $storedPswd  = "SELECT userPasswd FROM registration WHERE email = $useremail" 
        if ($userPasswd === $storedPswd)
        {
            header("Location: ../index.php");
        }
    }
    else
    {
        header("Location: ../login_sign.php")
    }