<?php
session_start();
include('conn.php');
$error = 0;
	if(isset($_GET['id']) and isset($_SESSION['user']['id'])){
		
		$adventure_id = $_GET['id'];
		$liked_by =  $_SESSION['user']['id'];
		
	$sql ="SELECT * FROM likes where adventure_id = $adventure_id and liked_by = $liked_by";
	 
	 $query = mysqli_query($con,$sql);

	
	 if(mysqli_num_rows($query) > 0){
		
			header('Location:./details.php?id='.$_GET['id']); 
		exit;
		}
		
	 $sql2 ="INSERT INTO likes SET adventure_id = $adventure_id , liked_by = $liked_by";
	 
	 $query2 = mysqli_query($con,$sql2);
	 	header('Location:details.php?id='.$_GET['id']);
	 
	}else{
	 header('Location:details.php?id='.$_GET['id']);
	
}


?>