<?php
require 'dbconnection.php';
if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['send']))
{
$fname=$_POST['fname'];
$email=$_POST['email'];
$message=$_POST['message'];
//$opt=$_POST['optradio'];
$course=$_POST['course'];
$subject=$_POST['category'];
$purchase_course="SELECT course_name FROM purchases WHERE course_name='$course' AND users_email='$email'";
$purchase_subject="SELECT course_name FROM purchases WHERE course_name='$subject' AND users_email='$email'";
$id=1;
$result1 = mysqli_query($con, $purchase_course);
$result2 = mysqli_query($con, $purchase_subject);

if($email!=$_SESSION['email'])
{
    echo '<script>';
        echo 'alert("please apply with registered email");';  
        echo 'window.location.href = "index.php";';
        echo '</script>';
        exit();
}elseif(mysqli_num_rows($result1) > 0 || mysqli_num_rows($result2) > 0){
$sql = "INSERT INTO personalmentorship (id,fname,email,mess,course)
VALUES ('$id', '$fname', '$email','$message','$subject')";

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

}else{
  echo '<script>';
  echo 'alert(" without buying u dont have access to apply for mentorship");';  
  echo 'window.location.href = "index.php";';
  echo '</script>';
  exit();
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