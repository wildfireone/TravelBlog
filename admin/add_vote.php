<?php
session_start();
include('../conn.php');
if(!isset($_SESSION['admin'])){
	header('Location: index.php');	
	exit;
}

	$adventure_id = $_GET['id'];
	$liked_by =  $_SESSION['user']['id'];
	
	$sql2 ="INSERT INTO likes SET adventure_id = $adventure_id , liked_by = $liked_by";
	$query2 = mysqli_query($con,$sql2);
header('Location: manage_adventure.php?id='.$adventure_id.'&message=3');

?>