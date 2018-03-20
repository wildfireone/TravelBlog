<?php 
	
	$con = new mysqli('localhost','wanderdb','L0v3Trav31') or die(mysqli_error($con));
	$con->select_db("traveldb");

	/*$con = new mysqli('br-cdbr-azure-south-a.cloudapp.net','b1dd199c1d940e','f4357732') or die(mysqli_error($con));
	$con->select_db("NG1314785");*/
?>
