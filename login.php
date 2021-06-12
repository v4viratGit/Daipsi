<?php
require 'dbconnection.php';
if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['index']))
    {
        $email = $_POST['email'];
        $password = $_POST['pass'];
        $query = "SELECT * FROM users WHERE email='$email' AND userpass='$password'";
        $result = mysqli_query($con, $query) or die(mysqli_error($con));
        $count = mysqli_num_rows($result);

        if ($count == 1){
            while($row = mysqli_fetch_assoc($result)) {
              $_SESSION['nam']=$row["name"];
              }
            $_SESSION['email'] = $email;
            $_SESSION['coun']="a";
            header('location: index.php');
            
        }
        else
        {
            echo '<script>';
            echo 'alert("incorrec email or password");';  
            echo 'window.location.href = "index.php";';
            echo '</script>';
            exit();
        }
    }
    elseif($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['user'])){
        $email = $_POST['email'];
        $password = $_POST['pass'];
        $query = "SELECT * FROM users WHERE email='$email' AND userpass='$password'";
        $userquery = "SELECT * FROM profil WHERE email='$email'";
        $result1 = mysqli_query($con, $query) or die(mysqli_error($con));
        $result2 = mysqli_query($con, $userquery) or die(mysqli_error($con));
        $count = mysqli_num_rows($result1);

        if ($count == 1){
            while($row = mysqli_fetch_assoc($result2)) {
              $_SESSION['nam']=$row["name"];
              $_SESSION['lastname']=$row["lname"];
              $_SESSION['firstname']=$row["fname"];
              $_SESSION['skill']=$row["skills"];
              $_SESSION['qua']=$row["qualification"];
              $_SESSION['name']=$row["username"];
              $_SESSION['about']=$row["about"];
              $_SESSION['email']=$row["email"];
              $_SESSION['photo']=$row["photo"];
              }
            $_SESSION['email'] = $email;
            $_SESSION['coun']="a";
            header('location: user-profile.php');
            
        }
        else
        {
            echo '<script>';
            echo 'alert("Incorrect email or passowrd")';  
            echo 'window.location.href = "user-profile.php"';
            echo '</script>';
        }   

    }
?>