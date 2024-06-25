<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset = "UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="HandheldFriendly" content="true">
        <title>Add New User</title>
        <link rel = "icon" type = "image/x-icon" href = "images/logo/favicon.ico">

        <link rel = "stylesheet" type = "text/css" href = "style/newuseradd.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+SC:wght@700&display=swap" rel="stylesheet">

        <!--Add FontAwsom kit-->
        
        <script src="https://kit.fontawesome.com/92800ec90a.js" crossorigin="anonymous"></script>
        
    </head>
    <body>
       
        <!--Strat First Section -->

<section id="First-sec">

    <!--<div class="first-img">
    
        <img src="./logo/undraw_modern_design_re_dlp8.svg">
    
    </div>-->
    
    <div class="from-body">

        <form method="POST" action="newuseraddconfig.php">
            <fieldset>
                <legend>Add New User</legend>
                    <label for="fname">First Name <span>*</span></label><br>
                    <input type="text" name="fname" value="" required><br>
            
                    <label for="lname">Last Name <span>*</span> </label><br>
                    <input type="text" name="lname" value="" required><br>
            
                    <label for="address">Address </label><br>
                    <input type="text" name="address" value=""><br>
            
                    <label for="tel">Mobile Number <span>*</span> </label><br>
                    <input type="tel" name="tel" pattern="[0-9]{10}" value="" required><br>
            
                    <div class="line-text">
            
                        <div class="gender">
            
                            <p>Gender</p>
            
                            <input type="radio" name="gender" value="Male">
                            <label for="gender-1">Male</label>
            
                            <br>
            
                            <input type="radio" name="gender" value="Female">
                            <label for="gender-1">Female</label>
            
                        </div>
            
                        <div class="dob">
            
                            <label for="dob">Date Of Birth <span>*</span></label><br>
                            <input type="date" name="dob" value="" required><br>
            
                        </div>
            
                    </div>
            
                    <br>
                     <label for="nicId">NIC<span>*</span></label><br>
                    <input type="text" name="nicId" value="" required>
            
                    <label for="Email">E-mail Address <span>*</span> </label><br>
                    <input type="email" name="email"  value="" required><br>
            
            
                    <label for="Password">Password <span>*</span></label><br>
                    <input type="password" name="password" id="password" value="" required><br>
                    
                    


                    
                    
                    <!-- <p id="message">  </p> <br> -->
            
        
                    <input type="submit" name="submit" onclick="checkPassword()" value="Submit">

                    
    
            </fieldset>       
        </form>
        

    
    
    
    </div>
    
    
    </section>