<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>if else</title>
</head>
<body>
    <h2>Learning if else condition in php</h2>
    <form method="POST">
        <input name="lucky" type="number"/>
        <input type="submit" value="submit"/>
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"]=== "POST"){
            $luckNumber = intval($_POST["lucky"]);
            if ($luckNumber = 10){
                echo "Type of var \$luckyNumber is " . gettype($luckNumber);
                echo "<p> $luckNumber is correct</p>";
                
            }
            else
            {
                echo "<p>This is not the correct lucky number";
            }
        }
    ?>
</body>
</html>