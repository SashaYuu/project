<!DOCTYPE html>
<html lang="en">

<head>
  <title>SumoCoder/HomePage </title>
  <meta charset="UTF-8">
  <script src="https://kit.fontawesome.com/4563b32afa.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/style.css" type="text/css" />
</head>

<body>


  <header id="primaryMenu">

    <div class="primaryWrapper">


      <div class="menu">
        <div class="mainMenuItems">
          <ul>
            <li><a href="index.php">HOME</a></li>
            <li><a href="page/moreabout.php">ABOUT</a></li>
            <li><a href="page/course.php"> COURSE </a> </li>
            <li><a href="service.php">SERVICES</a></li>
            <li><a href="contact.php">CONTACT</a></li>
            <li><a href="search/search_engine.php">SEARCH</a></li>
            <li><a href="page/uppgift.php">UPPGIFT</a></li>
            <li><a href="contacts/index.php">CONTACTSS</a></li>
            <?php
            session_start();
            if (isset($_SESSION['username'])) {
              // If a user is logged in, display the mypage page
              echo '<li><a href="page/mypage.php">mypage</a></li>';
            } else {
              // If no user is logged in, display the login page
              echo '<li><a href="login/login.php">login</a></li>';
            }
            ?>






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



  <!-- cover photo section start=======-->
  <section id="coverphoto">
    <div class="container">
      <div class="coverContant">
        <h2>Sumo Coder</h2>
        <p>Interactive Courses with one of our finest teachers <span>.Sumo Coder a new way of coding for you </span> </p>
        <button class="coverBtn"> work with us </button>
      </div>
    </div>
  </section>


  <!-- cover photo section end=======-->


  <!-- profile section start ======= -->
  <section id="about">

    <div class="container">
      <div class="profileWrapper">
        <div class="profileImg"><img src="images/profile.jpg" alt="sami" /> </div>

        <div class="profileDetails">

          <h2> About US </h2>
          <p> We are a company that sells coding courses for people who just started coding. <span> We have many branches all over the world</span>. You can check for more information on our about page.<br>
          </p>
          <div class="aboutReadMoreBtn">
            <a href="page/moreabout.html"> Read More </a>

          </div>
          <h2> Log in </h2>

        </div>

      </div>

    </div>
  </section>


  <!-- profile section end======= -->


  <!--talk with me section start===-->
  <section id="talkWithMe">
    <div class="container">
      <div class="talkDetails">
        <h2>Any type of quation & discussion. </h2>
        <p>Reach Us Here.... </p>
        <a href="mailto:SumoCoder@gmail.com">Mail here </a>

      </div>

    </div>
  </section>



  <!--talk with me section end===-->




  <!-- service boxs section start ==== -->

  <section id="serviceBoxs">

    <div class="container">
      <div class="secTitle">
        <h2> What courses We offer right now!</h2>
      </div>

      <div class="serviceWrapper">

        <div class="singleService">
          <div class="serviceDetails">
            <div class="sIcon">
              <i class="fas fa-bezier-curve"></i>
            </div>
            <h3> Python </h3>
            <p>Python is a high-level, interpreted, general-purpose programming language. Its design philosophy emphasizes code readability with the use of significant indentation </p>


          </div>
          <div class="srBtn"><a href="contact.html"> Contact us for any questions </a></div>
        </div>



        <div class="singleService">
          <div class="serviceDetails">
            <div class="sIcon">
              <i class="fas fa-bezier-curve"></i>
            </div>
            <h3>HTML/CSS/JAVA</h3>
            <p> is the standard markup language for documents designed to be displayed in a web browser. At the end of the course you will learn how to code and make a full working website. </p>

          </div>
          <div class="srBtn"><a href="contact.html"> Contact us for any questions </a></div>
        </div>


        <div class="singleService">
          <div class="serviceDetails">
            <div class="sIcon">
              <i class="fas fa-bullhorn"> </i>
            </div>
            <h3> C++ </h3>
            <p> C++ is a general-purpose programming language created by Danish computer scientist Bjarne Stroustrup as an extension of the C programming language, </p>

          </div>

          <div class="srBtn"><a href="contact.html"> Contact us for more information </a></div>
        </div>


      </div>

    </div>
  </section>

  <!-- service boxs section end==== -->

  <!-- my team section start====-->

  <section id="myTeam">
    <div class="container">

      <div class="secTitle">
        <h2> our skillful team </h2>
      </div>

      <div class="teamDec">
        <p> Our team is one of the best teams to ever graduate from Harvard University. Our team will guide you through the journey in a friendly environment where everyone respects each other.</p>


      </div>

    </div>
    <div class="myTeamImg">
      <img src="images/my_team.png" alt="sami" />
    </div>
  </section>



  <section id="whatTypeWork">
    <div class="container">
      <div class="secTitle">
        <h2>OUR team will focuse on mainly three things throught the courses </h2>
      </div>

      <div class="workWrapper">
        <div class="singleWork">
          <img src="images/work1.png" alt="sami" />
          <h3> APP DEVELOPMENT
            (Pyhon)</h3>
          <p>Android & iOS mobile application .</p>
        </div>



        <div class="singleWork">
          <img src="images/work2.png" alt="sami" />
          <h3> WEB DEVELOPMENT (HTML) </h3>
          <p>Designing any website.Such as e-commerce website,apps website,personal website etc</p>
        </div>


        <div class="singleWork">
          <img src="images/work3.png" alt="sami" />
          <h3> Game development (C++) </h3>
          <p>Will mainly focuse on unity engine and pc games</p>
        </div>


      </div>


    </div>
  </section>



  <!--what type work do my team section end====-->



  <!-- Course launch plan section start=== -->
  <section id="courseLaunchPlan"> </section>
  <div class="container"> </div>
  <div class="secTitle">
    <h2> Course Launch Plan </h2>
  </div>

  <div class="courseLaunchTitle">
    <img src="images/courseimages/courselaunch.jpg" alt="course launching photo" />
    <p> Hey,good news we launched online learning course. If you want to join our online course. Just click below! </p>
    <div class="courseBtnCenter">

      <div class="srBtn"><a href="page/course.html"> Courses </a></div>



    </div>
  </div>


  <!-- Course launch plan section end=== -->

















  <!-- footer section start==== -->

  <footer id="mainfooter">
    <section class="footer">
      <div class="container">
        <div class="brandNameFooter">
          <a href="index.php">
            <p><span>S</span>UMO </p>
          </a>
          <p> SumoCoder@gmail.com </p>
        </div>

        <div class="footerContent">
          <div class="footerContentWrapper">
            <div class="fbox">
              <div class="fboxDetails">
                <p> Karrar al-agele </p>

                <div class="fsocialLinks">
                  <a href="#"> <i class="fa fa-facebook"> </i> </a>
                  <a href="#"> <i class="fa fa-twitter"> </i> </a>
                  <a href="#"> <i class="fa fa-google-plus"> </i> </a>
                  <a href="#"> <i class="fa fa-linkedin"> </i> </a>

                </div>

              </div>
            </div>

            <div class="fbox">
              <div class="fboxLinks">
                <h2>SumoCoder </h2>
                <ul>
                  <li> <a href="index.php"> Home </a> </li>
                  <li> <a href="page/moreabout.html"> About </a> </li>
                  <li> <a href="page/course.html"> Course </a> </li>
                  <li> <a href="service.html"> Services </a> </li>
                  <li> <a href="service.html"> Log in </a> </li>


                </ul>
              </div>
            </div>

          </div>

        </div>


        <div class="copyright">
          <div class="copyrightbox">
            <div class="copyrightMeta">
              <p> &copy;Copyright All reserved by Huddinge 2022. </p>
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