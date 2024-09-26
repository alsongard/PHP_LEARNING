<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/calculator.css">
    <link rel="stylesheet" href="./css/reset.css">
    <title>Calculator</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
    <label for="Value">Enter value : </label>
    <input type="number" name="value_1" placeholder="Enter any number...">
    <label for="operator">Enter Operator :</label>
    <select name="operator">
        <option value="default">Choose operator</option>
        <option value="addition">+</option>
        <option value="subtract">-</option>
        <option value="mutliply">*</option>
        <option value="division">/</option>
    </select>
    <label for="Value">Enter value :</label>
    <input type="number" name="value_2" placeholder="Enter any number...">    
    <!-- <button>Calculate</button> -->
    <input type="submit" value="calculate">
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"]== "POST"){
            $num_1 = filter_input(INPUT_POST, "value_1", FILTER_SANITIZE_NUMBER_FLOAT);
            $num_2 = filter_input(INPUT_POST, "value_2", FILTER_SANITIZE_NUMBER_FLOAT);
            $operator = htmlspecialchars($_POST["operator"]);
            $bool = false;
            if (!empty($num_1) || !empty($num_2)){
                echo "<p class='error' >Error: Please enter a value</p>";
                $bool = true;
            }
            if (!is_numeric($num_1) || !is_numeric($num_2)){
                $bool = true;
                echo "<p class='error'>Error: Only enter numbers</p>";

            }
            //no errors calculate
            if (!$bool){
                $result = 0;
                switch($operator){
                    case "addition":
                        $result = $num_1 + $num_2;
                        break;
                    case "subtract":
                        $result = $num_1 - $num_2;
                        break;
                    case "mutliply":
                        $result = $num_1 * $num_2;
                        break;
                    case "division":
                        $result = $num_1 / $num_2;
                        break;
                    default:
                        echo "<p class='error'>Error: Something went wrong.</p>";
                }
                echo "<p class='result'>The result is " . $result . "</p>";
            }
            
        }
    ?>
</body>
</html>