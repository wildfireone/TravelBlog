<?php
session_start();
include('../conn.php');
if(!isset($_SESSION['admin'])){
	header('Location: index.php');	
	exit;
}

$sql = 'DELETE FROM adventure WHERE id = '.$_GET['id'];

mysqli_query($con,$sql);

$sql2 = 'DELETE FROM uploads WHERE adventure_id = '.$_GET['id'];

mysqli_query($con,$sql2);

$sql3 = 'DELETE FROM likes WHERE adventure_id = '.$_GET['id'];
mysqli_query($con,$sql3);

$sql4 = 'DELETE FROM comments WHERE adventure_id = '.$_GET['id'];
mysqli_query($con,$sql4);

header('Location: adventures.php?message=1');

?>