<?php  
	include_once '../dbconnect.php';

	$random 	= $_POST['random']; 
	$longurl 	= $_POST['longurl'];
	$datetime = date('Y-m-d H:i:s');

	$query = "INSERT INTO urls (random, longurl, Datetime) VALUES ('" . $random . "', '" . $longurl . "', '" . $datetime . "')";
	mysqli_query($con, $query);

	echo $random;

?>