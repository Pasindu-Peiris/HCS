<!--Add Php-->
<?php

session_start();

//check session is set or Not
if(isset($_SESSION['fname'])){

    $PUT = $_SESSION['fname'];

}else{

    $PUT = "Log In";
}


?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Add Title -->
    <title>About Us</title>

    <!--Add Fav Icon -->
    <link rel="shortcut icon" href="./Images-AboutUs/L-logo.png">

    <!--Add StyleSheet 1 Normal-->
    <link rel="stylesheet" href="./Stylee-AboutUS/AboutUS.css">

    <!--Add StyleSheet 2 MobRes-->
    <link rel="stylesheet" href="./">

    <!--Add Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bungee+Spice&family=Lato:ital,wght@0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=M+PLUS+Rounded+1c:wght@100;300;400;500;700;900&family=Noto+Sans+SC:wght@100;300;400;500;700;900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200&family=Oswald:wght@200;300;400;500;600;700&family=Permanent+Marker&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!--Add FontAwsom kit-->
    <script src="https://kit.fontawesome.com/92800ec90a.js" crossorigin="anonymous"></script>

</head>

<body>

    <!--Strat Navigation -->
    <nav id="navigation">

        <!--First nav-->

        <div class="first-nav" id="first-nav">

            <!--Logo-->
            <div class="Logo">

                <img src="./Images-AboutUs/test.png" alt="Logo.png">

            </div>

            
            <!-- Button -->
            <div class="log-button">

            
            <?php 
                
                echo "<a href='../LOGIN/index.php' class='Login button'>$PUT</a>";
                if(!($PUT == "Log In")){

                    echo "<a class='LogOut-button'  href='../user page/index.php'> <i class='fa-sharp fa-solid fa-user-check'></i></a>";
                    echo "<a class='LogOut-button' href='./LogOUT.php'><i class='fa-solid fa-right-from-bracket'></i></a>";
                    
                
                }
                else{
                    echo "<a href='' class='Admin button'>Admin</a>";
                }
            ?>  
                
            </div>

        </div>

        </div>

        <!--Second nav-->

        <div class="second-nav" id="second-nav">

            <div class="menu">

                <ul>

                    <div class="dropmenu">

                        <button class="dwonbut">Explore Plans <i class="fa-solid fa-caret-down"></i></button>

                        <div class="dropmenu-cont">

                            <a href="">Individual Health Insurance</a>
                            <a href="">Family Health Insurance</a>
                            <a href="">Critical Illness Insurance</a>
                            <a href="">Senior Citizen Health Insurance</a>
                            <a href="">Personal Accident Insurance</a>

                        </div>

                    </div>

                    <li><a href="">Careers</a></li>
                    <li><a href="">FAQs</a></li>
                    <li><a href="">About Us</a></li>
                    <li><a href="">Contact Us</a></li>

                </ul>

            </div>

            <div class="search" onclick="searchBox()">

                <i class="fa-solid fa-magnifying-glass"></i>

                <p>Search</p>

            </div>

        </div>

        <!--Search Box -->

        <div class="search-Box" id="search-Box">

            <div id="area-search">

                <form>

                    <input type="search" name="search" placeholder="To search start typing.. ">
                    <input type="submit" name="submit" value="Search">

                </form>

                <button onclick="CloseBox()" id="closeBox"><i class="fa-solid fa-xmark"></i></button>

            </div>

        </div>

    </nav>

    <!--  End First Nnavigation section  --->

    <!--  start first section  --->

    <section id="First-sec">

        <div class="page-path">

            <a href="#">Home</a>
            <i class="fa-solid fa-angle-right"></i>
            <a href="#">About Us</a>

        </div>

        <hr>

        <div class="First-img">

            <img src="./Images-AboutUs/save1.svg" alt="back.svg">

        </div>


    </section>

    <hr>

    <!--  End first section  --->

    <!--  start second section  --->

    <section id="second-sec">

        <div class="second-head">

            <h1>About Us</h1>
            <strong>About Health Care Solutions and 30+ Years Of Insuring experience.</strong>

            <div class="text-info">

                <p>
                    Health Care Solutions, One of The Leading Life Insurance Solutions in The Country Has Been in The Business of Protecting Lives, Empowering People to Achieve Their Dreams, And Providing Peace of Mind To Thousands Of Sri Lankans. Under The Banner ' Your
                    Life, Our Strength, ' We Have Nurtured the Sri Lankan Dream in Unique and Personal Ways to Support Our Policyholders and The People They Love.
                </p>

                <p>

                    We are in the business of protecting people. We are naturals at the creativity and disruptive innovation that strive to elevate the standards of the quality of life, for Sri Lankan both young and old. Our diverse portfolio of products brings to you a
                    plethora of world-class life insurance products that give you the freedom and the opportunity to live life to the fullest.

                </p>

                <p>
                    Our Health Insurance policies, covering over 30 conditions are created to meet all your health insurance needs. Therefore, in the event of a health condition, you have one less thing to worry about. We’ll be there to cover medical expenses and hospital
                    charges while you look after your health. We base the premium on age providing you with a transparent calculation structure.
                </p>

            </div>

        </div>

        <div class="box-type">


            <div class="item">

                <div class="icon">

                    <i class="fa-solid fa-trophy i-size"></i>

                </div>

                <div class="text">

                    <h4>Mission</h4>

                    <p>To Provide protection, financial security and create wealth for to those who are connected with us.</p>

                </div>

            </div>

            <div class="item">

                <div class="icon">

                    <i class="fa-solid fa-eye i-size"></i>

                </div>

                <div class="text">

                    <h4>Vision</h4>

                    <p>To be the most sought after provider of insurance solutions.</p>

                </div>

            </div>

            <div class="item">

                <div class="icon">

                    <i class="fa-solid fa-handshake i-size"></i>

                </div>

                <div class="text">

                    <h4>Our Values</h4>

                    <p>Excellence, Caring, Innovation, Trust, Ethics and Integrity</p>

                </div>

            </div>

        </div>



    </section>

    <!--  End second section  --->

    <hr>

    <!--Start theard section -->
    <section id="third-sec">

        <div class="follow-logo">

            <img src="./Images-AboutUs/logo1.png" alt="Logo.png">

            <div class="follow-icon">

                <img src="./Images-AboutUs/social icons/facebook.png" alt="">
                <img src="./Images-AboutUs/social icons/twitter.png " alt="">
                <img src="./Images-AboutUs/social icons/instagram.png " alt="">
                <img src="./Images-AboutUs/social icons/googleplus.png " alt="">

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




    <!--Add script JS-->
    <script src="./Script-AboutUs/AboutUs.js"></script>


</body>

</html>