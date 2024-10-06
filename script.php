<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <button id="myBtn">Click Me </button>
    <div id='result'>The city is falling over and all</div>

    <script>
        let onBtn = document.getElementById("myBtn");
        onBtn.addEventListener("click", ()=>{
            let currentContent = document.getElementById("result").textContent;
            console.log(`Result : ${result}`);

            let newElement = document.createElement("p");
            newElement.textContent = `Updated Text : ${currentContent}`;

            document.getElementById("result").appendChild(newElement);
        });
    </script>
    <?php
        $result = processData();
        echo "<div id='result'> $result</div>";
    ?>

</body>
</html>