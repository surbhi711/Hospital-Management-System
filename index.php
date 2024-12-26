<?php
include('include/connection.php');
if(isset($_POST['bookAppointment']))
{
  if(!isset($_SESSION['patientId']))
  {
    header("location:login/");
  }
  else{

    $patientName = $_POST['patientName'];
    $phoneNumber = $_POST['phoneNumber'];
    $city = $_POST['city'];
    $doctor = $_POST['doctor'];
    $problem = $_POST['problem'];
    $appointmentDate = $_POST['appointmentDate'];
    $symptoms = $_POST['symptoms'];
    $changeDate = date("Y-m-d", strtotime($appointmentDate));
    
    if(isset($_POST['bookAppointment']))
    {
      $query = "INSERT INTO `appoinment`
       SET `cityId` = '".$city."',
       `doctorId` = '".$doctor."',`patientId`='".$_SESSION['patientId']."',`patientName`='".$patientName."',`phoneNumber`='".$phoneNumber."',`problem`='".$problem."',`symptoms`='".$symptoms."',`appointmentDate`='".$changeDate."'";
       $exeQuery = mysqli_query($connection,$query);
    
      if($exeQuery)
      {
        header("location:index.php");
      }
    }
  }
}
if(isset($_POST['send_btn']))
{
  $fullName = $_POST['fullName'];
  $email = $_POST['email'];
  $phoneNumber = $_POST['phoneNumber'];
  $message = $_POST['message'];

  $query = "INSERT INTO `contactus` SET `name` = '".$fullName."',`email` = '".$email."',`phonenumber` = '".$phoneNumber."',`message` = '".$message."'";

  $exeQuery = mysqli_query($connection,$query);
    
  if($exeQuery)
  {
      header("location:index.php");
  }

}
?>
<!DOCTYPE html>
<html>
<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Sterling Hospital</title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- nice select -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha256-mLBIhmBvigTFWPSCtvdu6a76T+3Xyt+K571hupeFLg4=" crossorigin="anonymous" />
  <!-- datepicker -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
  <link rel="shortcut icon" href="Images/faviconIcon0.png">

  <style>
    .img-box1 img{
      height: 350px !important;
    }
  </style>

