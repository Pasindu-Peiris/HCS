<?php

require('./Plan.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-----------Add the title------->
    <title>Add Plan |  </title>

    <!---Add fav icon --->
    <link rel="shortcut icon" href="./Image/test.png">

    <!---Add fontawosem-->
    <script src="https://kit.fontawesome.com/92800ec90a.js" crossorigin="anonymous"></script>

    <!---------Add google font ------>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bungee+Spice&family=Lato:ital,wght@0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=M+PLUS+Rounded+1c:wght@100;300;400;500;700;900&family=Noto+Sans+SC:wght@100;300;400;500;700;900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200&family=Oswald:wght@200;300;400;500;600;700&family=Permanent+Marker&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!--Add css file-->
    <link rel="stylesheet" type="text/css" href="./Style/plan-style.css">

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
            <a href="" class="admin-but">Admin</a>
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

    <!---Start add palne-->
    <section id="add-palne">

        <h1 class="head">PLAN PAGE</h1>
        <div class="boxOpen">

            <div class="button">
                <button id="refresh">refresh</button>
                <button id="button">Hide Plan</button>
                <button id="button1">Add Plan</button>
                <button id="button2">Remove Plan</button>
                <button id="button3">UPdate Plan</button>
            </div>

            <div id="dropDwon">
                <?php

                echo "$openBox";

                ?>

            </div>

            <!--strat form dev-->
            <div class="form-input" id="input-add">

                <!--start form-->
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <fieldset>
                        <legend>Add Plan</legend>
                        <label for="text">Enter Plan ID </label>
                        <input type="text" value="" name="text1" require><br>
                        <label for="text">Enter Plan Name </label>
                        <input type="text" value="" name="text2" require><br>
                        <label for="text">Enter Age Limite </label>
                        <input type="text" value="" name="text3" require><br>
                        <input type="submit" value="ADD" name="submit1"><br>
                        <?php echo "$test1"; ?>
                    </fieldset>
                </form>
                <!--End Form-->

            </div>

            <!--strat form dev-->
            <div class="form-input" id="input-remove">

                <!--start form-->
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <fieldset>
                        <legend>remove Plan</legend>
                        <label for="text">Enter PNUM </label>
                        <input type="text" value="" name="text4" require><br>
                        <label for="text">Enter PID </label>
                        <input type="text" value="" name="text5" require><br>
                        <input type="submit" value="REMOVE " id="remove" name="submit2">
                        <?php 

                        echo "$test2"; 

                        ?>
                    </fieldset>
                </form>
                <!--End Form-->

            </div>

            <!--strat form dev-->
            <div class="form-input" id="input-update">

                <!--start form-->
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <fieldset>
                        <legend>UPdate Plan</legend>
                        <label for="text">Enter Plan ID</label>
                        <input type="text" value="" name="text6" require><br>
                        <label for="text">Enter <span>column</span> name to Update </label>
                        <input type="text" value="" name="text7" placeholder="EX :- NAME | name / ID | id" require><br>
                        <label for="text">Enter Update<span> Column Value</span> </label>
                        <input type="text" value="" name="text8" require><br>
                        <input type="submit" value="Update" name="submit3">

                        <?php

                        foreach($test3 as $value){

                            echo $value;

                        }
                        
                        ?>
                    </fieldset>
                </form>
                <!--End Form-->

            </div>


    </section>



    <!--add js file-->
    <script src="./JS Script/plan-JS.js"></script>

</body>

</html>