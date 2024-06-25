<?php
$db = mysqli_connect("localhost:3307", "root", "", "registerphp");
if(!$db){
    die('error in db' . mysqli_error($db));
}
$id = $_GET['id']; 

$qry = "DELETE from  `registration` WHERE  `user_id` = '$id' "; 
$result= mysqli_query($db, $qry);

echo $result;

if($result){
    header('location: user.php');
}else{
    echo mysqli_error($db);
}
?>

