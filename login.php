<?php
require 'dbconnection.php';
    if (isset($_POST['email']) and isset($_POST['pass']))
    {
        $email = $_POST['email'];
        $password = $_POST['pass'];
        $query = "SELECT * FROM users WHERE email='$email' AND userpass='$password'";
        $query1 = "SELECT * FROM profil WHERE email='$email'";
        $result = mysqli_query($con, $query) or die(mysqli_error($con));
        $result1 = mysqli_query($con, $query1) or die(mysqli_error($con));
        $count = mysqli_num_rows($result);
        
        if ($count == 1){
            while($row = mysqli_fetch_assoc($result) && $row1 = mysqli_fetch_assoc($result1)) {
             $_SESSION['nam']=$row["name"];
              $_SESSION['lastname']=$row1["lname"];
              $_SESSION['firstname']=$row1["fname"];
              $_SESSION['skill']=$row1["skills"];
              $_SESSION['qua']=$row1["qualification"];
              $_SESSION['name']=$row1["username"];
              $_SESSION['about']=$row1["about"];
              $_SESSION['photo']=$row1["photo"];
              }
            $_SESSION['email'] = $email;
            //$_SESSION['coun']="a";

            header('location: user-profile.php');
            
        }
        else
        {
            echo '<script>';
            echo 'alert("Incorrect email or passowrd")';  
            //echo 'window.location.href = "index.php"';
            echo '</script>';
        }
    }
?>