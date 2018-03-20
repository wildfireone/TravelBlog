<?php
session_start();
include('../conn.php');
if(!isset($_SESSION['admin'])){
	header('Location: index.php');	
	exit;
}
$sql4 = 'DELETE FROM comments WHERE adventure_id = '.$_GET['id'];
mysqli_query($con,$sql4);

header('Location: manage_adventure.php?id='.$_GET['id'].'&message=1');
?>