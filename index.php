<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
	
    <?php
        echo "Hello Worlds";
        echo "\n";
        $name = "Gard Alson";
        echo $name;
    ?>
    <p>Hi my name is <?php echo $name; ?> and I'm learning PHP.</p>
	
    <?php
        echo $_SERVER["DOCUMENT_ROOT"];
	echo "<br>";
	echo $_SERVER["PHP_SELF"];
	echo "<br>";
	echo $_SERVER["SERVER_NAME"];
	echo "<br>";
	echo $_SERVER["REQUEST_METHOD"];
	echo "<br>";
	echo $_GET["fname"];
	echo "<br>";
	echo $_GET["age"];
	echo "<br>";
	echo $_GET["eyeColor"];
	echo "<br>";
	echo $_REQUEST["fname"];
	echo "<br>";
     ?>
     

</body>
</html>