</head>
<body>

  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="header_top">
        <div class="container">
          <div class="contact_nav">
            <a href="">
              <i class="fa fa-phone" aria-hidden="true"></i>
              <span>
                Call : +91 9876786785
              </span>
            </a>
            <a href="">
              <i class="fa fa-envelope" aria-hidden="true"></i>
              <span>
                Email : demo@gmail.com
              </span>
            </a>
            <a href="">
              <i class="fa fa-map-marker" aria-hidden="true"></i>
              <span>
                Location
              </span>
            </a>
          </div>
        </div>
      </div>
      <div class="header_bottom">
        <div class="container-fluid">
          <nav class="navbar navbar-expand-lg custom_nav-container ">
            <a class="navbar-brand" href="index.php">
              <img src="images/st.png" alt="">
            </a>


            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class=""> </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <div class="d-flex mr-auto flex-column flex-lg-row align-items-center">
                <ul class="navbar-nav">
                  <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="about/index.php">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="doctorIntro/index.php">Doctors</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="appointment/index.php">My Appointment</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="contact/index.php">Contact Us</a>
                  </li>
                </ul>
              </div>
              <div class="quote_btn-container">
                <a href="login/index.php">
                  <i class="fa fa-user" aria-hidden="true"></i>
                  <span>
                    Login
                  </span>
                </a>
                <form class="form-inline">
                  <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                    <i class="fa fa-search" aria-hidden="true"></i>
                  </button>
                </form>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </header> 
    <!-- end header section -->
    <!-- slider section -->
    <section class="slider_section ">
      <div class="dot_design">
        <img src="images/dots.png" alt="">
      </div>
      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container ">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail-box">
                    <div class="play_btn">
                      <button>
                        <i class="fa fa-play" aria-hidden="true"></i>
                      </button>
                    </div>
                    <h1>
                      Sterling <br>
                      <span>
                        Hospital
                      </span>
                    </h1>
                    <p>
                      when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to
                    </p>
                    <a href="contact/index.php">
                      Contact Us
                    </a>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="images/slider-img.jpg" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail-box">
                    <div class="play_btn">
                      <button>
                        <i class="fa fa-play" aria-hidden="true"></i>
                      </button>
                    </div>
                    <h1>
                    Sterling <br>
                      <span>
                        Hospital
                      </span>
                    </h1>
                    <p>
                      when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to
                    </p>
                    <a href="">
                      Contact Us
                    </a>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="images/slider-img.jpg" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail-box">
                    <div class="play_btn">
                      <button>
                        <i class="fa fa-play" aria-hidden="true"></i>
                      </button>
                    </div>
                    <h1>
                    Sterling <br>
                      <span>
                        Hospital
                      </span>
                    </h1>
                    <p>
                      when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to
                    </p>
                    <a href="">
                      Contact Us
                    </a>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="images/slider-img.jpg" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel_btn-box">
          <a class="carousel-control-prev" href="#customCarousel1" role="button" data-slide="prev">
            <img src="images/prev.png" alt="">
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#customCarousel1" role="button" data-slide="next">
            <img src="images/next.png" alt="">
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>

    </section>
    <!-- end slider section -->
  </div>


  <!-- book section -->

  <section class="book_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col">
          <form method="post">
            <h4 class="mb-3">
              BOOK <span>APPOINTMENT</span>
            </h4>
            <h6 class="mb-5">Please Login for Book an Appointment <a href="login/">Login</a></h6>
            <div class="form-row">
            <div class="form-group col-lg-3">
                <label for="inputDate">Appointment Date</label>
                <div class="input-group date" id="inputDate" data-date-format="dd-mm-yyyy">
                  <input type="text" class="form-control" name="appointmentDate" required>
                  <span class="input-group-addon date_icon">
                    <i class="fa fa-calendar" aria-hidden="true"></i>
                  </span>
                </div>
              </div>
              <div class="form-group col-lg-4">
                <label for="">Phone Number </label>
                <input type="text" class="form-control" id="" placeholder="Patient Phone Number" name="phoneNumber" required>
              </div>
              <div class="form-group col-lg-5">
                <label for="inputPatientName">Patient Name </label>
                <input type="text" class="form-control" id="inputPatientName" placeholder="Patient Name" name="patientName" required>
              </div>    
             <!-- <div class="form-group col-lg-4">
                <label for="inputDepartmentName">Select Diagnostic</label>
                <select name="" class="form-control wide" id="inputDepartmentName">
                  <option value="Normal distribution ">Normal distribution </option>
                  <option value="Normal distribution ">Normal distribution </option>
                  <option value="Normal distribution ">Normal distribution </option>
                </select>
              </div> -->
            </div>
            <div class="form-row">
              
             <!-- <div class="form-group col-lg-4"> -->
                
             <!-- </div> -->
             <div class="form-group col-lg-4">
                <label for="inputDepartmentName">Problem</label>
                <input type="text" name="problem" class="form-control" id="problemInput" placeholder="Write your problem" required>
              </div>
              <div class="form-group col-lg-4">
                <label for="inputDoctorName">Select Doctor</label>
                <select name="doctor" class="form-control wide" id="inputDoctorName" required>
                <option value="">Select Doctor</option>
                  <?php
                      $count = 1;
                      $selectDoctorQuery = mysqli_query($connection,"SELECT * FROM `doctor`");
                      while($row = mysqli_fetch_array($selectDoctorQuery))
                      {?>
                        <option value="<?php echo $row['doctorId']; ?>"><?php echo $row['name']; ?></option>
                  <?php } ?>
                </select>
              </div>
              <div class="form-group col-lg-4">
                <label for="selectCity">Select City</label>
                <select class="form-control wide" id="" name="city" required>
                  <option value="">Select City</option>
                  <?php
                    $selectCityQuery = mysqli_query($connection,"SELECT * FROM `city`");
                    while($row =  mysqli_fetch_array($selectCityQuery))
                    {?>
                      <option value="<?php echo $row['cityId']; ?>"><?php echo $row['name']; ?></option>
                  <?php } ?>    
                </select>
              </div>
            
            </div>
            <div class="form-row form-group">
              <label for="inputSymptoms">Symptoms</label>
                <textarea class="form-control" name="symptoms" required></textarea>
              </div>
            <div class="btn-box">
              <button type="submit" class="btn" name="bookAppointment">Book Appointment</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>


  <!-- end book section -->


  <!-- about section -->

  <section class="about_section">
    <div class="container  ">
      <div class="row">
        <div class="col-md-6 ">
          <div class="img-box">
            <img src="images/about-img.jpg" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                About <span>Hospital</span>
              </h2>
            </div>
            <p>
              has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors
            </p>
            <a href="">
              Read More
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->

  <!-- team section -->

  <section class="team_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Our <span>Doctors</span>
        </h2>
      </div>
      <div class="carousel-wrap ">
        <div class="owl-carousel team_carousel">

          <?php 
          $selectDoctorQuery = mysqli_query($connection,"SELECT * FROM `doctor`");
          while($row = mysqli_fetch_array($selectDoctorQuery))
          {
            $selectSpecillization = mysqli_fetch_array(mysqli_query($connection,"SELECT * FROM `specialization` WHERE `specializationId`='".$row['specializationId']."'"));
            ?>
            <div class="item">
                <div class="box">
                  <div class="img-box1">
                    <img src="admin/images/<?php echo $row['profile'];?>" alt="" />
                  </div>
                  <div class="detail-box">
                    <h5>
                      <?php echo $row['name'];?>
                    </h5>
                    <h6>
                      <?php echo $selectSpecillization['name'];?>
                    </h6>
                  </div>
                </div>
              </div>

          <?php } ?>
        </div>
      </div>
    </div>
  </section>

  <!-- end team section -->



  <!-- contact section -->
  <section class="contact_section layout_padding-bottom">
    
    <div class="container">
      <div class="heading_container">
        <br>
        <h2>
          Get In Touch
        </h2>
      </div>
      <div class="row">
        <div class="col-md-7">
          <div class="form_container">
            <form method="post">
              <div>
                <input type="text" placeholder="Full Name" name="fullName">
              </div>
              <div>
                <input type="email" placeholder="Email" name="email">
              </div>
              <div>
                <input type="text" placeholder="Phone Number" name="phoneNumber">
              </div>
              <div>
                <input type="text" class="message-box" placeholder="Message" name="message">
              </div>
              <div class="btn_box">
                <button name="send_btn">
                  SEND
                </button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-5">
          <div class="img-box">
            <img src="images/contact-img.jpg" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end contact section -->

  <!-- info section -->
  <section class="info_section ">
    <div class="container">
      <div class="info_top">
        <div class="info_logo">
          <a href="">
            <img src="images/st.png" alt="">
          </a>
        </div>
        <div class="info_form">
          <form action="">
            <input type="email" placeholder="Your email">
            <button>
              Subscribe
            </button>
          </form>
        </div>
      </div>
      <div class="info_bottom layout_padding2">
        <div class="row info_main_row">
          <div class="col-md-6 col-lg-3">
            <h5>
              Address
            </h5>
            <div class="info_contact">
              <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                  Location
                </span>
              </a>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  Call +01 1234567890
                </span>
              </a>
              <a href="">
                <i class="fa fa-envelope"></i>
                <span>
                  demo@gmail.com
                </span>
              </a>
            </div>
            <div class="social_box">
              <a href="">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="info_links">
              <h5>
                Useful link
              </h5>
              <div class="info_links_menu">
                <a class="active" href="index.php">
                  Home
                </a>
                <a href="about/index.php">
                  About
                </a>
                <a href="doctorIntro/index.php">
                  Doctors
                </a>
                <a href="appointment/index.php">
                  Appointment
                </a>
                <a href="contact/index.php">
                  Contact us
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="info_post">
              <h5>
                LATEST POSTS
              </h5>
              <div class="post_box">
                <div class="img-box">
                  <img src="images/post1.jpg" alt="">
                </div>
                <p>
                  Normal
                  distribution
                </p>
              </div>
              <div class="post_box">
                <div class="img-box">
                  <img src="images/post2.jpg" alt="">
                </div>
                <p>
                  Normal
                  distribution
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="info_post">
              <h5>
                News
              </h5>
              <div class="post_box">
                <div class="img-box">
                  <img src="images/post3.jpg" alt="">
                </div>
                <p>
                  Normal
                  distribution
                </p>
              </div>
              <div class="post_box">
                <div class="img-box">
                  <img src="images/post4.png" alt="">
                </div>
                <p>
                  Normal
                  distribution
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> 
  <!-- end info_section -->


  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <p>
        &copy; <span id="displayYear"></span> All Rights Reserved By
        <a href="https://html.design/">Free Html Templates</a>
      </p>
    </div>
  </footer> 
  <!-- footer section --> 

  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script> 
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- nice select -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js" integrity="sha256-Zr3vByTlMGQhvMfgkQ5BtWRSKBGa2QlspKYJnkjZTmo=" crossorigin="anonymous"></script>
  <!-- owl slider -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <!-- datepicker -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>
</body>
</html>
