<?php
//require 'dbconnection.php';
if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['neet']))
{
    neet();
}
if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['jee']))
{
    jee();
}
function neet(){
    require 'dbconnection.php';
    $email=$_SESSION['email'];
    $usename=$_SESSION['name'];
    $course="neet";
    $course_id="1";
    $sql = "INSERT INTO coursepurchase (course_id,email,username,course)
VALUES ('$course_id','$email','$usename','$course')";
   $sqll="SELECT * FROM coursepurchase WHERE course_id=1 AND email='$email'";
  
   $result = mysqli_query($con, $sqll);
   if (mysqli_num_rows($result)==0) {
    if (mysqli_query($con, $sql)) {
        echo "New record created successfully";
      } else {
     echo "Error: " . $sql . "<br>" . mysqli_error($con);
      }
    
  } else {
    echo "u already buy neet";
  }

        // if (mysqli_query($con, $sql)) {
        //    echo "New record created successfully";
        //  } else {
        // echo "Error: " . $sql . "<br>" . mysqli_error($con);
        //  }

mysqli_close($con);
}
function jee(){
  require 'dbconnection.php';
  $email=$_SESSION['email'];
  $usename=$_SESSION['name'];
  $course="jee";
  $course_id="2";
  $sql = "INSERT INTO coursepurchase (course_id,email,username,course)
VALUES ('$course_id','$email','$usename','$course')";
 $sqll="SELECT * FROM coursepurchase WHERE course_id=2 AND email='$email'";

 $result = mysqli_query($con, $sqll);
 if (mysqli_num_rows($result)==0) {
  if (mysqli_query($con, $sql)) {
      echo '<script>';
      echo 'alert("New record created successfully")';
      echo 'window.location.href = "jee.html"';
      echo '</script>';
    } else {
   echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
  
} else {
  echo '<script>';
  echo 'alert("u already brought jee")';
  //echo 'window.location.href= "jee.html";';
  echo '</script>';
 
  
}
mysqli_close($con);
}
?>