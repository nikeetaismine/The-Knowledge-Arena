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
            <section>
            <h2> Help and Support</h2>
            <ul class="help-support-list">
            <h3><li>A. FAQ Section</li></h3>
            <ul class="faq-list">
                <li>Q: How do I start a quiz?</li>
                <li>A: To start a quiz, navigate to the Home page and click play on the desired quiz. Use arrow keys to navigate the categories.</li>

                </ul>
            <h3><li>B. Contact Form</li></h3>
            <section class="contact-form">
                <h2>Contact Us</h2>
                <form id="contactForm">
                <label for="name">Your Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Your Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="message">Your Message:</label>
                <textarea id="message" name="message" rows="4" required></textarea>

                <button type="button" onclick="submitForm()">Submit</button>
                </form>
            </section>
            <br>
            
            <section class="troubleshooting-tips">
                <h2>Troubleshooting Tips</h2>
                    <p class="white">If you are experiencing issues while using our platform, here are some common troubleshooting tips to help resolve them:</p>
                
                        <ul>
                            <li>1. Clear Browser Cache: Clear your browser's cache and cookies to ensure you have the latest version of the website.</li>
                            <li>2. Update Your Browser: Ensure your browser is up-to-date. Outdated browsers may not fully support our features.</li>
                            <li>3. Check Internet Connection: Verify that you have a stable internet connection to prevent connectivity issues.</li>
                            <li>4. Disable Browser Extensions: Some browser extensions may interfere with the functionality. Try disabling them to see if the issue persists.</li>
                            <li>5. Try Another Device: If possible, try accessing our platform from another device to see if the issue is device-specific.</li>
                            <li>6. Contact Support: If the problem persists, feel free to reach out to our support team for assistance. Provide details about the issue for a quicker resolution.</li>
                        </ul>
                    </section>
                </ul>
            </section>

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

<script src="helpscript.js" defer></script>
</body>
</html>