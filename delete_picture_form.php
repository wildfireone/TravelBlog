<?php
session_start();
include('conn.php');
$error = 0;
	if(isset($_GET['id']) and isset($_SESSION['user']['id'])){
		
		$id = $_GET['id'];
		$owner =  $_SESSION['user']['id'];
			$sql ="SELECT
adventure.by_id,
uploads.name
FROM
uploads
INNER JOIN adventure ON uploads.adventure_id = adventure.id WHERE uploads.id = $id";
	 
	 $query = mysqli_query($con,$sql);

	
	 if(mysqli_num_rows($query) == 0){
		echo 'error';
		exit;
			
		}
		$row = mysqli_fetch_array($query);
		
		if($row['by_id'] != $owner){
			echo 'error';
			exit;
		}		

	 $sql2 ="DELETE FROM uploads WHERE id = $id";
	 
	 $query2 = mysqli_query($con,$sql2);
		unlink('./uploads/'.$row['name']);
	 	echo 'success';
	
	}else{
	 
	 
	 
	 echo 'error';
	 exit;
	
}


?>