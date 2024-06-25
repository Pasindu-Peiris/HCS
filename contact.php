<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset = "UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="HandheldFriendly" content="true">
        <title>Health Care Solutions | Contact Us Us</title>
        <link rel = "icon" type = "image/x-icon" href = "images/logo/favicon.ico">
        <link rel = "stylesheet" type = "text/css" href = "styles/main.css">
        <link rel = "stylesheet" type = "text/css" href = "styles/contact.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+SC:wght@700&display=swap" rel="stylesheet">
        <script src = "js/navigation.js"></script>

        <!--Add FontAwsom kit-->
        <script src="https://kit.fontawesome.com/92800ec90a.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <!--  start first section  --->
        <section class = "main_header">
            <div class = "header">
                <figure class = "logo_img">
                    <a href = "index.html"><img id = "logo" alt = "HCS Logo" src = "images/logo/test.png" width = "250px" height = "50px"></a>
                    <button class = "button login_btn" onclick = "window.location.href = 'login.html';"><b>Log In</b></button>
                    <button class = "button admin_btn" onclick = "window.location.href = 'admin_login.html';"><b>Admin</b></button>
                </figure>  
            </div>
            
            <!---Navigation-->
            <nav>
                <div class = "main_navi">
                    <div class = "dropdown">
                        <button class = "dropbtn">Explore Plans&nbsp;<img src = "images/nav_arrowdrop.png" id = "drop_arrow" width = "12.5px" height = 12.5px>
                        <div class = "plans">
                            <a href = "#Plan01"><p>Individual Health Insurance</p></a>
                            <a href = "#Plan02"><p>Family Health Insurance</p></a>
                            <a href = "#Plan03"><p>Critical Illness Insurance</p></a>
                            <a href = "#Plan04"><p>Senior Citizen Health Insurance</p></a>
                            <a href = "#Plan05"><p>Personal Accident Insurance</p></a>
                        </div>
                    </div>
                    
                    <button onclick = "window.location.href = 'careers.html';">Careers</button>&nbsp;&nbsp;&nbsp;&nbsp;
                    <button onclick = "window.location.href = 'FAQs.html';">FAQs</button>&nbsp;&nbsp;&nbsp;&nbsp;
                    <button onclick = "window.location.href = 'about.html';">About Us</button>&nbsp;&nbsp;&nbsp;&nbsp;
                    <button onclick = "window.location.href = '#Contact Us';">Contact Us</button>&nbsp;&nbsp;&nbsp;&nbsp;
                    
                    <div class="search" onclick="searchBox()">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        &nbsp;&nbsp;<p>Search</p>
                    </div>
                </div>
                <div class="search-Box" id="search-Box">

                    <div id="area-search">
        
                        <form>
        
                            <input type="search" name="search" placeholder="Type Here....">
                            <input type="submit" name="submit" value="Search">
        
                        </form>
        
                        <button onclick="CloseBox()"><i class="fa-solid fa-xmark"></i></button>
        
                    </div>
        
                </div>  
            </nav>
        </section>
         <!--  start first section  --->

    <section id="First-sec">

        <div class="page-path" id = "page-path">

            <a href="index.html">Home</a>
            <i class="fa-solid fa-angle-right"></i>
            <a href="#">Contact Us</a>

        </div>

        <hr>

        <div class="Contact-Form">

            <h1>Contact Us</h1>

            <form method="POST" action="ContactUsPHP.php">

                <label for="fname">Name<span><i class="fa-sharp fa-solid fa-star-of-life"></i></span></label><br>
                <input type="text" name="name" value="" required><br>

                <label for="email">Email<span><i class="fa-sharp fa-solid fa-star-of-life"></i></span></label><br>
                <input type="email" name="email" value="" required><br>

                <label for="tel">Mobile<span><i class="fa-sharp fa-solid fa-star-of-life"></i></span></label><br>
                <input type="tel" name="tel" value="" required><br>

                <label for="address">Address</label><br>
                <input type="text" name="address" value=""><br>

                <label type="">Message<span><i class="fa-sharp fa-solid fa-star-of-life"></i></span></label><br>
                <textarea name="textarea"></textarea>

                <input type="submit" name="submit" value="SEND">

            </form>


        </div>



    </section>

    <!--  End first section  --->

    <hr>

    <!---Start Second Section -->
    <section id="second-sec">

        <div class="detail-col">

            <div class="block-1">

                <h1>ADDRESS</h1>
                <p>SLIIT Malabe Campus, New Kandy Rd,<br> Malabe 10115 SLIIT Malabe Campus, New Kandy Rd, Malabe 10115</p>

            </div>

            <div class="block-1">
                <h1>TELEPHONE</h1>
                <P>0117 544 801</P>
                <P>0117 544 801</P>

            </div>

            <div class="block-1">
                <h1>E-MAIL</h1>
                <P>info@hcs.com</P>

            </div>

        </div>

        <div class="detail-img">

            <img src="./images/undraw_delivery_re_f50b.svg" alt="map.png">

        </div>


    </section>

    <hr>

    <!--End Second section -->


        <!--Add script JS-->
        <script src="./Script-ContactUs/ContactUs.js"></script>

        
    
        <!----------------------------------------------------------------SocialMedia-------------------------------------------------------->
        <div class = "Logo">
            <div class = "hcsLogo">
                <img alt = "Logo" src = "images/logo/logo1.png" width = "160px" height = "120px">
            </div>
        </div>
        <div class = "social_icons">
            <div class = "icons">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href = "https://www.facebook.com/"><img alt = "facebook" src = "images/social icons/facebook.png" width = "40px" height = "40px"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </div>
            <div class = "icons">
                <a href = "https://www.twitter.com"><img alt = "twitter" src = "images/social icons/twitter.png" width = "40px" height = "40px"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </div>
            <div class = "icons">
                <a href = "https://www.instagram.com"><img alt = "instagram" src = "images/social icons/instagram.png" width = "40px" height = "40px"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </div>
            <div class = "icons">
                <a href = "https://www.googleplus.com"><img alt = "googleplus" src = "images/social icons/googleplus.png" width = "40px" height ="40px"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </div>
        </div>
        <br>
        <!------------------------------------------------------------------footer------------------------------------------------------------>
        <section class = "footer">
            <div class = "footer-menu">
                <ul>
                    <li><a style = "color:white;" href = "">Terms of Use</a></li>
                    <li><a style = "color:white;" href = "careers.html">Careers</a></li>
                    <li><a style = "color:white;" href = "FAQs.html">FAQs</a></li>
                    <li><a style = "color:white;" href = "">Contact US</a></li>
                </ul>
            </div> 
            <div class = "footer_copyright">
                <p id = "copyright" style = "color:white;">© 2022 Health Care Solutions.Designed and maintained by API (PVT) Ltd</p>
            </div>        
        </section>
    </body>
</html>