<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business Computation</title>
</head>
<body>
    <form method="POST">
        <input type="number" name="salary" placeholder="Enter salary..."/>
        <input type="submit" value="submit"/>
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST")
        {
            //GET THE DATA FROM USER
            $basicSalary = $_POST["salary"];

            //perform conversion of data
            $basicSalary = (int)$basicSalary;
            if ($basicSalary >= 20000)
            {
                $houseAllowance = 0.2 * $basicSalary;
                $transportAllowance = 0.1 * $basicSalary;
                $totalSalary = $basicSalary + $houseAllowance + $transportAllowance;
                echo "<p> Basic Salary is ". $basicSalary . "</p>";
                echo "<p> House Allowance ". $houseAllowance . "</p>";
                echo "<p> Transport Allowance ". $transportAllowance. "</p>";
                echo "<p>Total salary earned is " . $totalSalary . "</p>";
            }
            else
            {
                $houseAllowance = 0.12 * $basicSalary;
                $transportAllowance = 0.1 * $basicSalary;
                $totalSalary = $basicSalary + $houseAllowance + $transportAllowance;
                echo "<p> Basic Salary is ". $basicSalary . "</p>";
                echo "<p> House Allowance ". $houseAllowance. "</p>";
                echo "<p> Transport Allowance ". $transportAllowance . "</p>";
                echo "<p>Total salary earned is " . $totalSalary . "</p>";
            }
        }
    ?>
</body>
</html>