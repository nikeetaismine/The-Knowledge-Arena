<?php
session_start();

include("connection.php");
include("functions.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
   
    if($_POST['action'] == 'signup') {
        $first_name = $_POST['firstname'];
        $last_name = $_POST['lastname'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        if (!empty($email) && !empty($password) && !is_numeric($email)) {
            // Save to database
            $user_id = random_num(20);
            $query = "INSERT INTO quiz_users (user_id, first_name, last_name, email, password) VALUES ('$user_id', '$first_name', '$last_name', '$email', '$password')";
            mysqli_query($con, $query);
            
            // Redirect to login page
            header("Location: loginsignup.php");
            die;
        } else {
            echo "Please enter some valid information.";
        }
    }else{
        echo "Error";
    }
}
?>