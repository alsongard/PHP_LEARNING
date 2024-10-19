<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>
<body>
    <h1>PHP Array Functions</h1>
    <hr>
    <h2>array_values() function/method</h2>
    <p>Numerical Index array</p>
    <?php
        $newArray = ["Sherlock Holmes", "Robert Downey", "Henry Canvil"];

        print_r(array_values($newArray));
    ?>
    <p> Associative array</p>
    <?php
        $newerArray = array("hero"=>"Sherlock Holmes", "vilain"=>"Mortiary");
        print_r(array_values($newerArray));
    ?>
    <p>Multidimensional array</p>
    <?php
        $mutliArray["employee"] = array(0=>"Johnte", 1=>"Kamau", 2=>"Emmanuel");
        $mutliArray["junior"] = array(0=>"React", 1=>"NextJs", 2=>"Android", 3=>"Nodejs", 4=>"Express");

        print_r(array_values($mutliArray["employee"]));
        echo "<br>";
        print_r(array_values($mutliArray["junior"]));
    ?>

    <hr>
    <h2>array_keys() function</h2>
    <?php
        $newerAssoc = array("fronted"=>"React Framework", "backend"=>"PHP", "dataAnalysis"=>"Python", "dataBase"=>"SQL");
        print_r(array_keys($newerAssoc));
    ?>
    
    <hr>
    <h2>array_pop() function </h2>
    <?php
        $justArray =  ["Donald Trump", "Elon Musk", "Kamala", "Bidden"];
        $removedElement = array_pop($justArray);
        print_r( $justArray);
        echo "<p> Removed Element :" . $removedElement . "</p>";
    ?>
</body>
</html>