<?php
require 'dbconnection.php';
 if(isset($_POST['upload'])){
     $subname=$_POST['subname'];
     $month=$_POST['month'];
     $price=$_POST['price'];
 $target = "images/".basename($_FILES['image']['name']);
   $image = $_FILES['image']['name'];
   $up=move_uploaded_file($_FILES['image']['tmp_name'],$target);
    $sql="Insert into cards(subname,month,price,photo) values('$subname','$month','$price','$image')";
if(mysqli_query($con,$sql)){
    echo "uploaded successfully";
    }
    else{
        echo "there was problem in uploading";
    }
}
?>