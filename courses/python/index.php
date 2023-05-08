<!DOCTYPE html>
<html style="font-size: 16px;" lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="keywords" content="​Free Online Courses">
  <meta name="description" content="">
  <title>Page 4</title>
  <link rel="stylesheet" href="nicepage.css" media="screen">
  <link rel="stylesheet" type="text/css" href="../../css/courses.css">
  <link rel="stylesheet" href="Page-4.css" media="screen">
  <script class="u-script" type="text/javascript" src="jquery-1.9.1.min.js" defer=""></script>
  <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
  <meta name="generator" content="Nicepage 5.9.14, nicepage.com">
  <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
  <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather:300,300i,400,400i,700,700i,900,900i">


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

<body data-home-page="https://website4832270.nicepage.io/Page-4.html?version=8601cf77-e596-41d1-bfe9-933b4871c71b" data-home-page-title="Page 4" class="u-body u-xl-mode" data-lang="en">
  <section class="u-align-center u-clearfix u-image u-shading u-section-1" src="" data-image-width="1920" data-image-height="1080" id="sec-c18f">
    <div class="u-clearfix u-sheet u-sheet-1">
      <h1 class="u-text u-text-default u-title u-text-1">Python</h1>
      <p class="u-large-text u-text u-text-default u-text-variant u-text-2"> Python is a high-level, interpreted programming language that is used for a wide range of purposes such as web development, scientific computing, data analysis, artificial intelligence, and more. It was first released in 1991 and has since become one of the most popular programming languages in the world, thanks to its simplicity, versatility, and ease of use. Python emphasizes code readability and simplicity, making it a great choice for beginners who are just starting to learn programming. It uses indentation to mark blocks of code, instead of relying on curly braces or other syntax, which makes it easy to read and write.</p>
    </div>
  </section>
  <section class="u-clearfix u-section-2" id="sec-7965">
    <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
      <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
        <div class="u-layout">
          <div class="u-layout-row">
            <div class="u-container-style u-layout-cell u-size-10 u-layout-cell-1">
              <div class="u-container-layout u-container-layout-1"><span class="u-icon u-icon-circle u-palette-2-light-1 u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 512.002 512.002" style="">
                    <use xlink:href="#svg-aaf9"></use>
                  </svg><svg class="u-svg-content" viewBox="0 0 512.002 512.002" x="0px" y="0px" id="svg-aaf9" style="enable-background:new 0 0 512.002 512.002;">
                    <g>
                      <g>
                        <path d="M512.001,255.969c-0.011-5.193-2.708-10.011-7.129-12.737l-52.034-32.076l52.089-32.421    c4.393-2.734,7.066-7.539,7.074-12.712c0.008-5.174-2.651-9.987-7.036-12.734l-241-151c-4.871-3.052-11.058-3.052-15.929,0    l-241,151c-4.384,2.747-7.043,7.56-7.036,12.734c0.008,5.174,2.681,9.979,7.074,12.712l51.732,32.198L7.051,243.282    c-4.39,2.744-7.055,7.557-7.05,12.734c0.005,5.177,2.679,9.985,7.074,12.721l51.732,32.198L7.051,333.282    c-4.383,2.74-7.047,7.543-7.05,12.712s2.656,9.975,7.036,12.719l241,151c2.436,1.526,5.2,2.289,7.964,2.289    c2.764,0,5.529-0.763,7.964-2.289l241-151c4.394-2.753,7.055-7.581,7.036-12.766c-0.019-5.185-2.715-9.993-7.129-12.714    l-52.034-32.076l52.089-32.421C509.336,265.992,512.012,261.162,512.001,255.969z M43.32,165.96L256.001,32.703L468.682,165.96    c-2.044,1.272-206.586,128.58-212.681,132.374L43.32,165.96z M468.584,346.106L256.001,479.301L43.278,346.018l43.889-27.431    l160.908,100.15c2.426,1.51,5.176,2.265,7.926,2.265c2.75,0,5.5-0.755,7.926-2.265l160.464-99.874L468.584,346.106z     M256.001,388.334L43.345,255.976l43.822-27.389l160.908,100.15c2.426,1.51,5.176,2.265,7.926,2.265c2.75,0,5.5-0.755,7.926-2.265    l160.464-99.874l44.125,27.2C467.297,256.822,261.631,384.829,256.001,388.334z"></path>
                      </g>
                    </g>
                  </svg>


                </span><span class="u-icon u-icon-circle u-palette-2-light-1 u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 512 512" style="">
                    <use xlink:href="#svg-dee4"></use>
                  </svg><svg class="u-svg-content" viewBox="0 0 512 512" x="0px" y="0px" id="svg-dee4" style="enable-background:new 0 0 512 512;">
                    <g>
                      <g>
                        <path d="M256,0C144.702,0,54.154,90.547,54.154,201.846c0,69.363,35.172,130.662,88.615,167.011v128.373    c0,5.012,2.541,9.682,6.75,12.402c4.207,2.721,9.509,3.121,14.08,1.066L256,469.119l92.401,41.58c1.935,0.87,4,1.301,6.059,1.301    c2.804,0,5.594-0.798,8.021-2.367c4.208-2.721,6.75-7.391,6.75-12.402V368.858c53.443-36.349,88.615-97.648,88.615-167.011    C457.846,90.547,367.298,0,256,0z M339.692,474.39l-77.632-34.934c-1.927-0.868-3.994-1.302-6.06-1.302s-4.133,0.433-6.06,1.301    l-77.632,34.934v-88.835c7.423,3.384,15.042,6.292,22.805,8.745c0.44,0.14,0.879,0.283,1.321,0.419    c0.991,0.305,1.985,0.599,2.98,0.888c0.737,0.216,1.474,0.43,2.213,0.638c0.803,0.224,1.609,0.441,2.415,0.655    c0.94,0.251,1.882,0.496,2.827,0.734c0.668,0.167,1.337,0.331,2.007,0.49c1.087,0.261,2.177,0.513,3.271,0.756    c0.567,0.126,1.135,0.251,1.703,0.372c1.198,0.256,2.4,0.498,3.607,0.733c0.491,0.095,0.982,0.192,1.474,0.284    c1.278,0.238,2.561,0.461,3.847,0.675c0.441,0.074,0.882,0.15,1.324,0.22c1.327,0.212,2.66,0.407,3.997,0.592    c0.414,0.057,0.827,0.119,1.241,0.174c1.353,0.179,2.712,0.34,4.072,0.492c0.406,0.045,0.81,0.096,1.216,0.14    c1.357,0.144,2.719,0.267,4.084,0.383c0.414,0.035,0.826,0.078,1.241,0.11c1.345,0.106,2.696,0.191,4.049,0.271    c0.434,0.026,0.866,0.06,1.302,0.083c1.367,0.072,2.739,0.121,4.113,0.165c0.414,0.014,0.825,0.036,1.239,0.047    c1.776,0.046,3.558,0.072,5.346,0.072c1.787,0,3.569-0.026,5.345-0.072c0.414-0.011,0.825-0.033,1.239-0.047    c1.374-0.044,2.746-0.094,4.113-0.165c0.434-0.023,0.867-0.057,1.302-0.083c1.353-0.08,2.704-0.164,4.049-0.271    c0.415-0.032,0.827-0.075,1.241-0.11c1.365-0.116,2.727-0.24,4.084-0.383c0.406-0.043,0.81-0.094,1.216-0.14    c1.361-0.153,2.719-0.313,4.072-0.492c0.415-0.055,0.827-0.116,1.241-0.174c1.336-0.185,2.669-0.38,3.997-0.592    c0.442-0.071,0.882-0.147,1.324-0.22c1.286-0.214,2.569-0.437,3.847-0.675c0.492-0.092,0.983-0.188,1.474-0.284    c1.206-0.234,2.408-0.478,3.607-0.733c0.569-0.121,1.136-0.246,1.703-0.372c1.094-0.243,2.184-0.495,3.271-0.756    c0.669-0.16,1.338-0.324,2.007-0.49c0.945-0.237,1.886-0.482,2.827-0.734c0.806-0.215,1.612-0.43,2.415-0.655    c0.739-0.208,1.477-0.422,2.213-0.638c0.995-0.29,1.99-0.583,2.98-0.888c0.442-0.137,0.881-0.28,1.321-0.419    c7.763-2.453,15.382-5.36,22.805-8.744V474.39z M312.229,364.724c-0.589,0.203-1.178,0.407-1.769,0.604    c-0.898,0.3-1.8,0.595-2.705,0.88c-1.053,0.331-2.109,0.65-3.168,0.96c-0.747,0.22-1.495,0.439-2.246,0.649    c-1.401,0.391-2.807,0.765-4.218,1.12c-0.526,0.133-1.054,0.259-1.581,0.387c-1.381,0.334-2.768,0.652-4.158,0.952    c-0.35,0.076-0.697,0.156-1.047,0.228c-1.794,0.375-3.594,0.724-5.401,1.041c-0.184,0.032-0.369,0.06-0.554,0.093    c-1.628,0.281-3.261,0.536-4.897,0.769c-0.369,0.053-0.738,0.105-1.109,0.156c-1.745,0.237-3.493,0.455-5.247,0.639    c-0.066,0.007-0.132,0.016-0.198,0.023c-1.836,0.191-3.679,0.348-5.524,0.479c-0.4,0.029-0.802,0.05-1.203,0.077    c-1.435,0.093-2.87,0.166-4.309,0.224c-0.489,0.02-0.978,0.04-1.467,0.056c-1.807,0.055-3.616,0.093-5.428,0.093    s-3.621-0.037-5.428-0.095c-0.49-0.015-0.979-0.036-1.467-0.056c-1.439-0.057-2.874-0.131-4.309-0.224    c-0.401-0.026-0.802-0.048-1.203-0.077c-1.845-0.132-3.687-0.289-5.524-0.479c-0.066-0.007-0.132-0.016-0.198-0.023    c-1.754-0.184-3.502-0.402-5.247-0.639c-0.369-0.05-0.738-0.102-1.108-0.156c-1.637-0.234-3.27-0.488-4.898-0.769    c-0.184-0.031-0.369-0.06-0.554-0.093c-1.807-0.317-3.608-0.667-5.401-1.041c-0.349-0.073-0.697-0.154-1.047-0.228    c-1.39-0.299-2.777-0.618-4.158-0.952c-0.528-0.128-1.056-0.254-1.581-0.387c-1.411-0.354-2.817-0.73-4.218-1.12    c-0.751-0.21-1.499-0.429-2.246-0.649c-1.058-0.311-2.115-0.629-3.169-0.96c-0.905-0.286-1.806-0.58-2.705-0.88    c-0.592-0.197-1.181-0.401-1.769-0.604c-67.484-23.361-116.078-87.547-116.078-162.876c0-95.01,77.297-172.308,172.308-172.308    s172.308,77.297,172.308,172.308C428.308,277.175,379.713,341.361,312.229,364.724z"></path>
                      </g>
                    </g>
                    <g>
                      <g>
                        <path d="M343.622,201.846l27.741-52.14c2.394-4.497,2.299-9.91-0.248-14.321c-2.547-4.411-7.188-7.2-12.279-7.376l-59.025-2.045    L268.527,75.87c-2.699-4.32-7.433-6.946-12.527-6.946s-9.828,2.626-12.527,6.946l-31.283,50.094l-59.025,2.045    c-5.091,0.176-9.732,2.965-12.279,7.376s-2.642,9.824-0.248,14.321l27.741,52.14l-27.741,52.14    c-2.394,4.497-2.299,9.91,0.248,14.321c2.547,4.411,7.188,7.2,12.279,7.376l59.025,2.045l31.283,50.094    c2.698,4.32,7.433,6.946,12.527,6.946s9.828-2.626,12.527-6.946l31.283-50.094l59.025-2.045c5.091-0.176,9.732-2.965,12.279-7.376    c2.547-4.411,2.642-9.824,0.248-14.321L343.622,201.846z M290.935,248.479c-4.909,0.17-9.414,2.771-12.015,6.938L256,292.118    l-22.919-36.7c-2.602-4.167-7.106-6.767-12.015-6.938l-43.242-1.499l20.323-38.198c2.308-4.337,2.308-9.537,0-13.874    l-20.323-38.198l43.242-1.499c4.909-0.17,9.414-2.771,12.015-6.938L256,111.575l22.919,36.7c2.602,4.167,7.106,6.767,12.015,6.938    l43.242,1.499l-20.323,38.198c-2.307,4.337-2.307,9.538,0.001,13.874l20.323,38.198L290.935,248.479z"></path>
                      </g>
                    </g>
                  </svg>


                </span><span class="u-icon u-icon-circle u-palette-2-light-1 u-icon-3"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 512 512" style="">
                    <use xlink:href="#svg-19f3"></use>
                  </svg><svg class="u-svg-content" viewBox="0 0 512 512" x="0px" y="0px" id="svg-19f3" style="enable-background:new 0 0 512 512;">
                    <g>
                      <g>
                        <path d="M480,143.686H378.752c7.264-4.96,13.504-9.888,17.856-14.304c25.792-25.952,25.792-68.192,0-94.144    c-25.056-25.216-68.768-25.248-93.856,0c-13.856,13.92-50.688,70.592-45.6,108.448h-2.304    c5.056-37.856-31.744-94.528-45.6-108.448c-25.088-25.248-68.8-25.216-93.856,0C89.6,61.19,89.6,103.43,115.36,129.382    c4.384,4.416,10.624,9.344,17.888,14.304H32c-17.632,0-32,14.368-32,32v80c0,8.832,7.168,16,16,16h16v192    c0,17.632,14.368,32,32,32h384c17.632,0,32-14.368,32-32v-192h16c8.832,0,16-7.168,16-16v-80    C512,158.054,497.632,143.686,480,143.686z M138.08,57.798c6.496-6.528,15.104-10.112,24.256-10.112    c9.12,0,17.728,3.584,24.224,10.112c21.568,21.696,43.008,77.12,35.552,84.832c0,0-1.344,1.056-5.92,1.056    c-22.112,0-64.32-22.976-78.112-36.864C124.672,93.318,124.672,71.302,138.08,57.798z M240,463.686H64v-192h176V463.686z     M240,239.686H32v-64h184.192H240V239.686z M325.44,57.798c12.992-13.024,35.52-12.992,48.48,0    c13.408,13.504,13.408,35.52,0,49.024c-13.792,13.888-56,36.864-78.112,36.864c-4.576,0-5.92-1.024-5.952-1.056    C282.432,134.918,303.872,79.494,325.44,57.798z M448,463.686H272v-192h176V463.686z M480,239.686H272v-64h23.808H480V239.686z"></path>
                      </g>
                    </g>
                  </svg>


                </span>
              </div>
            </div>
            <div class="u-container-style u-layout-cell u-size-50 u-layout-cell-2">
              <div class="u-container-layout u-container-layout-2">
                <p class="u-align-left u-text u-text-default u-text-1"> Our Python beginner course is an excellent choice for anyone who wants to learn how to code in Python from scratch. Whether you're a complete beginner or have some experience with coding, our course will provide you with a solid foundation in Python and take you to advanced levels.Our course is designed to be comprehensive and easy to follow, with step-by-step instructions that guide you through each lesson. You'll learn everything from the basics of Python syntax to more advanced topics like object-oriented programming,&nbsp;<br>
                  <br>data structures, and algorithms.In addition to the core Python concepts, our course also covers popular libraries like NumPy, Pandas, and Matplotlib. You'll learn how to use these libraries to perform data analysis, visualization, and other real-world tasks.Our course is taught by experienced instructors who are passionate about teaching and have extensive knowledge of Python. You'll have access to a supportive community of learners and instructors who are there to answer your questions and help you succeed.By the end of our course,<br>
                  <br>&nbsp;you'll have a deep understanding of Python and be able to apply your newfound knowledge to real-world projects. Whether you want to build web applications, work with data, or pursue a career in software development, our course will give you the foundation you need to achieve your goals.So if you're ready to take your first step in learning Python, enroll in our course today and start your journey towards becoming a skilled Python programmer!<br>
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
                </p>
              </div>
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
            <div class="u-container-layout u-similar-container u-container-layout-1">
              <div alt="" class="u-image u-image-circle u-image-1" src="" data-image-width="3744" data-image-height="5616"></div>
              <h5 class="u-text u-text-2">Jack Alvarez</h5>
              <p class="u-text u-text-3"> Python Developer</p>
            </div>
          </div>
          <div class="u-align-center u-container-style u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-container-layout-2">
              <div alt="" class="u-image u-image-circle u-image-2" src="" data-image-width="3569" data-image-height="5354"></div>
              <h5 class="u-text u-text-4">Nat Reynolds</h5>
              <p class="u-text u-text-5"> Data Scientist:</p>
            </div>
          </div>
          <div class="u-align-center u-container-style u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-container-layout-3">
              <div alt="" class="u-image u-image-circle u-image-3" src="" data-image-width="3648" data-image-height="5472"></div>
              <h5 class="u-text u-text-6">Betty Nilson</h5>
              <p class="u-text u-text-7"> Full-Stack Developer</p>
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