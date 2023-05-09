<!DOCTYPE html>
<html style="font-size: 16px;" lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="keywords" content="​Free Online Courses">
  <meta name="description" content="">
  <title>Page 4</title>
  <link rel="stylesheet" href="nicepage.css" media="screen">
  <link rel="stylesheet" href="Page-4.css" media="screen">
  <link rel="stylesheet" type="text/css" href="../../css/courses.css">

  <script class="u-script" type="text/javascript" src="jquery-1.9.1.min.js" defer=""></script>
  <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
  <meta name="generator" content="Nicepage 5.9.14, nicepage.com">
  <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
  <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">

  <header id="primaryMenu">

    <div class="primaryWrapper">


      <div class="menu">
        <div class="mainMenuItems">
          <ul>
            <li><a href="../../index.php">HOME</a></li>
            <li><a href="../../page/moreabout.php">ABOUT</a></li>
            <li><a href="../../page/course.php"> COURSE </a> </li>
            <li><a href="../../service.php">SERVICES</a></li>
            <li><a href="../../contact.php">CONTACT</a></li>
            <li><a href="../../page/uppgift.php">UPPGIFT</a></li>
            <li><a href="../../contacts/index.php">CONTACTSS</a></li>

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
            <li><a href="<?php echo $loggedIn ? 'page/mypage.php' : 'login/login.php'; ?>">
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




  <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "Organization",
      "name": ""
    }
  </script>
  <meta name="theme-color" content="#e13690">
  <meta property="og:title" content="Page 4">
  <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/">
</head>

