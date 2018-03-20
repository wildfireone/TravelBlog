<?php
session_start();
include('conn.php');
$error = 0;
	if(isset($_POST['id']) and isset($_SESSION['user']['id'])){
		
		$comments = addslashes($_POST['InputComments']);
		$comments = str_replace('<script>','',$comments);
		$adventure_id = $_POST['id'];
		$commented_by =  $_SESSION['user']['id'];
		$date = $date =date("Y-m-d H:i:s");
		
	 $sql2 ="INSERT INTO comments SET adventure_id = $adventure_id , commented_by = $commented_by, comments = '$comments' ,date = 	'$date' ";
	 
	 $query2 = mysqli_query($con,$sql2);
	 	header('Location:details.php?id='.$_POST['id']);
	 
	}else{
	 header('Location:details.php?id='.$_POST['id']);
	
}


?>
