<?php
//check if user submitted data properly
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $firstName = htmlspecialchars($_POST["firstname"]);
    $middleName = htmlspecialchars($_POST["middlename"]);
    $lastName = htmlspecialchars($_POST["lastname"]);
    $favPet = htmlspecialchars($_POST["favpet"]);

    if (empty($firstName)){//empyt() is used to check if a variable is empty
        exit();
        header("location: ../form.php");
    }
    else{
        header("location: ../form.php");
    }

    echo "User Details :";
    echo "<br>";
    echo $firstName;
    echo "<br>";
    echo $lastName;
    echo "<br>";
    echo $middleName;
    echo "<br>";
    echo $favPet;
}
else{
    header("location: ../form.php");
}



//var_dump($_SERVER["REQUEST_METHOD"]);//these returns the method used.

/*
OLDER METHOD FOR SUBMITTING DATA
if (isset($_POST["submit"])){
    echo "sucesfully logged data";
}
else{
    header("location:../form.php ");
}
*/