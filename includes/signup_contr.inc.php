<?php
    //signup_contr file is used to control user access by providing error handling, 
    declare(strict_types = 1); //ensure data type is correct
    function compare_passwd(string $confirmPasswd, string $userPasswd)
    {
        if (!$confirmPasswd === $userPasswd )
        {
            return true;
        }
    }
    function is_input_empty(string $username,string $email, string $userId, string $userPasswd, string $confirmPasswd)
    {
        //empty is a built in function for checking if variableName is empyty returns True if empty
        if (empty($username) || empty($email) || empty($userId) || empty($userPasswd) ||empty($confirmPasswd))
        {
            return true; // == field empty
        }
        else
        {
            return false;
        };

    };
    //checks if email is valid
    function is_valid_email(object $pdo, string $email)
    {
        if(!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            return True; // email is invalid
        }
        else
        {
            return false;
        };
    };
    // function below check if data given by the user has already been entered by another user
    // query data from the database the signup_model.inc.php 
    function is_username_taken(object $pdo, string $username)
    {
        if (get_username($pdo, $username))
        {
            return true; //username taken  ===  error
        }
        else
        {
            return false; //username not taken
        };

    };
    function is_email_taken(object $pdo, string $email)
    {
        if (get_email( $pdo,  $email))
        {
            return true;
        }
        else
        {
            return false;
        };
    };
    function is_id_taken(object $pdo, string $userid)
    {
        if(get_id($pdo, $userid))
        {
            return true;
        }
        else
        {
            return false;
        };
    };