<body data-home-page="https://website4832270.nicepage.io/Page-4.html?version=a1491b40-7b89-4089-ae23-66d7698ae3e1" data-home-page-title="Page 4" class="u-body u-xl-mode" data-lang="en">
  <section class="u-align-center u-clearfix u-image u-section-1" id="carousel_72fa" data-image-width="1980" data-image-height="1320">
    <div class="u-clearfix u-expanded-width u-gutter-0 u-layout-wrap u-layout-wrap-1">
      <div class="u-layout">
        <div class="u-layout-row">
          <div class="u-align-left u-container-style u-layout-cell u-shape-rectangle u-size-23-lg u-size-23-xl u-size-60-md u-size-60-sm u-size-60-xs u-layout-cell-1" data-animation-name="customAnimationIn" data-animation-duration="1500">
            <div class="u-container-layout u-valign-top u-container-layout-1">
              <div class="u-container-style u-group u-palette-3-base u-group-1">
                <div class="u-container-layout u-valign-middle u-container-layout-2">
                  <h2 class="u-custom-font u-font-montserrat u-text u-text-default u-text-1">HTML</h2>
                </div>
              </div>

              <h6 class="u-align-left u-custom-font u-font-arial u-text u-text-body-alt-color u-text-2"> HTML is a markup language that is used to create the structure and content of web pages. It allows web developers to add text, images, videos, and other types of content to web pages, and to format that content in a way that makes it easy for users to read and navigate.One of the key benefits of HTML is its simplicity.&nbsp;<br>
                <br>The language is easy to learn and use, even for those who are new to web development. By using HTML tags to define the structure and content of a web page, developers can create complex layouts and designs without needing to know complex programming languages
              </h6>
              <div class="courseStartBtn">
                <a href="../../page/courseform.php">
                  <button> Apply for course </button>
                </a>
              </div>
            </div>
          </div>

          <div class="u-align-left u-container-style u-image u-layout-cell u-size-37-lg u-size-37-xl u-size-60-md u-size-60-sm u-size-60-xs u-image-1" data-animation-name="customAnimationIn" data-animation-duration="1750" data-animation-delay="750" data-image-width="1000" data-image-height="439">
            <div class="u-container-layout u-container-layout-3"></div>

          </div>

        </div>
      </div>
    </div>
  </section>
  <section class="u-clearfix u-section-2" id="sec-7965">
    <div class="u-clearfix u-sheet u-sheet-1">
      <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
        <div class="u-layout">
          <div class="u-layout-row">
            <div class="u-container-style u-layout-cell u-size-60 u-layout-cell-1">
              <div class="u-container-layout u-container-layout-1">
                <h1 class="u-align-center u-custom-font u-font-arial u-text u-text-default u-title u-text-1">why our course ​ stands out from the competition in several critical aspects</h1>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="u-expanded-width u-list u-list-1">
        <div class="u-repeater u-repeater-1">
          <div class="u-align-center u-container-style u-list-item u-radius-20 u-repeater-item u-shape-round u-white u-list-item-1">
            <div class="u-container-layout u-similar-container u-container-layout-2"><span class="u-file-icon u-icon u-icon-circle u-palette-1-base u-text-white u-icon-1"><img src="images/126122-4dd55277.png" alt=""></span>
              <h4 class="u-custom-font u-font-montserrat u-text u-text-palette-5-dark-2 u-text-2"> Hands-on experience<br>
                <br>&nbsp;Our course is designed to be hands-on, so you'll have plenty of opportunities to practice your skills and apply what you've learned. You'll work on real-world projects and build a portfolio of web pages that demonstrate your proficiency in HTML.
              </h4>
            </div>
          </div>
          <div class="u-align-center u-container-style u-list-item u-radius-20 u-repeater-item u-shape-round u-white u-list-item-2">
            <div class="u-container-layout u-similar-container u-container-layout-3"><span class="u-file-icon u-icon u-icon-circle u-palette-1-base u-text-white u-icon-2"><img src="images/3144456-19ded0de.png" alt=""></span>
              <h4 class="u-custom-font u-font-montserrat u-text u-text-palette-5-dark-2 u-text-3"> Flexibility<br>
                <br>&nbsp;Our course is flexible and can be tailored to meet your needs. You can choose to take the course at your own pace or follow a structured schedule. We also offer different levels of difficulty, so you can start with the basics and progress to more advanced topics at your own pace.
              </h4>
            </div>
          </div>
          <div class="u-align-center u-container-style u-list-item u-radius-20 u-repeater-item u-shape-round u-white u-list-item-3">
            <div class="u-container-layout u-similar-container u-container-layout-4"><span class="u-file-icon u-icon u-icon-circle u-palette-1-base u-text-white u-icon-3"><img src="images/2282272-24b2dac0.png" alt=""></span>
              <h4 class="u-custom-font u-font-montserrat u-text u-text-palette-5-dark-2 u-text-4"> Experienced instructors<br>
                <br>&nbsp;Our instructors are experienced web developers who have years of experience working with HTML. They are passionate about teaching and are dedicated to helping you succeed.
              </h4>
            </div>
          </div>
          <div class="u-align-center u-container-style u-list-item u-radius-20 u-repeater-item u-shape-round u-white u-list-item-4">
            <div class="u-container-layout u-similar-container u-container-layout-5"><span class="u-file-icon u-icon u-icon-circle u-palette-1-base u-text-white u-icon-4"><img src="images/171561-ea472ef2.png" alt=""></span>
              <h4 class="u-custom-font u-font-montserrat u-text u-text-palette-5-dark-2 u-text-5"> Community<br>
                <br>When you enroll in our course, you'll become part of a community of learners who are all working toward the same goal. You'll have access to forums and other resources where you can connect with other students, ask questions, and share your work.
              </h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="u-clearfix u-section-3" id="sec-fcc3">
    <div class="u-clearfix u-sheet u-sheet-1">
      <h1 class="u-text u-text-default u-text-1">Our Team</h1>
      <div class="u-expanded-width u-list u-list-1">
        <div class="u-repeater u-repeater-1">
          <div class="u-align-center u-container-style u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-valign-bottom u-container-layout-1">
              <div alt="" class="u-image u-image-circle u-image-1" src="" data-image-width="2363" data-image-height="3992"></div>
              <h5 class="u-text u-text-2">Jack Alvarez</h5>
              <p class="u-text u-text-3"> Front-end developer</p>
            </div>
          </div>
          <div class="u-align-center u-container-style u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-valign-bottom u-container-layout-2">
              <div alt="" class="u-image u-image-circle u-image-2" src="" data-image-width="3569" data-image-height="5354"></div>
              <h5 class="u-text u-text-4">Nat Reynolds</h5>
              <p class="u-text u-text-5"> Web designer</p>
            </div>
          </div>
          <div class="u-align-center u-container-style u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-valign-bottom u-container-layout-3">
              <div alt="" class="u-image u-image-circle u-image-3" src="" data-image-width="3744" data-image-height="5616"></div>
              <h5 class="u-text u-text-6">Betty Nilson</h5>
              <p class="u-text u-text-7"> UX/UI designer</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>



  <section class="u-backlink u-clearfix u-grey-80">
    <a class="u-link" href="https://nicepage.com/html-templates" target="_blank">
      <span>Free HTML Templates</span>
    </a>
    <p class="u-text">
      <span>created with</span>
    </p>
    <a class="u-link" href="" target="_blank">
      <span>Website Builder Software</span>
    </a>.
  </section>

</body>

</html>