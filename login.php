<?php
require 'dbconnection.php';
    if (isset($_POST['email']) and isset($_POST['pass']))
    {
        $email = $_POST['email'];
        $password = $_POST['pass'];
        $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
        $result = mysqli_query($con, $query) or die(mysqli_error($con));
        $count = mysqli_num_rows($result);
        if ($count == 1){
            $_SESSION['email'] = $email;
            header('location: index.html');
            
        }
        else
        {
            echo '<script>';
            echo 'alert("Incorrect email or passowrd")';  
            echo 'window.location.href = "index.html"';
            echo '</script>';
        }
    }
?>