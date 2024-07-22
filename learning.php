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
        echo "<br>";
        $name = "Gard Alson";
        echo $name;
    ?>
    <p>Hi my name is <?php echo $name; ?> and I'm learning PHP.</p>
	
    <?php
	echo $_SERVER["DOCUMENT_ROOT"]; // returns the document folder
	echo "<br>";
	echo $_SERVER["PHP_SELF"];
	echo "<br>";
	echo $_SERVER["SERVER_NAME"];
	echo "<br>";
	echo $_SERVER["REQUEST_METHOD"];//metod which is used to submit data / GET/ POST /
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

	<hr>
	<!------------ARRAYS---------------------->
	<h2>Arrays</h2>	
	<?php
	//arrays to delcarre
	$fruits = []; 
	//or $fruits = array();
	$fruits = ["Apple", "Banana", "Orange"];
	echo $fruits[0];
	//arrays use index to access elements
	//delete an element using unset()
	unset($fruits[2]);
	echo "<p>$fruits</p>";
	print_r($fruits);
	echo "<br>";
	echo '<pre>';
	print_r($fruits);
	echo '</pre>';
	echo "<br>";

	//using array_splice method
	//add item
	array_splice($fruits, 1, 0, "Mango");
	print_r($fruits);
	echo "<br>";
	//remove an item
	array_splice($fruits, 0, 1);
	print_r($fruits);

	echo "<br>";
	//asoociative arrays
	$tasks = [
		"laundry" => "Wash clothes",
		"cleaning" => "Clean the house",
		"shopping" => "Buy groceries",
		"gardening" => "Water the plants"
	];
	//access elements in associative arrays
	echo $tasks["laundry"];
	//add item 
	$tasks["cooking"] = "Cook dinner";
	echo "<br>";

	print_r($tasks);
	echo "<br>";

	//loops
	echo "<hr>";
	echo "<h2>LOOPS</h2>";
	for ($i = 0; $i < 11; $i++){
		echo "Value of i is ". $i;
		echo "<br>";
	}
	$bool = true;
	$a = 1;
	while($bool){
		echo "Value of a is " . $a;
		echo "<br>";

		$a++;
		if ($a == 10){
			$bool = false;
		}
	}
	$z = 0;
	do {
		echo "value : ". $z;
		echo "<br>";
		$z++;
	}
	while($z < 5);

	echo "<hr>";
	$food = ["meat", "vegetables", "fruits"];
	for ($i = 0; $i < count($food); $i++){
		echo "Type of food is ". $food[$i] . "<br>";
	}
	//for each loop
	$grades = ["A", "B", "C", "D", "E", "F"];
	foreach ($grades as $gradeValue){
		echo "Grades in school are : ". $gradeValue . "<br>";
	}
	/*$gradeValue = [
		"A" => [100, 99, 98, 84],
		"B" => [83, 88, 87, 70],
		"C" => [69, 64, 60, 59],
		"D" => [40, 38, 34, 32]
	];*/
	$gradeValue = [
		"A" => 100,
		"B" => 84,
		"C" => 69,
		"D" => 40
	];
	foreach ($gradeValue as $grade => $gradeItem){
		echo "Grade : ". $grade . " : Marks : ". $gradeItem . "<br>";
	}
	?>
	
</body>
</html>
