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
    <link href="style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">
    <title>Daipsi / Consultancy Page</title>
   <style>
       .user-profile{
  width: 100%;
  height: 50rem;
  background: rgba(134, 103, 179, 0.8);
}
.user-profile .user-profile-direction{
  color: white;
  padding: 2rem 0 0 9rem;
}
.user-profile .user-profile-direction .fas{
  color: #4c3b8c;
}
.user-profile .user-profile-common-details{
  width: 25rem;
  height: 34rem;
  background: #795AA6;
  border-radius: 1rem;
  display: flex;
  flex-direction: column;
  align-items: center;
  margin: 1.5rem 0 0 8.5rem;
  float: left;
}
.user-profile-common-details .user-img img{
  width: 10rem;
  height: 10rem;
  border-radius: 50%;
  margin: 1rem 0 0 4rem;
}
.user-profile-common-details .user-img button .fas{
  color: #4c3b8c;
  position: relative;
  top: 3rem;
  right: 3rem;
  font-size: 1.5rem;
}
.user-profile-common-details .user-name{
  margin: .5rem 0 0 2rem;
}
.user-profile-common-details .user-name span{
  color: white;
  font-size: 1.5rem;
  font-weight: bold;
}
.user-profile-common-details .user-name button .fas{
  color: #4c3b8c;
  position: relative;
  font-size: 1.5rem;
}
.user-profile-common-details .user-about span{
  color: white;
  font-size: 1rem;
}
.user-profile-common-details .user-about .about-content{
  width: 20rem;
  height: 9rem;
  background-color: white;
  border-radius: 1rem;
  color: white;
  font-size: 1rem;
}
.user-profile-common-details .user-about .about-content p{
  color: #4c3b8c;
  padding: 1rem;
}
.user-profile-common-details .user-about button .fas{
  color: #4c3b8c;
  position: relative;
  top: -9rem;
  left: 17rem;
  font-size: 1.5rem;
}
.textcolor_white_textSize_up{
  color: white;
  font-size: 1.3rem;
}
.textcolor_white_textSize_up:hover{
  color: white;
}
.user-profile-main-details{
  display: flex;
  flex-direction: column;
  align-items: center;
}
.user-personal-information{
  width: 70rem;
  height: 17rem;
  border-radius: 1.5rem;
  background-color: white;
  margin: -1rem 0 3rem 0;
}
.user-personal-information .main-heading{
  display: flex;
  flex-direction: row;
  justify-content: space-between;
  margin-left: 1.5rem;
  margin-top: 1rem;
}
.user-personal-information .main-heading .fas{
  font-size: 2rem;
  color: #4c3b8c;
  position: relative;
  right: 3rem;
}
.user-personal-information .user-line{
  border: .01rem solid #B091DD;
  background-color: #B091DD;
  margin-top: .5rem;
}
.user-personal-data{
  display: flex;
  flex-direction: column;
  margin-top: 1rem;
}
.user-personal-data .user-personal-content{
  display: flex;
  flex-direction: row;
  justify-content: space-between;
  margin-left: 1.5rem;
}
.user-personal-data .user-personal-content .content-line{
  border: .1rem solid #B091DD;
  height: 2rem;
  background-color: #B091DD;
  margin-top: 1rem;
}
.user-personal-content h2{
  width: 50rem;
  height: 2rem;
  text-align: center;
  margin-top: .6rem;
}
@media only screen and (max-width: 767px){
  .user-profile{
    height: auto;
  }
  .user-profile .user-profile-common-details{
    float: none;
    margin: 2rem auto;
  }
  .user-personal-information{
    width: 50rem;
    margin: 2rem auto;
  }
}
@media (min-width: 768px) and (max-width: 1023px){
  .user-personal-information{
    width: 50rem;
    margin-top: .2rem;
  }
}
@media (min-width: 1024px) and (max-width: 1200px){
  .user-personal-information{
    height: 18rem;
  }
}
   </style> 
</head>

