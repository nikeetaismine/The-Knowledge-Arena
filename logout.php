<?php

session_start();

if(isset($_SESSION['user_id']))
{
    unset($_SESSION['user_id']);
}


header("Location: loginsignup.php");
die;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
</head>
<body>
    <h1>Logout</h1>
    <!-- Embedding JavaScript -->
    <script>
        // Function to stop background music
        function logout() {
            var backgroundMusic = document.getElementById("backgroundMusic");
            backgroundMusic.pause();
        }

        // Call the logout function when the page loads
        window.onload = function() {
            logout();
        };
    </script>
</body>
</html>