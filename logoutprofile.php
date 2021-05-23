<?php 
session_start();
$p=" ";
$_SESSION['lastname']=$p;
$_SESSION['firstname']=$p;
$_SESSION['skill']=$p;
$_SESSION['qua']=$p;
$_SESSION['name']=$p;
$_SESSION['about']=$p;
$_SESSION['email']=$p;
$_SESSION['photo']=$p;
echo "logoutsucess";
?>