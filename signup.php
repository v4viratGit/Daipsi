<?php

require 'dbconnection.php';

if(isset($_POST['signup']))  
{  
    $user_name=$_POST['name']; 
    $user_pass=$_POST['pass'];
    $user_email=$_POST['email'];  
    $user_contact=$_POST['contact'];
    
  
    if($user_name=='')  
    {  
         
        echo '<script>';
        echo"alert('Please enter the name');";
        echo 'window.location.href = "index.php";';
        echo '</script>';
        exit();
    }  
  
    if($user_pass=='')  
    {  
         
        echo '<script>';
        echo 'alert("Please enter the password");'; 
        echo 'window.location.href = "index.php";';
        echo '</script>';
        exit();  
    }  
  
    if($user_email=='')  
    {  
         
        echo '<script>';
        echo 'alert("Please enter the email");';
        echo 'window.location.href = "index.php";';
        echo '</script>';
        exit();  
    }  
     if($user_contact=='')  
    {  
        
        echo '<script>';
        echo 'alert("Please enter the contact number");';  
        echo 'window.location.href = "index.php";';
        echo '</script>';
        exit();
    }  
  

    $check_email="select * from users WHERE email='$user_email'";  
    $run=mysqli_query($con,$check_email); 
    
  
    if(mysqli_num_rows($run)>0)  
    {  
        echo '<script>';
        echo 'alert("Email $user_email already exists in our database, Please try another one!");';  
        echo 'window.location.href = "index.php";';
        echo '</script>';
        exit();

    }  
    $insert_user1="insert into users (name,email,userpass,contact) VALUE ('$user_name','$user_email','$user_pass','$user_contact')";
    $insert_user2="insert into profil (email,username) VALUE ('$user_email','$user_name')";
    //$insert_user2="insert into likedislike (email) VALUE ('$user_email')";
    if(mysqli_query($con,$insert_user1) && mysqli_query($con,$insert_user2))  
    {  
        $_SESSION['user_id'] = $user_email;
        $_SESSION['email'] = $user_email;
        $_SESSION['coun']="a";
        echo '<script>';
        echo 'window.location.href = "index.php";';
        echo '</script>';
    }  
  
}
?>