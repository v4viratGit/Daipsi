<?php
require 'dbconnection.php';
$like=(int)$_POST['like'];
$dislike=(int)$_POST['dislike'];
$pl=$_POST['pl'];
$pd=$_POST['pd'];
$sql = "UPDATE likedislike SET $pl=$like,$pd=$dislike";
//$sql = "UPDATE likedislike SET al=$like,ad=$dislike";

if (mysqli_query($con, $sql)) {
    echo "Record updated successfully";
  } else {
    echo "Error updating record: " . mysqli_error($con);
  }
  
  mysqli_close($con);
?>