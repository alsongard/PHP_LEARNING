<?php
session_start();

$_SESSION["username"] = "ReactJS";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/form_user.css">
    <title>Document</title>
</head> 
<body>

<?php
    echo $_SESSION["username"];
?>
</body>
<html>