<?php
require('server.php');
include('server.php');
session_start();
if (!isset($_SESSION['username'])) {
  header("location: login.php");
  exit();
}
?>
<?php
session_start();
$connection = mysqli_connect("localhost", "root", "", "forum");
$db = mysqli_select_db($connection, 'forum');


if (isset($_POST['update'])) // && ($_POST('password') != ""))
{
  if (empty($_POST["password"])) {

    array_push($errors, "pass is required");
  }
  if (count($errors) == 0) {
    $hashpassword = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $query = "UPDATE forumm SET name='" . $_POST['name'] . "', email='" . $_POST['email'] . "', password= '" . $hashpassword . "' where username='" . $_SESSION['username'] . "'";
    "'";
    $query;
    $username = strip_tags($username);
    $name = strip_tags($name);
    echo '<h1 style="color:Tomato;">Profile Updated!</h1>';


    $query_run = mysqli_query($connection, $query);
  }
}

$query = "select * from forumm where username= '" . $_SESSION['username'] . "'";
$query_run = mysqli_query($connection, $query);
$row = mysqli_fetch_array($query_run, MYSQLI_ASSOC);

?>




<!DOCTYPE html>
<html lang="sv">

<meta charset="UTF-8">
<script src="https://kit.fontawesome.com/4563b32afa.js" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="../css/styleupdate.css" />


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

  <body style="background-color:rgb(155, 176, 196);">


    <main>

      <form action="update.php" method="post">
        <h>Update profile</h>
        <form name="users" method="POST" action="update.php">

          <div class="input-group">
            <label for="name">Name:</label>
            <input type="text" name="name" placeholder="Enter new name" maxlength="30" value="<?php echo $row['name']; ?>">
          </div>

          <div class="input-group">
            <label for="email">Email:</label>
            <input type="email" name="email" placeholder="Enter new email" maxlength="100" value="<?php echo $row['email']; ?>">
          </div>
          <div class="input-group">
            <label for="password">Password:</label>
            <input type="password" name="password" maxlength="30" placeholder="Enter new password">
          </div>




          <div class="input-group">
            <input type="submit" class='btn' name="update" value="Update Profile">

        </form>
        </div>
    </main>
  </body>



</html>