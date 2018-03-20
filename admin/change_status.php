<?php
session_start();
include('../conn.php');
if(!isset($_SESSION['admin'])){
	header('Location: index.php');	
	exit;
}

$sql = 'UPDATE user set status = '.$_GET['status'].' WHERE id = '.$_GET['id'];
mysqli_query($con,$sql);
header('Location: index.php?message=1');

?>