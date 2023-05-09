<!DOCTYPE html>
<html>

<head>
  <title> Service </title>
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
            <li><a href="page/aboutUs/index.php">ABOUT</a></li>
            <li><a href="page/course.php"> COURSE </a> </li>
            <li><a href="service.php">SERVICES</a></li>
            <li><a href="contact.php">CONTACT</a></li>
            <li><a href="search/search_engine.php">SEARCH</a></li>


            <?php
            session_start();
            if (isset($_SESSION['username'])) {
              // If a user is logged in, display the mypage page
              echo '<li><a href="page/mypagee/index.php">PROFILE</a></li>';
            } else {
              // If no user is logged in, display the login page
              echo '<li><a href="login/login.php">LOGIN</a></li>';
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


  <!-- service boxs section start ==== -->

  <section id="serviceBoxs">

    <div class="container">
      <div class="secTitle">
        <h2> What services you will get from US! </h2>
      </div>

      <div class="serviceWrapper">

        <div class="singleService">
          <div class="serviceDetails">
            <div class="sIcon">
              <i class="fas fa-bezier-curve"></i>
            </div>
            <h3> WEB DEVEKOPMENT </h3>
            <p> We will create a functional and running website for you. The website will run on our network for free and you will have full access to our network. </p>

          </div>
          <div class="srBtn"><a href="contact.php"> Contact </a></div>
        </div>



        <div class="singleService">
          <div class="serviceDetails">
            <div class="sIcon">
              <i class="fas fa-bezier-curve"></i>
            </div>
            <h3>GAME DEVELOPMENT</h3>
            <p> We will make you a game that will run on unity engine whether it is 3D or 2D, singleplayer or multiplayer. </p>
            <p>&nbsp;</p>
            <p>&nbsp; </p>

          </div>
          <div class="srBtn"><a href="contact.php"> Contact </a></div>
        </div>


        <div class="singleService">
          <div class="serviceDetails">
            <div class="sIcon">
              <i class="fas fa-bezier-curve"></i>
            </div>
            <h3>APP DEVELOPMENT</h3>
            <p>We will make an app for you weather it is on android or ios. </p>

          </div>

          <div class="srBtn"><a href="contact.php"> Contact </a></div>
        </div>


      </div>

    </div>
  </section>

  <!-- service boxs section end==== -->



  <!-- footer section start==== -->

  <footer id="mainfooter">
    <section class="footer">
      <div class="container">
        <div class="brandNameFooter">
          <a href="index.html">
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
                  <li><a href="index.php">Home</a></li>
                  <li><a href="page/aboutUs/index.php">About</a></li>
                  <li><a href="page/course.php"> Course </a> </li>
                  <li><a href="service.php">Services</a></li>

                </ul>
              </div>
            </div>

          </div>

        </div>


        <div class="copyright">
          <div class="copyrightbox">
            <div class="copyrightMeta">
              <p> &copy;Copyright All reserved by Huddinge 2022.</p>
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