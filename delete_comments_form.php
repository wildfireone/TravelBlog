<?php
session_start();
include('conn.php');
$error = 0;
	if(isset($_GET['id']) and isset($_SESSION['user']['id'])){
		$id = $_GET['id'];
	 $sql2 ="DELETE FROM comments WHERE id = $id";
	 mysqli_query($con,$sql2);
	 header('Location: ./details.php?id='.$_GET['adventure_id']);
	
}


?>