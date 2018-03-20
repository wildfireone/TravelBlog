<?php
session_start();
include('../conn.php');
if(!isset($_SESSION['admin'])){
	header('Location: index.php');	
	exit;
}




$sql4 = 'DELETE FROM uploads WHERE adventure_id = '.$_GET['adventure_id'];
mysqli_query($con,$sql4);

header('Location: manage_adventure.php?id='.$_GET['adventure_id'].'&message=6');
?>