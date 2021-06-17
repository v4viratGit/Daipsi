<?php 
session_start();
// $p="";
// $_SESSION['lastname']=$p;
// $_SESSION['firstname']=$p;
// $_SESSION['skill']=$p;
// $_SESSION['qua']=$p;
// $_SESSION['name']=$p;
// $_SESSION['about']=$p;
// $_SESSION['email']=$p;
// $_SESSION['photo']=$p;
//$_SESSION['coun']=" ";
unset($_SESSION['coun']);
if(!isset($_SESSION['email']))
{
    header('location: user-profile.php');
}
session_destroy();
echo '<script>';
        echo 'alert("logout success");';  
        echo 'window.location.href = "user-profile.php";';
        echo '</script>';
        exit();
?>