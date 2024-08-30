<?php

    declare(strict_types = 1);  //ensure that data types required is always true , prevent syntax errors

    function check_signup_error()
    {
        //check if the error session is available
        if (isset($_SESSION["signup_errors"]))
        {
            $errors = $_SESSION["signup_errors"];
            
            echo "<br>";

            //loop over
            foreach ($errors as $singleError)
            {
                echo "<br>";
                echo "<p class='error-msg'>" . $singleError . "</p>";
            };
        }
    };
    
    //landing_page functions
    function success()
    {
        if(isset($_GET["signup"]) &&  $_GET["signup"] === "successfull")
        {
            echo "<br>";
            echo "<p class='succ-msg'> Successfully signup </p>";
        }
    }
