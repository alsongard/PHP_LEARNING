<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <input id="input1" name="num1" type="number" placeholder="Enter any number...">
        <input id="input2" name="num2" type="number" placeholder="Enter any number...">
        <select name="sign">
            <option>None</option>
            <option value="+">+</option>
        </select>
        
        <button  type="button" id="log">Log</button>
        <input type="submit" value="submit">
    </form>
    <?php
        //get values
        if ($_SERVER["REQUEST_METHOD"] == "POST")
        {
            $numval1 = $_POST['num1'];
            $numval2 = $_POST['num2'];
            $sign = $_POST['sign'];

            //check if empyt
            if (empty($numval1) || empty($numval2))
            {
                echo "<p> Please enter a number </p>";
            }
            else
            {
                //add
                if ( $sign == "+")
                {
                    $sum = $numval1 + $numval2;
                    echo "<p> The sum of $numval1 and $numval2 is $sum </p>";
                }
            };

        };
    ?>
    <script>
        let btn = document.getElementById("log");
        let inputVal1 = document.getElementById("input1").value;
        let inputVal2 = document.getElementById("input2");
        console.log("help");
        console.log(`The type of the input is ${typeof(inputVal1)} and value is ${inputVal1}`);
        let value = Number(inputVal1);
        console.log(`The type of the input is ${typeof(value)} and value is ${value}`);
        btn.addEventListener("click", ()=>{
            inputVal2.style.display = "none";

            //perform typeconversion

            let userResult = value;
        });
    </script>
    <?php
        $result = processData();
        $answer = log($result);
        echo "<p>Log is : $answer </p>";
    ?>
</body>
</html>