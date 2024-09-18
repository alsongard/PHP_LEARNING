<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Calculation</title>
</head>
<body>
    <form method="POST">
        <p>Enter any 3 numbers that come to your mind </p>
        <input type="number"name="number1"  placeholder="Enter any number"/>
        <input type="number"name="number2" placeholder="Enter any number"/>
        <input type="number"name="number3" placeholder="Enter any number"/>
        <select name="sign">
            <option val="">--Choose--</option>
            <option val="-"> - </option>
            <option val="+"> + </option>
            <option val="*"> * </option>
            <option val="/"> / </option>
            <option val="%"> % </option>
        </select>
        <input type="submit" value="submit"/>
    </form>
    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST")
        {
            $number1 = (int)$_POST["number1"];
            $number2 = (int)$_POST["number2"];
            $number3 = (int)$_POST["number3"];
            $sign = $_POST["sign"];

            echo "<p> Type of number1 is ". gettype($number1) . "</p>";
            echo "<p> Type of number2 is ". gettype($number2) . "</p>";
            echo "<p> Type of number3 is ". gettype($number3) . "</p>";
            
            if ($sign === "*")
            {
                $result = $number1 * $number2 * $number3;
                echo "<p>Result of production is  ". $result . "</p>"; 
            }
            else if ($sign === "+")
            {
                $result = $number1 + $number2 + $number3;
                echo "<p>Result of summation is  ". $result . "</p>"; 
            }
            else if ($sign === "-")
            {
                $result = $number1 - $number2 - $number3;
                echo "<p>Result of subtraction is  ". $result . "</p>"; 
            }
            else if ($sign === "/")
            {
                $result = ($number1 / $number2 )/ $number3;
                echo "<p>Result of division is  ". $result . "</p>"; 
            }
            else if ($sign === "%")
            {
                $result = $number1 % $number2 % $number3;
                echo "<p>Result of modulo is  ". $result . "</p>"; 
            }
        }
    ?>
</body>
</html>