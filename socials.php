<?php
session_start();

    include("connection.php");
    include("functions.php");

    $user_data = check_login($con);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Knowlegde Arena | ALDODE</title>
    <link rel="stylesheet" href="stylehome.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    
</head>
<body>
    <header>
        <nav>
            <a href="index.php">Home</a>
            <a href="about.php">About Us</a>
            <a href="logout.php">Logout</a> 
        </nav>
        
    </header>
    <main>
        <div class="aboutus">
            <h2> Social Features</h2>
            <div class="social-icons">
                <a href="https://www.facebook.com/sharer.php?u=your-website-url" target="_blank" rel="noopener noreferrer">
                <i class='bx bxl-facebook'></i><p class="white">Share on Facebook</p>
                </a>
                <a href="https://twitter.com/intent/tweet?url=your-website-url&text=Check%20out%20this%2awesome%20website" target="_blank" rel="noopener noreferrer">
                <i class='bx bxl-twitter'></i><p class="white">Share on Twitter</p>
                </a>
                <a href="https://www.instagram.com/" target="_blank" rel="noopener noreferrer">
                <i class='bx bxl-instagram' ></i><p class="white">Share on Instagram</p>
                </a>
                <a href="https://www.linkedin.com/shareArticle?url=your-website-url" target="_blank" rel="noopener noreferrer">
                <i class='bx bxl-linkedin' ></i><p class="white">Share on LinkedIn</p>
                </a>
            </div>

            <div class="community-features">
                <h2>A. Integration with social platforms.</h2>
                <p class="white"> Connect with your friends on Facebook, Twitter, and Instagram to share your quiz results and challenge them to beat your scores!</p>
            </div>
            

        </div>


        <nav class="sidebar">
            <div class="logo-menu">
                <h2 class="logo">ALDODE</h2>
                <i class='bx bx-menu toggle-btn'></i>
            </div>
            <ul class="list">
                
                <li class="list-item">
                    <a href="userprofile.php">
                        <i class='bx bx-user'></i>
                        <span class="link-name" style="--i:1">User Profile</span>
                    </a>
                </li>
                
                <li class="list-item">
                    <a href="socials.php">
                        <i class='bx bxl-facebook'></i>
                        <span class="link-name" style="--i:2">Socials</span>
                    </a>
                </li>
                <li class="list-item">
                    <a href="help.php">
                        <i class='bx bx-help-circle' ></i>
                        <span class="link-name" style="--i:3">Help and Support</span>
                    </a>
                </li>
                

            </ul>
        </nav>
    </main>
</body>
</html>