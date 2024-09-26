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
</head>
<body>
    <header class="text-white flex justify-between pl-[20px] pr-[50px] py-[10px] bg-[#212f3d]">
        <h1 class="text-[25px]">Calculator  Web App</h1>
        <button class="border-2 border-[#41f4be] px-[18px] rounded-full"> Dark   <i class="fa-solid fa-moon"></i> </button>
    </header>
    <form class="border-2 mt-[80px] mx-auto w-1/2 rounded p-[20px]">
        <div class="flex justify-between items-center ">
            <input name="number1" class=" h-[30px] text-black border-none border-black rounded py-[4px] px-[8px]" type="number" placeholder="Enter one number..."/>
            <select class="h-[30px] border-none border-black rounded  text-black py-[4px] px-[8px]" name="arithmetic_sign">
                <option class="bg-[#d8ee38]" value="">--Choose--</option>
                <option value="+"> + </option>
                <option value="-"> - </option>
                <option value="/"> / </option>
                <option value="%"> % </option>
            </select>
            <input name="number2" class="h-[30px] border-none border-black rounded  text-black py-[4px] px-[8px]" type="number" placeholder="Enter one number..."/>
        </div>
        <div class="mt-[40px] flex justify-between items-center">
            <button class="border-none rounded w-1/4 bg-[#d8ee38]" type="button">CLEAR</button>
            <button class=" border-none bg-[#d8ee38]  rounded w-1/4">EXP</button>
            <input class="border-none rounded w-1/4 bg-[#d8ee38]" type="submit" value="CALC"/>
        </div>
        <div class="flex justify-between items-center mt-[40px]">
            <button class="bg-green-400 rounded w-[100px]" >Sin</button>
            <button class="bg-green-400 rounded w-[100px]" >Tan</button>
            <button class="bg-green-400 rounded w-[100px]" >Cos</button>
            <button class="bg-green-400 rounded w-[100px]" >Log</button>
        </div>


        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST")
            {
                $num1 = $_POST["number1"];
                $num2 = $_POST["number2"];

            }
            else
            {
                header("Location: ./calculator.php");
            }
        ?>
    </form>

    <script type="text/javascript">
        
    <script>
</body>
</html>