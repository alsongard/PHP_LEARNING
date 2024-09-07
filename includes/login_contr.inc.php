<?php

    declare(strict_types=1);

    //check for any empty inputs
    function is_empty_input(string $givenEmail, string $givenPasswd)
    {
        if (empty ($givenEmail) || empty($givenPasswd))
        {
            return true;
        }
    }

    //check if email is valid
    function is_email_valid(string $givenEmail)
    {
        if (!filter_var($givenEmail, FILTER_VALIDATE_EMAIL))
        {
            return true;
        }
    }
    //array if useremail exist
    // boolean if no useremail = false
    function is_useremail_wrong(array|bool $result)
    {
        //$result variable returned from the getUserdetails() funciton in login_model.inc.php file is a booloen which is false
        // if statement check if its false and returns true otherwise it returns false
        if (!$result)
        {
            return true;
        }
        else
        {
            return false;
        }
        
    }
    function is_password_wrong(string $givenPasswd, string $hashedPasswd)
    {
        if(!password_verify($givenPasswd, $hashedPasswd))
        {
            return true;
        }

    }