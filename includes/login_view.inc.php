<?php
    
    declare(strict_types=1);

    function check_login_errors()
    {
        if (isset($_SESSION["login_errors"]))
        {
            $errors = $_SESSION["login_errors"];
            
            echo "<br>";
            
            foreach( $errors as $singleErrors)
            {
                echo "<p class='msg-error'> " . $singleErrors . "</p>";
            }
            unset($_SESSION["login_errors"]);
        }
        else if(isset($_GET['Login']) && $_GET['login'] === "success")
        {
            echo "<br>";
            echo "<p class='msg-success'> Login in successfull </p>";
        }
    }

    