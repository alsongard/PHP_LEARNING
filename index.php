<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./css/form_user.css">
	<title>Document</title>
</head>
<body>
	<!-----------OPENING FORMS DEPENDING ON USER------------------->
	<p>Click either buttons to :</p>
	<div class="action_doer">
		<button id="signup_btn">SIGNUP</button>
		<button id="change_btn"  >CHANGE USER </button>
		<button id="delete_btn">DELETE ACCOUNT</button>
	</div>


	<hr>

	<form id="signup_form" action="./includes/formhandler.inc.php" method="POST" >
		<h1>Signup</h1>
		<input type="text" name="username" placeholder="Enter username..">
		<input type="password" name="pwd" placeholder="Enter password..">
		<input type="text" name="email" placeHolder="email">
		<input type="submit" value="submit">
	</form>

	<hr>
    <!-----------change user data---------------->
    <form id="change_form" action="./includes/changeuserdata.php" method="POST">
		<h1>Change User Details</h1>
		<input type="text" name="username" placeholder="Enter username..">
		<input type="password" name="pwd" placeholder="Enter password..">
		<input type="text" name="email" placeHolder="change email...">
		<input type="submit" value="submit">
    </form>

	<hr>

	<!---------------delete user data---------------->
	<form id="delete_form" action="./includes/deleteuser.php" method="POST">
		<h1>Delete User Details</h1>
		<input type="text" name="username" placeholder="Enter username..">
		<input type="password" name="pwd" placeholder="Enter password..">
		<input type="submit" value="submit">

	</form>
	<hr>
	<script src="./js/logins.js" text="text/javascript"></script>
	</body>
</html>