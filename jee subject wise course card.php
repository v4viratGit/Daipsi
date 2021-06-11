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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="styleforcoursrcards.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">
    <title>Daipsi | NEET Price Cards</title>
</head>

<body>

    <!-- Header Part Start -->

    <div>
        <nav class="navbar navbar-expand-lg main-navbar">
            <div class="container-fluid">
                <div class="top-brand-name">
                    <a class="navbar-brand" href="index.html">DAIPSI</a>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">&#9776</span>
                </button>
                <div class="collapse navbar-collapse main-navbar-item" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about us.html">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="courses.html">Courses</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="consultancy.html">Consultancy</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="personal mentorship.html">Personal Mentorship</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact us.html">Contact Us</a>
                        </li>
                        <li>
                            <!-- First modal dialog -->
                            <div class="modal fade" id="modal" aria-hidden="true" aria-labelledby="..." tabindex="-1">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Login Details</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                <div class="mb-3">
                                                    <label for="recipient-name" class="col-form-label">Email:</label>
                                                    <input type="email" class="form-control" id="email">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="message-text" class="col-form-label">Password:</label>
                                                    <input type="password" class="form-control" id="password">
                                                </div>
                                                <input type="submit" class="form-control submit-btn" value="Submit">
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <!-- Toogle to second dialog -->
                                            <button class="btn btn-signup" data-bs-target="#modal2"
                                                data-bs-toggle="modal" data-bs-dismiss="modal">Ragister</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Second modal dialog -->
                            <div class="modal fade" id="modal2" aria-hidden="true" aria-labelledby="..." tabindex="-1">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Ragistration</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                <div class="mb-3">
                                                    <label for="recipient-name" class="col-form-label">Name:</label>
                                                    <input type="text" class="form-control" id="name">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="recipient-name" class="col-form-label">Email:</label>
                                                    <input type="email" class="form-control" id="email">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="recipient-name" class="col-form-label">Mobile
                                                        No:</label>
                                                    <input type="number" class="form-control" id="mobile">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="message-text" class="col-form-label">Password:</label>
                                                    <input type="password" class="form-control" id="password">
                                                </div>
                                                <input type="submit" class="form-control submit-btn" value="Submit">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Open first dialog -->
                            <a class="btn Login-signup" data-bs-toggle="modal" href="#modal" role="button">Login /
                                SignUp</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <div class="second-nav">
        <nav class="navbar">
            <div class="container-fluid">
                <span class="brand-logo">Updated Earth</span>
                <form class="search-bar">
                    <input type="radio" id="engineering" class="radio" name="course-name" value="engineering" required>
                    <label for="engineering"> Engineering </label>
                    <input type="radio" id="medical" class="radio" name="course-name" value="medical">
                    <label for="medical"> Medical </label>
                    <input type="radio" id="commerce" class="radio" name="course-name" value="commerce">
                    <label for="commerce"> Commerce </label>
                    <input type="radio" id="government-exams" class="radio" name="course-name" value="government-exams">
                    <label for="government-exams"> Government Exams </label> <br>
                    <input type="search" class=" form-control me-2 search-engine" placeholder="Get Your Answer Quickly"
                        aria-label="Search" required>
                    <button class="btn" type="submit">Search</button>
                </form>
                <a href="index.html"><img src="images/logo.png"></a>
            </div>
        </nav>
    </div>

    <!-- Header Part End -->

    <!-- Price Cards Start -->
    <div class="all-in-one">
         <!-- Header -->
         <div class="selection-coure-card">
            <h1>Prices For JEE Exam</h1>
            <p>Get your favorite Plan at affordable Price.</p>
            <form id="subjectForm" action="jee subject wise course card.php" method="post">
                <select name="subject" class="h-100 row align-items-center" onchange='submitForm();' required>
                    <option value="0">
                    <?php
                    if(!(isset($_POST['subject'])))
                    {?>
                    Click here to select your choice:
                    <?php }else{
                        echo $_POST['subject'];
                    }?>
                    </option>
                    <option value="1">JEE Mains</option>
                    <option value="2">JEE Advanced</option>      
                    <optgroup label="JEE Mains Subjects">
                    <option value="mMathematics">Mathematics</option>   
                    <option value="mChemistry">Chemistry</option>     
                    <option value="mPhysics">Physics</option>
                    <optgroup label="JEE Advanced Subjects">
                    <option value="aMathematics">Mathematics</option>   
                    <option value="aChemistry">Chemistry</option>     
                    <option value="aPhysics">Physics</option>
                </select>
                <button name="subjectSelected" type="submit"></button>
              </form>
              </div>
              <script>
                  function submitForm(){
                    let subjectForm=document.getElementById("subjectForm");
                    subjectForm.submit();
                  };
              </script>
            <!-- Card Grid -->

            <!-- Subject 1 Course Price Cards Start -->
            <div class="subjects" id="subject">
            <?php
                if(isset($_POST['subject']))
                {
                    $subject = $_POST['subject'];
                    $query = "SELECT * FROM cards WHERE subname='$subject'";
                    $result = mysqli_query($con, $query) or die(mysqli_error($con));
                    while($row = $result->fetch_assoc()) {
            ?>
            
                <div class="column">
                    <div class="card-body">
                        <div class="card-month">
                            <span><?php echo $row["month"];?> Month</span>
                        </div>
                        <img src="images/<?php echo $row["photo"];?>" class="img-card" alt="neet-image">
                        <div class="card-content">
                            <span>40M (Free Mentorship)</span><br>
                            <span>Unlimited</span><br>
                            <span>Consultancy</span><br>
                            <span>Any Time</span>
                        </div>
                        <div class="card-price">
                            <span><?php echo $row["price"];?></span>
                        </div>
                        <div class="card-buy-now">
                            <a href="#">BuY NoW</a>
                        </div>
                    </div>
                </div>
           
<?php  } }?> 
</div>
                <!-- <div class="column">
                    <div class="card-body">
                        <div class="card-month">
                            <span>3 Months</span>
                        </div>
                        <img src="images/jee course.png" class="img-card" alt="neet-image">
                        <div class="card-content">
                            <span>40M (Free Mentorship)</span><br>
                            <span>Unlimited</span><br>
                            <span>Consultancy</span><br>
                            <span>Any Time</span>
                        </div>
                        <div class="card-price">
                            <span>Rs. 20000</span>
                        </div>
                        <div class="card-buy-now">
                            <a href="#">BuY NoW</a>
                        </div>
                    </div>

                </div>
                <div class="column">
                    <div class="card-body">
                        <div class="card-month">
                            <span>6 Months</span>
                        </div>
                        <img src="images/jee course.png" class="img-card" alt="neet-image">
                        <div class="card-content">
                            <span>40M (Free Mentorship)</span><br>
                            <span>Unlimited</span><br>
                            <span>Consultancy</span><br>
                            <span>Any Time</span>
                        </div>
                        <div class="card-price">
                            <span>Rs. 35000</span>
                        </div>
                        <div class="card-buy-now">
                            <a href="#">BuY NoW</a>
                        </div>
                    </div>

                </div>
                <div class="column">
                    <div class="card-body">
                        <div class="card-month">
                            <span>12 Months</span>
                        </div>
                        <img src="images/jee course.png" class="img-card" alt="neet-image">
                        <div class="card-content">
                            <span>40M (Free Mentorship)</span><br>
                            <span>Unlimited</span><br>
                            <span>Consultancy</span><br>
                            <span>Any Time</span>
                        </div>
                        <div class="card-price">
                            <span>Rs. 60000</span>
                        </div>
                        <div class="card-buy-now">
                            <a href="#">BuY NoW</a>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="card-body">
                        <div class="card-month">
                            <span>24 Months</span>
                        </div>
                        <img src="images/jee course.png" class="img-card" alt="neet-image">
                        <div class="card-content">
                            <span>40M (Free Mentorship)</span><br>
                            <span>Unlimited</span><br>
                            <span>Consultancy</span><br>
                            <span>Any Time</span>
                        </div>
                        <div class="card-price">
                            <span>Rs. 60000</span>
                        </div>
                        <div class="card-buy-now">
                            <a href="#">BuY NoW</a>
                        </div>
                    </div>
                </div>               
            </div> -->
            <!-- Subject 1 Course Price Cards End -->
    <!-- </div> -->
        <!-- Price Cards Start -->

        <!-- Footer Part Start -->
        <section>
            <div class="our-partners">
                <div class="partners">
                    <span>Our Partners</span>
                </div>
                <div class="partners-img slider">
                    <div class="slide1">
                        <img src="images/bhim-upi.png">
                    </div>
                    <div class="slide2">
                        <img src="images/amzon-pay.png">
                    </div>
                    <div class="slide3">
                        <img src="images/mdd.png">
                    </div>
                    <div class="slide4">
                        <img src="images/digital-hain.png">
                    </div>
                    <div class="slide">
                        <img src="images/phonepe.png">
                    </div>
                    <div class="slide">
                        <img src="images/google-pay.png">
                    </div>
                    <div class="slide">
                        <img src="images/paytm-pay.png">
                    </div>
                </div>
            </div>
        </section>
        <div class="main-footer">
            <div class="first-part">
              <a href="#"><img src="images/logo.png"></a>
              <h2>About Us</h2>
              <p>Daipsi is an educational platform where we provide you top demanding courses like UPSC, CA, CS, NEET, JEE. We
                provide search engine to our aspirants to get answers instantly. We give you personal mentorship that is
                completely free and 24×7 consultancy for proper and end to end guidance.
              </p>
            </div>
            <div class="secound-main-footer">
              <div class="secound-part">
                <h2>Useful Links</h2>
                <ul>
                  <li><a href="index.html">Home</a></li>
                  <li><a href="contact us.html">Contact Us</a></li>
                  <li><a href="consultancy.html">Consultancy</a></li>
                  <li><a href="personal mentorship.html">Personal Mentorship</a></li>
                  <li><a href="#">Term & Condition</a></li>
                </ul>
              </div>
              <div class="third-part">
                <h2>Courses</h2>
                <ul>
                  <li><a href="ca.html">CA</a></li>
                  <li><a href="cs.html">CS</a></li>
                  <li><a href="jee.html">JEE</a></li>
                  <li><a href="neet.html">NEET</a></li>
                  <li><a href="upsc.html">UPSC</a></li>
                </ul>
              </div>
              <div class="forth-part">
                <h2>Updates</h2>
                <ul>
                  <li><a href="https://daipsi.com/blogs/category/commerce/">CA Updates</a></li>
                  <li><a href="https://daipsi.com/blogs/category/commerce/">CS Updates</a></li>
                  <li><a href="https://daipsi.com/blogs/category/engineering/">JEE Updates</a></li>
                  <li><a href="https://daipsi.com/blogs/category/medical/">NEET Updates</a></li>
                  <li><a href="https://daipsi.com/blogs/category/u-p-s-c/">UPSC Updates</a></li>
                </ul>
              </div>
              <div class="fivth-part">
                <h2>Find Us</h2>
                <ul>
                  <li><a href="https://www.facebook.com/Daipsi-Private-Limited-108148468116064/" target="_blank" rel="noreferrer"><i class="fab fa-facebook-f"></i></a></li>
                  <li><a href="https://instagram.com/daipsis?utm_medium=copy_link" target="_blank" rel="noreferrer"><i class="fab fa-instagram"></i></a></li>
                  <li><a href="https://twitter.com/DaipsiS?s=08" target="_blank" rel="noreferrer"><i class="fab fa-twitter"></i></a></li>
                  <li><a href="https://www.linkedin.com/in/daipsi-slides-902b74213/" target="_blank" rel="noreferrer"><i class="fab fa-linkedin-in"></i></a></li>
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
                <a href="index.html"><img src="images/copyright.png"> 2021, Daipsi. All rights reserved.</a>
              </div>
              <div class="first">
                <a href="https://digitalhain.com"><img src="images/poweredby.png"> Powered By Digitalhain.</a>
              </div>
            </div>
            <div class="third-part">
              <a href="#"><img src="images/Paytm.png"></a>
              <a href="#"><img src="images/rbl.png"></a>
              <a href="#"><img src="images/bhim-upi.png"></a>
            </div>
        
          </div>
        <!-- Footer Part End -->

        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
            crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
            <script type="text/javascript" src="js/main.js"></script>
</body>

</html>