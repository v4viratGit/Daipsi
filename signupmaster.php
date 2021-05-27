<?php
 require 'dbconnection.php';
 if(isset($_POST['signup']))  
 { 
     $fname=$_POST['fname'];
     $lname=$_POST['lname'];
     $fullname=$_POST['fullname'];
     $about=$_POST['about'];
     $location=$_POST['location'];
     $email=$_POST['email'];
     $designation=$_POST['designation'];
     $qualification=$_POST['qualification'];
     $experiance=$_POST['experiance'];
     $skills=$_POST['skills'];
     $password=$_POST['password'];
     $photo="images/".$_POST['photo'];
     $check_email="select * from master WHERE email='$email'";  
    $run=mysqli_query($con,$check_email); 
    if(mysqli_num_rows($run)>0)  
    {  
        echo '<script>';
        echo 'alert("Email $user_email already exists in our database, Please try another one!");';  
        echo 'window.location.href = "login erp.html";';
        echo '</script>';
      

    }  
    else{
        $insert_user="insert into master (email,lname,fname,fullname,about,location,designation,qualification,experiance,skills,password,photo) VALUE ('$email','$lname','$fname','$fullname','$about','$location','$designation','$qualification','$experiance','$skills','$password','$photo')";
        if(mysqli_query($con,$insert_user))  
        {  
           $_SESSION['email'] = $email;
           $_SESSION['lname']=$lname;
           $_SESSION['fname']=$fname;
           $_SESSION['fullname']=$fullname;
           $_SESSION['about']=$about;
           $_SESSION['location']=$location;
           $_SESSION['designation']=$designation;
           $_SESSION['qualification']=$qualification;
           $_SESSION['experiance']=$experiance;
           $_SESSION['skills']=$skills;
           $_SESSION['password']=$password;
           $_SESSION['photo']=$photo;
            echo '<script>';
            echo 'alert("signup sucess");';
            echo 'window.location.href = "master panel.php";';
            echo '</script>';
    }else {
        echo "Error: " . $insert_user . "<br>" . mysqli_error($con);
      }
      
      mysqli_close($con);
    
}
}
?>