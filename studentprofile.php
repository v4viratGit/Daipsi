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
    $_SESSION['lastname']=$lname;
    $_SESSION['firstname']=$fname;
   $sql= "UPDATE profil SET fname='$fname',lname='$lname' WHERE email='$email'";
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
    $skill=$_POST['skill'];
    $qua=$_POST['qua'];
    $_SESSION['skill']=$skill;
    $_SESSION['qua']=$qua;
    $sql= "UPDATE profil SET skills='$skill',qualification='$qua' WHERE email='$email'";
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
    $name=$_POST['name'];
    $_SESSION['name']=$name;
    $sql= "UPDATE profil SET username='$name' WHERE email='$email'";
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
    $sql= "UPDATE profil SET about='$about' WHERE email='$email'";
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
    $sql = "SELECT userpass FROM users WHERE email='$email'";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    if($current===$row["userpass"])
    {
        if($newpass===$cnewpass)
        {
            $sqll= "UPDATE users SET userpass='$newpass' WHERE email='$email'";
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
    $file="images/".$_POST['file'];
    $_SESSION['photo']=$file;
    $sql= "UPDATE profil SET photo='$file' WHERE email='$email'";
    if (mysqli_query($con, $sql)) {
      echo "Record updated successfully";
    } else {
      echo "Error updating record: " . mysqli_error($con);
    }
    mysqli_close($con);
}
?>