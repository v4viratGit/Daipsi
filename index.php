<?php
    require 'dbconnection.php';
    //$email=$_SESSION['email'];
    $sql = "SELECT al,ad,bl,bd,cl,cd,el,ed,fl,fd FROM likedislike";
    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) > 0) {
      // output data of each row
      while($row = mysqli_fetch_assoc($result)) {
        $al=$row['al'];
        $ad=$row['ad'];
        $bl=$row['bl'];
        $bd=$row['bd'];
        $cl=$row['cl'];
        $cd=$row['cd'];
        $el=$row['el'];
        $ed=$row['ed'];
        $fl=$row['fl'];
        $fd=$row['fd'];
      }
    } else {
      echo "0 results";
    }
    $query = "SELECT * FROM teachers LIMIT 20";
    $result = mysqli_query($con, $query);
    $student="SELECT purchases.course_name, users.name,users.profilephoto FROM purchases 
    INNER JOIN users ON purchases.users_email=users.email ORDER BY purchases.id DESC LIMIT 20";
    $result1=mysqli_query($con, $student);
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">
    <title>Daipsi / Home Page</title>

    <!-- Script for live search -->
    <script>
        $(document).ready(function(){
            $('.search-bar input[type="search"]').on("keyup input", function(){
                /* Get input value on change */
                var inputVal = $(this).val();
                var resultDropdown = $(this).siblings(".result");
                if(inputVal.length){
                    $.get("backend-search.php", {term: inputVal}).done(function(data){
                        // Display the returned data in browser
                        resultDropdown.html(data);
                    });
                } else{
                    resultDropdown.empty();
                }
            });
            
            // Set search input value on click of result item
            $(document).on("click", ".result p", function(){
                $(this).parents(".search-bar").find('input[type="search"]').val($(this).text());
                $(this).parent(".result").empty();
            });
        });
    </script>
    <script>
        function showSuggestions() {
          document.getElementById("suggestions").style.display = "block";
        }
        function hideSuggestions(){
          document.getElementById("suggestions").style.display = "none";
        }
    </script>
  </head>
  <body onscroll="hideSuggestions()">

    <!-- Header Part Start -->

    <div>
      <nav class="navbar navbar-expand-lg main-navbar" >
          <div class="container-fluid">
              <div class="top-brand-name">
            <a class="navbar-brand" href="index.html">DAIPSI</a>
          </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon">&#9776</span>
            </button>
            <div class="collapse navbar-collapse main-navbar-item" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="index.php">Home</a>
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
                  <!-- <a class="nav-link" href="#">welcome<?php echo $_SESSION['nam'] ;?></a> -->
                <?php   if (isset($_SESSION['email'])) 
                    {  
                        ?>
                  <a class="nav-link" href="logout.php">logout</a>
                  <?php } else{?>
                    <a class="nav-link" href="logout.php"></a>
                    <?php }?>
                </li>
               
                <li>
                 <!-- First modal dialog -->
  <div class="modal fade" id="modal" aria-hidden="true" aria-labelledby="..." tabindex="-1">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Login Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <form action="login.php" method="POST">
                      <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Email:</label>
                        <input type="email" class="form-control" id="email" name="email">
                      </div>
                      <div class="mb-3">
                        <label for="message-text" class="col-form-label">Password:</label>
                        <input type="password" class="form-control" id="password" name="pass">
                      </div>
                      <input type="submit" class="form-control submit-btn" value="Submit" name="index">
                    </form>
                  </div>
          <div class="modal-footer">
            <!-- Toogle to second dialog -->
            <button class="btn btn-signup" data-bs-target="#modal2" data-bs-toggle="modal" data-bs-dismiss="modal">Ragister</button>
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
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form action="signup.php" method="POST">
                  <div class="mb-3">
                      <label for="username" class="col-form-label">Name:</label>
                      <input type="text" class="form-control" id="username" name="name">
                    </div>
                <div class="mb-3">
                  <label for="useremail" class="col-form-label">Email:</label>
                  <input type="email" class="form-control" id="useremail" name="email">
                </div>
                <div class="mb-3">
                  <label for="usermobile" class="col-form-label">Mobile No:</label>
                  <input type="number" class="form-control" id="usermobile" name="contact">
                </div>
                <div class="mb-3">
                  <label for="passw" class="col-form-label">Password:</label>
                  <input type="password" class="form-control" id="passw" name="pass">
                </div>
                <input type="submit" class="form-control submit-btn" value="Submit" name="signup">
              </form>
            </div>
        </div>
      </div>
    </div>
    <!-- Open first dialog -->
    <?php   if (isset($_SESSION['email'])) 
                    {  
                        ?>
                        <a>welcome <?php echo $_SESSION['nam'];?></a>
                        <?php }else{?>
    <a class="btn Login-signup" data-bs-toggle="modal" href="#modal" role="button">Login / SignUp</a>
    <?php }?>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>

      <div class="second-nav">     
        <nav class="navbar">
          <div class="container-fluid">
            <span>Updated Earth</span>
            <form class="search-bar" action="search result.php" method="GET" class="search-bar">
              <input type="radio" id="engineering" class="radio" name="course" value="JEE" required>
              <label for="engineering"> Engineering </label>
              <input type="radio" id="medical" class="radio" name="course" value="NEET" required>
              <label for="medical"> Medical </label>
              <input type="radio" id="commerce" class="radio" name="course" value="COMMERCE" required>
              <label for="commerce"> Commerce </label>
              <input type="radio" id="government-exams" class="radio" name="course" value="UPSC" required>
              <label for="government-exams"> Government Exams </label> <br>
              <input name="search" type="search" class=" form-control me-2 search-engine" placeholder="Get Your Answer Quickly" aria-label="Search" oninput="showSuggestions()" required>
              <button class="btn" type="submit">Search</button>  
              <div id="suggestions" class="result" style="color:white; font-size:20px; z-index:100; position: fixed; background-color: rebeccapurple;
              height: auto;
              padding: 2rem;
              background: #45338b;
              border-radius: 3rem;
              margin: auto;
              width: 53%;
              display: none;"></div>     
          </form>
            <a href="index.html"><img src="images/logo.png"></a>
          </div>
        </nav>
      </div>

      <!-- Header Part End -->
     
      <!-- Main Slider Start -->

      <div class="main-slider">
        <div class="welcome">
          <span>Welcome to<br>DAIPSI</span>
        </div>
        <section class="main-slider-img">
          <div class="slides">
            <img src="images/slider-img.png">
          </div>
          <div class="slides">
            <img src="images/slider-img.png">
          </div>
          <div class="slides">
            <img src="images/slider-img.png">
          </div>
          <div class="slides">
            <img src="images/slider-img.png">
          </div>
          <div class="slides">
            <img src="images/slider-img.png">
          </div>
          <div class="slides">
            <img src="images/slider-img.png">
          </div>
          <div class="slides">
            <img src="images/slider-img.png">
          </div>
        </section>
      </div>

      <!-- Main Slider End -->

      <!-- Most Popular Courses Start -->

        <div class="common">
          <div class="common-heading">
            <span>Most Popular Courses</span>
          </div>
          <div class="common-content">
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
              Facere quaerat eum laudantium nam velit delectus rerum similique ipsa? </p>
          </div>
          <section class="common-slider most-popular-courses">
            <div class="slide">
              <img src="images/jee.jpg">
              <h1>JEE</h1>
              <h2>Mohd Moin</h2>
              <h3>B.Tech, Diploma</h3>
              <h4>Rating <i class="fa fa-star" aria-hidden="true"></i> 
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i></h4>
                <button><a href="jee.html">More</a></button>
            </div>
            <div class="slide">
              <img src="images/neet.jpg">
              <h1>NEET</h1>
              <h2>Mohd Adil</h2>
              <h3>B.Tech, Diploma</h3>
              <h4>Rating <i class="fa fa-star" aria-hidden="true"></i> 
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i></h4>
                <button><a href="neet.html">More</a></button>
            </div>
            <div class="slide">
              <img src="images/upse.jpg">
              <h1>UPSE</h1>
              <h2>Dilip Jadaun</h2>
              <h3>B.Tech, Diploma</h3>
              <h4>Rating <i class="fa fa-star" aria-hidden="true"></i> 
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i></h4>
                <button><a href="upse.html">More</a></button>
            </div>
            <div class="slide">
              <img src="images/ca.jpg">
              <h1>CA</h1>
              <h2>Mansi Prajapati</h2>
              <h3>B.Tech, Diploma</h3>
              <h4>Rating <i class="fa fa-star" aria-hidden="true"></i> 
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i></h4>
                <button><a href="ca.html">More</a></button>
            </div>
            <div class="slide">
              <img src="images/cs.jpg">
              <h1>CS</h1>
              <h2>Ravina Gupta</h2>
              <h3>B.Tech, Diploma</h3>
              <h4>Rating <i class="fa fa-star" aria-hidden="true"></i> 
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i></h4>
                <button><a href="cs.html">More</a></button>
            </div>
            <div class="slide">
              <img src="images/jee.jpg">
              <h1>JEE</h1>
              <h2>Mohd Moin</h2>
              <h3>B.Tech, Diploma</h3>
              <h4>Rating <i class="fa fa-star" aria-hidden="true"></i> 
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i></h4>
                <button><a href="jee.html">More</a></button>
            </div>
            <div class="slide">
              <img src="images/neet.jpg">
              <h1>NEET</h1>
              <h2>Mohd Adil</h2>
              <h3>B.Tech, Diploma</h3>
              <h4>Rating <i class="fa fa-star" aria-hidden="true"></i> 
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i></h4>
                <button><a href="neet.html">More</a></button>
            </div>
            <div class="slide">
              <img src="images/upse.jpg">
              <h1>UPSE</h1>
              <h2>Dilip Jadaun</h2>
              <h3>B.Tech, Diploma</h3>
              <h4>Rating <i class="fa fa-star" aria-hidden="true"></i> 
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i></h4>
                <button><a href="upse.html">More</a></button>
            </div>
          </section>
        </div>

      <!-- Most Popular Courses End -->

       <!-- Most Popular Videos Start -->

       <div class="common">
        <div class="common-heading">
          <span>Most Popular Videos</span>
        </div>
        <div class="common-content">
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
            Facere quaerat eum laudantium nam velit delectus rerum similique ipsa? </p>
        </div>
        <section class="common-slider most-popular-videos">
          <div class="slide">
            <a href="https://www.youtube.com/embed/pAfQq6X5gVU"><img src="images/jee video.png"></a>
            <h2>Launch of JEE Mains<br>Study Course</h2>
            <h2>Mohd Moin</h2>
            <h3>B.Tech, Diploma</h3>
            <h4><i class="far fa-thumbs-up" onclick="like(a='al',b='ad')" id="p1l"></i>
              <span id="l1"></span>
              <i class="far fa-thumbs-down" onclick="dislike(a='al',b='ad')" id="p1d"></i>
              <span id="d1"></span>
              <a href="#"><i class="far fa-share-square"></i></a></h4>
          </div>
          <div class="slide">
            <a href="https://www.youtube.com/embed/pAfQq6X5gVU"><img src="images/neet video.png"></a>
            <h2>Launch of NEET<br>Study Course</h2>
            <h2>Mohd Adil</h2>
            <h3>B.Tech, Diploma</h3>
            <h4><i class="far fa-thumbs-up" onclick="like(a='bl',b='bd')" id="p2l"></i>
              <span id="l2"></span>
              <i class="far fa-thumbs-down" onclick="dislike(a='bl',b='bd')" id="p2d"></i>
              <span id="d2"></span>
              <a href="#"><i class="far fa-share-square"></i></a></h4>
          </div>
          <div class="slide">
            <a href="https://www.youtube.com/embed/pAfQq6X5gVU"><img src="images/ca video.png"></a>
            <h2>Launch of CA<br>Study Course</h2>
            <h2>Dilip Jadaun</h2>
            <h3>B.Tech, Diploma</h3>
            <h4><i class="far fa-thumbs-up" onclick="like(a='cl',b='cd')" id="p3l"></i>
              <span id="l3"></span>
              <i class="far fa-thumbs-down" onclick="dislike(a='cl',b='cd')" id="p3d"></i>
              <span id="d3"></span>
              <a href="#"><i class="far fa-share-square"></i></a></h4>
          </div>
          <div class="slide">
            <a href="https://www.youtube.com/embed/pAfQq6X5gVU"><img src="images/cs video.png"></a>
            <h2>Launch of CS<br>Study Course</h2>
            <h2>Mansi Prajapati</h2>
            <h3>B.Tech, Diploma</h3>
            <h4><i class="far fa-thumbs-up" onclick="like(a='el',b='ed')" id="p4l"></i>
              <span id="l4" ></span>
              <i class="far fa-thumbs-down" onclick="dislike(a='el',b='ed')" id="p4d"></i>
              <span id="d4"></span>
              <a href="#"><i class="far fa-share-square"></i></a></h4>
          </div>
          <div class="slide">
            <a href="https://www.youtube.com/embed/pAfQq6X5gVU"><img src="images/upse video.png"></a>
            <h2>Launch of UPSE<br>Study Course</h2>
            <h2>Ravina Gupta</h2>
            <h3>B.Tech, Diploma</h3>
            <h4><i class="far fa-thumbs-up" onclick="like(a='fl',b='fd')" id="p5l" ></i>
              <span id="l5"></span>
              <i class="far fa-thumbs-down" onclick="dislike(a='fl',b='fd')" id="p5d"></i>
              <span id="d5"></span>
              <a href="#"><i class="far fa-share-square"></i></a></h4>
          </div>
          <div class="slide">
            <a href="https://www.youtube.com/embed/pAfQq6X5gVU"><img src="images/jee video.png"></a>
            <h2>Launch of JEE Mains<br>Study Course</h2>
            <h2>Mohd Moin</h2>
            <h3>B.Tech, Diploma</h3>
            <h4><i class="far fa-thumbs-up"></i>
              <span>1.4k</span>
              <i class="far fa-thumbs-down"></i>
              <span>0</span>
              <a href="#"><i class="far fa-share-square"></i></a></h4>
          </div>
          <div class="slide">
            <a href="https://www.youtube.com/embed/pAfQq6X5gVU"><img src="images/neet video.png"></a>
            <h2>Launch of NEET<br>Study Course</h2>
            <h2>Mohd Adil</h2>
            <h3>B.Tech, Diploma</h3>
            <h4><i class="far fa-thumbs-up"></i>
              <span>1.4k</span>
              <i class="far fa-thumbs-down"></i>
              <span>0</span>
              <a href="#"><i class="far fa-share-square"></i></a></h4>
          </div>
          <div class="slide">
            <a href="https://www.youtube.com/embed/pAfQq6X5gVU"><img src="images/ca video.png"></a>
            <h2>Launch of CA<br>Study Course</h2>
            <h2>Dilip Jadaun</h2>
            <h3>B.Tech, Diploma</h3>
            <h4><i class="far fa-thumbs-up"></i>
              <span>1.4k</span>
              <i class="far fa-thumbs-down"></i>
              <span>0</span>
              <a href="#"><i class="far fa-share-square"></i></a></h4>
          </div>
        </section>
      </div>

    <!-- Most Popular Videos End -->

     <!-- Commonly Asked Doubts Start -->

     <div class="common commonly-asked-doubts-container">
      <div class="common-heading">
        <span>Commonly Asked Doubts</span>
      </div>
      <div class="common-content">
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
          Facere quaerat eum laudantium nam velit delectus rerum similique ipsa? </p>
      </div>
      <section class="common-slider commonly-asked-doubts">
        <div class="slide">
          <img src="images/student (1).png" class="student">
          <i class="fas fa-user-check"></i>
          <h1>Dilip Jadaun</h1>
          <h2>Student</h2>
          <h3>Question: What is helium made of?</h3>
          <h4>Answer: Helium is composed of two electrons in atomic orbitals surrounding a nucleus containing two protons and (usually) two neutrons.</h4>
          <h5><i class="far fa-thumbs-up"></i>
            <span>1.4k</span>
            <i class="far fa-thumbs-down"></i>
            <span>0</span>
            <a href="#"><i class="far fa-share-square"></i></a></h5>
        </div>
        <div class="slide">
          <img src="images/student (2).png" class="student">
          <i class="fas fa-user-check"></i>
          <h1>Ravina Gupta</h1>
          <h2>Student</h2>
          <h3>Question: What is UPSE?</h3>
          <h4>Answer: he UPSC Civil Services Examination(CSE) is one of the examinations conducted by the Union Public Service Commission to recruit suitable candidates into civil services of India including IAS, IPS, IFS, and other allied services.</h4>
          <h5><i class="far fa-thumbs-up"></i>
            <span>1.4k</span>
            <i class="far fa-thumbs-down"></i>
            <span>0</span>
            <a href="#"><i class="far fa-share-square"></i></a></h5>
        </div>
        <div class="slide">
          <img src="images/student (3).png">
          <i class="fas fa-user-check"></i>
          <h1>Mohd Moin</h1>
          <h2>Student</h2>
          <h3>Question: What is use of JEE exam?</h3>
          <h4>Answer: The JEE-Main, which replaces AIEEE, is for admission to the National Institutes of Technology (NITs), Indian Institutes of Information Technology (IIITs), and some other colleges designated as "centrally funded technical institutes" (CFTIs).</h4>
          <h5><i class="far fa-thumbs-up"></i>
            <span>1.4k</span>
            <i class="far fa-thumbs-down"></i>
            <span>0</span>
            <a href="#"><i class="far fa-share-square"></i></a></h5>
        </div>
        <div class="slide">
          <img src="images/student (4).png">
          <i class="fas fa-user-check"></i>
          <h1>Mansi Prajapati</h1>
          <h2>Student</h2>
          <h3>Question: What is meant by NEET exam?</h3>
          <h4>Answer: The National Eligibility Entrance Test (NEET), formerly the All India Pre-Medical Test (AIPMT), is the qualifying test for MBBS and BDS programmes in Indian medical and dental colleges. It is conducted by the National Testing Agency (NTA).</h4>
          <h5><i class="far fa-thumbs-up"></i>
            <span>1.4k</span>
            <i class="far fa-thumbs-down"></i>
            <span>0</span>
            <a href="#"><i class="far fa-share-square"></i></a></h5>
        </div>
        <div class="slide">
          <img src="images/student (5).png">
          <i class="fas fa-user-check"></i>
          <h1>Mohd Adil</h1>
          <h2>Student</h2>
          <h3>Question: How long is CS course?</h3>
          <h4>Answer: The CS (Company Secretary) is a 3 years professional course equivalent to the UG degree. The CS course is conducted by the ICSE (Institute of Company Secretaries of India). The CS course is divided into three levels as the following: Foundation Course–8months.</h4>
          <h5><i class="far fa-thumbs-up"></i>
            <span>1.4k</span>
            <i class="far fa-thumbs-down"></i>
            <span>0</span>
            <a href="#"><i class="far fa-share-square"></i></a></h5>
        </div>
        <div class="slide">
          <img src="images/student (6).png" class="student">
          <i class="fas fa-user-check"></i>
          <h1>Abhishek kumar</h1>
          <h2>Student</h2>
          <h3>Question: Who is eligible for CS exam?</h3>
          <h4>Answer: After Class 12: Students applying for the Company Secretary Course after 10+2 will have to register for the Foundation Programme to start with. Students of science, commerce as well as arts can apply for the course.</h4>
          <h5><i class="far fa-thumbs-up"></i>
            <span>1.4k</span>
            <i class="far fa-thumbs-down"></i>
            <span>0</span>
            <a href="#"><i class="far fa-share-square"></i></a></h5>
        </div>
        <div class="slide">
          <img src="images/student (7).png">
          <i class="fas fa-user-check"></i>
          <h1>Kartikey Pandey</h1>
          <h2>Student</h2>
          <h3>Question: what is ca exam?</h3>
          <h4>Answer: The ICAI exam, also known as CA exams, is conducted by the Institute of Chartered Accountants of India (ICAI) for aspirants of Chartered Accountancy profession in India. The exam is conducted at different levels as per the CA courses.</h4>
          <h5><i class="far fa-thumbs-up"></i>
            <span>1.4k</span>
            <i class="far fa-thumbs-down"></i>
            <span>0</span>
            <a href="#"><i class="far fa-share-square"></i></a></h5>
        </div>
      </section>
    </div>

  <!-- Commonly Asked Doubts End -->

   <!-- Recently Joined Students Start -->

   <div class="common">
    <div class="common-heading">
      <span>Recently Joined Students</span>
    </div>
    <div class="common-content">
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
        Facere quaerat eum laudantium nam velit delectus rerum similique ipsa? </p>
    </div>
    <section class="common-slider recently-joined-students">
    <?php while($rows = mysqli_fetch_assoc($result1))
                {
             ?>
      <div class="slide">
        <img src="<?php echo $rows["profilephoto"];?>">
        <h1><?php echo $rows["name"];?></h1>
        <h2>Student</h2>
        <h3>Crash Course<?php echo $rows["course_name"];?></h3>
        <h4>All India Rank-08</h4>
      </div>
      <?php }?>
      <!-- <div class="slide">
        <img src="images/recently joined student (2).png">
        <h1>Mohd Moin</h1>
        <h2>Student</h2>
        <h3>Crash Course NEET</h3>
        <h4>All India Rank-18</h4>
      </div>
      <div class="slide">
        <img src="images/recently joined student (3).png">
        <h1>Mohd Adil</h1>
        <h2>Student</h2>
        <h3>Crash Course CA</h3>
        <h4>All India Rank-02</h4>
      </div>
      <div class="slide">
        <img src="images/recently joined student (4).png">
        <h1>Dilip Jadaun</h1>
        <h2>Student</h2>
        <h3>Crash Course CS</h3>
        <h4>All India Rank-16</h4>
      </div>
      <div class="slide">
        <img src="images/recently joined student (5).png">
        <h1>Ravina Gupta</h1>
        <h2>Student</h2>
        <h3>Crash Course UPSE</h3>
        <h4>All India Rank-10</h4>
      </div>
      <div class="slide">
        <img src="images/recently joined student (6).png">
        <h1>Mani Gupta</h1>
        <h2>Student</h2>
        <h3>Crash Course JEE</h3>
        <h4>All India Rank-21</h4>
      </div> -->
    </section>
  </div>

