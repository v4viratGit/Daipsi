<?php
    require 'dbconnection.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link href="erpstyle.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">
    <title>Daipsi / Content Writer ERP</title>
  </head>
  <body>

    <!-- Navbar Start -->

    <div>
      <nav class="navbar navbar-expand-lg main-navbar" >
          <div class="container-fluid">
              <div class="top-brand-name">
                <a class="navbar-brand" href="index.html">DAIPSI</a>
          </div>
            <div class="main-navbar-item" id="navbarNav">
                <span>Welcome to the DAIPSI</span>
              <a href="index.html"><img src="images/logo.png"></a>
            </div>
          </div>
        </nav>
      </div>

      

      <!-- Navbar End -->

      <div class="upload-question">
          <span> Upload Questions </span>
          <div class="quetion-upload-form">
              <form action="content-writer-script.php" method="GET">
                  <input type="text" name="question" class="question-input" placeholder="write here Question or Topic" required><br>
                  <textarea placeholder="Write here Answer" name="answer" required></textarea><br>
                  <input type="radio" id="engineering" class="radio" name="course-name" value="jee" required>
                  <label for="engineering"> Engineering </label>
                  <input type="radio" id="medical" class="radio" name="course-name" value="neet">
                  <label for="medical"> Medical </label>
                  <input type="radio" id="commerce" class="radio" name="course-name" value="commerce">
                  <label for="commerce"> Commerce </label>
                  <input type="radio" id="government-exams" class="radio" name="course-name" value="upsc">
                  <label for="government-exams"> Government Exams </label> <br>
                  <button type="submit">Submit</button>
              </form>
          </div>
      </div>


      
      <!-- Footer Part Start -->    
    
     <div class="main-footer">
       <div class="first-part">
         <a href="#"><img src="images/logo.png"></a>
         <h2>About Us</h2>
         <p>Lorem Ipsum is simply dummy text of the printing and 
           typesetting industry. Lorem Ipsum has been the industry's 
           standard dummy text ever since the 1500s, when an unknown 
           printer took a galley of type and scrambled it to make a 
           type specimen book.</p>
       </div>
       <div class="secound-main-footer">
       <div class="secound-part">
         <h2>Useful Links</h2>
         <ul>
           <li><a href="#">Home</a></li>
           <li><a href="#">Contact Us</a></li>
           <li><a href="#">Consultancy</a></li>
           <li><a href="#">Term & Condition</a></li>
         </ul>
       </div>
       <div class="third-part">
        <h2>Courses</h2>
        <ul>
          <li><a href="#">CA</a></li>
          <li><a href="#">CS</a></li>
          <li><a href="#">JEE</a></li>
          <li><a href="#">NEET</a></li>
          <li><a href="#">UPSE</a></li>
        </ul>
      </div>
      <div class="forth-part">
        <h2>Exam</h2>
        <ul>
          <li><a href="#">CA Exam</a></li>
          <li><a href="#">CS Exam</a></li>
          <li><a href="#">JEE Exam</a></li>
          <li><a href="#">NEET Exam</a></li>
          <li><a href="#">UPSE Exam</a></li>
        </ul>
      </div>
      <div class="fivth-part">
        <h2>Find Us</h2>
        <ul>
        <li><a href="#"><img src="images/facebook icon.png"></a></li>
        <li><a href="#"><img src="images/instagram icon.png"></a></li>
        <li><a href="#"><img src="images/twitter icon.png"></a></li>
        <li><a href="#"><img src="images/linkedin icon.png"></a></li>
      </ul>
      </div>
    </div>
     </div>
     <div class="hori-line">
     <hr size="4" width="100%" class="line">
     </div>
     <div class="secound-footer">
      <div class="first-part">
        <a href="#"><img src="images/paypal.png"></a>
        <a href="#"><img src="images/Rupay.png"></a>
        <a href="#"><img src="images/Mastercard.png"></a>
        <a href="#"><img src="images/American Express.png"></a>
        <a href="#"><img src="images/Visa.png"></a>
      </div> 
      <div class="secound-part">
        <div class="first">
          <a href="#"><img src="images/copyright.png"> 2021, Daipsi. All rights reserved.</a>
        </div>
        <div class="first">
          <a href="#"><img src="images/poweredby.png"> Powered By Digitalhain.</a>
        </div>
      </div>
      <div class="third-part">
        <a href="#"><img src="images/Paytm.png"></a>
        <a href="#"><img src="images/phonepay.png"></a>
        <a href="#"><img src="images/Bhim.png"></a>
        <a href="#"><img src="images/googlepay.png"></a>
      </div> 

     </div>
      <!-- Footer Part End -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
    <script
    src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous"></script>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script type="text/javascript" src="main.js"></script>
  </body>
</html>