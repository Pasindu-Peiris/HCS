<?php

$severname = "localhost:3307";
$username = "root";
$password = "";
$dbname = "dbuser";

$con = new mysqli($severname, $username, $password, $dbname);

if($con->connect_error)
{
    die("connection failed :". $con->connect_error);
}
else{

    //echo "connection successfully";
}



?>
