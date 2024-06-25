<?php

if(isset($_POST['update']))
{

    //Connection

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "reg_doctor";

    $conn = mysqli_connect ($servername, $username, $password, $dbname);

    $fName = $row['fName'];
    $lName = $row['lName'];
    $email = $row['email'];
    $telNo = $row['telNo'];
    $password = $row['password'];


    $sql ="UPDATE `reg_doctor` SET `fName`='".$fName."',`lName`='".$lName."',`address`='".$address."',`telNo`='".$telNo."',`email`='".$email."',`password`='".$password."' WHERE 'id' = $docId";

    $result = mysql_query($conn,$sql);

    if($result)
    {
        echo("Updated");
    }
    else
    {
        die(mysqli_error($conn));
    }


}

?>


<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset = "UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="HandheldFriendly" content="true">
        <title>Update Details</title>
        <link rel = "icon" type = "image/x-icon" href = "images/logo/favicon.ico">
        <link rel = "stylesheet" type = "text/css" href = "css/style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+SC:wght@700&display=swap" rel="stylesheet">

        <!--Add FontAwsom kit-->
    
        <script src="https://kit.fontawesome.com/92800ec90a.js" crossorigin="anonymous"></script>
    
    </head>
    <body>
        
        <section class = "main_header" style = "border-bottom:1px solid gray;">
            <div class = "header">
                <figure class = "logo_img">
                    <a href = "index.html"><img id = "logo" alt = "HCS Logo" src = "images/logo/test.png" width = "250px" height = "50px"></a>
                </figure>  
            </div>
        </section>
    
        <!--Strat First Section -->

<section id="First-sec">

    <!--<div class="first-img">
    
        <img src="./logo/undraw_modern_design_re_dlp8.svg">
    
    </div>-->
    
    <div class="from-body">

        <form method="POST">
            <fieldset>
                <legend>Update Details</legend>
                    <label for="fName">First Name <span>*</span></label><br>
                    <input type="text" name="fName" value="" required><br>
            
                    <label for="lName">Last Name <span>*</span> </label><br>
                    <input type="text" name="lName" value="" required><br>
            
                    <label for="address">Address </label><br>
                    <input type="text" name="address" value=""><br>
            
                    <label for="telNo">Mobile Number <span>*</span> </label><br>
                    <input type="tel" name="telNo" value="" required><br> 

                    
            
                    <label for="Email">E-mail Address <span>*</span> </label><br>
                    <input type="email" name="email" value="" required><br>
            
            
                    <label for="Password">Password <span>*</span></label><br>
                    <input type="password" name="password" value="" required><br>
            
                     
            
            
                    <input type="submit" name="submit" value="Save Changes">

    
            </fieldset>       
        </form>

    
    
    
    </div>
    
    
    </section>
    
    <!--End First Section -->
        <!----------------------------------------------------------------SocialMedia-------------------------------------------------------->
        <br>
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
                    <li><a style = "color:white;" href = "contact.php">Contact US</a></li>
                </ul>
            </div> 
            <div class = "footer_copyright">
                <p id = "copyright" style = "color:white;">© 2022 Health Care Solutions.Designed and maintained by API (PVT) Ltd</p>
            </div>        
        </section>
    </body>
</html>