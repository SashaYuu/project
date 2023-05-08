<html>

<head>
    <title>Contact</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
    <link href='custom.css' rel='stylesheet' type='text/css'>
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
                        <li><a href="page/uppgift.php">UPPGIFT</a></li>
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

    <body>

        <div class="container">

            <div class="row">

                <div class="col-lg-8 col-lg-offset-2">



                    <form id="contact-form" method="post" role="form">

                        <div class="messages"></div>

                        <div class="controls">

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_name">Firstname *</label>
                                        <input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your firstname *" required="required" data-error="Firstname is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="form_email">Email *</label>
                                            <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="form_message">Message *</label>
                                                <textarea id="form_message" name="message" class="form-control" placeholder="Message for me *" rows="4" required="required" data-error="Please,leave us a message."></textarea>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <input type="submit" name="ok" class="btn btn-success btn-send" value="Send message">
                                        </div>
                                    </div>
    


                    </form>
                    <?php
                    if (isset($_POST['ok'])) {
                        include_once 'function.php';
                        $obj = new Contact();
                        $res = $obj->contact_us($_POST);
                        if ($res == true) {
                            echo "<script>alert('Query successfully Submitted.Thank you')</script>";
                        } else {
                            echo "wrong";
                        }
                    }
                    ?>

                </div><!-- /.8 -->

            </div> <!-- /.row-->

        </div> <!-- /.container-->

        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script src="validator.js"></script>
        <script src="forum.js"></script>
    </body>

</html>