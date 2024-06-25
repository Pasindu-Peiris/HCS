<?php

//get config.php
require("./config.php");


//create varible to Table data
$openBox = "";
$test1 = "";


//SQL CODE
$sql = "SELECT * FROM `user-det`";

//RUN Above code in db
$result = mysqli_query($con, $sql);

if($result)
{
    //echo "Successfully";
}
else{
    echo "Not Successfully";
}
//get Number Of Rows
$numOfRow  = mysqli_num_rows($result);

//check Number
if($numOfRow > 0){
    
    $openBox = "<table>";
    $openBox .="<tr><th>FNAME</th><th>LNAME</th><th>ADDRESS</th><th>TEL-NO</th><th>GENDER</th><th>DOB</th><th>NIC</th><th>EMAIL</th><th>PASSWORD</th><th>UID</th></tr>";

    while($row = mysqli_fetch_assoc($result)){

        $openBox .= "<tr>"."<td>".$row['fname']."</td>"."<td>".$row['lname']."</td>"."<td>".$row['address']."</td>"."<td>".$row['tel']."</td>"."<td>"
        .$row['gender']."</td>"."<td>".$row['dob']."</td>"."<td>".$row['nic']."</td>"."</td>"."<td>".$row['email']."</td>"."<td>".$row['password']."</td>"."<td>".$row['uid']."</td>"."</tr>"."<br>";
    }

    $openBox .= "</table>";
   
}




//ADD PLAN PHP INSERT QURY      

if(isset($_POST['submit1'])){


    $data_1 = mysqli_real_escape_string($con, $_POST['text1']);
    $data_2 = mysqli_real_escape_string($con, $_POST['text2']);
    $data_3 = mysqli_real_escape_string($con, $_POST['text3']);
    $data_4 = mysqli_real_escape_string($con, $_POST['text4']);
    $data_5 = mysqli_real_escape_string($con, $_POST['text5']);
    $data_6 = mysqli_real_escape_string($con, $_POST['text6']);
    $data_7 = mysqli_real_escape_string($con, $_POST['text7']);
    $data_8 = mysqli_real_escape_string($con, $_POST['text8']);
    $data_9 = $_POST['gender'];
    $data_11 = $_POST['text9'];

    $data_10 = md5($data_8);

    $sql = "INSERT INTO `user-det` VALUES ('$data_1','$data_2','$data_3','$data_4 ','$data_9','$data_5','$data_6','$data_7','$data_10', '$data_11')";


    $result = mysqli_query($con, $sql);

    //Qury RUN OK or NOT
    if($result){

    $test1= "Your Values added Successfully ";
        
    }
    else{

    $test1 = "Your Values added Not Successfully ";
            
    }
   

}


$con->close();

?>