<!-- Recently Joined Students End -->

<!-- Our Teachers Start -->

<div class="common">
  <div class="common-heading">
    <span>Our Teachers</span>
  </div>
  <div class="common-content">
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
      Facere quaerat eum laudantium nam velit delectus rerum similique ipsa? </p>
  </div>
  <section class="common-slider our-teachers">
  <?php while($rows = mysqli_fetch_assoc($result))
                {
             ?>
    <div class="slide">
      <img src="<?php echo $rows["profile_photo"];?>">
        <h1><?php echo $rows["full_name"];?></h1>
        <h2>Teachers</h2>
        <h3><?php echo $rows["designation"];?></h3>
        <h4>All India Rank-08</h4>
    </div>
    <?php }?>
    
     <div class="slide">
      <img src="images/teacher (1).png">
      <h1>Mukesh Kumar</h1>
      <h2>Teachers</h2>
      <h3>Crash Course NEET</h3>
      <h4>All India Rank-18</h4>
    </div>
   <!-- <div class="slide">
      <img src="images/teacher (2).png">
        <h1>Manisha Gupta</h1>
        <h2>Teachers</h2>
        <h3>Crash Course JEE</h3>
        <h4>All India Rank-21</h4>
    </div>
    <div class="slide">
      <img src="images/teacher (1).png">
        <h1>Mohd Zakir</h1>
        <h2>Teachers</h2>
        <h3>Crash Course CA</h3>
        <h4>All India Rank-02</h4>
    </div>
    <div class="slide">
      <img src="images/teacher (2).png">
      <h1>Renu Gupta</h1>
      <h2>Teachers</h2>
      <h3>Crash Course UPSE</h3>
      <h4>All India Rank-10</h4>
    </div>
    <div class="slide">
      <img src="images/teacher (1).png">
      <h1>Dilip Thakur</h1>
      <h2>Teachers</h2>
      <h3>Crash Course CS</h3>
      <h4>All India Rank-16</h4>
    </div> -->
  </section>
