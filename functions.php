<?php
function check_login($con)
{
    if(isset($_SESSION['user_id']))
    {
        $id =$_SESSION['user_id'];
        $query = "select * from users where user_id = '$id' limit 1";

        $result = mysqli_query($con,$query);
        if($result && mysqli_num_rows($result) > 0)
        {
            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
        }
    }
    else
    {
        //redirect to login page if user is not logged in
        header("Location: loginsignup.php");
        die;
    }
    
}


function random_num($length)
{
    $text="";
    $length = 5;

    $len = rand(4,$length);

    for($i=0; $i<$len; $i++)
    {
        $text .= rand(0,9);
    }
    return $text;
}
?>