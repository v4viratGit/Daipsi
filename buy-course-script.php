<?php

require 'dbconnection.php';

if(isset($_POST['buy']))  
{  
    $users_email=$_SESSION['email'];
    $course_name=$_POST['course_name']; 
    $course_link=$_POST['course_link']; 
    $course_amount=$_POST['course_amount'];

    $insert="insert into purchases (users_email,course_name,course_link,course_amount) VALUE ('$users_email','$course_name','$course_link','$course_amount')";
    if(mysqli_query($con,$insert))  
    {  
        $_SESSION['course']=$course_name;
        header("location:checkout.php");
    }  
  
}

