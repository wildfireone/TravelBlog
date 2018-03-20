<?php
session_start();
if(!isset($_SESSION['user'])){
	header('Location: ./index.php');	
	
}
include('conn.php');

$error = 0;
	if(isset($_POST['id']) and isset($_POST['adventure_id']) and isset($_SESSION['user']['id']) ){
	
	$comments = addslashes($_POST['InputComments']);
	$id = $_POST['id'];
	$adventure_id = $_POST['adventure_id'];	
		$sql = "UPDATE comments set comments = '$comments' WHERE id= $id ";
	 
	 if(mysqli_query($con,$sql)){	
		
		header('Location:details.php?id='.$adventure_id.'&message=comments_edited_success');
	 exit;
	 }
	
	
	}else{
		echo 'parameters missing';
	
}


?>