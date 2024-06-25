<?php
$db = mysqli_connect("localhost:3307", "root", "", "registerphp");
if(!$db){
    die('error in db' . mysqli_error($db));
} else {
$id = $_GET['id']; 
$qry = "select * from registration where user_id = $id";
$run = $db-> query($qry);
if($run -> num_rows > 0){
    while($_POST =  $run -> fetch_assoc()){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $address = $_POST['address'];
    $tel = $_POST['tel'];
    $gender =  $_POST['gender'];
    $dob =$_POST['dob'];
    $nicId = $_POST['nicId'];
    $email = $_POST['email'];
    $password = $_POST['password'];


    
   
}

}
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
    <link rel = "stylesheet" type = "text/css" href = "style/updateuser.css">
</head>
<body>
    <div class="from-body">
        <form method="post">

        <fieldset>
                <legend>Update User</legend>
                    <label for="fname">First Name <span>*</span></label><br>
                    <input type="text" name="fname" value="" ><br>
            
                    <label for="lname">Last Name <span>*</span> </label><br>
                    <input type="text" name="lname" value="" ><br>
            
                    <label for="address">Address </label><br>
                    <input type="text" name="address" value=""><br>
            
                    <label for="tel">Mobile Number <span>*</span> </label><br>
                    <input type="tel" name="tel" pattern="[0-9]{10}" value="" ><br>
            
                    <div class="line-text">
            
                        <div class="gender">
            
                            <p>Gender</p>
            
                            <input type="radio" name="gender" value="Male">
                            <label for="gender-1">Male</label>
            
                            <br>
            
                            <input type="radio" name="gender" value="Female">
                            <label for="gender-1">Female</label>
            
                        </div>
            
                        <div class="dob">
            
                            <label for="dob">Date Of Birth <span>*</span></label><br>
                            <input type="date" name="dob" value="" ><br>
            
                        </div>
            
                    </div>
            
                    <br>
                     <label for="nicId">NIC<span>*</span></label><br>
                    <input type="text" name="nicId" value="" > <br>
            
                    <label for="Email">E-mail Address <span>*</span> </label><br>
                    <input type="email" name="email"  value="" ><br>
            
            
                    <label for="Password">Password <span>*</span></label><br>
                    <input type="password" name="password" id="password" value="" ><br>
                    



        <input type="submit" name="update" value="Update">
        </fieldset>
        </form>
</div>
</body>
</html>

<?php
if(isset($_POST['update'])) {
    

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $address = $_POST['address'];
    $tel = $_POST['tel'];
    $gender =  $_POST['gender'];
    $dob =$_POST['dob'];
    $nicId = $_POST['nicId'];
    $email = $_POST['email'];
    $password = $_POST['password'];




   

    $qry = "update registration set fname='$fname', laname = '$lname' ,  address= '$address', tel='$tel', gender='$gender' ,
    dob='$dob', nicId='$nicId', email='$email', password='$password'  where user_id = $id";
    if(mysqli_query($db, $qry)){
        header('location: user.php');
    }else{
        echo mysqli_error($db);
    }
}
?>