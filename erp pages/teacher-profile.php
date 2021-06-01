<?php
    require '../dbconnection.php';
    $email=$_SESSION['teacher_email'];
    $query = "SELECT * FROM teachers WHERE email = '$email' ";
    $result = mysqli_query($con, $query);

    $d=$_SESSION['designation'];
    if($d=="physics")
    {
    $sql = "SELECT * FROM coursepurchase WHERE course_id=1 OR course_id=2";
$result1 = mysqli_query($con, $sql);

    }
    if($d=="chemistry")
    {
    $sql = "SELECT * FROM coursepurchase WHERE course_id=1 OR course_id=2";
$result1 = mysqli_query($con, $sql);

    }
    if($d=="botany")
    {
    $sql = "SELECT * FROM coursepurchase WHERE course_id=1";
$result1 = mysqli_query($con, $sql);

    }
    if($d=="zoology")
    {
    $sql = "SELECT * FROM coursepurchase WHERE course_id=1";
$result1 = mysqli_query($con, $sql);

    }
    if($d=="maths")
    {
    $sql = "SELECT * FROM coursepurchase WHERE course_id=2";
$result1 = mysqli_query($con, $sql);

    }
mysqli_close($con);

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <!--CSS  -->
    <link rel="stylesheet" href="erpstyle.css">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <title>Daipsi | Teacher ERP</title>


    <style>
        table {
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
        }
  
        h1 {
            text-align: center;
            
            font-size: xx-large;
            font-family: 'Gill Sans', 'Gill Sans MT', 
            ' Calibri', 'Trebuchet MS', 'sans-serif';
        }
  
        td {
            background-color: #E4F5D4;
            border: 1px solid black;
        }
  
        th,
        td {
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
  
        td {
            font-weight: lighter;
        }
    </style>
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


  <!-- User Profile Start -->
  <?php
    //$email=$_SESSION['teacher_email'];
    //$query = "SELECT * FROM teachers WHERE email = '$email' ";
    //$result = mysqli_query($con, $query);
  ?>
        
  <div class="user-profile">
    <div class="user-profile-direction">
        <h1>Profile</h1>
        <span>Daipsi <i class="fas fa-caret-right"></i> Profile</span>
    </div>
    <div class="user-profile-common-details">
        <div class="user-img">
        <?php
        while ($row=mysqli_fetch_array($result)) {
            echo "<img src='".$row['profile_photo']."'>";
        ?>
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
                <form action="teacher-profile-update.php?teacherEmail=<?php echo $email ?>" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                            <div class="mb-3">
                                <label for="file-name" class="col-form-label">Upload Image</label>
                                <input name="updatedProfilePhoto"type="file" class="form-control" id="file-name">
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button name="editProfilePhoto"type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
        </div>
        <div class="user-name">
            <span><?php  echo $row['full_name'];?></span>
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
                <form action="teacher-profile-update.php?teacherEmail=<?php echo $email ?>" method="POST">
                    <div class="modal-body">
                            <div class="mb-3">
                                <label for="update-name" class="col-form-label">Name:</label>
                                <input name ="updatedFullName" type="text" class="form-control" id="update-name" value="<?php  echo $row['full_name'];?>">
                            </div>                           
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button name="editFullName" type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
        </div>
        <div class="user-about">
            <span>About</span><br>
            <div class="about-content">
                <p><?php  echo $row['about'];?></p>
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
                <form action="teacher-profile-update.php?teacherEmail=<?php echo $email ?>" method="POST">
                    <div class="modal-body">
                            <div class="mb-3">
                                <label for="edit-about" class="col-form-label">Edit About:</label>
                                <textarea name="updatedAbout" class="form-control" id="edit-about"><?php  echo $row['about'];?></textarea>
                            </div>                            
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button name="editAbout" type="submit" class="btn btn-primary">Update</button>
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
                        <form action="teacher-profile-update.php?teacherEmail=<?php echo $email ?>" method="POST">
                        <div class="modal-body">                               
                                <div class="mb-3">
                                    <label for="change-password" class="col-form-label">Current Password:</label>
                                    <input type="text" class="form-control" id="change-password" value="<?php  echo $row['password'];?>">
                                </div>
                                <div class="mb-3">
                                    <label for="new-password" class="col-form-label">New Password:</label>
                                    <input name="updatedPassword" type="password" class="form-control" id="new-password">
                                </div>
                                <div class="mb-3">
                                    <label for="check-password" class="col-form-label">Confirm New Password:</label>
                                    <input name="updatedPassword" type="password" class="form-control" id="check-password">
                                </div>                                
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button name="editPassword" type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
        <a href="login erp.php" class="textcolor_white_textSize_up">Logout</a>
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
                        <form action="teacher-profile-update.php?teacherEmail=<?php echo $email ?>" method="POST">
                        <div class="modal-body">
                                <div class="mb-3">
                                    <label for="first-name" class="col-form-label">First Name:</label>
                                    <input name="updatedFirstName" type="text" class="form-control" id="first-name" value="<?php  echo $row['first_name'];?>">
                                    <label for="last-name" class="col-form-label">Last Name:</label>
                                    <input name="updatedLastName" type="text" class="form-control" id="last-name" value="<?php  echo $row['last_name'];?>">
                                    <label for="location" class="col-form-label">Location:</label>
                                    <input name="updatedLocation" type="text" class="form-control" id="location" value="<?php  echo $row['location'];?>">
                                </div>                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button name="editPersonalInformation" type="submit" class="btn btn-primary">Update</button>
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
                  <h2 class="content-left"><?php  echo $row['first_name'];?></h2>
              </div>
              <div class="user-personal-content">
                <h2>Last Name</h2>
                <div class="content-line"></div>
                <h2><?php  echo $row['last_name'];?></h2>
            </div>            
            <div class="user-personal-content">
                <h2>Location</h2>
                <div class="content-line"></div>
                <h2><?php  echo $row['location'];?></h2>
            </div>
            <div class="user-personal-content">
                <h2>Email Address</h2>
                <div class="content-line"></div>
                <h2><?php  echo $row['email'];?></h2>
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
                <form action="teacher-profile-update.php?teacherEmail=<?php echo $email ?>" method="POST">
                    <div class="modal-body">
                            <div class="mb-3">                                
                                <label for="qualification" class="col-form-label">Qualification:</label>
                                <input name="updatedQualification" type="text" class="form-control" id="qualification" value="<?php  echo $row['qualification'];?>">
                                <label for="experience" class="col-form-label">Experiance:</label>
                                <input name="updatedExperience" type="text" class="form-control" id="experience" value="<?php  echo $row['experience'];?>">
                                <label for="skills" class="col-form-label">Skills:</label>
                                <input name="updatedSkills" type="text" class="form-control" id="skills" value="<?php  echo $row['skills'];?>">
                            </div>                            
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button name="editProfessionalInformation" type="submit" class="btn btn-primary">Update</button>
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
              <h2><?php  echo $row['designation'];?></h2>
          </div>          
        <div class="user-personal-content">
            <h2>Qualification</h2>
            <div class="content-line"></div>
            <h2><?php  echo $row['qualification'];?></h2>
        </div>
        <div class="user-personal-content">
            <h2>Experience</h2>
            <div class="content-line"></div>
            <h2><?php  echo $row['experience'];?></h2>
        </div>
        <div class="user-personal-content">
            <h2>Skills</h2>
            <div class="content-line"></div>
            <h2><?php  echo $row['skills']; }?></h2>
        </div>
    </div>
</div>
</div>
</div>

<!-- User Profile End -->  
 <!-- student enrolled section -->
 <section class="student_enrolled_section">

<div class="student_enrolled_box">
    <h3 class="text-white">Student Enrolled</h3>
    <p class="text-white">Student Details</p>
</div>

<div class="student_name_box">
    <div class="filterAndCount">
        <p>Filter by: <span>None</span></p>
        <p>Student Count : 530</p>
    </div>
        </div>
        <table>
            <tr>
                <th>course_id</th>
                <th>email</th>
                <th>username</th>
                <th>course</th>
            </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS-->
            <?php   // LOOP TILL END OF DATA 
                while($rows = mysqli_fetch_assoc($result1))
                {
             ?>
            <tr>
                <!--FETCHING DATA FROM EACH 
                    ROW OF EVERY COLUMN-->
                <td><?php echo $rows["course_id"];?></td>
                <td><?php echo $rows["email"];?></td>
                <td><?php echo $rows["username"];?></td>
                <td><?php echo $rows["course"];?></td>
    
            </tr>
            <?php
                }
             ?>
        </table>
    
<div class="lastarea"></div>
</section>

<!-- asked question section -->
<section class="asked_question_section my-3">
<div class="asked_question_box">
    <h3 class="text-white">Asked Questions</h3>
</div>
<div class="question_answer_box">
    <div class="filterAndCount">
        <p>Filter by: <span>None</span></p>
        <p>Student Count : 530</p>

    </div>
    <div class="">
        <div class="col-md-12 question_box">
            <div class="card question_answer_card">
                <div class="question_and_name">
                    <p class="text-white fw-bold question">Question:How to get the date from the question and
                        solve it?
                    </p>
                    <div class="name_and_img ">
                        <p class="text-white fww-bold name">Abhishek Kushwaha
                        </p>
                        <img class="px-1" src="images/student_img.png">
                    </div>
                </div>
                <div class="input_and_submit">
                    <form action="#">
                    <input type="text" placeholder="Answer">
                    <button class="btn ">Submit</button>
                </form>
                </div>
            </div>
        </div>

        <div class="col-md-12 question_box">
            <div class="card question_answer_card">
                <div class="question_and_name">
                    <p class="text-white fw-bold question">Question:How to get the date from the question and
                        solve it?
                    </p>
                    <div class="name_and_img ">
                        <p class="text-white fww-bold name">Abhishek Kushwaha
                        </p>
                        <img class="px-1" src="images/student_img.png">
                    </div>
                </div>
                <div class="input_and_submit">
                    <form action="#">
                        <input type="text" placeholder="Answer">
                        <button class="btn ">Submit</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-12 question_box">
            <div class="card question_answer_card">
                <div class="question_and_name">
                    <p class="text-white fw-bold question">Question:How to get the date from the question and
                        solve it?
                    </p>
                    <div class="name_and_img ">
                        <p class="text-white fww-bold name">Abhishek Kushwaha
                        </p>
                        <img class="px-1" src="images/student_img.png">
                    </div>
                </div>
                <div class="input_and_submit">
                    <form action="#">
                        <input type="text" placeholder="Answer">
                        <button class="btn ">Submit</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- questions jo hidden hai -->
        <div class="col-md-12 question_box">
            <div class="card question_answer_card">
                <div class="question_and_name">
                    <p class="text-white fw-bold question">Question:How to get the date from the question and
                        solve it?
                    </p>
                    <div class="name_and_img ">
                        <p class="text-white fww-bold name">Abhishek Kushwaha
                        </p>
                        <img class="px-1" src="images/student_img.png">
                    </div>
                </div>
                <div class="input_and_submit">
                    <form action="#">
                        <input type="text" placeholder="Answer">
                        <button class="btn ">Submit</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-12 question_box">
            <div class="card question_answer_card">
                <div class="question_and_name">
                    <p class="text-white fw-bold question">Question:How to get the date from the question and
                        solve it?
                    </p>
                    <div class="name_and_img ">
                        <p class="text-white fww-bold name">Abhishek Kushwaha
                        </p>
                        <img class="px-1" src="images/student_img.png">
                    </div>
                </div>
                <div class="input_and_submit">
                    <form action="#">
                        <input type="text" placeholder="Answer">
                        <button class="btn ">Submit</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-12 question_box">
            <div class="card question_answer_card">
                <div class="question_and_name">
                    <p class="text-white fw-bold question">Question:How to get the date from the question and
                        solve it?
                    </p>
                    <div class="name_and_img ">
                        <p class="text-white fww-bold name">Abhishek Kushwaha
                        </p>
                        <img class="px-1" src="images/student_img.png">
                    </div>
                </div>
                <div class="input_and_submit">
                    <form action="#">
                        <input type="text" placeholder="Answer">
                        <button class="btn ">Submit</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- over -->

        <div class="viewMoreDiv d-flex justify-content-center">
            <button type="button" class="view_more_questions btn  text-white fw-bold ">View More</button>
        </div>
    </div>
</div>
<div class="lastarea"></div>
</section>


<!-- personal mentorship section -->
<section class="personal_mentorship_section">
<div class="personal_mentorship_box">
    <h3 class="text-white">Personal Mentorship</h3>
    <p class="text-white">Student Details</p>
</div>
<div class="class_sechedule_box">
    <div class="filterAndCount">
        <p>Filter by: <span>None</span></p>
        <p>Student Count : 530</p>
    </div>
    <div class="">
        <div class="col-md-12 schedule_box">
            <div class="card time_date_card">
                <div class="name_and_subject">
                    <p class=" font-Mukta  fw-bold text-white "> <img src="images/student_img.png" alt="img">
                        Abhishek Kushwaha</p>
                    <p class=" font-Mukta  fw-bold text-white "> <img src="images/student_course_img.png"
                            alt="img">
                        Normal Course JEE</p>
                    <p class=" font-Mukta  fw-bold text-white "> <img src="images/student_book_img.png" alt="img">
                        Maths</p>
                </div>
                <div class="timeDate_and_submit">
                    <form action="#">
                    <div class="mb-3">
                        <label for="time" class="form-label">Time</label>
                        <input class="form-control" type="time" id="time">
                      </div>
                      <div class="mb-3">
                        <label for="date" class="form-label">Date</label>
                        <input class="form-control" type="date" id="date">
                      </div>
                      <button type="submit" class="btn">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-12 schedule_box">
            <div class="card time_date_card">
                <div class="name_and_subject">
                    <p class=" font-Mukta  fw-bold text-white "> <img src="images/student_img.png" alt="img">
                        Abhishek Kushwaha</p>
                    <p class=" font-Mukta  fw-bold text-white "> <img src="images/student_course_img.png"
                            alt="img">
                        Normal Course JEE</p>
                    <p class=" font-Mukta  fw-bold text-white "> <img src="images/student_book_img.png" alt="img">
                        Maths</p>
                </div>
                <div class="timeDate_and_submit">
                    <form action="#">
                        <div class="mb-3">
                            <label for="time" class="form-label">Time</label>
                            <input class="form-control" type="time" id="time">
                          </div>
                          <div class="mb-3">
                            <label for="date" class="form-label">Date</label>
                            <input class="form-control" type="date" id="date">
                          </div>
                          <button type="submit" class="btn">Submit</button>
                        </form>
                </div>
            </div>
        </div>
        <div class="col-md-12 schedule_box">
            <div class="card time_date_card">
                <div class="name_and_subject">
                    <p class=" font-Mukta  fw-bold text-white "> <img src="images/student_img.png" alt="img">
                        Abhishek Kushwaha</p>
                    <p class=" font-Mukta  fw-bold text-white "> <img src="images/student_course_img.png"
                            alt="img">
                        Normal Course JEE</p>
                    <p class=" font-Mukta  fw-bold text-white "> <img src="images/student_book_img.png" alt="img">
                        Maths</p>
                </div>
                <div class="timeDate_and_submit">
                    <form action="#">
                        <div class="mb-3">
                            <label for="time" class="form-label">Time</label>
                            <input class="form-control" type="time" id="time">
                          </div>
                          <div class="mb-3">
                            <label for="date" class="form-label">Date</label>
                            <input class="form-control" type="date" id="date">
                          </div>
                          <button type="submit" class="btn">Submit</button>
                        </form>
                </div>
            </div>
        </div>
        <!-- card jo hidden hai -->
        <div class="col-md-12 schedule_box">
            <div class="card time_date_card">
                <div class="name_and_subject">
                    <p class=" font-Mukta  fw-bold text-white "> <img src="images/student_img.png" alt="img">
                        Abhishek Kushwaha</p>
                    <p class=" font-Mukta  fw-bold text-white "> <img src="images/student_course_img.png"
                            alt="img">
                        Normal Course JEE</p>
                    <p class=" font-Mukta  fw-bold text-white "> <img src="images/student_book_img.png" alt="img">
                        Maths</p>
                </div>
                <div class="timeDate_and_submit">
                    <form action="#">
                        <div class="mb-3">
                            <label for="time" class="form-label">Time</label>
                            <input class="form-control" type="time" id="time">
                          </div>
                          <div class="mb-3">
                            <label for="date" class="form-label">Date</label>
                            <input class="form-control" type="date" id="date">
                          </div>
                          <button type="submit" class="btn">Submit</button>
                        </form>
                </div>
            </div>
        </div>
        <div class="col-md-12 schedule_box">
            <div class="card time_date_card">
                <div class="name_and_subject">
                    <p class=" font-Mukta  fw-bold text-white "> <img src="images/student_img.png" alt="img">
                        Abhishek Kushwaha</p>
                    <p class=" font-Mukta  fw-bold text-white "> <img src="images/student_course_img.png"
                            alt="img">
                        Normal Course JEE</p>
                    <p class=" font-Mukta  fw-bold text-white "> <img src="images/student_book_img.png" alt="img">
                        Maths</p>
                </div>
                <div class="timeDate_and_submit">
                    <form action="#">
                        <div class="mb-3">
                            <label for="time" class="form-label">Time</label>
                            <input class="form-control" type="time" id="time">
                          </div>
                          <div class="mb-3">
                            <label for="date" class="form-label">Date</label>
                            <input class="form-control" type="date" id="date">
                          </div>
                          <button type="submit" class="btn">Submit</button>
                        </form>
                </div>
            </div>
        </div>
        <div class="col-md-12 schedule_box">
            <div class="card time_date_card">
                <div class="name_and_subject">
                    <p class=" font-Mukta  fw-bold text-white "> <img src="images/student_img.png" alt="img">
                        Abhishek Kushwaha</p>
                    <p class=" font-Mukta  fw-bold text-white "> <img src="images/student_course_img.png"
                            alt="img">
                        Normal Course JEE</p>
                    <p class=" font-Mukta  fw-bold text-white "> <img src="images/student_book_img.png" alt="img">
                        Maths</p>
                </div>
                <div class="timeDate_and_submit">
                    <form action="#">
                        <div class="mb-3">
                            <label for="time" class="form-label">Time</label>
                            <input class="form-control" type="time" id="time">
                          </div>
                          <div class="mb-3">
                            <label for="date" class="form-label">Date</label>
                            <input class="form-control" type="date" id="date">
                          </div>
                          <button type="submit" class="btn">Submit</button>
                        </form>
                </div>
            </div>
        </div>
        <!-- over -->
        <div class="viewMoreDiv d-flex justify-content-center">
            <button type="button" class="view_more_schedule btn  text-white fw-bold ">View More</button>
        </div>
    </div>
</div>
<div class="lastarea"></div>
</section>




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

    <!-- jquery code -->
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

        <script
        src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous"></script>
          <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
        <script type="text/javascript" src="main.js"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>
</body>

</html>