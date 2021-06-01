<?php

require '../dbconnection.php';
$email=$_GET['teacherEmail'];

if(isset($_POST['editProfilePhoto']))  
{
    $file_name = $_FILES["updatedProfilePhoto"]["name"];
    $temp_name = $_FILES["updatedProfilePhoto"]["tmp_name"];
    $folder="images/".$file_name;
    move_uploaded_file($temp_name, $folder);  
    
    $updatePhotoQuery="update teachers set profile_photo='$folder' where email='$email'";
    if(mysqli_query($con,$updatePhotoQuery))  
    {  
        header('location: teacher-profile.php');
    }
    else
    {
        echo"<script>alert('Something went wrong!')</script>";
    }  
}

if(isset($_POST['editFullName']))  
{
    $updatedFullName = $_POST["updatedFullName"]; 

    $updateFullNameQuery="update teachers set full_name='$updatedFullName' where email='$email'";
    if(mysqli_query($con,$updateFullNameQuery))  
    {  
        header('location: teacher-profile.php');
    }
    else
    {
        echo"<script>alert('Something went wrong!')</script>";
    }  
}

if(isset($_POST['editAbout']))  
{
    $updatedAbout = $_POST["updatedAbout"]; 

    $updateAboutQuery="update teachers set about='$updatedAbout' where email='$email'";
    if(mysqli_query($con,$updateAboutQuery))  
    {  
        header('location: teacher-profile.php');
    }
    else
    {
        echo"<script>alert('Something went wrong!')</script>";
    }  
}

if(isset($_POST['editPassword']))  
{
    $updatedPassword = $_POST["updatedPassword"]; 

    $updatePasswordtQuery="update teachers set password='$updatedPassword' where email='$email'";
    if(mysqli_query($con,$updatePasswordtQuery))  
    {  
        header('location: teacher-profile.php');
    }
    else
    {
        echo"<script>alert('Something went wrong!')</script>";
    }  
}

if(isset($_POST['editPersonalInformation']))  
{
    $updatedFirstName = $_POST["updatedFirstName"];
    $updatedLastName = $_POST["updatedLastName"]; 
    $updatedLocation = $_POST["updatedLocation"];

    $updatePersonalInformationQuery="update teachers set first_name='$updatedFirstName', last_name='$updatedLastName', location='$updatedLocation' where email='$email'";
    if(mysqli_query($con,$updatePersonalInformationQuery))  
    {  
        header('location: teacher-profile.php');
    }
    else
    {
        echo"<script>alert('Something went wrong!')</script>";
    }  
}

if(isset($_POST['editProfessionalInformation']))  
{
    $updatedQualification = $_POST["updatedQualification"];
    $updatedExperience = $_POST["updatedExperience"]; 
    $updatedSkills = $_POST["updatedSkills"];

    $updateProfessionalInformationQuery="update teachers set qualification='$updatedQualification', experience='$updatedExperience', skills='$updatedSkills' where email='$email'";
    if(mysqli_query($con,$updateProfessionalInformationQuery))  
    {  
        header('location: teacher-profile.php');
    }
    else
    {
        echo"<script>alert('Something went wrong!')</script>";
    }  
}