<body>

    <!-- Navbar Start -->

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
                            <a class="nav-link" aria-current="page" href="index.html">Home</a>
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
                                           
                    <form action="login.php" method="POST">
                      <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Email:</label>
                        <input type="email" class="form-control" id="email" name="email">
                      </div>
                      <div class="mb-3">
                        <label for="message-text" class="col-form-label">Password:</label>
                        <input type="password" class="form-control" id="password" name="pass">
                      </div>
                      <input type="submit" class="form-control submit-btn" value="Submit" name="user">
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
                <span>Updated Earth</span>
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

    <!-- Navbar End -->

    <!-- User Profile Start -->
<?php if($_SESSION['coun']=="a"){
    ?>
    <div class="user-profile">
        <div class="user-profile-direction">
            <h1>Profile</h1>
            <span>Daipsi <i class="fas fa-caret-right"></i> Profile</span>
        </div>
        <div class="user-profile-common-details">
            <div class="user-img">
                <img src="<?php echo $_SESSION['photo'];?>" alt="">
              

                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#upload-image"
                data-bs-whatever="@mdo"><i class="fas fa-camera"></i></button>
            <div class="modal fade" id="upload-image" tabindex="-1" aria-labelledby="upload-image"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="upload-image">Upload Image</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                          <form action="studentprofile.php" method="POST">
                        <div class="modal-body">
                                <div class="mb-3">
                                    <label for="file-name" class="col-form-label">Upload Image</label>
                                    <input type="file" class="form-control" id="file-name" name="file">
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" name="button6">Update</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
            </div>
            <div class="user-name">
                <span><?php echo $_SESSION['name'];?></span>
                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#upload-name"
                data-bs-whatever="@mdo"><i class="fas fa-edit"></i></button>
            <div class="modal fade" id="upload-name" tabindex="-1" aria-labelledby="upload-name"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="upload-name">Update Name</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                <!-- updatename form -->
                        <form action="studentprofile.php" method="POST">
                        <div class="modal-body">
                                <div class="mb-3">
                                    <label for="update-name" class="col-form-label">Name:</label>
                                    <input type="text" class="form-control" id="update-name" name="name" value="<?php echo $_SESSION['name'];?>">
                                </div>                           
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" name="button3">Update</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
            </div>
            <div class="user-about">
                <span>About</span><br>
                <div class="about-content">
                    <p><?php echo $_SESSION['about'];?></p>
                </div>
                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#edit-about"
                data-bs-whatever="@mdo"><i class="fas fa-edit"></i></button>
            <div class="modal fade" id="edit-about" tabindex="-1" aria-labelledby="edit-about"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="edit-about">Edit About</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <!-- user about form -->
                        <form action="studentprofile.php" method="POST">
                        <div class="modal-body">
                                <div class="mb-3">
                                    <label for="edit-about" class="col-form-label">Edit About:</label>
                                    <textarea class="form-control" id="edit-about" name="about" value="<?php echo $_SESSION['about'];?>"></textarea>
                                </div>                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" name="button4">Update</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
            </div>
            <div class="change-password">
                <button type="button" class="btn textcolor_white_textSize_up" data-bs-toggle="modal" data-bs-target="#change-password"
                    data-bs-whatever="@mdo">Change Password</button>
                <div class="modal fade" id="change-password" tabindex="-1" aria-labelledby="change-password"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="change-password">Update Password</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <!-- password form -->
                            <form action="studentprofile.php" method="POST">
                            <div class="modal-body">                               
                                    <div class="mb-3">
                                        <label for="change-password" class="col-form-label">Current Password:</label>
                                        <input type="text" class="form-control" id="change-password" name="current">
                                    </div>
                                    <div class="mb-3">
                                        <label for="new-password" class="col-form-label">New Password:</label>
                                        <input type="text" class="form-control" id="new-password" name="newpass">
                                    </div>
                                    <div class="mb-3">
                                        <label for="check-password" class="col-form-label">Confirm New Password:</label>
                                        <input type="text" class="form-control" id="check-password" name="cnewpass">
                                    </div>                                
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary" name="button5">Update</button>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
            <a href="logoutprofile.php" class="textcolor_white_textSize_up">Logout</a>
        </div>
        <div class="user-profile-main-details">
            <div class="user-personal-information">
                <div class="main-heading">
                    <h1>Personal Information</h1>
                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#edit-Personal-info"
                    data-bs-whatever="@mdo"><i class="fas fa-edit"></i></button>
                <div class="modal fade" id="edit-Personal-info" tabindex="-1" aria-labelledby="edit-Personal-info"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="edit-Personal-info">Edit Personal Info</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
            <!-- personalinfromation form -->
                            <form action="studentprofile.php" method="POST">
                            <div class="modal-body">
                                    <div class="mb-3">
                                        <label for="first-name" class="col-form-label">First Name:</label>
                                        <input type="text" class="form-control" id="first-name" name="fname" value="<?php echo $_SESSION['firstname'];?>">
                                        <label for="last-name" class="col-form-label">Last Name:</label>
                                        <input type="text" class="form-control" id="last-name" name="lname" value="<?php echo $_SESSION['lastname'];?>">
                                    </div>                            
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary" name="button1">Update</button>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
                </div>
                <div class="user-line"></div>
                <div class="user-personal-data">
                  <div class="user-personal-content">
                      <h2>firstname</h2>
                      <div class="content-line"></div>
                      <h2 class="content-left"><?php echo $_SESSION['firstname'];?></h2>
                  </div>
                  <div class="user-personal-content">
                    <h2>Last Name</h2>
                    <div class="content-line"></div>
                    <h2><?php echo $_SESSION['lastname'];?></h2>
                </div>
                <div class="user-personal-content">
                    <h2>Email Address</h2>
                    <div class="content-line"></div>
                    <h2><?php echo $_SESSION['email'];?></h2>
                </div>
            </div>
        </div>
        <div class="user-personal-information">
            <div class="main-heading">
                <h1>Professional Information</h1>
                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#edit-professional-info"
                data-bs-whatever="@mdo"><i class="fas fa-edit"></i></button>
            <div class="modal fade" id="edit-professional-info" tabindex="-1" aria-labelledby="edit-professional-info"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="edit-professional-info">Edit Professional Info</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>

            <!-- Professional Information form -->

                        <form action="studentprofile.php" method="POST">
                        <div class="modal-body">
                                <div class="mb-3">
                                    <label for="skills" class="col-form-label">Skills:</label>
                                    <input type="text" class="form-control" id="skills" name="skill" value="<?php echo $_SESSION['skill'];?>">
                                    <label for="qualification" class="col-form-label">Qualification:</label>
                                    <input type="text" class="form-control" id="qualification" name="qua" value="<?php echo $_SESSION['qua'];?>">
                                </div>                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" name="button2">Update</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
            </div>
            <div class="user-line"></div>
            <div class="user-personal-data">
              <div class="user-personal-content">
                  <h2>Designation</h2>
                  <div class="content-line"></div>
                  <h2>Student</h2>
              </div>
              <div class="user-personal-content">
                <h2>Skills</h2>
                <div class="content-line"></div>
                
                <h2><?php echo $_SESSION['skill'];?></h2>
                
                
            </div>
            <div class="user-personal-content">
                <h2>Qualification</h2>
                <div class="content-line"></div>
                <h2><?php echo $_SESSION['qua'];?></h2>
            </div>
        </div>
    </div>
    </div>
    </div>

    <!-- User Profile End -->
<?php }
elseif(!isset($_SESSION['coun']))?>
<!-- User Profile start -->
<div class="user-profile">
        <div class="user-profile-direction">
            <h1>Profile</h1>
            <span>Daipsi <i class="fas fa-caret-right"></i> Profile</span>
        </div>
        <div class="user-profile-common-details">
            <div class="user-img">
                <img src="images/user profile.jpg" alt="">
                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#upload-image"
                data-bs-whatever="@mdo"><i class="fas fa-camera"></i></button>
            <div class="modal fade" id="upload-image" tabindex="-1" aria-labelledby="upload-image"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="upload-image">Upload Image</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                          <form>
                        <div class="modal-body">
                                <div class="mb-3">
                                    <label for="file-name" class="col-form-label">Upload Image</label>
                                    <input type="file" class="form-control" id="file-name">
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
            </div>
            <div class="user-name">
                <span>Mr. Faizu</span>
                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#upload-name"
                data-bs-whatever="@mdo"><i class="fas fa-edit"></i></button>
            <div class="modal fade" id="upload-name" tabindex="-1" aria-labelledby="upload-name"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="upload-name">Update Name</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <form>
                        <div class="modal-body">
                                <div class="mb-3">
                                    <label for="update-name" class="col-form-label">Neme:</label>
                                    <input type="text" class="form-control" id="update-name">
                                </div>                           
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
            </div>
            <div class="user-about">
                <span>About</span><br>
                <div class="about-content">
                    <p>Student_About</p>
                </div>
                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#edit-about"
                data-bs-whatever="@mdo"><i class="fas fa-edit"></i></button>
            <div class="modal fade" id="edit-about" tabindex="-1" aria-labelledby="edit-about"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="edit-about">Edit About</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <form>
                        <div class="modal-body">
                                <div class="mb-3">
                                    <label for="edit-about" class="col-form-label">Edit About:</label>
                                    <textarea class="form-control" id="edit-about"></textarea>
                                </div>                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
            </div>
            <div class="change-password">
                <button type="button" class="btn textcolor_white_textSize_up" data-bs-toggle="modal" data-bs-target="#change-password"
                    data-bs-whatever="@mdo">Change Password</button>
                <div class="modal fade" id="change-password" tabindex="-1" aria-labelledby="change-password"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="change-password">Update Password</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <form>
                            <div class="modal-body">                               
                                    <div class="mb-3">
                                        <label for="change-password" class="col-form-label">Current Password:</label>
                                        <input type="text" class="form-control" id="change-password">
                                    </div>
                                    <div class="mb-3">
                                        <label for="new-password" class="col-form-label">New Password:</label>
                                        <input type="text" class="form-control" id="new-password">
                                    </div>
                                    <div class="mb-3">
                                        <label for="check-password" class="col-form-label">Confirm New Password:</label>
                                        <input type="text" class="form-control" id="check-password">
                                    </div>                                
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
            <a href="#" class="textcolor_white_textSize_up">Logout</a>
        </div>
        <div class="user-profile-main-details">
            <div class="user-personal-information">
                <div class="main-heading">
                    <h1>Personal Information</h1>
                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#edit-Personal-info"
                    data-bs-whatever="@mdo"><i class="fas fa-edit"></i></button>
                <div class="modal fade" id="edit-Personal-info" tabindex="-1" aria-labelledby="edit-Personal-info"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="edit-Personal-info">Edit Personal Info</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <form>
                            <div class="modal-body">
                                    <div class="mb-3">
                                        <label for="first-name" class="col-form-label">First Name:</label>
                                        <input type="text" class="form-control" id="first-name">
                                        <label for="last-name" class="col-form-label">Last Name:</label>
                                        <input type="text" class="form-control" id="last-name">
                                    </div>                            
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
                </div>
                <div class="user-line"></div>
                <div class="user-personal-data">
                  <div class="user-personal-content">
                      <h2>First Name</h2>
                      <div class="content-line"></div>
                      <h2 class="content-left">Student_Name</h2>
                  </div>
                  <div class="user-personal-content">
                    <h2>Last Name</h2>
                    <div class="content-line"></div>
                    <h2>---</h2>
                </div>
                <div class="user-personal-content">
                    <h2>Email Address</h2>
                    <div class="content-line"></div>
                    <h2>student_@gamil.com</h2>
                </div>
            </div>
        </div>
        <div class="user-personal-information">
            <div class="main-heading">
                <h1>Professional Information</h1>
                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#edit-professional-info"
                data-bs-whatever="@mdo"><i class="fas fa-edit"></i></button>
            <div class="modal fade" id="edit-professional-info" tabindex="-1" aria-labelledby="edit-professional-info"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="edit-professional-info">Edit Professional Info</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <form>
                        <div class="modal-body">
                                <div class="mb-3">
                                    <label for="skills" class="col-form-label">Skills:</label>
                                    <input type="text" class="form-control" id="skills">
                                    <label for="qualification" class="col-form-label">Qualification:</label>
                                    <input type="text" class="form-control" id="qualification">
                                </div>                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
            </div>
            <div class="user-line"></div>
            <div class="user-personal-data">
              <div class="user-personal-content">
                  <h2>Designation</h2>
                  <div class="content-line"></div>
                  <h2>Student</h2>
              </div>
              <div class="user-personal-content">
                <h2>Skills</h2>
                <div class="content-line"></div>
                <h2>---</h2>
            </div>
            <div class="user-personal-content">
                <h2>Qualification</h2>
                <div class="content-line"></div>
                <h2>10th Pass</h2>
            </div>
        </div>
    </div>
    </div>
    </div>

 <!-- User Profile End -->
 <?php}?>
    <!-- My Courses Start -->

    <div class="common">
        <div class="common-heading">
            <span>My Courses</span>
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
                    <i class="fa fa-star" aria-hidden="true"></i>
                </h4>
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
                    <i class="fa fa-star" aria-hidden="true"></i>
                </h4>
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
                    <i class="fa fa-star" aria-hidden="true"></i>
                </h4>
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
                    <i class="fa fa-star" aria-hidden="true"></i>
                </h4>
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
                    <i class="fa fa-star" aria-hidden="true"></i>
                </h4>
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
                    <i class="fa fa-star" aria-hidden="true"></i>
                </h4>
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
                    <i class="fa fa-star" aria-hidden="true"></i>
                </h4>
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
                    <i class="fa fa-star" aria-hidden="true"></i>
                </h4>
                <button><a href="upse.html">More</a></button>
            </div>
        </section>
    </div>

    <!-- My Courses End -->

    <!-- Top Running Courses Start -->

    <div class="common top-running-courses-container">
        <div class="common-heading top-running-courses-name">
            <span>Top Running Courses</span>
        </div>
        <section class="common-slider top-running-courses">
            <div class="slide">
                <div class="course-name">
                    <span class="same">JEE</span>
                </div>
                <img src="images/jee course.png">
                <h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h4>
                <div class="buy-now">
                    <a href="jee.html"><span>BuY NoW</span></a>
                </div>
            </div>
            <div class="slide">
                <div class="course-name">
                    <span>NEET</span>
                </div>
                <img src="images/neet course.png">
                <h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h4>
                <div class="buy-now">
                    <a href="neet.html"><span>BuY NoW</span></a>
                </div>
            </div>
            <div class="slide">
                <div class="course-name">
                    <span>UPSE</span>
                </div>
                <img src="images/upse course.png">
                <h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h4>
                <div class="buy-now">
                    <a href="upse.html"><span>BuY NoW</span></a>
                </div>
            </div>
            <div class="slide">
                <div class="course-name">
                    <span class="same">CA</span>
                </div>
                <img src="images/ca course.png">
                <h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h4>
                <div class="buy-now">
                    <a href="ca.html"><span>BuY NoW</span></a>
                </div>
            </div>
            <div class="slide">
                <div class="course-name">
                    <span class="same">CS</span>
                </div>
                <img src="images/cs course.png" class="cs-img">
                <h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h4>
                <div class="buy-now">
                    <a href="cs.html"><span>BuY NoW</span></a>
                </div>
            </div>
            <div class="slide">
                <div class="course-name">
                    <span>NEET</span>
                </div>
                <img src="images/neet course.png">
                <h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h4>
                <div class="buy-now">
                    <a href="neet.html"><span>BuY NoW</span></a>
                </div>
            </div>
            <div class="slide">
                <div class="course-name">
                    <span class="same">JEE</span>
                </div>
                <img src="images/jee course.png">
                <h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h4>
                <div class="buy-now">
                    <a href="jee.html"><span>BuY NoW</span></a>
                </div>
            </div>
        </section>
    </div>

    <!-- Top Running Courses End -->

    <!-- Footer Part Start -->

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
    <script type="text/javascript" src="main.js"></script>
</body>

</html>