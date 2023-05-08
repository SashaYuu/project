<?php
session_start();
 
// initializing variables
$username = "";
$email    = "";
$errors = array();
 
// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'forum');
 
// LOGIN USER
if (isset($_POST['login_user'])) {
  $adminusername = mysqli_real_escape_string($db, $_POST['adminusername']);
  $adminpassword = mysqli_real_escape_string($db, $_POST['adminpassword']);
 
  if (empty($adminusername)) {
    array_push($errors, "Username is required");
  }
  if (empty($adminpassword)) {
    array_push($errors, "Password is required");
  }
 
  if (count($errors) == 0) {
    $query = "SELECT * FROM admin WHERE adminusername='$adminusername' AND adminpassword='$adminpassword'";
    $results = mysqli_query($db, $query);
    echo $query."   ".mysqli_num_rows($results);
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['adminusername'] = $adminusername;
      header('location: admin_delete.php');
      exit();
    } else {
      array_push($errors, "Wrong username/password combination");
    }
  }
}
?>
