<?php
session_start();

if(!isset($_SESSION['email']))
{
    header('location: index.php');
    echo "logout sucess";
}
session_destroy();

 //echo "logout sucess";
exit;
?>