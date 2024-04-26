<?php
session_start();

    include("connection.php");
    include("functions.php");

    if ($_SERVER['REQUEST_METHOD'] == "POST") {

        if($_POST['action'] == 'login') {
            $email = $_POST['email'];
            $password = $_POST['password'];

            if (!empty($email) && !empty($password) && !is_numeric($email)) {
                // Read from the database
                $query = "SELECT * FROM quiz_users WHERE email='$email' LIMIT 1";
                $result = mysqli_query($con, $query);
                
                
                if ($result && mysqli_num_rows($result) > 0) {
                    $user_data = mysqli_fetch_assoc($result);
    
                    if($user_data['password'] === $password)
                    {
                        //Store user id in session
                        $_SESSION['user_id'] = $user_data['user_id'];
                        //Redirect to categories page
                        header("Location: index.php");
                        die;
                    }
                    
                } else {
                    // User not found or invalid credentials
                    echo "Invalid email or password. Please try again.";
                }
                
            }else{
                echo "Invalid email or password. Please try again.";
            } 
        }else{
            echo "Please enter valid information!";
        } 
    }
?>
