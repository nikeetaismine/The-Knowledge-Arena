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
    
</head>

<body>
    <main class="main">
        <header class="header">
            <a href="" class="logo">The Knowledge Arena</a>

            <nav class="navbar">
                <a href="index.php" class="active">Home</a>
                <a href="about.php">About</a>
                <a href="logout.php">Logout</a> 
            </nav>
        </header>
        <div class="container">
            <section class="quiz-section">
                <div class="quiz-box">
                    <h1> Entertainment Quiz </h1>
                    <div class="quiz-header">
                        <span>The Knowledge Arena</span>
                        <span class="header-score">Score: 0 / 10</span>
                    </div>

                    <h2 class="question-text">Which Kenyan musician won a Grammy Award in 2020?</h2>
                    <div class="option-list">
                        <!--<div class="option">
                            <span>A. Mombasa</span>
                        </div>
                        <div class="option">
                            <span>B. Kisumu</span>
                        </div>
                        <div class="option">
                            <span>C. Nairobi</span>
                        </div>
                        <div class="option">
                            <span>D. Nakuru</span>
                        </div> -->
                    </div>
                    <div class="quiz-footer">
                        <span class="question-total">1 of 10 questions</span>
                        <button class="next-btn">Next</button>
                    </div>
                </div>
                <div class="result-box">
                    <h2>Quiz Result!</h2>
                    <div class="percentage-container">
                        <div class="circular-progress">
                            <span class="progress-value">0%</span>
                        </div>

                        <span class="score-text">You Scored 0 out of 10</span>
                    </div>
                    <div class="buttons">
                        <button class="tryAgain-btn">Try Again</button>
                        <button class="goHome-btn">Go Home</button>
                    </div>
                </div>
            </section>

            <section class="home">
                <div class="home-content">
                    <h1> The Knowledge Arena Entertainment Quiz </h1>
                    <p>If you’re a movie buff, music lover, or pop culture enthusiast, this category is for you. Expect questions related to famous films, iconic songs, and well-known celebrities.</p>
                    <button class="start-btn">Start Quiz</button>
                </div>
            </section>
        </div>
        
    </main>
    <div class="popup-info">
        <h2> Quiz Guide </h2>
        <span class="info">1. The quiz is not time limited.</span>
        <span class="info">2. The quiz can be re-attempted after completion.</span>
        <span class="info">3. Instant feedback is given after each question.</span>

        <div class="btn-group">
            <button class="info-btn exit-btn">Exit Quiz</button>
            <a href="#" class="info-btn continue-btn">Continue</a>
        </div>
    </div>
    
    <audio id="backgroundMusic" autoplay loop>
        <source src="background-music.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
    </audio>

    <script src="entertainmentquestions.js"></script>
    <script src="startscript.js"></script>
</body>

</html>