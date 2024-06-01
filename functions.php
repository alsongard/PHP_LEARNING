<?php 

declare(strict_types = 1);


//delcaring function and passing parameters
function sayHello($name){
    echo "Hello there " . $name ;   
}
sayHello("Johy Doee");

echo "<br>";
//declaring with default value
function parentInfo(string $name, $location = "Nairobi"){
    $info = "Hello Mr/Mrs. " . $name . " welocme to " . $location ;
    return $info;
}
$myString = parentInfo("Njuguna");
echo $myString;
echo "<br>";
$myString = parentInfo("Omah", "Mombasa");
echo $myString;

echo "<br>";

//global and local variable
function calculator(int $num01, int $num02){
    $result = $num01 + $num02;
    return "The sum of " . $num01 . " and " . $num02  . " is ". $result;
} 
$answer =  calculator(12, 40);
echo $answer;
echo "<br>";
//to use a global Variable inside a function use global keyword
$marks = 99;
function test(){
    global $marks;
    return "The student passed with a " .$marks;
}
echo test();