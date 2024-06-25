<?php
    session_start();
?>
<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset = "UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="HandheldFriendly" content="true">
        <title>Health Care Solutions | Edit Profile</title>
        <link rel = "icon" type = "image/x-icon" href = "images/logo/favicon.ico">
        <link rel = "stylesheet" type = "text/css" href = "styles/main.css">
        <link rel = "stylesheet" type = "text/css" href = "styles/login.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+SC:wght@700&display=swap" rel="stylesheet">

        <script src = "js/sideNav.js"></script>

        <!--Add FontAwsom kit-->
        <script src="https://kit.fontawesome.com/92800ec90a.js" crossorigin="anonymous"></script>
        <!-----Internal styles-->
        <style>
            .header{
                margin-top:-5.5%;
            
            }

            .logo_img{
                text-align: center;

            }

            #logo{
                margin-left: -2.5%;

            }

            .sidebar {
                height: 100%; 
                width: 0; 
                position: fixed; 
                z-index: 1; 
                top: 0;
                left: 0;
                background-color: #54509E; 
                overflow-x: hidden; 
                padding-top: 60px; 
                transition: 0.5s; 
            }


            .sidebar a {
                padding: 4px , 4px;
                text-decoration: none;
                font-size: 15px;
                color: white;
                display: block;
                

            }


            .sidebar a:hover {
                color: #f1f1f1;
            }           


            .sidebar .closebtn {
                position: absolute;
                top: 0;
                right: 25px;
                font-size: 36px;
                margin-left: 50px;
                color: solid white;
                
            }

            .sidebtn {
                color:#54509E;
                text-align: center;
                background-color:white;
                cursor:pointer;
                padding:1px;
                font-size: 25px;
                font-family: 'Noto Sans SC', sans-serif;
                width:100px;
                margin-top:0.45%;
                border:none;

            }

            #mains {
                transition: margin-left; 
                padding: 20px;

            }
            

            .container{
                display:flex;
                justify-content: center;
            
                

            }

            legend{
                font-family:'Noto Sans SC', sans-serif;
                color:#54509E;
                font-size:30px;
                font-weight:900;

            }


            label{
               text-align:left;
               font-family:'Noto Sans SC', sans-serif;
               font-size:15px;
               width:100px;
    
            }

            fieldset{
               width:125%;
               border-color:#54509E;
               border-radius:20px;

	        }

            input[type="text"]{
               width: 75%;
               text-align:center;
               color: solid black;
               padding: 12px 30px;
               margin: 8px 0;
               border-color: #54509E;
               border-radius: 4px;
               font-family: 'Noto Sans SC', sans-serif;
               cursor:text;

            }

            input[type="radio"]{
                cursor: pointer;

            }


        </style>
    </head>
    <body>
        <?php
            include 'adminDBconfig.php';

            $sql = mysqli_query($conn , "SELECT id FROM admin_credentials;");
            $data = mysqli_fetch_assoc($sql);

            $id = $data['id'];

        ?>

        <?php
        include 'adminDBconfig.php';

        if(isset($_POST['submit'])){
            $name = $_POST['name'];
            $age = $_POST['age'];
            $gender = $_POST['gender'];
            $address = $_POST['address'];

            $sql = mysqli_query($conn , "UPDATE admin_credentials SET name = '$name' , age = '$age' ,
                   gender = '$gender' , address = '$address' WHERE id = '$id';");

            function update(){
                echo "<script>alert('Update Successful');</script>";
                echo "<script>window.location = 'admin_profile.php';</script>";

            }

            update();

        }
        ?>
        <section class = "main_header" style = "border-bottom:1px solid gray;">
            <div id="mains">
                <button class="sidebtn" onclick="openSideBar()"><i class="fa-solid fa-bars"></i></button>
            </div>
            <div class = "header">
                <figure class = "logo_img">
                    <a href = "index.html"><img id = "logo" alt = "HCS Logo" src = "images/logo/test.png" width = "250px" height = "50px"></a>
                </figure>  
            </div>
        </section>
        <div id="sidebar" class="sidebar">
            <a href="javascript:void(0)" class="closebtn" onclick="closeSideBar()"><i class="fa-solid fa-xmark"></i></a>
            <hr><br>
            <a href="admin_dashboard.php"><center><i class="fa-solid fa-house"></i><br>Dashboard</center></a>
            <hr><br>
            <a href="/Add client/index.php"><center><i class="fa-solid fa-people-group"></i></i><br>Clients</center></a>
            <hr><br>
            <a href="/Add Plan Page/index.php"><center><i class="fa-solid fa-box"></i></i><br>Plans</center></a>
            <hr><br>
            <a href="#"><center><i class="fa-solid fa-credit-card"></i></i><br>Manage Policies</center></a>
            <hr><br>
            <a href="#"><center><i class="fa-solid fa-money-bills"></i><br>Premiums Paid</center></a>
            <hr><br>
            <a href="/add_user/user.php"><center><i class="fa-solid fa-users"></i></i><br>Users</center></a>
            <hr><br><br><br><br><br>
            <a href="admin_logout.php"><center><i class="fa-solid fa-right-from-bracket"></i><br>Log Out</center></a>
        </div>
        <br><br><br><br><br><br><br>
        <section>
            <div class="container">
                    <form action = "" method = "POST">
                        <fieldset>
                            <legend>Edit Profile</legend><br>
                            <label for = "Name">Name</label><br>
                            <input type = "text" name = "name" placeholder = "Name"><br><br>
                            <label for = "Age">Age</label><br>
                            <input type = "text" name = "age" placeholder = "Age"><br><br>
                            <label for = "Gender">Gender</label><br>
                            Male
                            <input type = "radio" name = "gender" value = "Male">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            Female
                            <input type = "radio" name = "gender" value = "Female"><br><br>
                            <label for = "Address">Address</label><br>
                            <input type = "text" name = "address" placeholder = "Address"><br><br>
                            <center>
                                <input type = "submit" name = "submit" value = "Done"><br><p></p>
                            </center>
                        </fieldset>
                    </form>
        </section>
    </body>
</html>