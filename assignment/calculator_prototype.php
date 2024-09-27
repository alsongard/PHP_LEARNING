<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/b7f6cf6d16.js" crossorigin="anonymous"></script>
    <title>Calculator</title>
    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }
        body{
            background-color: #2c3e50;
        }
    </style>
        <script>
            tailwind.config = {
            theme: {
                extend: {
                    screens: {
                        // set min-width: for applying sm styles
                        "sm" : "412px",
                        //set min-width
                        "md" : "650px",
                        //set min-width
                        "lg" : "1250px"
                    }
                }
            }
            }
    </script>
</head>
<body>
    <header class="text-white flex justify-between pl-[20px] pr-[50px] py-[10px] bg-[#212f3d]">
        <h1 class="text-[25px]">Calculator Webstie</h1>
    </header>
    <div class="border-2 mt-[80px] mx-auto w-1/2 rounded p-[20px] lg:w-1/2 sm:w-[400px]">
        <form method="POST">
            <div class="flex justify-between items-center sm:flex-col gap-[10px]">
                <input id="num1" name="number1" class=" h-[30px] text-black border-none border-black rounded py-[4px] px-[8px] sm:w-full" type="number" placeholder="Enter one number..."/>
                <select id="arithmetic" class="h-[30px] border-none border-black rounded  text-black py-[4px] px-[8px] sm:w-full" name="arithmetic_sign">
                    <option class="bg-[#d8ee38]" value="">--Choose--</option>
                    <option value="+"> + </option>
                    <option value="-"> - </option>
                    <option value="/"> / </option>
                    <option value="%"> % </option>
                </select>
                <input id="num2" name="number2" class="h-[30px] border-none border-black rounded  text-black py-[4px] px-[8px] sm:w-full" type="number" placeholder="Enter one number..."/>
            </div>
            <div class="mt-[40px] flex justify-between items-center">
                <button id="resetForm" class="border-none rounded w-1/4 bg-[#d8ee38]" type="button">CLEAR</button>
                <button class=" border-none bg-[#d8ee38]  rounded w-1/4">EXP</button>
                <input class="border-none rounded w-1/4 bg-[#d8ee38]" type="submit" value="CALC"/>
            </div>
        </form>
        <div class="flex justify-between items-center  mt-[40px] mx-auto sm:flex-col gap-[10px] items-stretch">
            <button id="sin" class="bg-green-400 rounded w-[100px]" >Sin</button>
            <button id="tan" class="bg-green-400 rounded w-[100px]" >Tan</button>
            <button id="cos" class="bg-green-400 rounded w-[100px]" >Cos</button>
            <button id="log" class="bg-green-400 rounded w-[100px]" >Log</button>
        </div>
        <div class="flex justify-between items-center w-1/2 mt-[40px] mx-auto">
            <p  class='text-white text-[17px]' id="result"></p>
        </div>

        <?php
            if ($_SERVER["REQUEST_METHOD"] === "POST")
            {
                $num1 = $_POST["number1"];
                $num2 = $_POST["number2"];
                $basicArithmetic = $_POST["arithmetic_sign"];
                $logSign = $_POST["log"];
                $sinSign = $_POST["sin"];
                $tanSign = $_POST["tan"];
                $cosSign = $_POST["cos"];

                if (empty($num1) || empty($num2))
                {
                    echo "<p> Enter value </p>";
                }
                else
                {
                    if ($basicArithmetic === "+")
                    {
                        $result =  $num1 + $num2;
                    }
                    else if ($basicArithmetic === "-")
                    {
                        $result = $num1 - $num2;
                    }
                    else if ($basicArithmetic === "/")
                    {
                        $result = $num1 / $num2;
                    }
                    else 
                    {
                        $result =$num1 % $num2;
                    }
                    echo "<p class='text-white text-[17px]'> Result  is ". $result . "</p>";
                };
            };
        ?>
    </div>
    <script type="text/javascript" src="./js/calculator.js"></script>
</body>
</html>