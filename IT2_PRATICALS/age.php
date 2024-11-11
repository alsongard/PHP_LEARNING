<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <input name="age" type="number"/>
        <input type="submit" value="submit"/>
    </form>
    <?php
        if($_SERVER["REQUEST_METHOD"] === "POST"){
            $age = $_POST["age"];
            if ($age < 18){
                echo "<script type='text/javascript'>alert('You are a minor and needs to study')</script>";
            }
            else{
                echo "<p> You are an adult </p>";
            }
        }
    ?>
</body>
</html>