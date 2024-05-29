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
	<hr>
	<h3>String Operator : concatenation</h3>
	<?php
		$a = "Hello";
		$b = "Worlds";
		$c = $a . " " . $b;
		echo $c;
	?>
	<hr>
	<p>Arithmetic operators</p>
	<p> % returns remainer</p>

	<hr>
	<!-----------CONDITIONS--------------------->
	<h2>Control flow Statements</h2>
	<h3>Conditions</h3>
	<?php
		$bool = true;
		if ($bool){
			echo "The value of bool is $bool";
		}
		echo "<br>";

		//if else returns 1 action if true and else returns if false
		$a = 4;
		$b = 6;
		if ($a > $b){
			echo "Value of a : $a is greater than value of b : $b";
		}
		else{
			echo "Value of b : $b is greater than value of a : $a";
		}
		echo "<br>";

		//when having multiple conditions, use else if
		$grade = "A";
		if ($grade === "A"){
			echo "You have passed with an $grade";
		}
		else if ($grade === "B"){
			echo "You have passed with a $grade";
		}
		else if ($grade === "C"){
			echo "You have passed with a $grade";
		}
		else{
			echo "You have not yet understood.";
		}
		//switch statement
		echo "<br>";
		echo "<h3>Switch Statements</h3>";
		$val = 1;
		switch($val){
			case 1:
				echo "The value of a is 1";
				break;
			case 2:
				echo "The value of a is 2";
				break;
			default:
				echo "Value out of range";
		}

		//USING MATCH
		echo "<br>";
		echo "<h3>Match Statements</h3>";
		$magic_number = 3;
		$result = match($magic_number){
			32 => "Value is 32",
			23, 0, 30, 10 => "Value is not magic number $magic_number",
			default => "No magic number was found"
		};
		echo $result;
	?>
</body>
</html>
