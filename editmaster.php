<?php
if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['button1']))
{
    personal();
}
if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['button2']))
{
    pro();
}
if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['button3']))
{
   name();
}
if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['button4']))
{
   about();
}
if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['button5']))
{
   pass();
}
if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['button6']))
{
   upload();
}
function personal(){
    require 'dbconnection.php';
    $email=$_SESSION['email'];
    $lname=$_POST['lname'];
    $fname=$_POST['fname'];
    $location=$_POST['location'];
    $_SESSION['lname']=$lname;
    $_SESSION['fname']=$fname;
    $_SESSION['location']=$location;
   $sql= "UPDATE master SET fname='$fname',lname='$lname',location='$location' WHERE email='$email'";
    if (mysqli_query($con, $sql)) {
        echo "Record updated successfully";
      } else {
        echo "Error updating record: " . mysqli_error($con);
      }
      
      mysqli_close($con);
    }
function pro(){
    require 'dbconnection.php';
    $email=$_SESSION['email'];
    $skill=$_POST['skills'];
    $experiance=$_POST['experiance'];
    $qualification=$_POST['qualification'];
    
    $_SESSION['skill']=$skill;
    $_SESSION['experiance']=$experiance;
    $_SESSION['qualification']=$qualification;
    $sql= "UPDATE master SET skills='$skill',qualification='$qualification',experiance='$experiance' WHERE email='$email'";
    if (mysqli_query($con, $sql)) {
        echo "Record updated successfully";
      } else {
        echo "Error updating record: " . mysqli_error($con);
      }
      
      mysqli_close($con);
}
function name()
{
    require 'dbconnection.php';
    $email=$_SESSION['email'];
    $name=$_POST['fullname'];
    $_SESSION['fullname']=$name;
    $sql= "UPDATE master SET fullname='$name' WHERE email='$email'";
    if (mysqli_query($con, $sql)) {
        echo "Record updated successfully";
      } else {
        echo "Error updating record: " . mysqli_error($con);
      }
      
      mysqli_close($con);

}
function about()
{
    require 'dbconnection.php';
    $email=$_SESSION['email'];
    $about=$_POST['about'];
    $_SESSION['about']=$about;
    $sql= "UPDATE master SET about='$about' WHERE email='$email'";
    if (mysqli_query($con, $sql)) {
        echo "Record updated successfully";
      } else {
        echo "Error updating record: " . mysqli_error($con);
      }
      
      mysqli_close($con);
}
function pass()
{
    require 'dbconnection.php';
    $email=$_SESSION['email'];
    $current=$_POST['current'];
    $newpass=$_POST['newpass'];
    $cnewpass=$_POST['cnewpass'];
    $sql = "SELECT password FROM master WHERE email='$email'";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    if($current===$row["password"])
    {
        if($newpass===$cnewpass)
        {
            $sqll= "UPDATE master SET password='$newpass' WHERE email='$email'";
            if (mysqli_query($con, $sqll)) {
                echo "Record updated successfully";
              } else {
                echo "Error updating record: " . mysqli_error($con);
              }
              
              mysqli_close($con);
        }
        else{
            echo "newpassword and confirm password not match";
        }
        
    }
    else{
        echo "password does not match";
    }
  }
} else {
  echo "0 results";
}



}
function upload(){
  require 'dbconnection.php';
    $email=$_SESSION['email'];
    $file="images/".$_POST['photo'];
    $_SESSION['photo']=$file;
    $sql= "UPDATE master SET photo='$file' WHERE email='$email'";
    if (mysqli_query($con, $sql)) {
      echo "Record updated successfully";
      
    } else {
      echo "Error updating record: " . mysqli_error($con);
    }
    mysqli_close($con);
}
?>