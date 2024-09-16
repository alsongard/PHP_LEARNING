<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Welcome to PHP Learning</h1>

    <!-- LESSON 1 -->
    <form method="POST" class="form">
        <fieldset>
            <legend>My App</legend>
            <p>Enter first Number</p>
            <input class="number1" type="number" name="number1" />
            <p>Enter second Number</p>
            <input class="number2" type="number" name="number2"/>
            <br>
            <button>submit</button>
        </fieldset>
    </form>
    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST")
        {
            $number1 = $_POST["number1"];
            $number2 = $_POST["number2"];
            echo "<p>  Number1 : " . $number1 ."</p>";
            echo "<p>  Number1 : " . $number2 ."</p>";

            //check data type
            echo "<p> Data type of variable number1 is ". gettype($number1) . "</p>";
            echo "<p> Data type of variable number2 is ". gettype($number2) . "</p>";

            // perform string conversion
            $new_number1 = (int)$number1;
            $new_number2 = (int)$number2;
            echo "<p> Data type of variable new_number1 is ". gettype($new_number1) . "</p>";
            echo "<p> Data type of variable new_number2 is ". gettype($new_number2) . "</p>";

            $sum = $new_number1 + $new_number2;
            echo $sum;
        }
    ?>

    <!-- LESSON 2 : CALCULATION ON AGE -->

    <form method="POST">
        <fieldset>
            <legend>Compute Age</legend>
            <label for="date-of-birth">Enter data of birth(dob)</label>
            <input type="date" name="dob" placeholder="Enter date of birth"/>
            <input type="submit" value="compute age"/>
        </fieldset>
    </form> 

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST")
        {
            $dob = $_POST["dob"];

            //convert dob object into timestamp
            $dob_year = date("Y", strtotime($dob));
            $currentYear = date("Y");
            //convert $currentYear into integer
            $currentYear = (int)$currentYear;
            $age = $currentYear - $dob;
            echo "<p>His/Her age is " .$age ."</p>"; 
        }
    ?>

    <!-- LESSON 2 -->
    <script type="text/javascript">
        console.log("Hello Worlds");
        let  form = document.querySelector(".form");
        let sbmt = document.getElementById("submit");
        let number1 = document.querySelector(".number1")
        let number2 = document.querySelector(".number2")
        // let number1 = document.querySelector("")
        console.log(number1.value);
        console.log(number2.value);
        let value1 = Number( number1.value);
        let value2 = Number( number2.value);
        console.log(typeof(value1));
        console.log(typeof(value2));

        console.log(number1.value + number2.value);
        // form.addEventListener("submit", (event)=>{
        //     event.preventDefault();
        // })
    </script>

</body>
</html>