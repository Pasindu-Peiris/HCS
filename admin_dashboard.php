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
        <title>Health Care Solutions | Dashboard</title>
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
                margin-right: -5%;

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

            .dash{
                font-family: 'Noto Sans SC', sans-serif;
                display:flex;
                justify-content:center;
                
                
                


            }

            #clients{
                background-color: #54509E;
                width:500px;
                height:250px;
                text-align: left;
                border: 10px solid white;      
                font-size:30px;
                font-weight:900;
                color:white;
                text-align:center;

            }

            #clients i{
                text-align: right;

            }

            #plans{
                background-color: #54509E;
                width:500px;
                height:250px;
                text-align: left;
                border: 10px solid white;  
                font-size:30px;
                font-weight:900;
                color:white;   
                text-align:center; 

            }

            #plans i{
                text-align: right;

            }

            #policy{
                background-color: #54509E;
                width:500px;
                height:250px;
                text-align: left;
                border: 10px solid white;   
                font-size:30px;
                font-weight:900;
                color:white;
                text-align:center;   

            }

            #policy i{
                text-align: right;

            }

            #premiums{
                background-color: #54509E;
                width:500px;
                height:250px;
                text-align: left;
                border: 10px solid white; 
                font-size:30px;
                font-weight:900;
                color:white;     
                text-align:center;

            }

            #premiums i{
                text-align: right;

            }




        </style>
    </head>
    <body>
        <section class = "main_header" style = "border-bottom:1px solid gray;">
            <div id="mains">
                <button class="sidebtn" onclick="openSideBar()"><i class="fa-solid fa-bars"></i></button>
            </div>
            <div class = "header">
                <figure class = "logo_img">
                    <a href = "index.html"><img id = "logo" alt = "HCS Logo" src = "images/logo/test.png" width = "250px" height = "50px"></a>
                    <button class = "button login_btn" onclick = "window.location.href = 'admin_profile.php';"><b>Profile</b>&nbsp;&nbsp;&nbsp;<i class="fa-solid fa-user"></i></button>
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
            <a href="add_user/user.php"><center><i class="fa-solid fa-users"></i></i><br>Users</center></a>
            <hr><br><br><br><br><br>
            <a href="admin_logout.php"><center><i class="fa-solid fa-right-from-bracket"></i><br>Log Out</center></a>
        </div>
        <br><br><br><br><br><br><br>
            <div class = "dash">
                <div id = "clients" style = "background-color: #54509E;">
                    <p>Clients&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa-solid fa-people-group"></i></p>
                    <?php
                        include 'dbconfig.php';

                        $sql = mysqli_query($conn , "SELECT COUNT(*) AS Clients FROM clients;");
                        $data = mysqli_fetch_assoc($sql);

                        echo $data['Clients'];
                    ?>
                </div>
                <div id = "plans" style = "background-color:#54509E">
                    <p>Plans&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa-solid fa-box"></i></p>
                    <?php
                        include 'dbconfig.php';

                        $sql = mysqli_query($conn , "SELECT COUNT(*) AS Plans FROM plans;");
                        $data = mysqli_fetch_assoc($sql);

                        echo $data['Plans'];
                    ?>
                </div>
            </div>
            <div class = "dash">
                <div id = "policy" style = "background-color: #54509E;">
                    <p>Policy&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa-solid fa-credit-card"></i></p>
                    <?php
                        include 'dbconfig.php';

                        $sql = mysqli_query($conn , "SELECT COUNT(*) AS Policy FROM policy;");
                        $data = mysqli_fetch_assoc($sql);

                        echo $data['Policy'];
                    ?>
                </div>
                <div id = "premiums" style= "background-color: #54509E;">
                    <p>Premiums&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa-solid fa-money-bills"></i></p>
                    <?php
                        include 'dbconfig.php';

                        $sql = mysqli_query($conn , "SELECT SUM(policy_value) AS Policy_Value FROM policy;");
                        $data = mysqli_fetch_assoc($sql);

                        echo "Rs. " . $data['Policy_Value'];
                    ?>
                </div>
            </div>
        </section>
    </body>
</html>