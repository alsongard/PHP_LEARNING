<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form  action="./includes/formhandler.inc.php" method="POST" >
		<h1>Sighnup</h1>
		<input type="text" name="username" placeholder="Enter username..">
		<input type="password" name="pwd" placeholder="Enter password..">
		<input type="text" name="email" placeHolder="email">
		<input type="submit" value="submit">
	</form>

	<hr>
    <!-----------change user data---------------->
    <form action="./includes/changeuserdata.php" method="POST">
		<h1>Change User Details</h1>
		<input type="text" name="username" placeholder="Enter username..">
		<input type="password" name="pwd" placeholder="Enter password..">
		<input type="text" name="email" placeHolder="email">
		<input type="submit" value="submit">
    </form>

	<hr>

	<!---------------delete user data---------------->
	<form action="./includes/deleteuser.php" method="POST">
		<h1>Delete User Details</h1>
		<input type="text" name="username" placeholder="Enter username..">
		<input type="password" name="pwd" placeholder="Enter password..">
		<input type="submit" value="submit">
</body>
</html>