<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currency Exchange</title>
</head>
<body>
    <form method="POST">
        <input type="number" placehodler="Enter amount.." name="amount"/>
        <select name="currency_type">
            <option value="">Choose</option>
            <option value="dollar">Dollar</option>
            <option value="ksh">Kenyan Shilling</option>
        </select>

        <input type="submit" value="submit">
    </form>

    <?php
        // echo "Im righ here";
        $amount = (int)$_POST["amount"];
        $currency = $_POST["currency_type"];

        function currencyExchange($user_amount, $user_currency)
        {
            if ($user_amount > 0)
            {
                if ($user_currency === "dollar")
                {
                    $convertedAmount = $user_amount * 102;
                    echo "<p> Amount of kenyan shillings is : " . $convertedAmount . "</p>";

                }
                else
                {
                    $convertedAmount = $user_amount / 102;
                    echo "<p> Amount of dollars is : " . $convertedAmount . "</p>"; 
                };
            }
            else
            {
                echo "<p>Cannot convert zero amount of money </p>";
            }
        };

        if($_SERVER["REQUEST_METHOD"] === "POST")
        {
            currencyExchange($amount, $currency);
        }
    ?>
</body>
</html>