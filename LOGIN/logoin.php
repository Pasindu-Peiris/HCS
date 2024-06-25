<?php

require('./config.php');

//create varible massage
$happend = array();

//start session
session_start();



if (isset($_POST['submit'])) {


    $user_email = mysqli_real_escape_string($con, $_POST['email']);
    $user_password = md5(mysqli_real_escape_string($con, $_POST['password']));

    //check input Empty
    if(empty($user_email) || empty($user_password) ){

        $happend[] = "<h3 style='color:red;'>Empty IN&nbsp <i class='fa-solid fa-handshake-slash'></i></h3>";    
    }

    //SQL SELECT DATA FROM TABLE
    $sql = "SELECT `email` , `password` FROM `user-det` WHERE `email`='$user_email' AND `password`='$user_password' ";

    //
    $result = mysqli_query($con, $sql);

    if($result)
    {
        //echo "Successfully";
    }
    else{

        echo "Not Successfully";
    }

    //Find ROWs in Table 
    $numOfRows = mysqli_num_rows($result);

    if($numOfRows == 0)
    {
        
        $happend[] = "<h3 style='color:red;'>Invalid Password \ User Email &nbsp <i class='fa-solid fa-handshake-slash'></i></h3>";
        
    }
    else{

        $sql = "SELECT * FROM `user-det` WHERE `email`='$user_email' ";

        $result = mysqli_query($con, $sql);

        $numOfRows = mysqli_num_rows($result);

        if($numOfRows == 1){

            //echo "Successfully";

            $row = mysqli_fetch_assoc($result);

            $_SESSION['fname'] = $row['fname'];
            $_SESSION['lname'] = $row['lname'];
            $_SESSION['address'] = $row['address'];
            $_SESSION['tel'] = $row['tel'];
            $_SESSION['gender'] = $row['gender'];
            $_SESSION['dob'] = $row['dob'];
            $_SESSION['nic'] = $row['nic'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['uid'] = $row['uid'];

            //move Home Page
            header('Location:hh.php');
            
        }
        else{

            echo "Not Successfully";
        }

        
    }
   

}

$con->close();

?>