<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gross Calculation</title>
</head>
<body>
    <?php
        require_once "./includes/gross.php";
    ?>
    <form  method="POST">
        <input type="number" name="amount" step="0.01" placeholder="Enter amount..."/>
        <input type="number" name="years" placeholder="Enter years..."/>
        <input type="submit" value="submit"/>
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] === "POST")
        {
            $userAmount = floatval($_POST["amount"]);
            $years =(int)$_POST["years"];

            if (empty($userAmount) || empty($years))
            {
                echo "<p> Fill all fields </p>";
                die();
            }
            $results = getGross($userAmount, $years);

            echo "<p> User Details </p>";
            echo "<p> Amount Deposited : ". $userAmount . "</p>";
            echo "<p> Profit : ". $results[0] . "</p>";
            echo "<p> Total Amount : ". $results[1] . "</p>";
        };
    ?>

</body>
</html>