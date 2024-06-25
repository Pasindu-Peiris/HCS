<?php

require('./logoin.php');


?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Add Title -->
    <title>LOG IN</title>

    <!--Add Fav Icon -->
    <link rel="shortcut icon" href="./Images-login/L-logo.png">

    <!--Add StyleSheet 1 Normal-->
    <link rel="stylesheet" href="./Style/log.css">

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

    <!--start nav-->

    <nav>

        <!--add logo-->
        <div class="log-img">

            <img src="./Images-login/test.png" alt="logo.png">

        </div>

        <!-- Button -->
        <div class="log-button">

            <a href="#" class="Admin button">Admin</a>
            <a href="#" class="Login button">Log in </a>

        </div>


    </nav>

    <!--End Nav -->

    <!--Strat first section--->

    <section id="First-sec">

        <div class="page-path">

            <a href="#">Home</a>
            <i class="fa-solid fa-angle-right"></i>
            <a href="#">Log In</a>



        </div>

        <hr>

        <div class="First-box">

            <div class="first-img">

                <img src="./Images-login/save2.svg" alt="back.png">

            </div>

            <div class="first-text">

                <h1>Log IN <?php

                            foreach ($happend as $value) {
                                echo "$value" . "\n";
                            }

                            ?>
                </h1>

                <form method="POST" action="">

                    <label for="email">Enter Your Email</label>
                    <input type="email" name="email" value="" placeholder="Enter User Email" require>

                    <div class="password-box">

                        <div class="pass-box-1">

                            <label for="password">Enter Your Password</label><br>
                            <input type="password" id="password" name="password" value="" placeholder="Enter User Password " require>

                        </div>

                        <div class="pass-box-2" id="pass-box-2">

                            <i class="fa-sharp fa-solid fa-eye" id="icon1"></i>
                            <i class="fa-sharp fa-solid fa-eye-slash" id="icon2"></i>

                        </div>

                    </div>

                    <input type="submit" name="submit" value="Continue">

                </form>

                <div class="register">
                    <strong>Don't have an account? </strong><a href="" id="atag">Register</a><br>
                    <strong>Forgot your password ? </strong><a href="" id="atag">Forgot password </a>
                </div>


            </div>

        </div>


    </section>


    <!--End First section---->


    <hr>

    <!--Start theard section -->
    <section id="third-sec">

        <div class="follow-logo">

            <img src="./Images-login/logo1.png" alt="Logo.png">

            <div class="follow-icon">

                <img src="./Images-login/social icons/facebook.png" alt="">
                <img src="./Images-login/social icons/twitter.png " alt="">
                <img src="./Images-login/social icons/instagram.png " alt="">
                <img src="./Images-login/social icons/googleplus.png " alt="">

            </div>

        </div>

    </section>


    <!--End Thired Section -->

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


    <!--add php-->




    <!--Add JS File-->
    <script src="./JS/script.js"></script>




</body>

</html>