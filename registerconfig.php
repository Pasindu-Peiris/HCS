<?php

$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "registerphp";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['submit'])){
   
   
   $fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$address = $_POST['address'];
		$tel = $_POST['tel'];
		$gender = $_POST['gender'];
		$dob = $_POST['dob'];
		$nicId = $_POST['nicId'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$conpassword = $_POST['conpassword'];
		
    $sql = "INSERT INTO  registration(fname, lname, address, tel, gender, dob, nicId, email, password, conpassword) Values ('$fname', '$lname', '$address' , '$tel' , '$gender' , '$dob' , '$nicId' , '$email' , '$password' , '$conpassword') ";	
	

}

if (mysqli_query($conn, $sql)) {
  echo "User added successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>