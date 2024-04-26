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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Knowledge Arena | ALDODE</title>
    <link rel="stylesheet" href="startstyle.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <main class="main">
        <header>
            <a href="" class="logo">The Knowledge Arena</a>

            <nav class="navbar">
                <a href="" class="active"></a>
                <a href="">About Us</a>
                <a href="logout.php">Logout</a> 
            </nav>
        </header>

        <section class="home">
            <div class="home-content">
                <h1> The Knowledge Arena General Knowledge Quiz </h1>
                <p>This category covers a wide range of topics and facts, including history, science, literature, and current events. It’s a great way to test your overall knowledge and learn interesting tidbits.</p>
                <button class="start-btn">Start Quiz</button>
            </div>
        </section>

        <!-- sidebar -->
        <nav class="sidebar">
            <div class="logo-menu">
                <h2 class="logo">ALDODE</h2>
                <i class='bx bx-menu toggle-btn'></i>
            </div>
            <ul class="list">
                
                <li class="list-item">
                    <a href="#">
                        <i class='bx bx-user'></i>
                        <span class="link-name" style="--i:1">User Profile</span>
                    </a>
                </li>
                <li class="list-item">
                    <a href="#">
                        <i class='bx bx-trophy'></i>
                        <span class="link-name" style="--i:2">Leaderboard</span>
                    </a>
                </li>
                <li class="list-item">
                    <a href="#">
                        <i class='bx bxl-facebook'></i>
                        <span class="link-name" style="--i:3">Socials</span>
                    </a>
                </li>
                <li class="list-item">
                    <a href="#">
                        <i class='bx bx-help-circle' ></i>
                        <span class="link-name" style="--i:4">Help and Support</span>
                    </a>
                </li>
                <li class="list-item">
                    <a href="#">
                        <i class='bx bx-cog' ></i>
                        <span class="link-name" style="--i:5">Settings</span>
                    </a>
                </li>

            </ul>
        </nav>
    </main>



    <script src="questions.js"></script>
    <script src="startscript.js"></script>
</body>

</html>