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
    <div class="carousel">
            <!-- quiz category items -->
            <div class="list">
                <div class="item">
                    <img src="images/general.jpg">
                    <div class="content">
                        <div class="author">ALDODE</div>
                        <div class="title">THE KNOWLEDGE ARENA</div>
                        <div class="topic">GENERAL KNOWLEDGE</div>
                        <div class="des">
                            This category covers a wide range of topics and facts, including history, science, literature, and current events. It’s a great way to test your overall knowledge and learn interesting tidbits.
                        </div>
                        <div class="buttons">
                            
                            <button onclick="location.href='startgeneralquiz.php'">PLAY</button>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="images/science.jpg">
                    <div class="content">
                        <div class="author">ALDODE</div>
                        <div class="title">THE KNOWLEDGE ARENA</div>
                        <div class="topic">SCIENCE & NATURE</div>
                        <div class="des">
                            Questions in this category focus on scientific concepts, natural phenomena, and the world around us. Expect topics related to biology, chemistry, astronomy, and more.
                        </div>
                        <div class="buttons">
                            
                            <button onclick="location.href='startsciencequiz.php'">PLAY</button>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="images/history.jpg">
                    <div class="content">
                        <div class="author">ALDODE</div>
                        <div class="title">THE KNOWLEDGE ARENA</div>
                        <div class="topic">HISTORY & CULTURE</div>
                        <div class="des">
                            Dive into the past with questions about historical events, famous figures, and cultural traditions. Explore different time periods, civilizations, and influential moments.
                        </div>
                        <div class="buttons">
                            
                            <button onclick="location.href='starthistoryquiz.php'">PLAY</button>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="images/entertainment.jpg">
                    <div class="content">
                        <div class="author">ALDODE</div>
                        <div class="title">THE KNOWLEDGE ARENA</div>
                        <div class="topic">ENTERTAINMENT</div>
                        <div class="des">
                            If you’re a movie buff, music lover, or pop culture enthusiast, this category is for you. Expect questions related to famous films, iconic songs, and well-known celebrities.
                        </div>
                        <div class="buttons">
                            
                            <button onclick="location.href='startentertainmentquiz.php'">PLAY</button>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="images/sports.jpg">
                    <div class="content">
                        <div class="author">ALDODE</div>
                        <div class="title">THE KNOWLEDGE ARENA</div>
                        <div class="topic">SPORTS</div>
                        <div class="des">
                            Test your sports knowledge with questions about athletes, teams, and various recreational activities. From football to chess, this category covers it all!
                        </div>
                        <div class="buttons">
                            
                            <button onclick="location.href='startsportsquiz.php'">PLAY</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- list thumnail -->
            <div class="thumbnail">
                <div class="item">
                    <img src="images/general.jpg">
                    <div class="content">
                        <div class="title">
                            General Knowledge
                        </div>
                        <div class="description">
                            
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="images/science.jpg">
                    <div class="content">
                        <div class="title">
                            Science & Nature
                        </div>
                        <div class="description">
                            
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="images/history.jpg">
                    <div class="content">
                        <div class="title">
                            History & Culture
                        </div>
                        <div class="description">
                            
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="images/entertainment.jpg">
                    <div class="content">
                        <div class="title">
                            Entertainment
                        </div>
                        <div class="description">
                            
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="images/sports.jpg">
                    <div class="content">
                        <div class="title">
                            Sports
                        </div>
                        <div class="description">
                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- next prev -->

            <div class="arrows">
                <button id="prev"><</button>
                <button id="next">></button>
            </div>
            <!-- time running -->
            <div class="time"></div>
        </div>

        
        <!--- sidebar -->
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
    
    
    
    <script src="scripthome.js"></script>
</body>
<html>

