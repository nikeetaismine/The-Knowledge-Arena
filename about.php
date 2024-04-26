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
            <h2>VI. About Us</h2>
                <div class="about-us-info">
            <h3><p>A. Mission and Vision</p></h3>
            <p>Our mission is to provide an engaging and educational quiz experience for users of all ages. We envision a world where learning is fun and accessible to everyone.</p>
            <h3><p>B. Team Information</p></h3>
            <div class="team-members">
                <div class="team-member">
                <img src="images/developer1.jpg" alt="Denise Njeri">
                <h4>Denise Njeri</h4>
                <h5>Team Lead & Quiz Master</h5>
                <p>
                    Denise, at the helm of our quiz website team, navigates with a blend of precision and creativity. <br>
                    Her leadership cultivates an environment where innovation thrives, pushing us to craft quizzes that engage and enlighten users.
                    With Denise steering the ship, we're inspired to constantly elevate our standards and deliver content that captivates audiences worldwide.</p>
                </div>
                <div class="team-member">
                <img src="images/developer2.jpg" alt="Alek Deng">
                <h4>Alek Deng</h4>
                <h5>Content Creator</h5>
                <p>Alek, our content creator extraordinaire, infuses each quiz with a unique blend of wit and wisdom.
                    Her keen eye for intriguing topics and knack for storytelling captivates audiences, making each quiz a journey of discovery.
                    With Alek at the helm, our content resonates with users, sparking curiosity and fostering a love for learning.</p>
                </div>
                <div class="team-member">
                <img src="images/developer3.jpg" alt="Don EL Mageni">
                <h4>Don EL Mageni</h4>
                <h5>Web Developer</h5>
                <p>Don'EL, our web developer maestro, brings our quizzes to life with his technical wizardry.
                    His mastery of coding languages and eye for design ensures that our website is not only visually stunning but also user-friendly and efficient. 
                    Under Don'EL's guidance, our platform evolves seamlessly, adapting to the ever-changing digital landscape and providing an exceptional experience for our users.</p>

                </div>
            </div>
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
                    <a href="#">
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