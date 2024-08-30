<?php
    require_once "./includes/signup_view.inc.php";
    require_once "./includes/config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/b7f6cf6d16.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/registration.css">
    <title>Registration</title>
</head>
<body>
    <section id="home">
        <div class="form_container">
            <div class="btn-container">
                <button id="signupbtn" class="active"> Sign up</button>
                <button id="loginBtn" class="signin" >Login in</button>
            </div>
            <form action="./includes/registration.php" method="POST" >
                <h1 id="title">Sign Up</h1>
                <div class="input-container" id="username_field">
                    <i class="fa-solid fa-user"></i>
                    <input type="text" name="user_name" placeholder="Enter Name">
                </div>
                <div class="input-container">
                    <i class="fa-solid fa-envelope"></i>
                    <input type="email" name="user_email" placeholder="Enter Email">
                </div>
                <div class="input-container" id="id_field">
                    <i class="fa-regular fa-id-card"></i>
                    <input type="number" name="id_number" placeholder="Enter id">
                </div>
                <div class="input-container">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" name="user_password" placeholder="Enter password">
                </div>
                <div class="input-container" id="confirm_field">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" name="confirm_password" placeholder="Confirm Password">
                </div>
                <p style="text-align: left;">Forgot password <span> <a href="">Click here!</a> </span></p>    
                <input type="submit" value="submit">
            </form>
            <?php
            check_signup_error();
            //function is used to display errors if found
            ?>
        </div>
    </section>
    <script src="./js/sign_login.js" type="text/javascript"></script>
</body>
</html>