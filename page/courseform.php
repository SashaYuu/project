<?php
session_start();
$_SESSION['prev_url'] = $_SERVER['REQUEST_URI'];
if ($_SESSION['username']) {


} else {
header("location: ../login/login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Course Form</title>
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
            <li><a href="index.php">HOME</a></li>
            <li><a href="page/moreabout.php">ABOUT</a></li>
            <li><a href="page/course.php"> COURSE </a> </li>
            <li><a href="service.php">SERVICES</a></li>
            <li><a href="contact.php">CONTACT</a></li>
            <li><a href="search/search_engine.php">SEARCH</a></li>
>
            <?php
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


  <section id="courseform">
    <div class="container">
      <form class="courseForm" method="post">
        <div class="brandname">
          <p><span>S</span>UMO</p>
        </div>
        <h3> COURSE FORM </h3>
        <div class="formDetails">
          <p>
            <label class="name"> Username </label>
            <li> <?php echo  "  " . $_SESSION["username"] ?>
              <br>
              <br <label> E-mail: </label>
              <input class=" email" type="text" name="email" placeholder="example@example.com" required pattern="[A-Za-Z@-0-9-.]+">
              <br>
              <br>
              <label> Phone: </label>
              <input type=" text" name="phone" placeholder="(+880)123-456-789" required pattern="[0-9]+">

              <br><br>
              <b>Gender </b>
              <input class="gender" type="radio" name="sex" value="male">Male
              <input class="gender" type="radio" name="sex" value="female">Female
              <br>
              </br>
              <b> Select course </b>
              <select name="course">
                <option> C++ </option>
                <option> HTML </option>
                <option> Python </option>
              </select>
          </p>
          <p>&nbsp;</p>
          <p>
            <input class="submitBtn" type="submit" value="Submit">
          <div class="printBtn">
            <button onclick="window.print()">Print Form </button>
          </div>
          </p>
        </div>
      </form>

    </div>
  </section>

  <footer id="mainfooter">
    <!-- footer content here -->
  </footer>

  <?php
  // Set up database connection
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "forum";

  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // Handle form submission
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize form data
    $firstname = mysqli_real_escape_string($conn, $_SESSION["username"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $phone = mysqli_real_escape_string($conn, $_POST["phone"]);
    $gender = mysqli_real_escape_string($conn, $_POST["sex"]);
    $course = mysqli_real_escape_string($conn, $_POST["course"]);

    // Insert form data into the database
    $sql = "INSERT INTO courseForm (firstname, email, phone, gender, course) VALUES ('$firstname', '$email', '$phone', '$gender', '$course')";
    if ($conn->query($sql) === TRUE) {
      echo '<div id="submit-message">Thanks for submitting!</div>';
      echo '<script>setTimeout(function(){window.location.href="../index.php"}, 3000);</script>';
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }



    // Close database connection
    $conn->close();
  }
  ?>
  <script>
    // Show the submit message
    document.getElementById("submit-message").style.display = "block";

    // Hide the submit message after 3 seconds
    setTimeout(function() {
      document.getElementById("submit-message").style.display = "none";
      window.location.href = "../index.php";
    }, 3000);
  </script>