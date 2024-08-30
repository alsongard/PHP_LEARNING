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
                echo "<p class='error-msg'>" . $singleError . "</p>";
            };
        };
    };