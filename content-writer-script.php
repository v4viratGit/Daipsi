<?php
        require 'dbconnection.php';

        $question=$_GET["question"];
        $answer=$_GET["answer"];
        $course=$_GET["course-name"];
        $insertQuery="insert into $course (question, answer) VALUE ('$question', '$answer')";
        $run=mysqli_query($con,$insertQuery) or die(mysqli_error($con));
        if($run)
        {
            echo '<script>';
            echo 'alert("Entered successfully");';  
            echo '</script>';
            header('location: index.php');
        }
   ?>