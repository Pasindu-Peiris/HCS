<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
</head>

<body>

    <a href="../Contact us/index.php">LOGIN</a>
    <a href="../ADD Plan Page/LogOUT.php ">hmgm</a>
    <h1><?php

echo $_SESSION['name']."<br>". $_SESSION['email'];



?></h1>

</body>

</html>