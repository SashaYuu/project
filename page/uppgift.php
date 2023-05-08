<!DOCTYPE html>
<html lang="en">

<head>
  <title>About </title>
  <meta charset="UTF-8">
  <script src="https://kit.fontawesome.com/4563b32afa.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../css/page.css" type="text/css" />
  <style type="text/css">
    #aboutText h66 strong {
      font-family: Gill Sans, Gill Sans MT, Myriad Pro, DejaVu Sans Condensed, Helvetica, Arial, sans-serif;
    }
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





  <footer id="mainfooter">
    <section class="footer">
      <div class="container">
        <h6><strong>HomePage</strong></h6>
        <p dir="ltr"><strong id="docs-internal-guid-45283377-7fff-e124-8c8e-2e9ece27729d">i <h5>
              <h5>I början visste jag inte vad jag skulle göra efter Några timmar bestämde jag för att skapa ett företag som säljer kodningskurser. Först började jag leta efter layout från internet (css layout) efter jag har surfat internet jag hittade en som passade min ide. Det var bra layout eftersom navbar var på toppen och allt var i ordning från upp till ner. När jag var klar med att koda layouten började jag koda navbar, det var inte så svårt eftersom jag redan visste att jag ville göra 6 sajter. Hemsida, services, about, contact, courses och sidan där uppgiften är inställd. Efter att ha gett bredd, höjd och padding till navbar tänkte jag på namnet på företaget som är "SumoCoder". Jag delade in hemsidan i sektioner med containerclass. Jag började lägga till mer information om företaget och jag tog några typsnitt från andra webbplatser att använda på min webbplats. När jag var klar med navbar och huvudinformationen i mitten började jag arbeta på sidans sidfot. Jag bestämde mig för att färgpaletten för hela webbplatsen ska vara orange, svart och vit. Jag bestämde mig för att ge sidfoten en svart bakgrund och orange färg och när användaren går ner kan han komma åt de andra sidorna.
          </strong></h5>
          <br>

        <h6><strong>About</strong></h6>

        <h5>På sidan About bestämde jag mig för att jag ville göra något roligare så jag bestämde mig för att sätta en procentandel av framgång för våra kurser. När jag var klar med det började jag arbeta på om oss och förklarade hur vårt företag började använda samma färgpalett som hemsidan. Efter det la jag till en bild på vårt företag och hur det ser ut inuti när du trycker på det kommer det att bli större med hjälp av onClick-funktion som vi lärde oss om. Efter det lade jag till ett par ikoner som Facebook, Twitter...etc. Och sedan kopierade jag sidfoten från hemsidan

        </h5>



        <h6><strong>Courses</strong></h6>

        <h5>På kurssidan la jag till små behållare som förklarar vad vi gör och en liten knapp som säger "Läs mer". Jag lade till Teamet som kommer att undervisa i kurserna och när du går igenom bilden kommer personernas sociala media att visa. Efter det lägger jag till hur mycket du måste betala när du trycker på det kommer du till ett formulär som du måste fylla i för att gå med på kursen. Sidfoten jag kopierade precis från hemsidan.</h5>

        <h6><strong>Services</strong></h6>
        <h5>Tjänster är en enkel webbplats där den visar dig vad vi kommer att erbjuda och om du har några frågor tar den dig till kontaktsidan som har all information du behöver för att kontakta oss. </h5>




      </div>
  </footer>


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