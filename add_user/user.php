<?php $db = mysqli_connect("localhost:3307", "root", "", "registerphp" ); ?>
<DOCTYPE html>
 <html>
 <head>
 <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-----------Add the title------->
    <title>Add User | Health Care Solutions </title>

    <!---Add fav icon --->
    <link rel="shortcut icon" href="./Image/favicon.ico">

    <!---Add fontawosem-->
    <script src="https://kit.fontawesome.com/92800ec90a.js" crossorigin="anonymous"></script>

    <!---------Add google font ------>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bungee+Spice&family=Lato:ital,wght@0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=M+PLUS+Rounded+1c:wght@100;300;400;500;700;900&family=Noto+Sans+SC:wght@100;300;400;500;700;900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200&family=Oswald:wght@200;300;400;500;600;700&family=Permanent+Marker&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!--Add css file-->
    <link rel="stylesheet" type="text/css" href="./Style/adduser-style.css">


     <title>Add User</title>


     <link rel="stylesheet" type="text/css" href="./Style/adminadduser.css">
 </head>
 <body>
    <!--Start navigation-->
    <nav id="navigation">

        <div class="menubut" id="menubut">
            <i class="fa-solid fa-bars" id="open"></i>
        </div>
        <div class="logo-icon">
            <img src="./Image/test.png" alt="logo.png" id="Logo">
        </div>
        <div class="admin-icon">
            <a href="admin_profile.php" class="admin-but">Profile</a>
            <i class="fa-solid fa-user " id="fauser-one"></i>
        </div>
    </nav>
    <!--End Navigation-->

    <!--Start menu-->
    <section id="slider">
        <ul>
            <li><i class="fa-solid fa-xmark" id="close"></i></li>
            <a href = "/Project1/admin_dashboard.php"><li><i class="fa-solid fa-house"></i></a><br>Home</li>
            <a href = "/Project1/Add client/index.php"><li><i class="fa-solid fa-users"></i></a><br>Client</li>
            <a href = "/Project1/Add Plan Page/index.php"><li><i class="fa-solid fa-box"></i></a><br>Plans</li>
            <li><i class="fa-solid fa-money-bill"></i><br>Premiums Paid</li>
            <a href = "/Project1/add_user/user.php"><li><i class="fa-regular fa-user"></i></a><br>User</li>
            <a href = "/Project1/Admin-massage/index.php"><li><i class="fa-regular fa-handshake"></i></a><br>Massages</li>
            <a href = "/Project1/admin_logout.php"><li><i class="fa-solid fa-right-from-bracket fa-out"></i></a><br>Log Out</li>

        </ul>
    </section>
    <!--End menu-->

    <div class="boxOpen">

          <section>  

            <div id="dropDwon">
                <?php

                echo "$openBox";

                ?>

            </div>


            </section>

     

 
           
           
<div id="add-palne">

     <h3>User List</h3>
     <a class="newuser" href="newuseradd.php" role="button">New User</a>
     <table style = "width: 80%" border="1">
     <tr>
        <th>User Id</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Address</th>
        <th>Phone</th>
        <th>Gender</th>
        <th>Date Of Birth</th>
        <th>NIC</th>
        <th>Email</th>
        <th>Password</th>
        <th>Operations</th>
    </tr>
</div>
        <?php
        $i = 1;
        $qry = "select * from registration";
        $run = $db -> query($qry);
        if($run -> num_rows > 0){
            while($row = $run -> fetch_assoc()){
                $id = $row['user_id'];
                

            
        ?>
        <tr>
            <td><?php echo $i++ ?> </td>
            <td><?php echo $row['fname']?></td>
            <td><?php echo $row['lname']?></td>
            <td><?php echo $row['address']?></td>
            <td><?php echo $row['tel']?></td>
            <td><?php echo $row['gender']?></td>
            <td><?php echo $row['dob']?></td>
            <td><?php echo $row['nicId']?></td>
            <td><?php echo $row['email']?></td>
            <td><?php echo $row['password']?></td>
            <td>
                <a class=edit href= "edit.php?id=<?php echo $id; ?>">Edit</a>
                <a class=edit href= "delete.php?id=<?php echo $id; ?>>"  onclick="return confirm('Are you sure')">Delete</a> 


            </td>


        </tr>
            
        
    <?php
            }
        }
    ?>

    </table>




<!--add js file-->
<script src="./JS Script/adduser-JS.js"></script>

 </body>
 </html>


