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
        <title>Health Care Solutions | Profile</title>
        <link rel = "icon" type = "image/x-icon" href = "images/logo/favicon.ico">
        <link rel = "stylesheet" type = "text/css" href = "styles/main.css">
        <link rel = "stylesheet" type = "text/css" href = "styles/login.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+SC:wght@700&display=swap" rel="stylesheet">

        <script src = "js/sideNav.js"></script>

        <?php
            include 'adminDBconfig.php';

            $sql = mysqli_query($conn , "SELECT id FROM admin_credentials;");
            $data = mysqli_fetch_assoc($sql);

            $id = $data['id'];

        ?>


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
                margin-left:-3%;

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
               width:500px;
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
    
    <?php
        include 'adminDBconfig.php';

        $sql = mysqli_query($conn , "SELECT name , age , gender , address FROM admin_credentials WHERE id = '$id';");
        $data = mysqli_fetch_assoc($sql);

        $name = $data['name'];
        $age = $data['age'];
        $gender = $data['gender'];
        $address = $data['address'];

    ?>
    <body>
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
            <a href="/Add Plan Page/index.php""><center><i class="fa-solid fa-box"></i></i><br>Plans</center></a>
            <hr><br>
            <a href="#"><center><i class="fa-solid fa-credit-card"></i></i><br>Manage Policies</center></a>
            <hr><br>
            <a href="><center><i class="fa-solid fa-money-bills"></i><br>Premiums Paid</center></a>
            <hr><br>
            <a href="/add_user/user.php"><center><i class="fa-solid fa-users"></i></i><br>Users</center></a>
            <hr><br><br><br><br><br>
            <a href="admin_logout.php"><center><i class="fa-solid fa-right-from-bracket"></i><br>Log Out</center></a>
        </div>
        <br><br><br><br><br><br><br>
        <section>
            <div class="container">
                    <form action = "admin_update.php" method = "POST">
                        <fieldset>
                            <legend>Profile</legend><br>
                            <label for = "Name"><b>Name</b>&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&emsp;<?php echo $name ?></label><br><br>
                            <label for = "Age"><b>Age</b>&nbsp;&nbsp;&nbsp;&nbsp;&emsp;&emsp;&nbsp;:&emsp;<?php echo $age ?></label><br><br>
                            <label for = "Gender"><b>Gender</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&emsp;<?php echo $gender ?></label><br><br> 
                            <label for = "Address"><b>Address</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&emsp;<?php echo $address ?></label><br><br>
                            <center>
                                <input type = "submit" value = "Edit"><br><p></p>
                            </center>
                        </fieldset>
                    </form>
        </section>
    </body>
</html>