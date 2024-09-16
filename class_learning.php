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
            <input id="submit" type="submit" value="submit"/>
        </fieldset>
    </form>
    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST")
        {
            $number1 = $_POST["number1"];
            $number2 = $_POST["number2"];
            echo "<p>  Number1 : " . $number1 ."</p>";
            echo "<p>  Number1 : " . $number2 ."</p>";
            

            $sum = $number1 + $number2;
            echo $sum;
        }
    ?>

    <form method="POST">
        <fieldset>
            <legend>Compute Age</legend>
            <p>Enter Current Year </p>
            <input type="number" name="currentYear" placeholder="Enter year.."/>
            <input type="submit" value="compute age"/>
        </fieldset>
    </form> 

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST")
        {
            $year = $_POST["currentYear"];
            $dob = $_POST["dob"];

            echo $year;
            echo "<br>";
            echo $dob;
            $age = $year - $dob;
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
        form.addEventListener("submit", (event)=>{
            event.preventDefault();
        })
    </script>

</body>
</html>