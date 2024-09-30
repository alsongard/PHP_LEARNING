<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discount</title>
</head>
<body>
    <form method="POST">
        <input name="amount" type="number" placehodler="Enter amount you spent.."/>
        <input type="submit" value="submit"/>
    </form>
    <?php
        $amount_number = $_POST["amount"];
        function discountAmount(&$user_amount)
        {
            if ($user_amount < 10000)
            {
                $result = "No discount";
                $discount = 0;

            }
            else if ($user_amount >= 10000 & $user_amount <= 14999)
            {
                $discount = 0.1 * $user_amount;
            }
            else if ($user_amount >= 15000 & $user_amount <= 24999)
            {
                $discount = 0.15 * $user_amount;
            }
            else if ($user_amount >= 25000 & $user_amount <= 29999)
            {
                $discount = 0.2 * $user_amount;
            }
            else
            {
                $discount = 0.25 * $user_amount;
            }
            $myArray = [$discount, $result];
            return $myArray;
        };

        if ($_SERVER["REQUEST_METHOD"] === "POST")
        {
            $discount = discountAmount($amount_number);
            $answer = $amount_number - $discount[0];

            if ($discount[1] === "No discount")
            {
                echo "<p> The total amount of money to be paid is ". $answer . " and with " . $discount[1] ."</p>";

            }
            else 
            {
                echo "<p> The total amount of money to be paid is ". $answer . " and with a discount of " . $discount[0] ."</p>";

            }
        }
    ?>
</body>
</html>