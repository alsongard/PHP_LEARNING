<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>National Park</title>
</head>
<body>
    <form class="mt-[20px] bg-slate-700 mx-auto w-1/2 block p-[50px] rounded-xl flex flex-row justify-evenly" method="POST">
        <input class="rounded border-none px-[4px] py-[2px]" type="number" name="number" placeholder="Enter any number.."/>
        <input class="bg-slate-200 py-[2px] px-[5px] border-none rounded" type="submit" value="submit"/>
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] === "POST")
        {
            $user_number = (int)$_POST["number"];
            if ($user_number === 1)
            {
                $parkName = "Maasai Mara";
            }
            else if ($user_number ===  2)
            {
                $parkName = "Amboseli";
            }
            else if ($user_number === 3)
            {
                $parkName = "Tsavo";
            }
            else if ($user_number === 4)
            {
                $parkName = "Nairobi";
            }
            else if ($user_number === 5)
            {
                $parkName = "Nakuru";
            }
            else
            {
                $parkName = "Invalid";
            }
        }

       echo '<p class="mt-[20px] bg-slate-700 mx-auto w-1/2 block p-[10px] rounded-xl flex flex-row justify-evenly"> The name of park is '. $parkName . "</p>"; 
    ?>

</body>
</html>