</div>

<!-- Our Teachers End -->

<!-- Our Ratings Start -->

<div class="common">
  <div class="common-heading">
    <span>Our Ratings</span>
  </div>
  <div class="common-content">
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
      Facere quaerat eum laudantium nam velit delectus rerum similique ipsa? </p>
  </div>
  <section class="common-slider our-ratings">
    <div class="slide">
      <img src="images/review 1.jpg">
      <h1>Mansi Prajapati</h1>
      <h4>Education is something which can change someone’s life 
        and can give him a way to achieve his/her goals. Daipsi will bring this change.</h4>
      <h5>Wish u luck.👍</h5>
    </div>
    <div class="slide">
      <img src="images/review 2.jpg">
      <h1>Ravina Gupta</h1>
      <h4>Education is something which can change someone’s life 
        and can give him a way to achieve his/her goals. Daipsi will bring this change.</h4>
        <h5>Wish u luck.👍</h5>
    </div>
    <div class="slide">
      <img src="images/review 3.jpg">
      <h1>Mohd Moin</h1>
      <h4>Education is something which can change someone’s life 
        and can give him a way to achieve his/her goals. Daipsi will bring this change.</h4>
        <h5>Wish u luck.👍</h5>
    </div>
    <div class="slide">
      <img src="images/review 4.jpg">
      <h1>Mohd Adil</h1>
      <h4>Education is something which can change someone’s life 
        and can give him a way to achieve his/her goals. Daipsi will bring this change.</h4>
        <h5>Wish u luck.👍</h5>
    </div>
    <div class="slide">
      <img src="images/review 5.jpg">
      <h1>Dilip Jadaun</h1>
      <h4>Education is something which can change someone’s life 
        and can give him a way to achieve his/her goals. Daipsi will bring this change.</h4>
        <h5>Wish u luck.👍</h5>
    </div>
    <div class="slide">
      <img src="images/review 6.jpg">
      <h1>Abhishek kumar</h1>
      <h4>Education is something which can change someone’s life 
        and can give him a way to achieve his/her goals. Daipsi will bring this change.</h4>
        <h5>Wish u luck.👍</h5>
    </div>
    <div class="slide">
      <img src="images/review 7.jpg">
      <h1>Kartikey Pandey</h1>
      <h4>Education is something which can change someone’s life 
        and can give him a way to achieve his/her goals. Daipsi will bring this change.</h4>
        <h5>Wish u luck.👍</h5>
    </div>
  </section>
