<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Triangle Area</title>
</head>
<body>
    <form method="POST">
        <input type="number" name="number1" placeholder="Enter number.."/>
        <input type="number" name="number2" placeholder="Enter number.."/>
        <input type="number" name="number3" placeholder="Enter number.."/>
        <input type="submit" value="submit"/>
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST")
        {

            //GET DATA
            $number1 = (int)$_POST["number1"];
            $number2 = (int)$_POST["number2"];
            $number3 = (int)$_POST["number3"];
    
            //find sum
            $sum = $number1 + $number2 + $number3;
            echo "<p> Sum of the 3 sides of triangle is " . $sum . "</p>";
            $s = $sum / 2;
            echo "<p> S is " . $s . "</p>";
            
            $val = ($s - $number1) * ($s - $number2) * ($s - $number3);
            echo "<p> Val is " . $val . "</p>";

            $area = sqrt(($s * $val));
            echo "<p> Area of the triange is ". round($area, 3) . "</p>";   
        }
    ?>
</body>
</html>