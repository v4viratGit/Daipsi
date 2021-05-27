<?php
require 'dbconnection.php';
if(isset($_POST['login']))  
 {
     $email=$_POST['email'];
     $password=$_POST['password'];
     $check_email="SELECT * FROM master WHERE email='$email' AND password='$password'";
      
     $run=mysqli_query($con,$check_email) or die(mysqli_error($con)); 
     if(mysqli_num_rows($run)==1)  
     {  
       while($row = mysqli_fetch_assoc($run)) {
            $_SESSION['email'] = $row["email"];
            $_SESSION['lname']=$row["lname"];
            $_SESSION['fname']=$row["fname"];
            $_SESSION['fullname']=$row["fullname"];
            $_SESSION['about']=$row["about"];
            $_SESSION['location']=$row["location"];
            $_SESSION['designation']=$row["designation"];
            $_SESSION['qualification']=$row["qualification"];
            $_SESSION['experiance']=$row["experiance"];
            $_SESSION['skills']=$row["skills"];
            $_SESSION['password']=$row["password"];
            $_SESSION['photo']=$row["photo"];
             }
         echo '<script>';
           
         echo 'window.location.href = "master panel.php";';
         echo '</script>';
       
 
     }  
     else {
        echo '<script>';
           echo 'alert("invalid password or email");';
         echo 'window.location.href = "login erp.html";';
         echo '</script>';
       
      }
      
      mysqli_close($con);
 }
?>