<?php 
session_start();

include("connection.php");
include("functions.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
    <title>The Knowledge Arena | Login & Registration</title>
</head>
<body>
    
    <div class="wrapper">
        <nav class="nav">
            <div class="nav-logo">
                <p>THE KNOWLEDGE ARENA.</p>
            </div>
            <div class="nav-menu" id="navMenu">
                <ul>
                    <li><a href="#" class="link active">Home</a></li>
                    <li><a href="#" class="link">About Us</a></li>
                    <li><a href="#" class="link">Help and Support</a></li>
                </ul>
            </div>
            <div class="nav-button">
                <button class="btn white-btn" id="loginBtn" onclick="login()">Sign In</button>
                <button class="btn" id="registerBtn" onclick="register()">Sign Up</button>
            </div>
            <div class="nav-menu-btn">
                <i class="bx bx-menu" onclick="myMenuFunction()"></i>
            </div>
        </nav>

    <!----------------------------- Form box ----------------------------------->    
        <div class="form-box">
            
            <!------------------- login form -------------------------->
            

                <div class="login-container" id="login">
                    <div class="top">
                        <span>Don't have an account? <a href="#" onclick="register()">Sign Up</a></span>
                        <header>Login</header>
                    </div>
                    
                    <form action="login.php" method="post">
                        <div class="input-box">
                            <input type="text" class="input-field" placeholder="Email" name="email">
                            <i class="bx bx-user"></i>
                        </div>
                        <div class="input-box">
                            <input type="password" class="input-field" placeholder="Password" name="password">
                            <i class="bx bx-lock-alt"></i>
                        </div>
                        <div class="input-box">
                            <input type="submit" class="submit" name="action" value="login">
                        </div>
                    </form>


                    <div class="two-col">
                        <div class="one">
                            <input type="checkbox" id="login-check">
                            <label for="login-check"> Remember Me</label>
                        </div>
                        <div class="two">
                            <label><a href="#">Forgot password?</a></label>
                        </div>
                    </div>
                </div>
            

            <!------------------- registration form -------------------------->
                <div class="register-container" id="register">
                    <div class="top">
                        <span>Have an account? <a href="#" onclick="login()">Login</a></span>
                        <header>Sign Up</header>
                    </div>

                    <form action="signup.php" method="post">
                        <div class="two-forms">
                            <div class="input-box">
                                <input type="text" class="input-field" placeholder="Firstname" name="firstname">
                                <i class="bx bx-user"></i>
                            </div>
                            <div class="input-box">
                                <input type="text" class="input-field" placeholder="Lastname" name="lastname">
                                <i class="bx bx-user"></i>
                            </div>
                        </div>
                        <div class="input-box">
                            <input type="text" class="input-field" placeholder="Email" name="email">
                            <i class="bx bx-envelope"></i>
                        </div>
                        <div class="input-box">
                            <input type="password" class="input-field" placeholder="Password" name="password">
                            <i class="bx bx-lock-alt"></i>
                        </div>
                        <div class="input-box">
                            <input type="submit" name="action" class="submit" value="signup">
                        </div>
                    </form>

                    <div class="two-col">
                        <div class="one">
                            <input type="checkbox" id="register-check">
                            <label for="register-check"> Remember Me</label>
                        </div>
                        <div class="two">
                            <label><a href="#">Help & Support</a></label>
                        </div>
                    </div>
                </div>
           
        </div>
    </div>   

<script src="loginscript.js"></script>

</body>
</html>