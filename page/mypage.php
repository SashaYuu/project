<!-- fix navbar to sticky , logout fix, admin usernmae wrong, -->


<?php
require('../login/server.php') ;
include('../login/server.php') ;
session_start();

if($_SESSION['username']) {
echo "Welcome user" . $_SESSION ["username"];
}else{
header("location: ../login/login.php");
}
?>



</div>
</nav>

<!DOCTYPE html>
<html lang="en">























<title>course </title>
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
                        <li><a href="../index.php">HOME</a></li>
                        <li><a href="../courses/python/index.php">python</a></li>
                        <li><a href="../courses/html/index.php">html</a></li>
                        <li><a href="../courses/Cplus/index.php">c++</a></li>
                        <li><a href="../login/update.php">UPDATE</a></li>
                        <a href="logout.php">Logout</a>




                            <li><a href="uppgift.html">UPPGIFT</a></li>


                    </ul>
                </div>
                <div class="container">
                    <div class="brandName"> <a href="../index.html">
                            <p><span>S</span>UMO</p>
                        </a></div>

                </div>
            </div>

        </div>


    </header>

    <head>
        <title>Team Members</title>
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <link rel="icon" type="../images/png" href="favicon.png">
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Montserrat:400,900&display=swap">
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Faster+One&display=swap">
        <link rel="stylesheet" type="text/css" href="../css/stylep.css">
        <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
    </head>

    <body>
        <div class="container-full-width bg-grey margin-b-narrow">
            <h1 class="title"></h1>
        </div>

        <div class="container">

            <div class="one-third">
                <img class="profile-photo" src="../images/Charles-Shimer-min.jpg">
                <p class="name"><?php echo $_SESSION['username']; ?></p>
                <div class="popup-outer">
                    <div class="popup-inner">
                        <div class="ui-close-holder">
                            <span class="ui-close">X</span>
                        </div>
                        <p>Reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                            occaecat cupidatat non proident, sunt ulpa qui officia deserunt mollit anim id est laborum.
                            reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                            occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                        <p class="orange">Excepteur sint occaecat <span class="underline">cupidatat</span> non proident,
                            sunt in culpa qui officia deserunt mollit anim id est laborum. reprehenderit in voluptate velit
                            esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                            sunt in culpa qui officia deserunt mollit anim id est laborum. reprehenderit in <span class="underline">voluptate</span> velit esse cillum dolore eu fugiat nulla pariatur.</p>
                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id
                            est laborum. reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim
                            id est laborum. <span class="orange">Reprehenderit in voluptate velit esse cillum dolore eu
                                fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                                officia deserunt mollit anim id est laborum.</span> Reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                            culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                </div>
            </div>



            <p class="green">There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
                If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing
                hidden in the middle of text.</p>
            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                laborum. reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. <span class="orange">Reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
                    sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                    laborum.</span> Reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
                sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <p class="orange">Excepteur sint occaecat <span class="underline">cupidatat</span> non proident, sunt in culpa
                qui officia deserunt mollit anim id est laborum. reprehenderit in voluptate velit esse cillum dolore eu
                fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                mollit anim id est laborum. reprehenderit in <span class="underline">voluptate</span> velit esse cillum
                dolore eu fugiat nulla pariatur.</p>
        </div>
        </div>
        </div>
        </div><!-- 2nd row -->

        <div class="aboutHeadline">
            <h1> Your progress </h1>
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
        <footer class="container-full-width bg-dark">
            <div class="container">
                <div class="one-half">
                    <div class="topic">
                        <h3 class="topic__headline">About the template</h3>
                        <p class="topic__description">This team member template is a visually appealing webpage. It also can
                            showcase team members in a separate section on a webpage.</p>
                        <p class="topic__description">It features a modern layout with a header section and a main content
                            area for each team member's photo & name. After clicking on the photo or name, it will open more
                            detail about the corresponding member. This way you can upload many team members within a small
                            space.</p>
                        <p class="topic__description">It is easy to navigate, user-friendly, and customizable with
                            well-structured code. And it has a consistent color scheme and typography.</p>
                        <p class="topic__description">Overall, this template is a great tool for showcasing team members in
                            a professional and engaging way.</p>
                    </div>
                </div>


                <div class="one-half text-right">
                    <div class="topic">
                        <h3 class="topic__headline">courtesy</h3>
                        <p class="topic__description">
                            Demo profile pictures has been taken from <a href="https://www.pexels.com/" target="_blank">Pexels</a> &amp; <a href="https://pixabay.com/" target="_blank">Pixabay</a>.
                            SVG icons taken from <a href="https://fontawesome.com/" target="_blank">Font Awesome</a>.
                        </p>
                    </div>
                </div>

            </div><!-- .container -->



    </body>

</html>