<?php

require '../dbconnection.php';
if (isset($_POST['email']) and isset($_POST['password']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = "SELECT * FROM teachers WHERE email='$email' AND password='$password'";
    $result = mysqli_query($con, $query) or die(mysqli_error($con));
    while($row = $result->fetch_assoc()) {
        $_SESSION['designation']=$row["designation"];
      }
    $count = mysqli_num_rows($result);
    if ($count == 1){
        $_SESSION['teacher_email'] = $email;
        header('location: teacher-profile.php');
    }
    else
    {
        echo "<script>alert('Email or password is incorrect!')</script>";
    }
}
