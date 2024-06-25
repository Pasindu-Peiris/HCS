
<?php

    //Connection

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "reg_doctor";

    $conn = mysqli_connect ($servername, $username, $password, $dbname);


     
   $query = "select * from reg_doctor";  
   $run = mysqli_query($conn,$query); 

    
   //Delete 

   if (isset($_GET['id'])) {  
         $id = $_GET['id'];  
         $query = "DELETE FROM `reg_doctor` WHERE `docId` =$id"; 
         $run = mysqli_query($conn,$query);  
         if ($run) {  
            header('location:Admin doctor.php');  
         }else{  
            echo "Error: ".mysqli_error($conn);  
         }  
   }  
 ?>
 
 
  
 <!DOCTYPE html>  
 <html>  
 <head>  
       
        <meta charset = "UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="HandheldFriendly" content="true">
        <title>Admin Doctor</title>
        <link rel = "icon" type = "image/x-icon" href = "images/logo/favicon.ico">
        <link rel="stylesheet" type="text/css" href="css/Admin Doctor style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+SC:wght@700&display=swap" rel="stylesheet">

         <!--Add FontAwsom kit-->
        <script src="https://kit.fontawesome.com/92800ec90a.js" crossorigin="anonymous"></script>
        <script src="navigation.js"></script>

 </head>  
 <body> 
   
      
        
      <header><a href = "index.html"><img id = "logo" alt = "HCS Logo" src = "images/logo/test.png" width = "250px" height = "50px"></a></header>
      
      
      <button id ='btn2'><a href="doctor.html">Add Doctor</a></button>
      
      <table border="1" cellspacing="0" cellpadding="0">  
         <tr class="heading">
            <th> No </th>  
           <th> Doctor ID </th>  
           <th> NIC </th>  
           <th> First Name </th>  
           <th> Last Name </th>  
           <th> Address </th>  
           <th> Mobile NO </th>  
           <th> Gender </th>  
           <th> DOB </th>
           <th> E-mail </th>
           <th> Password </th>
           <th>Update Details</th>
           <th>Remove Doctors</th> 
           
      </tr>  
      <?php   
      $i=1;  
           if ($num = mysqli_num_rows($run)>0) {  
                while ($result = mysqli_fetch_assoc($run)) {  
                     echo "  
                          <tr class='data'>  
                          <td>".$i++."</td>  
                               <td>".$result['docId']."</td>
                               <td>".$result['nic']."</td>  
                               <td>".$result['fName']."</td>  
                               <td>".$result['lName']."</td>  
                               <td>".$result['address']."</td>  
                               <td>".$result['telNo']."</td>  
                               <td>".$result['gender']."</td>
                               <td>".$result['dob']."</td>
                               <td>".$result['email']."</td>
                               <td>".$result['password']."</td>  
                               <td><a href='Update.php?id=".$result['docId']."' id='btn3'>Update</a></td>
                               <td><a href='Admin Doctor.php?id=".$result['docId']."' id='btn1'>Delete</a></td>

                          </tr>  
                     ";  
                }  
           }  
      ?>

      </table>
    
 
           


           <!--End First Section -->
        <!------------------------------------------------------------SocialMedia------------------------------------------------------------>
        
        <div class = "Logo" style = "border-top: 1px solid gray;">
            <div class = "hcsLogo">
                <br>
                <img alt = "Logo" src = "images/logo/new logo.png" width = "160px" height = "120px">
            </div>
        </div>
        <div class = "social_icons">
            <div class = "icons">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href = "https://www.facebook.com/"><img alt = "facebook" src = "images/social icons/facebook.png" width = "40px" height = "40px"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </div>
            <div class = "icons">
                <a href = "https://www.twitter.com"><img alt = "twitter" src = "images/social icons/twitter.png" width = "40px" height = "40px"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </div>
            <div class = "icons">
                <a href = "https://www.instagram.com"><img alt = "instagram" src = "images/social icons/instagram.png" width = "40px" height = "40px"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </div>
            <div class = "icons">
                <a href = "https://www.googleplus.com"><img alt = "googleplus" src = "images/social icons/googleplus.png" width = "40px" height ="40px"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </div>
        </div>
        <br>
        <!------------------------------------------------------------------footer------------------------------------------------------------>
        <section class = "footer">
            <div class = "footer-menu">
                <ul>
                    <li><a style = "color:white;" href = "">Terms of Use</a></li>
                    <li><a style = "color:white;" href = "careers.html">Careers</a></li>
                    <li><a style = "color:white;" href = "FAQs.html">FAQs</a></li>
                    <li><a style = "color:white;" href = "contact.php">Contact US</a></li>
                </ul>
            </div> 
            <div class = "footer_copyright">
                <p id = "copyright" style = "color:white;">© 2022 Health Care Solutions.Designed and maintained by API (PVT) Ltd</p>
            </div>        
        </section>
    </body>
</html>