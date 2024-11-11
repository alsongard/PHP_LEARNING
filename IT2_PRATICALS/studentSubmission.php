<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student submission</title>

    <style>
        body{
            background-color:grey;
        }
        form{
            margin:50px auto;
            width:600px;
        }
        form input{
            display:block;
            width:100%;
            margin:10px 0;
        }
    </style>
</head>
<body>
    <form method="POST"  action="./includes/student.php">
        <input type="number" name="idNumber" placeholder="Enter id.."/>
        <input type="text" name="studentName" placeholder="Enter student Name.."/>
        <input type="date" name="dateSubmission" placeholder="Enter date of submission..."/>
        <input type="submit" value="submit"/>
    </form>


    <form action="./includes/studentDisplay.php" method="POST">
        <input type="submit" value="DISPLAY USER DATA"/>
    </form>
</body>
</html>