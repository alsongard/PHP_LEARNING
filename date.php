<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date Information</title>
</head>
<body>
    <form method="POST">
        <input type="date" name="dob"/>
        <button>Submit</button>
    </form>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST")
        {
            $dob = $_POST["dob"];
            echo $dob . "<br>";

            //convert the dob into a time stamp & then extract only the year
            $dob_year = date("Y", strtotime($dob));
            echo "<p>Year of birth is ". $dob_year . "</p>";
            echo "<br>";

            // echo "<p>Age is ". $age . "</p>";

            //using the date() function
            echo "<p>Todays date is ". date("Y-m-d") . "</p>";
            echo "<br>";

            //Try and get the year only
            $currentYear =  date("Y");
            echo gettype($currentYear);

            //get age
            $currentYear = (int)$currentYear;
            echo gettype($currentYear);

            $age = $currentYear - $dob_year;
            echo "<p>Age is ". $age . "</p>";

        }
    ?>
</body>
</html>