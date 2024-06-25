<?php

require("./config.php");

$valId = " ";
$valueName = "";
$valueEmail = "";
$valueNum = "";
$valueadd = "";
$valueMass = "";
$valueMas = " ";


$sql = "SELECT * FROM `contact_us`";

//RUN Above code in db
$result = mysqli_query($con, $sql);

//Check Above code run in Successfull in db 
if($result){

    //echo "Successfully";
}
else{
    echo "Not Successfully ";
}

//check no row in table
$numOfrow = mysqli_num_rows($result);

if($numOfrow > 0){

    $tableMasg = "<table><tr><th>ID</th><th>NAME</th><th>EMAIL</th><th>MOB. NUMBER</th>
                    <th>ADDRESS</th><th>MESSAGE</th></tr>";

    while($row = mysqli_fetch_array($result)){

       $tableMasg .="<tr>"."<td>".$row['id']."</td>"."<td>".$row['name']."</td>"."<td>".$row['email']."</td>".
       "<td>".$row['pnum']."</td>"."<td>".$row['address']."</td>"."<td>".$row['Message']."</td>"."</tr>";
    }

    $tableMasg .= "</table>";
}
else{

    $tableMasg = "Message Not Found !";
}


//search 

if(isset($_POST['submit1'])){

    $name = mysqli_real_escape_string($con, $_POST['text1']);
    $id = mysqli_real_escape_string($con, $_POST['text2']);

    $sql = "SELECT * FROM `contact_us` WHERE `name` = '$name'  AND  `id` = ' $id' ";

    $result = mysqli_query($con, $sql);

    //Check Above code run in Successfull in db 
    if($result){

        $numOfrow = mysqli_num_rows($result);

        if( $numOfrow > 0){

            $row = mysqli_fetch_assoc($result);

            $valId = $row['id'];
            $valueName = $row['Message'];
            $valueEmail = $row['email'];
            $valueNum = $row['pnum'];
            $valueadd = $row['address'];
            $valueMass = $row['Message'];
            
        } 

    }
    else{
        echo "Not Successfully ";
    }

}


//Remove

if(isset($_POST['submit2'])){

    $RId = $_POST['text3'];

    if(!empty($_POST['text3'])){

        $sql = "SELECT * FROM `contact_us` WHERE `id` = '$RId' ";
        
        $result = mysqli_query($con, $sql);

        if($result){

            $numofRow = mysqli_num_rows($result);

            if($numofRow > 0){

                $sql = "DELETE FROM `contact_us` WHERE `id` = '$RId'";

                $result = mysqli_query($con, $sql);

                if($result){

                    $valueMas = "Massage Removed";
    
                }
                else{

                    $valueMas = "Message Not Removed";
                }

            }
            else{

                $valueMas = "Result Not Found !";

            }


        }
        else{

            //echo "Not Connect";
        }

         
    }
    else{

        $valueMas = "Input Box Is Empty !";
    }

}

$con->close()

?>