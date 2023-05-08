<!DOCTYPE html>
<html lang="en">

<head>
  <title>About </title>
  <meta charset="UTF-8">
  <script src="https://kit.fontawesome.com/4563b32afa.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../css/page.css" type="text/css" />
  </style>
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



  <footer id="mainfooter">
    <section class="footer">
      <div class="container">
        <h6><strong>About us</strong></h6>
        <h5>Our company was founded in 20011 by our Ceo Karrar. The company is now is worldwide known</h5>
        <h5> and our branches are all over the globe. We mainly focus on teaching people who want to start coding </h5>
        <h5>and feel intimidated about it. We offer many courses in our boot camps or you can even take them online. </h5>
        <h5>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam</h5>
        <h5>, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, </h5>
        <h5>condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</h5>
        <h5>&nbsp;</h5>


        <h5>All our teachers graduated from Harvard University with a master's degree in coding.</h5>
        <h5> We'll ensure you will learn coding in the best way possible with the best material that</h5>
        <h5> the market can offer. Pellentesque habitant morbi tristique senectus et netus et malesuada </h5>
        <h5>fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet,ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros </h5>
        <h5>ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis.Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</h5>



      </div>
  </footer>
  <section id="photoGallery"> </section>
  <div class="container"> </div>

  <div class="aboutHeadline">
    <h1>OUr bootcamps </h1>
  </div>



  <div class="row">

    <div class="column">
      <img src="../images/myimages/1.jpg" alt="Sumo" style="width:100%" onClick="myFunction (this);">
    </div>


    <div class="column">
      <img src="../images/myimages/2.jpg" alt="Sumo" style="width:100%" onClick="myFunction (this) ;">
    </div>

    <div class="column">
      <img src="../images/myimages/3.jpg" alt="Sumo" style="width:100%" onClick="myFunction (this);">
    </div>

    <div class="column">
      <img src="../images/myimages/4.jpg" alt="Sumo" style="width:100%" onClick="myFunction (this);">
    </div>

    <div class="column">
      <img src="../images/myimages/5.jpg" alt="Sumo" style="width:100%" onClick="myFunction (this);">
    </div>

    <div class="column">
      <img src="../images/myimages/6.jpg" alt="Sumo" style="width:100%" onClick="myFunction (this);">
    </div>

    <div class="imgContainer">
      <span onClick="this.parentElement.style.display= 'none' " class="closebtn"> &times; </span>
      <img id="expandedImg" alt="sami" style="width: 100%">
      <div id="imgtext"> </div>
    </div>

  </div>



  <section id="aboutSocialMenu">
    <div class="container">
      <div class="aboutHeadline">
        <h1> Stay connect </h1>

      </div>
      <div class="socialMenuIcons">
        <ul>
          <li><a href="#"><i class="fa fa-facebook"></i> </a></li>
          <li><a href="#"><i class="fa fa-twitter"></i> </a></li>
          <li><a href="#"><i class="fa fa-instagram"></i> </a></li>
          <li><a href="#"><i class="fa fa-linkedin"></i> </a></li>


        </ul>
      </div>
    </div>
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
                <p>Karrar al-agele </p>

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
              <p> &copy;Copyright All reserved by Huddinge 2022 </p>
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




  <script>
    function myFunction(imgs) {
      var expandImg = document.getElementById("expandedImg");
      var imgText = document.getElementById("imgtext");
      expandImg.src = imgs.src;
      imgText.innerHTML = imgs.alt;
      expandImg.parentElement.style.display = "block";
    }
  </script>



</body>

</html>