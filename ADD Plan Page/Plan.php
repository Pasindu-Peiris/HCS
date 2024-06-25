<?php

//get config.php
require("./config.php");


//create varible to Table data
$openBox = "";
$test1 ="";
$test2 ="";
$test3 =array();




//SQL CODE
$sql = "SELECT * FROM plan";

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
    $openBox .="<tr><th>PNUM</th><th>PID</th><th>Name</th><th>LIMIT</th></tr>";

    while($row = mysqli_fetch_assoc($result)){

        $openBox .= "<tr>"."<td>".$row['id']."</td>"."<td>".$row['pid']."</td>"."<td>".$row['pname']."</td>"."<td>".$row['limit']."</td>"."</tr>"."<br>";
    }

    $openBox .= "</table>";
   
}


//ADD PLAN PHP INSERT QURY      

if(isset($_POST['submit1'])){

    if(!empty($_POST['text1'])){

        $data_1 = mysqli_real_escape_string($con, $_POST['text1']);
        $data_2 = mysqli_real_escape_string($con, $_POST['text2']);
        $data_3 = mysqli_real_escape_string($con, $_POST['text3']);

        $sql = "INSERT INTO `plan` (`id`, `pid`, `pname`, `limit`) VALUES (NULL, '$data_1', '$data_2', ' $data_3')";

        $result = mysqli_query($con, $sql);

        //Qury RUN OK or NOT
        if($result){

            $test1= "<h3 style='color:#35bb00;'>Your Values Removed Successfully ✅</h3>";
           
            
            
        }
        else{

            $test1 = "<h3 style='color:red;'>Your Values added Not Successfully ❌</h3>";
            
        }
    }
    else{

        $test1 = "<h3 style='color:red;'>Your Input Box Is Empty! ❌</h3>";
        
    }

}




//REMOVE PLAN DELETE QURY

if(isset($_POST['submit2'])){

    if(!empty($_POST['text4']) && !empty($_POST['text5'])){

        $data_4 = mysqli_real_escape_string($con, $_POST['text4']);
        $data_5 = mysqli_real_escape_string($con, $_POST['text5']);

        //check data is in data base
        $sql = "SELECT * FROM `plan` WHERE `id`='$data_4' AND `pid`='$data_5'";

        $result1 = mysqli_query($con, $sql);

        //get rows in db
        $numOfRow = mysqli_num_rows($result1);

        //check values in db
        if($numOfRow > 0){


            $sql = "DELETE FROM `plan` WHERE `id` = '$data_4' AND `pid` = '$data_5'";
    
            $result = mysqli_query($con, $sql);
    
            if($result){
    
                $test2= "<h3 style='color:#35bb00;'>Your Values Removed Successfully ✅</h3>";
                
    
            }
            else{
    
                $test2 = "<h3 style='color:red;'>Your Values Removed Not Successfully ❌</h3>";
                    
            }
        }
        else{

            $test2 = "<h3 style='color:red;'>Your Values Is Not In DataBase ❌</h3>";
        }

        
    }
    else{

        $test2 = "<h3 style='color:red;'>Your Input Box Is Empty! ❌</h3>";

    }

}


//UPDATE PALN Qury
if(isset($_POST['submit3'])){

    if(empty($_POST['text6'])){

        $test3[] = "<h3 style='color:red;'>Your Input Box Is Empty! ❌</h3>";

    }
    if(empty($_POST['text7'])){

        $test3[] = "<h3 style='color:red;'>Your Input Box Is Empty! ❌</h3>";

    }
    if(empty($_POST['text8'])){

        $test3[] = "<h3 style='color:red;'>Your Input Box Is Empty! ❌</h3>";

    }
    

    //check array is empty or not
    if($test3 == NULL){

        $data_6 = $_POST['text6'];
        $data_7 = $_POST['text7'];
        $data_8 = $_POST['text8'];

        if($data_7 == 'pid' || $data_7 == 'PID'){

            $sql = "UPDATE `plan` SET `pid`='$data_8' WHERE `pid`='$data_6'";

            $result = mysqli_query($con, $sql);
    
            if($result){
    
                $test3[] =  "<h3 style='color:#35bb00;'>Your Values Removed Successfully ✅</h3>";
                
            }
            else{

                $test3[] = "<h3 style='color:red;'>Your Values Removed Not Successfully ❌</h3>";
            }

        }
        else if($data_7 == 'name' || $data_7 == 'NAME'){

            $sql = "UPDATE `plan` SET `pname`='$data_8' WHERE `pid`='$data_6'";

            $result = mysqli_query($con, $sql);
    
            if($result){
    
                $test3[] =  "<h3 style='color:#35bb00;'>Your Values Removed Successfully ✅</h3>";
                
            }
            else{

                $test3[] = "<h3 style='color:red;'>Your Values Removed Not Successfully ❌</h3>";
            }


        }
        else if($data_7 == 'limit' || $data_7 == 'LIMIT'){

            $sql = "UPDATE `plan` SET `limit`='$data_8' WHERE `pid`='$data_6'";

            $result = mysqli_query($con, $sql);
    
            if($result){
    
                $test3[] =  "<h3 style='color:#35bb00;'>Your Values Removed Successfully ✅</h3>";
               
            }
            else{

                $test3[] = "<h3 style='color:red;'>Your Values Removed Not Successfully ❌</h3>";
            }


        }
        else{

            $test3[] = "<h3 style='color:red;'>Your Column Name is Not in Database ❌</h3>";
        }
       
    }
    else{
        $test3[] = "<h3 style='color:red;'>Your Input Box Is Empty! ❌</h3>";
    }


}


$con->close();


?>