<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multidimensional Array</title>
</head>
<body>
    <h1>Multidimensional Array </h1>

    <?php
        $myList["employee"] = array(1=>"Anuj Kumar", "2"=>"Sanjeev Kumar", "3"=>"Rahul Chaubey", "4"=>"Atul Raguvanshi", "5"=>"Ashish Jain");
        echo "<p> This is an example of a multidimensional array </p>";
        echo $myList["employee"][1];
    ?>
</body>
</html>