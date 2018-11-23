<?php

// declare Variables
$host = '';
$user = '';
$pass = '';
$db = '';

// connect to mysql database 
$con = mysqli_connect($host, $user, $pass, $db) or die("<h2>The page is currently offline due to some error, please try again in a few moments...</h2>" . mysqli_error($con));

?>
