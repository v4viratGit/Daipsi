<?php

require '../dbconnection.php';
 
if(isset($_POST['submit']))  
{  
    $file_name = $_FILES["profile-photo"]["name"];
    $temp_name = $_FILES["profile-photo"]["tmp_name"];
    $folder="uploads/".$file_name;
    move_uploaded_file($temp_name, $folder);   
    
    $first_name=$_POST['first-name']; 
    $last_name=$_POST['last-name']; 
    $full_name=$_POST['full-name']; 
    $about=$_POST['about']; 
    $location=$_POST['location']; 
    $email=$_POST['email']; 
    $designation=$_POST['designation'];
    $qualification=$_POST['qualification'];  
    $experience=$_POST['experience']; 
    $skills=$_POST['skills']; 
    $password=$_POST['password']; 
   

    if($first_name =='')  
    {  
        echo"<script>alert('Please enter first name!')</script>";  
        exit();
    }  
  
    if($last_name =='')  
    {  
        echo"<script>alert('Please enter last name!')</script>";  
        exit();  
    }  
  
    if($full_name =='')  
    {  
        echo"<script>alert('Please enter full name!')</script>";  
        exit();  
    }  
     if($about =='')  
    {  
        echo"<script>alert('Please enter about!')</script>";  
        exit();
    }  

    if($location =='')  
    {  
        echo"<script>alert('Please enter location!')</script>";  
        exit();
    } 
    if($email =='')  
    {  
        echo"<script>alert('Please enter email!')</script>";  
        exit();
    }  
    if($designation =='')  
    {  
        echo"<script>alert('Please enter designation!')</script>";  
        exit();
    }  
    if($qualification =='')  
    {  
        echo"<script>alert('Please enter designation!')</script>";  
        exit();
    }  
    if($experience =='')  
    {  
        echo"<script>alert('Please enter experience!')</script>";  
        exit();
    }  
    if($skills =='')  
    {  
        echo"<script>alert('Please enter skills!')</script>";  
        exit();
    }  
    if($password =='')  
    {  
        echo"<script>alert('Please enter password!')</script>";  
        exit();
    }  


    $check_email="select * from teachers WHERE email='$email'";  
    $run_check_email=mysqli_query($con,$check_email); 
    if(mysqli_num_rows($run_check_email)>0)  
    {  
        echo "<script>alert('Email $email already exists in our database, Please try another one!')</script>";  
        exit();  
    }  

    $insert_query="insert into teachers (first_name,last_name,full_name,about,location,email,designation,qualification,experience,skills,password,profile_photo) VALUE ('$first_name','$last_name','$full_name','$about','$location','$email','$designation','$qualification','$experience','$skills','$password','$folder')";
    if(mysqli_query($con,$insert_query))  
    {  
        $_SESSION['teacher_email'] = $email;
        echo"<script>alert('Registration successfull!')</script>";  
        header('location: login erp.php');
    }  
  
}

