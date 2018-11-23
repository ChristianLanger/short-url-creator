<?php

// declare Variables
$host = '';
$user = '';
$pass = '';
$db = '';

// connect to mysql database 
// mysqli_connect("localhost","user","password","db")

$con = mysqli_connect($host, $user, $pass, $db) or die("<h2>The page is currently offline due to some error, please try again in a few moments...</h2>" . mysqli_error($con));


// Change character set to utf8
mysqli_set_charset($con,"utf8");

// Default Timezone Europe/Berlin
date_default_timezone_set('Europe/Berlin');


?>
