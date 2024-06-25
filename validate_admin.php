<?php

$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "admin";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());

}

function test($data){
    $data = trim($data);
    $data = htmlspecialchars($data);
    return $data;

}

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $email = test($_POST["email"]);
    $password = test($_POST["password"]);
    $sql = $conn->prepare("SELECT * from admin_credentials");
    $sql->execute();

    //-----------------------------------------//
    $admins = $sql->get_result();                         //Uncaught Error: Call to undefined method mysqli_stmt::fetchAll()
    $data = $admins->fetch_all(MYSQLI_ASSOC);             //Solution ---> https://stackoverflow.com/questions/66401491/uncaught-error-call-to-undefined-method-mysqli-stmtfetchall
    //-----------------------------------------//                                     


    foreach($admins as $admin){
        if(($admin['email'] == $email)){
            if(($admin['password'] == $password)){
                header("location: admin_dashboard.php");       //redirects to the admin dashboard after sucessfull login

            }

        }else{
            function invalid_credentials(){
                echo "<script>alert('Invalid Credentials');</script>";
                echo "<script>window.location = 'admin_login.html';</script>";         //redirects to the same login page after login failed 

            }

            invalid_credentials();   

        }

        
    }
}

?>