</div>

<!-- Our Ratings End -->

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

    <script>
   var p1l=document.getElementById('p1l');//c
   var p1d=document.getElementById('p1d');//i
   var li1="<?php echo $al ?>";//e
   var di1="<?php echo $ad ?>";//f
   var span1l=document.getElementById('l1');//g
   var span1d=document.getElementById('d1');//h

   var p2l=document.getElementById('p2l');//c
   var p2d=document.getElementById('p2d');//i
   var li2="<?php echo $bl ?>";//e
   var di2="<?php echo $bd ?>";//f
   var span2l=document.getElementById('l2');//g
   var span2d=document.getElementById('d2');//h

   var p3l=document.getElementById('p3l');//c
   var p3d=document.getElementById('p3d');//i
   var li3="<?php echo $cl ?>";//e
   var di3="<?php echo $cd ?>";//f
   var span3l=document.getElementById('l3');//g
   var span3d=document.getElementById('d3');//h

   var p4l=document.getElementById('p4l');//c
   var p4d=document.getElementById('p4d');//i
   var li4="<?php echo $el ?>";//e
   var di4="<?php echo $ed ?>";//f
   var span4l=document.getElementById('l4');//g
   var span4d=document.getElementById('d4');//h
  
   var p5l=document.getElementById('p5l');//c
   var p5d=document.getElementById('p5d');//i
   var li5="<?php echo $fl ?>";//e
   var di5="<?php echo $fd ?>";//f
   var span5l=document.getElementById('l5');//g
   var span5d=document.getElementById('d5');//h

   var count="<?php echo $_SESSION['coun']; ?>";
   var l,d;
   var a,b,c,d,e,f,g,h,i;

   function like(a,b){
  
        
     if(a==="al" && b==="ad")
     {
       c=p1l;
       i=p1d;
      e=li1;
      f=di1;
      g=span1l;
      h=span1d;
     }else if(a==="bl" && b==="bd")
     {
      c=p2l;
       i=p2d;
      e=li2;
      f=di2;
      g=span2l;
      h=span2d;
     }else if(a==="cl" && b==="cd")
     {
      c=p3l;
       i=p3d;
      e=li3;
      f=di3;
      g=span3l;
      h=span3d;
     }else if(a==="el" && b==="ed")
     {
      c=p4l;
       i=p4d;
      e=li4;
      f=di4;
      g=span4l;
      h=span4d;
     }else if(a==="fl" && b==="fd")
     {
      c=p5l;
       i=p5d;
      e=li5;
      f=di5;
      g=span5l;
      h=span5d;
     }
    var m=e;
    var n=f;
    if(c.style.color == "blue") {
      c.style.color = "black";
    //e--;
   g.innerHTML=e;
   //d=0; 
  } else {
    c.style.color = "blue";
  e++;
   g.innerHTML=e;
//d=1;
  }
  i.style.color = "black";
  
 //if(f>0 && d==1){
  //   f--;
// }
var l=e.toString();
  var d=f.toString();
 $.ajax({
  method: "POST",
  url: "courselikedislike.php",
  data: {like:l,dislike:d,pl:a,pd:b}
})

   }


   function dislike(a,b)
   {
     

    if(a==="al" && b==="ad")
     {
       c=p1l;
       i=p1d;
      e=li1;
      f=di1;
      g=span1l;
      h=span1d;
     }else if(a==="bl" && b==="bd")
     {
      c=p2l;
       i=p2d;
      e=li2;
      f=di2;
      g=span2l;
      h=span2d;
     }else if(a==="cl" && b==="cd")
     {
      c=p3l;
       i=p3d;
      e=li3;
      f=di3;
      g=span3l;
      h=span3d;
     }else if(a==="el" && b==="ed")
     {
      c=p4l;
       i=p4d;
      e=li4;
      f=di4;
      g=span4l;
      h=span4d;
     }else if(a==="fl" && b==="fd")
     {
      c=p5l;
       i=p5d;
      e=li5;
      f=di5;
      g=span5l;
      h=span5d;
     }
    if (i.style.color == "blue") {
    i.style.color = "black";
    //f--;
    h.innerHTML=f;
  // l=0;
  } else {
    i.style.color = "blue";
    f++;
    h.innerHTML=f;
   // l=1;
  }
  c.style.color = "black";
  //if(e>0 && l==1){
   //  e--;
     
 //}
 
 g.innerHTML=e;
 h.innerHTML=f;
 var l=e.toString();
  var d=f.toString();
 $.ajax({
  method: "POST",
  url: "courselikedislike.php",
  data: {like:l,dislike:d,pl:a,pd:b}
})

   }
    </script>
  </body>
</html>