<!DOCTYPE html>
<html lang="en">

<head>
  <title>course </title>
  <meta charset="UTF-8">

  <script src="https://kit.fontawesome.com/4563b32afa.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../css/page.css" type="text/css" />
</head>

<body>
  <header id="primaryMenu">

    <div class="primaryWrapper">


      <div class="menu">
        <div class="mainMenuItems">
          <ul>
            <li><a href="../index.php">HOME</a></li>
            <li><a href="moreabout.php">ABOUT</a></li>
            <li><a href="course.php"> COURSE </a> </li>
            <li><a href="../service.php">SERVICES</a></li>
            <li><a href="../contact.php">CONTACT</a></li>
            <?php
            session_start();

            // Check if the user is logged in
            if (isset($_SESSION['username'])) {
              // Query the database to check if the user is valid
              // Replace "your_db_name", "your_db_username", "your_db_password", and "your_table_name" with your actual values
              $conn = mysqli_connect("localhost", "root", "", "forum");
              $username = $_SESSION['username'];
              $query = "SELECT * FROM forumm WHERE username='$username'";
              $result = mysqli_query($conn, $query);

              // If there is a result, the user is valid and logged in
              if (mysqli_num_rows($result) > 0) {
                $loggedIn = true;
              } else {
                $loggedIn = false;
              }
            } else {
              $loggedIn = false;
            }
            ?>
            <li><a href="<?php echo $loggedIn ? 'mypage.php' : 'login/login.php'; ?>">
                <?php echo $loggedIn ? 'MYPAGE' : 'LOGIN'; ?>
              </a></li>









          </ul>
        </div>
        <div class="container">
          <div class="brandName"> <a href="index.php">
              <p><span>S</span>UMO</p>
            </a></div>

        </div>
      </div>

    </div>

  </header>

  <!-- header section end=====-->



  <!-- course details section start=====-->
  <section id="courseDetails">
    <div class="container">
      <div class="secTitle">
        <h2> OUR COURSE </h2>
      </div>
      <div class="courseDetailsWrapper">
        <div class="singleCourseDetails">
          <div class="courseImg">
            <img src="../images/courseimages/course-1.jpg" alt="sami" />
            <div class="courseTitle">
              <h3> Python Course </h3>
              <p>This Python Programming Course is designed to provide you with a complete understanding of Python programming language, covering everything from the basics of Python syntax to the advanced concepts of software development. </p>
              <div class="courseReadMoreBtn"><a href="../courses/python/index.php"> Read More </a> </div>
            </div>

          </div>
        </div>



        <div class=" singleCourseDetails">
          <div class="courseImg">
            <img src="../images/courseimages/course-2.jpg" alt="sami" />
            <div class="courseTitle">
              <h3> HTML Course </h3>
              <p>n this course, you will learn how to write efficient and professional HTML code for creating dynamic and responsive websites. Our course is designed to provide you with practical knowledge and hands-on experience in HTML, covering all the essential programming concepts and syntax.</p>
              <div class="courseReadMoreBtn"><a href="../courses/html/index.php"> Read More </a> </div>
            </div>

          </div>
        </div>




        <div class="singleCourseDetails">
          <div class="courseImg">
            <img src="../images/courseimages/course-3.jpg" alt="sami" />
            <div class="courseTitle">
              <h3> C++ Course </h3>
              <p>In this course, you will learn how to write efficient and robust C++ code for developing high-performance applications. Our course is designed to provide you with practical knowledge and hands-on experience in C++, covering all the essential programming concepts and syntax.</p>
              <div class="courseReadMoreBtn"><a href="../courses/Cplus/index.php"> Read More </a> </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>



  <!-- course details section end=====-->


  <!-- our course Teacher section start=====-->
  <section id="courseTeacher">
    <div class="container">
      <div class="secTitle">
        <h2>OUR TEAM </h2>
      </div>

      <div class="teachers">
        <div class="singleTeacher">
          <div class="teacherImg">
            <img src="../images/courseimages/teacher-1.jpg" alt="teacher image" />
            <div class="teacherSocialIcons">
              <a href="#"><i class="fa fa-facebook"> </i> </a>
              <a href="#"><i class="fa fa-twitter"> </i> </a>
              <a href="#"><i class="fa fa-google-plus"> </i> </a>
              <a href="#"><i class="fa fa-linkedin"> </i> </a>
            </div>

          </div>

          <div class="teacherInfo">
            <h2>Anna Watson</h2>
            <p>MIT graduate in web development.</p>
          </div>
        </div>



        <div class="singleTeacher">
          <div class="teacherImg">
            <img src="../images/courseimages/teacher-2.jpg" alt="teacher image" />
            <div class="teacherSocialIcons">
              <a href="#"><i class="fa fa-facebook"> </i> </a>
              <a href="#"><i class="fa fa-twitter"> </i> </a>
              <a href="#"><i class="fa fa-google-plus"> </i> </a>
              <a href="#"><i class="fa fa-linkedin"> </i> </a>
            </div>
          </div>

          <div class="teacherInfo">
            <h2> Max Debba</h2>
            <p>Harvard graduate in app development.</p>
          </div>
        </div>



        <div class="singleTeacher">
          <div class="teacherImg">
            <img src="../images/courseimages/teacher-3.jpg" alt="teacher image" />
            <div class="teacherSocialIcons">
              <a href="#"><i class="fa fa-facebook"> </i> </a>
              <a href="#"><i class="fa fa-twitter"> </i> </a>
              <a href="#"><i class="fa fa-google-plus"> </i> </a>
              <a href="#"><i class="fa fa-linkedin"> </i> </a>
            </div>
          </div>

          <div class="teacherInfo">
            <h2>Sasha Auvi</h2>
            <p> Harvard graduate in game development.</p>
          </div>

        </div>




        <div class="singleTeacher">
          <div class="teacherImg">
            <img src="../images/courseimages/teacher-4.jpg" alt="teacher image" />
            <div class="teacherSocialIcons">
              <a href="#"><i class="fa fa-facebook"> </i> </a>
              <a href="#"><i class="fa fa-twitter"> </i> </a>
              <a href="#"><i class="fa fa-google-plus"> </i> </a>
              <a href="#"><i class="fa fa-linkedin"> </i> </a>
            </div>
          </div>

          <div class="teacherInfo">
            <h2> Jenna Waterson </h2>
            <p>KTH graduate in web development.</p>
          </div>

        </div>







      </div>

    </div>
  </section>



  <!-- our course Teacher section end=====-->














  <!-- course price section start===-->

  <section id="pricingPlan">
    <div class="container">
      <div class="secTitle">
        <h2> Pricing Plan </h2>
      </div>

      <div class="price">
        <div class="priceWrapper">

          <div class="singlePrice">
            <div class="priceDetails">
              <h3>Python</h3>
              <h2> $60 <span> /m (36mon) </span></h2>
              <ul>
                <li><i class="fas fa-check"></i> Basic knowledge </li>
                <li><i class="fas fa-check"></i>Algorithm </li>
                <li><i class="fas fa-check"></i>Data structure </li>
                <li><i class="fas fa-check"></i>Design </li>
                <li><i class="fas fa-check"></i>API </li>

              </ul>
            </div>
            <div class="courseStartBtn">
              <a href="courseform.html">
                <button> GET STARTED </button>
              </a>
            </div>
          </div>



          <div class="singlePrice">
            <div class="priceDetails">
              <h3> Html </h3>
              <h2> $53 <span> /m (36mon) </span> </h2>
              <ul>
                <li><i class="fas fa-check"></i>Basic knowledge </li>
                <li><i class="fas fa-check"></i> UI and UX knowledge </li>
                <li><i class="fas fa-check"></i>SQL and PHP </li>
                <li><i class="fas fa-check"></i>Basic of SEO </li>
                <li><i class="fas fa-check"></i>Basic WordPress </li>

              </ul>
            </div>
            <div class="courseStartBtn">
              <a href="courseform.html"><button> GET STARTED </button></a>
            </div>
          </div>


          <div class="singlePrice">
            <div class="priceDetails">
              <h3> C++ </h3>
              <h2> $85 <span> /m (36mon) </span> </h2>
              <ul>
                <li><i class="fas fa-check"></i>Unity UI engine knowledge </li>
                <li><i class="fas fa-check"></i>Game physics </li>
                <li><i class="fas fa-check"></i>Level Creation </li>
                <li><i class="fas fa-check"></i>AI</li>
                <li><i class="fas fa-check"></i>multiplayer networking </li>


              </ul>
            </div>
            <div class="courseStartBtn">
              <a href="courseform.html"><button> GET STARTED </button></a>
            </div>
          </div>

        </div>
      </div>

    </div>
  </section>

  <!-- course price section end===-->

  <section id="0">
    <div class="container"> </div>
  </section>




  <!-- footer section start==== -->

  <footer id="mainfooter">
    <section class="footer">
      <div class="container">
        <div class="brandNameFooter">
          <a href="../index.html">
            <p><span>S</span>UMO</p>
          </a>
          <p> SumoCoder@gmail.com </p>
        </div>

        <div class="footerContent">
          <div class="footerContentWrapper">
            <div class="fbox">
              <div class="fboxDetails">
                <p>Karrar al-agele</p>

                <div class="fsocialLinks">
                  <a href="#"><i class="fa fa-facebook"> </i> </a>
                  <a href="#"><i class="fa fa-twitter"> </i> </a>
                  <a href="#"><i class="fa fa-google-plus"> </i> </a>
                  <a href="#"><i class="fa fa-linkedin"> </i> </a>

                </div>

              </div>
            </div>

            <div class="fbox">
              <div class="fboxLinks">
                <h2>USEFULLINKS </h2>
                <ul>
                  <li> <a href="../index.html"> Home </a> </li>
                  <li> <a href="moreabout.html"> About </a> </li>
                  <li> <a href="course.html"> Course </a> </li>
                  <li> <a href="../service.html"> Services </a> </li>

                </ul>
              </div>
            </div>

          </div>

        </div>


        <div class="copyright">
          <div class="copyrightbox">
            <div class="copyrightMeta">
              <p> &copy;Copyright All reserved by Huddinge 2022</p>
            </div>

          </div>

          <div class="copyrightbox">
            <ul class="copyrightlinks">
              <li> <a href="#">FAQS </a> </li>
              <li> <a href="#">privacy </a> </li>
              <li> <a href="#">cookies </a> </li>

            </ul>

          </div>

        </div>




      </div>
    </section>
  </footer>

  <!-- footer section end===== -->
</body>

</html>