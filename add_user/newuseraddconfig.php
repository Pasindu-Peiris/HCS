<?php

$servername = "localhost:3307";
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
		
		
    $sql = "INSERT INTO  registration(fname, lname, address, tel, gender, dob, nicId, email, password ) Values ('$fname', '$lname', '$address' , '$tel' , '$gender' , '$dob' , '$nicId' , '$email' , '$password' ) ";	
	

}

if (mysqli_query($conn, $sql)) {
  echo "New User added successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>