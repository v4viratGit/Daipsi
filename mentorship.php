<?php
require 'dbconnection.php';
if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['send']))
{
$fname=$_POST['fname'];
$email=$_POST['email'];
$message=$_POST['message'];
$opt=$_POST['optradio'];
$id=1;
if($email!=$_SESSION['email'])
{
    echo '<script>';
        echo 'alert("please apply with registered email");';  
        echo 'window.location.href = "index.php";';
        echo '</script>';
        exit();
}else{
$sql = "INSERT INTO personalmentorship (id,fname,email,message,course)
VALUES ('$id', '$fname', '$email','$message','$opt')";

if (mysqli_query($con, $sql)) {
    echo '<script>';
    echo 'alert("mentorship applyed successfully");';  
    echo 'window.location.href = "index.php";';
    echo '</script>';
    exit();
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

mysqli_close($conn);
}
}
elseif($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['teacher']))
{
$email=$_POST['email'];
$date=$_POST['date'];
$time=$_POST['time'];
$course=$_POST['course'];
$sql = "UPDATE personalmentorship SET date='$date',time='$time',id=0 WHERE email='$email' AND course='$course'";

if (mysqli_query($con, $sql)) {
  echo '<script>';
  echo 'alert("mentorship assigned successfully");';  
  echo 'window.location.href = "teacher-profile.php";';
  echo '</script>';
  exit();
} else {
  echo "Error updating record: " . mysqli_error($con);
}

mysqli_close($conn);
}
elseif($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['master']))
{
  $email=$_POST['email'];
$date=$_POST['date'];
$time=$_POST['time'];
$course=$_POST['course'];
$sql = "UPDATE personalmentorship SET date='$date',time='$time',id=0 WHERE email='$email' AND course='$course'";

if (mysqli_query($con, $sql)) {
  echo '<script>';
  echo 'alert("mentorship assigned successfully");';  
  echo 'window.location.href = "teacher-profile.php";';
  echo '</script>';
  exit();
} else {
  echo "Error updating record: " . mysqli_error($con);
}

mysqli_close($conn);
}
?>