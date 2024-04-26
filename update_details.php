<?php
session_start();

    include("connection.php");
    include("functions.php");

    $user_data = check_login($con);

    $user_id = $_SESSION['user_id'];

    if($_POST['action'] == 'signup') {
        $first_name = $_POST["first_name"];
        $last_name = $_POST["last_name"];
        $email = $_POST["email"];

        $sql = "UPDATE quiz_users SET first_name='$first_name', last_name='$last_name', email='$email' WHERE id=$user_id";

        if ($conn->query($sql) === TRUE) {
            // Redirect to a success page or display a success message
            echo "Details updated successfully!";
            exit;
        } else {
            echo "Error updating record: " . $conn->error;
        }
    }
    elseif (isset($_POST['submit_change_password'])) {
        // If the "Change Password" tab form was submitted
        $sql = "UPDATE quiz_users SET password='$password' WHERE id=$id";
        echo "Password Updated Successfully!";
    } else {
        // If none of the tab forms were submitted
        // Redirect back to the form page or display an error message
        header("Location: index.php");
        exit;
    }
?>