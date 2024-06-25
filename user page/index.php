<?php

//session Strat
session_start();

if (!isset($_SESSION['fname'])) {

    $PUT = 'Log In';
} else {

    $PUT = $_SESSION['fname'];
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--title-->
    <title>User Page</title>

    <!--Add Fav Icon -->
    <link rel="shortcut icon" href="./Img/test.png">

    <!--Add StyleSheet 1 Normal-->
    <link rel="stylesheet" href="./style.css">

    <!--Add StyleSheet 2 MobRes-->
    <link rel="stylesheet" href="./">

    <!--Add Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bungee+Spice&family=Lato:ital,wght@0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=M+PLUS+Rounded+1c:wght@100;300;400;500;700;900&family=Noto+Sans+SC:wght@100;300;400;500;700;900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200&family=Oswald:wght@200;300;400;500;600;700&family=Permanent+Marker&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!--Add FontAwsom kit-->
    <script src="https://kit.fontawesome.com/92800ec90a.js" crossorigin="anonymous"></script>

</head>

<body>

    <!--navigation-->
    <nav>
        <!--logo-->
        <div class="logo">

            <img src="./Img/test.png">
        </div>

        <!--logo button--->
        <div class="log-button">


            <?php

            echo "<a href='../LOGIN/index.php' class='Login button'>$PUT</a>";

            if (!($PUT == "Log In")) {

               // echo "<a class='LogOut-button' href='./LogOUT.php'><i class='fa-solid fa-right-from-bracket'></i></a>";
            } else {

                echo " <a href='' class='Admin button'>Admin</a> ";
            }

            ?>

        </div>

    </nav>
    <!--end nav section-->

    <!--Home-nav section-->
    <section id="home-nav">

        <div class="nav-line">

            <a href="" class="first-but">Home</a>
            <a><i class="fa-solid fa-angle-right"></i></a>
            <a href="" class="second-but">User Details</a>

        </div>

        <div class="nav-text">

            <h1>USER DETAILS</h1>


        </div>

    </section>
    <!--Home-nav section-->

    <!--start first section-->
    <section id="First-sec">

        <div class="first-img">


            <?php

            if ($_SESSION['gender'] == 'Male') {

                echo "<img src='./Img/male.svg' alt='img-back.png'>";

            } else {

                echo "<img src='./Img/female.svg' alt='img-back.png'>";
            }

            ?>

        </div>

        <div class="first-text">

            <?php

            echo "<p><b>User ID &nbsp : &nbsp</b>{$_SESSION['uid']} </p>";
            echo "<p><b>Name &nbsp : &nbsp</b> {$_SESSION['fname']} {$_SESSION['lname']}</p>";
            echo "<p><b>Address &nbsp : &nbsp</b> {$_SESSION['address']}</p>";
            echo "<p><b>Tel &nbsp : &nbsp</b>   {$_SESSION['tel']}</p>";
            echo "<p><b>Gender &nbsp : &nbsp</b> {$_SESSION['gender']}</p>";
            echo "<p><b>DOB &nbsp: &nbsp</b> {$_SESSION['dob']}</p>";
            echo "<p><b>NIC &nbsp : &nbsp</b> {$_SESSION['nic']}</p>";
            echo "<p><b>Email &nbsp : &nbsp</b> {$_SESSION['email']}</p>";

            ?>

            <a href="" class="edit-button">Edit <i class="fa-regular fa-pen-to-square"></i></a>

        </div>

    </section>

    <!--Start theard section -->

    <section id="third-sec">

        <div class="follow-logo">

            <img src="./Img/social icons/logo1.png" alt="Logo.png">

            <div class="follow-icon">

                <img src="./Img/social icons/facebook.png" alt="">
                <img src="./Img/social icons/twitter.png" alt="">
                <img src="./Img/social icons/instagram.png " alt="">
                <img src="./Img/social icons/googleplus.png " alt="">

            </div>

        </div>

    </section>

    <!--Start futter section -->

    <section id="futter">

        <div class="futter-menu">

            <ul>

                <li><a href="">Term of Use</a></li>
                <li><a href="">Carrees</a></li>
                <li><a href="">FAQs</a></li>
                <li><a href="">Contact US</a></li>

            </ul>

        </div>

        <div class="futter-detail">
            <p>© 2022 Health Care solutions.Designed and maintained by API (pvt) Ltd</p>
        </div>

    </section>

    <!--Start Futtore section -->







</body>

</html>