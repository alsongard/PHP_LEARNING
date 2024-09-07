<?php

ini_set("session.use_only_cookies", 1);
ini_set("session.use_strict_mode", 1);

session_set_cookie_params(
    [
        "lifetime" => 1800,
        "domain" => "localhost",
        "path" => "/",
        "secure" => true,
        "httponly" => true
    ]
);

session_start();

// check if userId is given if user is login to the website
if (isset($_SESSION["user_id"]))
{
    session_regenerate_id(true);
    $userId = $_SESSION["user_id"];
    $newSessionId =session_create_id();
    $sessionId = $newSessionId . "_" . $userId;
    session_id($sessionId); //set the session id

    $_SESSION["last_regeneration"] = time();
}
else
{
    //checks if user not logged in 
    if(!isset($_SESSION["last_regenration"]))//false
    {
        session_regenerate_id(true);
        $_SESSION["last_regeneration"] = time();

    }
    else
    {
        $interval = 60 * 30;
        if (time() - $_SESSION["last_regeneration"]  >= $interval){
            session_regenerate_id(true);
            $_SESSION["last_regeneration"] = time();
        }
        }
}


