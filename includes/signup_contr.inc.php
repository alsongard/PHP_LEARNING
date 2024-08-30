<?php
    //signup_contr file is used to control user access by providing error handling, 
    declare(strict_types = 1) //ensure data type is correct
    function is_input_empty($username, $email, $userId, $userPasswd, $confirmPasswd)
    {
        //empty is a built in function for checking if variableName is empyty returns True if empty
        if (empty(string $username) || empyt(string $email) || empty(string $userId) || empty(string $userPasswd) ||empty(string $confirmPasswd))
        {
            return true; // == field empty
        }
        else
        {
            return false;
        }

    }
    //checks if email is valid
    function is_valid_email(string $email)
    {
        if(!filter_var(string $email, FILTER_VALIDATE_EMAIL))
        {
            return True; // email is invalid
        }
        else
        {
            return false;
        }
    }
    function is_email_taken()
    function is_username_taken()
    {

    }
