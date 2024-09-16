<?php
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $length = $_POST["length"];
        $width = $_POST["width"];
        $tile_area = 0.36;
        if (empty($length) || empty($width))
        {
            return true;
        }
        echo gettype($length);
        echo gettype($width);

        echo "<br>";
        //perform conversion
        $new_length = floatval($length);
        $new_width = floatval($width);


        echo "type of new_length is : ". gettype($new_length) . " and value is ". $new_length ."<br>";


        echo "typoe of new_width is : ". gettype($new_width) . " and value is ". $new_width . "<br>";

        function getArea($givenLength, $givenWidth, $givenTileArea)
        {
            $total_area = $givenLength * $givenWidth;
            echo "<p>Total area is ". $total_area . " data type is ". gettype($total_area) . "</p>";
            $tile_number = $total_area / $givenTileArea;
            return $tile_number;
        }
        $answer = getArea($new_length, $new_width, $tile_area);
        echo "<p> Number of tiles required for the room is ". $answer . "</p>";

    }