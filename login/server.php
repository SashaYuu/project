<?php
// echo "('The server.php file is not working.')";
// rest of the code
?>
<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array();


// connect to the dasalttabase
$db = mysqli_connect('localhost', 'root', '', 'forum');

// REGISTER USER
if (isset($_POST['reg_user'])) {
    // receive all input values from the form
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password =  mysqli_real_escape_string($db, $_POST['password']);
    $name = mysqli_real_escape_string($db, $_POST['name']);
    //$_SESSION['username'] = $_POST['username'];
    //$username = filter_input(INPUT_POST, $_POST['username'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    //$name = filter_input(INPUT_POST, $_POST['name'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $username = strip_tags($username);
    $name = strip_tags($name);
    $hashpassword = password_hash($password, PASSWORD_DEFAULT);






    if (empty($username)) {

        array_push($errors, "Username is required");
    }
    if (empty($email)) {
        array_push($errors, "Email is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }

    if (empty($name)) {
        array_push($errors, "name is required");
    }


    // first check the database to make sure 
    // a user does not already exist with the same username and/or email

    $user_check_query = "SELECT * FROM forumm WHERE username='$username' OR email='$email' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    if ($user) { // if user existsrray ( )
        if ($user['username'] === $username) {
            array_push($errors, "Username already exists");
        }

        if ($user['email'] === $email) {
            array_push($errors, "email already exists");
        }
    }

    // Finally, register user if there are no errors in the form
    if (count($errors) == 0) {

        $query = "INSERT INTO forumm (username, email, password,name) 
  			  VALUES('$username', '$email', '$hashpassword','$name')";
        mysqli_query($db, $query);

        $_SESSION['username'] = $username;
        header('location: ../index.php');
        exit();
    }
}


// LOGIN USER
if (isset($_POST['login_user'])) {

    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);


    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }

    if (count($errors) == 0) {
        $query = "SELECT * FROM forumm WHERE username='$username'";
        $results = mysqli_query($db, $query);
        $row = mysqli_fetch_assoc($results);
        if (mysqli_num_rows($results) == 1 && password_verify($password, $row['password'])) {

            $_SESSION['username'] = $_POST['username'];

            // Store the URL of the previous page the user was trying to access
            if (isset($_SESSION['redirect_url'])) {
                $redirect_url = $_SESSION['redirect_url'];
                unset($_SESSION['redirect_url']);
                header("Location: $redirect_url");
            } else {
                header('Location: ../page/mypagee/index.php');
            }
            exit();
        } else {
            array_push($errors, "Wrong username/password combination");
        }
    }


}

?>



