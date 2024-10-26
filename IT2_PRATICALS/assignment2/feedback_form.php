<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./feedback.css"/>
    <title>Campaigns</title>
</head>
<body>
    <h2 class="title">Campaign Feedback</h2>
    <form id="form" method="POST" action="./submit-feedback.php">
        <p>Fill in the form</p>
        <label for="full name">Name</label>
        <input name="fullName" type="text" placeholder="Name of candidate"/>
        <label for="email">Email</label>
        <input name="email" type="email" placeholder="Enter your Email"/>
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
        <div class="button-container">
            <input type="submit" value="submit"/>
            <button  id="rstBtn" type="button">reset</button>
        </div>
    </form>

    <h2 class="title">Display details of the candidate</h2>
    <form id="form" action="./view_feedback.php" method="POST">
        <p>Enter name of a candidate to display his/her rating, feedback message and user email. </p>
        <input name="candidate"  type="text" placeholder="Enter name of candidate"/>

        <div class="button-container">
            <input type="submit" value="submit"/>
            <button id="rstBtn" type="button">reset</button>
        </div>
    </form>
    <script src="./feedback_form.js" type="text/javascript"></script>
</body>
</html>