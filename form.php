<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/form.css">
    <title>Form Data</title>
</head>
<body>
    <form action="" method="POST">
        <label for="firstName">First name:</label>
        <input type="text" id="firstname" name="firstname" placeholder="Enter your first name.." >
        <label for="middleName">Middle name:</label>
        <input type="text" id="middleName" name="middleName" placeholder="Enter your middle name.." >
        <label for="lastName">Last name:</label>
        <input type="text" id="lastName" name="lastName" placeholder="Enter your last name.." >
        <label for="favorPet">Favourite Pet:</label>
        <select id="favorPet" name="favPet">
            <option value="none">Select your favourite pet</option>
            <option value="dog">Dog</option>
            <option value="Cat">Cat</option>
            <option value="Bird">Bird</option>
        </select>

        <input type="submit" value="Submit">
    </form>
</body>
</html>