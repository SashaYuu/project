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
  <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather:300,300i,400,400i,700,700i,900,900i|Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">


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

<body data-home-page="https://website4832270.nicepage.io/Page-4.html?version=c572b508-b8a6-47f9-9aa8-435a5ed0aafd" data-home-page-title="Page 4" class="u-body u-xl-mode" data-lang="en">
  <section class="u-align-left u-clearfix u-gradient u-section-1" id="carousel_4384">
    <div class="u-clearfix u-sheet u-sheet-1">
      <div class="u-shape u-shape-svg u-text-custom-color-1 u-shape-1">
        <svg class="u-svg-link" preserveAspectRatio="none" viewBox="0 0 160 150" style="">
          <use xlink:href="#svg-4d96"></use>
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 160 150" x="0px" y="0px" id="svg-4d96">
          <path d="M43.2,126.9c14.2,1.3,27.6,7,39.1,15.6c8.3,6.1,19.4,10.3,32.7,5.3c11.7-4.4,18.6-17.4,21-30.2c2.6-13.3,8.1-25.9,15.7-37.1
	c8.3-12.1,10.8-27.9,5.3-42.7C150.5,20.3,134.6,9,117,7.6C107.9,6.9,98.8,5,90.1,1.9C83-0.6,75-0.7,67.4,2.1
	c-9.9,3.7-17,11.6-20.1,21c-3.3,10.1-10.9,18-20.6,22.2c-0.1,0-0.1,0.1-0.2,0.1c-20.3,8.9-31,32-24.6,53.2
	C6.9,115.6,25.2,125.2,43.2,126.9z"></path>
        </svg>
      </div>
      <div class="u-clearfix u-expanded-width u-gutter-32 u-layout-wrap u-layout-wrap-1">
        <div class="u-gutter-0 u-layout">
          <div class="u-layout-row">
            <div class="u-container-style u-layout-cell u-size-30 u-layout-cell-1">
              <div class="u-container-layout u-valign-top u-container-layout-1">
                <h1 class="u-text u-text-white u-title u-text-1">C++</h1>
                <p class="u-custom-font u-font-merriweather u-text u-text-palette-1-light-3 u-text-2"> C++ is a general-purpose programming language used to create high-performance applications, operating systems, device drivers, and other software. It is an extension of the C programming language and was developed in the early 1980s by Bjarne Stroustrup at Bell Labs. C++ is a powerful language that provides a wide range of features, including object-oriented programming, templates, and low-level memory manipulation. It is used in a variety of fields, including finance, gaming, and scientific research. C++ is a popular choice for developing large-scale, performance-c</p>
              </div>
            </div>
            <div class="u-align-right u-container-style u-layout-cell u-size-30 u-layout-cell-2">
              <div class="u-container-layout u-container-layout-2">
                <div class="u-expand-resize u-image u-image-circle u-image-1" data-image-width="1024" data-image-height="512"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="u-align-center u-clearfix u-section-2" id="carousel_8b71">
    <div class="u-clearfix u-sheet u-sheet-1">
      <h2 class="u-custom-font u-font-montserrat u-text u-text-custom-color-2 u-text-default u-text-1">About the course </h2>
      <div class="u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-list u-list-1">
        <div class="u-repeater u-repeater-1">
          <div class="u-align-left u-container-style u-list-item u-repeater-item u-shape-rectangle u-list-item-1" data-animation-name="customAnimationIn" data-animation-duration="1250">
            <div class="u-container-layout u-similar-container u-container-layout-1"><span class="u-custom-color-2 u-icon u-icon-rounded u-radius-20 u-text-white u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 60 60" style="">
                  <use xlink:href="#svg-6aaa"></use>
                </svg><svg class="u-svg-content" viewBox="0 0 60 60" x="0px" y="0px" id="svg-6aaa" style="enable-background:new 0 0 60 60;">
                  <g>
                    <path d="M42.595,0H17.405C14.977,0,13,1.977,13,4.405v51.189C13,58.023,14.977,60,17.405,60h25.189C45.023,60,47,58.023,47,55.595
		V4.405C47,1.977,45.023,0,42.595,0z M15,8h30v38H15V8z M17.405,2h25.189C43.921,2,45,3.079,45,4.405V6H15V4.405
		C15,3.079,16.079,2,17.405,2z M42.595,58H17.405C16.079,58,15,56.921,15,55.595V48h30v7.595C45,56.921,43.921,58,42.595,58z"></path>
                    <path d="M30,49c-2.206,0-4,1.794-4,4s1.794,4,4,4s4-1.794,4-4S32.206,49,30,49z M30,55c-1.103,0-2-0.897-2-2s0.897-2,2-2
		s2,0.897,2,2S31.103,55,30,55z"></path>
                    <path d="M26,5h4c0.553,0,1-0.447,1-1s-0.447-1-1-1h-4c-0.553,0-1,0.447-1,1S25.447,5,26,5z"></path>
                    <path d="M33,5h1c0.553,0,1-0.447,1-1s-0.447-1-1-1h-1c-0.553,0-1,0.447-1,1S32.447,5,33,5z"></path>
                    <path d="M56.612,4.569c-0.391-0.391-1.023-0.391-1.414,0s-0.391,1.023,0,1.414c3.736,3.736,3.736,9.815,0,13.552
		c-0.391,0.391-0.391,1.023,0,1.414c0.195,0.195,0.451,0.293,0.707,0.293s0.512-0.098,0.707-0.293
		C61.128,16.434,61.128,9.085,56.612,4.569z"></path>
                    <path d="M52.401,6.845c-0.391-0.391-1.023-0.391-1.414,0s-0.391,1.023,0,1.414c1.237,1.237,1.918,2.885,1.918,4.639
		s-0.681,3.401-1.918,4.638c-0.391,0.391-0.391,1.023,0,1.414c0.195,0.195,0.451,0.293,0.707,0.293s0.512-0.098,0.707-0.293
		c1.615-1.614,2.504-3.764,2.504-6.052S54.017,8.459,52.401,6.845z"></path>
                    <path d="M4.802,5.983c0.391-0.391,0.391-1.023,0-1.414s-1.023-0.391-1.414,0c-4.516,4.516-4.516,11.864,0,16.38
		c0.195,0.195,0.451,0.293,0.707,0.293s0.512-0.098,0.707-0.293c0.391-0.391,0.391-1.023,0-1.414
		C1.065,15.799,1.065,9.72,4.802,5.983z"></path>
                    <path d="M9.013,6.569c-0.391-0.391-1.023-0.391-1.414,0c-1.615,1.614-2.504,3.764-2.504,6.052s0.889,4.438,2.504,6.053
		c0.195,0.195,0.451,0.293,0.707,0.293s0.512-0.098,0.707-0.293c0.391-0.391,0.391-1.023,0-1.414
		c-1.237-1.237-1.918-2.885-1.918-4.639S7.775,9.22,9.013,7.983C9.403,7.593,9.403,6.96,9.013,6.569z"></path>
                  </g>
                </svg></span>
              <h3 class="u-custom-font u-font-montserrat u-text u-text-custom-color-1 u-text-default u-text-2" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500"> Learn from experienced instructors</h3>
              <p class="u-text u-text-3" data-animation-name="customAnimationIn" data-animation-duration="1750" data-animation-delay="500" data-animation-direction="Left">Our experienced instructors have a wealth of knowledge and expertise in C++ programming. They have crafted a comprehensive curriculum that covers all essential topics and provides a hands-on approach to learning.<br>
              </p>
            </div>
          </div>
          <div class="u-align-left u-container-style u-list-item u-repeater-item u-shape-rectangle u-list-item-2" data-animation-name="customAnimationIn" data-animation-duration="1250" data-animation-delay="0">
            <div class="u-container-layout u-similar-container u-container-layout-2"><span class="u-custom-color-2 u-icon u-icon-rounded u-radius-20 u-text-white u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 54 54" style="">
                  <use xlink:href="#svg-b8c9"></use>
                </svg><svg class="u-svg-content" viewBox="0 0 54 54" x="0px" y="0px" id="svg-b8c9" style="enable-background:new 0 0 54 54;">
                  <g>
                    <path d="M51.22,21h-5.052c-0.812,0-1.481-0.447-1.792-1.197s-0.153-1.54,0.42-2.114l3.572-3.571
		c0.525-0.525,0.814-1.224,0.814-1.966c0-0.743-0.289-1.441-0.814-1.967l-4.553-4.553c-1.05-1.05-2.881-1.052-3.933,0l-3.571,3.571
		c-0.574,0.573-1.366,0.733-2.114,0.421C33.447,9.313,33,8.644,33,7.832V2.78C33,1.247,31.753,0,30.22,0H23.78
		C22.247,0,21,1.247,21,2.78v5.052c0,0.812-0.447,1.481-1.197,1.792c-0.748,0.313-1.54,0.152-2.114-0.421l-3.571-3.571
		c-1.052-1.052-2.883-1.05-3.933,0l-4.553,4.553c-0.525,0.525-0.814,1.224-0.814,1.967c0,0.742,0.289,1.44,0.814,1.966l3.572,3.571
		c0.573,0.574,0.73,1.364,0.42,2.114S8.644,21,7.832,21H2.78C1.247,21,0,22.247,0,23.78v6.439C0,31.753,1.247,33,2.78,33h5.052
		c0.812,0,1.481,0.447,1.792,1.197s0.153,1.54-0.42,2.114l-3.572,3.571c-0.525,0.525-0.814,1.224-0.814,1.966
		c0,0.743,0.289,1.441,0.814,1.967l4.553,4.553c1.051,1.051,2.881,1.053,3.933,0l3.571-3.572c0.574-0.573,1.363-0.731,2.114-0.42
		c0.75,0.311,1.197,0.98,1.197,1.792v5.052c0,1.533,1.247,2.78,2.78,2.78h6.439c1.533,0,2.78-1.247,2.78-2.78v-5.052
		c0-0.812,0.447-1.481,1.197-1.792c0.751-0.312,1.54-0.153,2.114,0.42l3.571,3.572c1.052,1.052,2.883,1.05,3.933,0l4.553-4.553
		c0.525-0.525,0.814-1.224,0.814-1.967c0-0.742-0.289-1.44-0.814-1.966l-3.572-3.571c-0.573-0.574-0.73-1.364-0.42-2.114
		S45.356,33,46.168,33h5.052c1.533,0,2.78-1.247,2.78-2.78V23.78C54,22.247,52.753,21,51.22,21z M52,30.22
		C52,30.65,51.65,31,51.22,31h-5.052c-1.624,0-3.019,0.932-3.64,2.432c-0.622,1.5-0.295,3.146,0.854,4.294l3.572,3.571
		c0.305,0.305,0.305,0.8,0,1.104l-4.553,4.553c-0.304,0.304-0.799,0.306-1.104,0l-3.571-3.572c-1.149-1.149-2.794-1.474-4.294-0.854
		c-1.5,0.621-2.432,2.016-2.432,3.64v5.052C31,51.65,30.65,52,30.22,52H23.78C23.35,52,23,51.65,23,51.22v-5.052
		c0-1.624-0.932-3.019-2.432-3.64c-0.503-0.209-1.021-0.311-1.533-0.311c-1.014,0-1.997,0.4-2.761,1.164l-3.571,3.572
		c-0.306,0.306-0.801,0.304-1.104,0l-4.553-4.553c-0.305-0.305-0.305-0.8,0-1.104l3.572-3.571c1.148-1.148,1.476-2.794,0.854-4.294
		C10.851,31.932,9.456,31,7.832,31H2.78C2.35,31,2,30.65,2,30.22V23.78C2,23.35,2.35,23,2.78,23h5.052
		c1.624,0,3.019-0.932,3.64-2.432c0.622-1.5,0.295-3.146-0.854-4.294l-3.572-3.571c-0.305-0.305-0.305-0.8,0-1.104l4.553-4.553
		c0.304-0.305,0.799-0.305,1.104,0l3.571,3.571c1.147,1.147,2.792,1.476,4.294,0.854C22.068,10.851,23,9.456,23,7.832V2.78
		C23,2.35,23.35,2,23.78,2h6.439C30.65,2,31,2.35,31,2.78v5.052c0,1.624,0.932,3.019,2.432,3.64
		c1.502,0.622,3.146,0.294,4.294-0.854l3.571-3.571c0.306-0.305,0.801-0.305,1.104,0l4.553,4.553c0.305,0.305,0.305,0.8,0,1.104
		l-3.572,3.571c-1.148,1.148-1.476,2.794-0.854,4.294c0.621,1.5,2.016,2.432,3.64,2.432h5.052C51.65,23,52,23.35,52,23.78V30.22z"></path>
                    <path d="M27,18c-4.963,0-9,4.037-9,9s4.037,9,9,9s9-4.037,9-9S31.963,18,27,18z M27,34c-3.859,0-7-3.141-7-7s3.141-7,7-7
		s7,3.141,7,7S30.859,34,27,34z"></path>
                  </g>
                </svg></span>
              <h3 class="u-custom-font u-font-montserrat u-text u-text-custom-color-1 u-text-default u-text-4" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500"> Learn the fundamentals of programming</h3>
              <p class="u-text u-text-5" data-animation-name="customAnimationIn" data-animation-duration="1750" data-animation-delay="500" data-animation-direction="Left">C++ is a language that emphasizes the fundamentals of programming, including data structures, algorithms, and control structures. By mastering these concepts, you'll have a solid foundation for learning other programming languages in the future.<br>
              </p>
            </div>
          </div>
          <div class="u-align-left u-container-style u-list-item u-repeater-item u-shape-rectangle u-list-item-3" data-animation-name="customAnimationIn" data-animation-duration="1250">
            <div class="u-container-layout u-similar-container u-container-layout-3"><span class="u-custom-color-2 u-file-icon u-icon u-icon-rounded u-radius-20 u-icon-3"><img src="images/149302-20341f60.png" alt=""></span>
              <h3 class="u-custom-font u-font-montserrat u-text u-text-custom-color-1 u-text-default u-text-6" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500"> Receive personalized feedback</h3>
              <p class="u-text u-text-7" data-animation-name="customAnimationIn" data-animation-duration="1750" data-animation-direction="Left" data-animation-delay="500"> Our course includes personalized feedback from our experienced instructors, who can help you improve your coding skills and overcome any challenges you may face. This feedback can be invaluable in your journey to becoming a skilled C++ programmer.<br>
              </p>
            </div>
          </div>
        </div>
      </div>
      <p class="u-align-left u-custom-font u-font-montserrat u-text u-text-8">Our C++ course is designed for individuals who want to develop strong programming skills and advance their careers in software development. Whether you're a complete beginner or have some experience with programming, our course will provide you with a solid foundation in C++ and take you to advanced levels.Our course is comprehensive and easy to follow, with step-by-step instructions that guide you through each lesson. You'll learn everything from the basics of C++ syntax to more advanced topics like object-oriented programming, memory management, and exception handling.Our experienced instructors have crafted a curriculum that covers all essential topics and provides a hands-on approach to learning. You'll work on real-world projects that reinforce your skills and prepare you for a career in software development.By the end of our C++ course, you'll have the knowledge and experience to develop robust, high-performance applications using one of the most powerful programming languages in the industry.</p>
    </div>
  </section>
  <section class="u-clearfix u-section-3" id="sec-fcc3">
    <div class="u-clearfix u-sheet u-sheet-1">
      <h1 class="u-text u-text-default u-text-1">Our Team</h1>
      <div class="u-expanded-width u-list u-list-1">
        <div class="u-repeater u-repeater-1">
          <div class="u-align-center u-container-style u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-valign-bottom u-container-layout-1">
              <div alt="" class="u-image u-image-circle u-image-1" src="" data-image-width="3888" data-image-height="5833"></div>
              <h5 class="u-text u-text-2">Emma Watson</h5>
              <p class="u-text u-text-3"> Software Engineer</p>
            </div>
          </div>
          <div class="u-align-center u-container-style u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-valign-bottom u-container-layout-2">
              <div alt="" class="u-image u-image-circle u-image-2" src="" data-image-width="3149" data-image-height="4724"></div>
              <h5 class="u-text u-text-4">Roger Antonio</h5>
              <p class="u-text u-text-5"> Systems Programmer</p>
            </div>
          </div>
          <div class="u-align-center u-container-style u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-valign-bottom u-container-layout-3">
              <div alt="" class="u-image u-image-circle u-image-3" src="" data-image-width="3813" data-image-height="2975"></div>
              <h5 class="u-text u-text-6">Anna Raily</h5>
              <p class="u-text u-text-7"> Embedded Systems Developer</p>
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