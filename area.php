<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area Calculation</title>
</head>
<body>
    <form method="POST">
        <input type="double" name="length" placeholder="Enter length of lab"/>
        <input type="double" name="width" placeholder="Enter width of lab"/>
        <button>Submit</button>
    </form>
    <!-- submiting  the form data on a new php file and the results displayed in the calculate_area.php file -->
    <!-- <form action="./includes/calculate_area.php" method="POST">
        <input type="double" name="length" placeholder="Enter length of lab"/>
        <input type="double" name="width" placeholder="Enter width of lab"/>
        <button>Submit</button>
    </form> -->
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST")
        {
            $tile_area = 0.36;
            $length = $_POST["length"];
            $width = $_POST["width"];

            echo "<p> Value of length is ". $length ." and data type is ". gettype($length). " </p>";
            echo "<p> Value of width is ". $width ." and data type is ". gettype($width). " </p>";

            //perform type conversion

            $new_length = floatval($length);
            $new_width = floatval($width);

            echo "<p> Value of new_length is ". $new_length ." and data type is ". gettype($new_length). " </p>";
            echo "<p> Value of new_width is ". $new_width ." and data type is ". gettype($new_width). " </p>";
            
            //perform calculation
            function getArea($givenLength, $givenWidth, $tileArea)
            {
                $total_area  = $givenLength * $givenWidth;
                $tile_number = $total_area / $tileArea;
                return $tile_number;
            }

            $answer = getArea($new_length, $new_width, $tile_area);
            echo "<p> Number of tiles required area : ". $answer . "</p>";
        }
    ?>
</body>
</html>