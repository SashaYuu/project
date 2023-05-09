<!DOCTYPE html>
<html style="font-size: 16px;" lang="en">

<head>

  <html lang="en">

  <head>
    <title>About </title>
    <meta charset="UTF-8">
    <script src="https://kit.fontawesome.com/4563b32afa.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="mypage.css" type="text/css" />

    </style>
  </head>

<body>
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
            <li><a href="<?php echo $loggedIn ? '../mypagee/index.php' : '../../login/login.php'; ?>">
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




  <!--my skills section start===-->

  <section id="myskills">
    <div class="container">

      <div class="aboutHeadline">
        <h1>courses success rate </h1>
      </div>
      <div class="skills">
        <ul>

          <li class="html skillicon">
            <h3> python</h3><span class="skillpercent"> 90%</span>
          </li>
          <li class="css skillicon">
            <h3> HTML </h3> <span class="skillpercent"> 80%</span>
          </li>
          <li class="js skillicon">
            <h3> C++</h3> <span class="skillpercent"> 60%</span>
          </li>
        </ul>
      </div>

    </div>
  </section>



  <footer id="about-us">
    <div class="container">
      <h2 class="section-heading">About Us</h2>
      <p class="section-description">Our company was founded in 2011 by our CEO, Karrar. Today, our company is recognized globally, with branches all over the world. Our focus is on teaching people who want to start coding and may feel intimidated by it. We offer many courses in our boot camps or you can take them online.</p>
      <p class="section-description">All of our teachers graduated from Harvard University with a master's degree in coding. We are committed to ensuring that you learn coding in the best way possible with the best materials on the market. At our company, we believe that coding is the key to unlocking endless possibilities in today's digital world. That's why we offer a wide range of courses for all levels, from beginner to advanced. Our experienced instructors are dedicated to helping you master the art of coding and achieve your goals.</p>
      <p class="section-description">Technology is constantly evolving, and at our company, we stay ahead of the curve. Our courses are designed to teach you the latest coding languages and techniques, so you can keep up with the ever-changing landscape of the tech industry. Whether you're interested in web development, mobile app design, or software engineering, we've got you covered.</p>

      We understand that learning to code can be daunting, but our supportive and inclusive community is here to help. Our instructors are passionate about sharing their knowledge and empowering others to succeed. We also offer mentorship and networking opportunities to help you connect with like-minded individuals and build your professional network.

      All of our teachers graduated from Harvard University with a master's degree in coding. We are committed to ensuring that you learn coding in the best way possible with the best materials on the market. Our commitment to excellence extends beyond our courses. We are dedicated to providing the highest quality materials and resources to help you succeed. From our state-of-the-art learning management system to our comprehensive study guides, we make sure you have everything you need to achieve your coding goals. </p>
    </div>
  </footer>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="keywords" content="​Free Online Courses">
  <meta name="description" content="">
  <title>mypage</title>
  <link rel="stylesheet" href="nicepage.css" media="screen">
  <link rel="stylesheet" href="mypage.css" media="screen">
  <script class="u-script" type="text/javascript" src="jquery-1.9.1.min.js" defer=""></script>
  <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
  <meta name="generator" content="Nicepage 5.9.14, nicepage.com">
  <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">



  <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "Organization",
      "name": "",
      "logo": "images/default-logo.png"
    }
  </script>
  <meta name="theme-color" content="#e13690">
  <meta property="og:title" content="mypage">
  <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/">
  </head>

  </header>
  <section class="u-align-center u-clearfix u-section-1" id="sec-6757">
    <div class="u-clearfix u-sheet u-sheet-1">
      <h2 class="u-text u-text-default u-text-1">Our Bootcamp</h2>
      <div class="u-expanded-width u-gallery u-layout-grid u-lightbox u-show-text-on-hover u-gallery-1">
        <div class="u-gallery-inner u-gallery-inner-1">
          <div class="u-effect-fade u-gallery-item">
            <div class="u-back-slide" data-image-width="499" data-image-height="333">
              <img class="u-back-image u-expanded" src="images/1.jpg">
            </div>
            <div class="u-over-slide u-shading u-over-slide-1">
              <h3 class="u-gallery-heading"></h3>
              <p class="u-gallery-text"></p>
            </div>
          </div>
          <div class="u-effect-fade u-gallery-item">
            <div class="u-back-slide" data-image-width="609" data-image-height="406">
              <img class="u-back-image u-expanded" src="images/5.jpg">
            </div>
            <div class="u-over-slide u-shading u-over-slide-2">
              <h3 class="u-gallery-heading"></h3>
              <p class="u-gallery-text"></p>
            </div>
          </div>
          <div class="u-effect-fade u-gallery-item">
            <div class="u-back-slide" data-image-width="640" data-image-height="480">
              <img class="u-back-image u-expanded" src="images/4.jpg">
            </div>
            <div class="u-over-slide u-shading u-over-slide-3">
              <h3 class="u-gallery-heading"></h3>
              <p class="u-gallery-text"></p>
            </div>
          </div>
          <div class="u-effect-fade u-gallery-item">
            <div class="u-back-slide" data-image-width="1536" data-image-height="1152">
              <img class="u-back-image u-expanded" src="images/2.jpg">
            </div>
            <div class="u-over-slide u-shading u-over-slide-4">
              <h3 class="u-gallery-heading"></h3>
              <p class="u-gallery-text"></p>
            </div>
          </div>
          <div class="u-effect-fade u-gallery-item">
            <div class="u-back-slide" data-image-width="960" data-image-height="720">
              <img class="u-back-image u-expanded" src="images/3.jpg">
            </div>
            <div class="u-over-slide u-shading u-over-slide-5">
              <h3 class="u-gallery-heading"></h3>
              <p class="u-gallery-text"></p>
            </div>
          </div>
          <div class="u-effect-fade u-gallery-item">
            <div class="u-back-slide" data-image-width="1920" data-image-height="1296">
              <img class="u-back-image u-expanded" src="images/6.jpg">
            </div>
            <div class="u-over-slide u-shading u-over-slide-6">
              <h3 class="u-gallery-heading"></h3>
              <p class="u-gallery-text"></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="u-clearfix u-grey-5 u-section-2" id="sec-9194">
    <div class="u-clearfix u-sheet u-sheet-1">
      <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
        <div class="u-layout">
          <div class="u-layout-row">
            <div class="u-align-left u-container-style u-layout-cell u-left-cell u-size-30 u-layout-cell-1">
              <div class="u-container-layout u-valign-middle u-container-layout-1">
                <h2 class="u-text u-text-1">Our Ceo office&nbsp;</h2>
                <p class="u-text u-text-2">350 5th Ave, New York, NY 10118</p>
                <p class="u-text u-text-3">1 212-736-3100</p>
                <p class="u-text u-text-4">
                  <a href="mailto:Sumo@code.com">Sumo@Code.com</a>
                </p>
              </div>
            </div>
            <div class="u-container-style u-layout-cell u-right-cell u-size-30 u-layout-cell-2">
              <div class="u-container-layout u-container-layout-2">
                <div class="u-expanded u-grey-10 u-map">
                  <div class="embed-responsive">
                    <iframe class="embed-responsive-item" src="https://maps.google.com/maps?output=embed&amp;q=Manhattan&amp;t=m" data-map="JTdCJTIyYWRkcmVzcyUyMiUzQSUyMk1hbmhhdHRhbiUyMiUyQyUyMnpvb20lMjIlM0FudWxsJTJDJTIydHlwZUlkJTIyJTNBJTIycm9hZCUyMiUyQyUyMmxhbmclMjIlM0FudWxsJTJDJTIyYXBpS2V5JTIyJTNBbnVsbCUyQyUyMm1hcmtlcnMlMjIlM0ElNUIlNUQlN0Q="></iframe>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>




</body>

</html>