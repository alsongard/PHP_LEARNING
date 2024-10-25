<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./feedback.css"/>
    <title>Campaigns</title>
</head>
<body>

    <form method="POST" action="./submit-feedback.php">
        <label for="full name">Name</label>
        <input name="fullName" type="text" placeholder="Name..."/>
        <label for="email">Email</label>
        <input name="email" type="email" placeholder="Email..."/>
        <label for="feedback">Feedback</label>
        <textarea  rows="8" name="feedback" placeholder="Message..."></textarea>
        <select name="rank">
            <option value="">Choose</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
        <input type="submit" value="submit"/>
    </form>
</body>
</html>