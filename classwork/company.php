<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        require_once "./includes/company_calculation.php";
    ?>
    <form  class="myForm" method="POST">
        <input type="name" name="username" placeholder="Name"/>
        <input type="number" name="hours" placeholder="Hours worked"/>
        <input type="number" name="revenue" placeholder="Rate per hour"/>
        <input type="submit" value="Compute"/>
        <button id="buttonReset" type="button">Reset</button>
    </form>

    <!-- NOTORIUS BUG ON COMMENT CODE BELOW -->
    <!-- <script type="text/javascript">
        let reset = document.getElementById("buttonReset");
        let form = document.querySelector("form");
        reset.addEventListener("click", ()=>{form.reset()})
    </script> -->

    <?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $userName = $_POST["username"];
        $ratePerHour = (int) $_POST["revenue"];
        $hoursWorked = (int)$_POST["hours"];

        if (empty($userName) || empty($ratePerHour) || empty($hoursWorked))
        {
            echo "<p> Enter all fields </p>";
            die();
        };

        $results = getCompanyCalculation($userName, $ratePerHour, $hoursWorked);  
        
    }   
        echo "<p> Employee Earning and tax details </p>";
        echo "<p> Username : ". $results[0] . "</p>";
        echo "<p> Salary : ". $results[1] . "</p>";
        echo "<p> Tax : " . $results[2]. "</p>";
        echo "<p> Net Pay : " . $results[3] . "</p>";
    ?>
    <script type="text/javascript">
        let reset = document.getElementById("buttonReset");
        let form = document.querySelector("form");
        reset.addEventListener("click", ()=>{form.reset()})
    </script>
</body>
</html>