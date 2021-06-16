<?php
 require 'dbconnection.php';
 if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['teacher']))
 {
 $que=$_POST['que'];
 $answer=$_POST['answer'];
 $course=$_POST['course'];
 $sql = "INSERT INTO $course (question,answer) VALUE ('$que', '$answer')";
 if (mysqli_query($con, $sql)) {
  $table=$course."_queries";
  $sqll = "DELETE FROM $table WHERE question='$que'";   
  if (mysqli_query($con, $sqll)) {
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Succesfully submitted');
    window.location.href='teacher-profile.php';
    </script>");
  } else {
    echo "Error deleting record: " . mysqli_error($con);
  }
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
  }
}