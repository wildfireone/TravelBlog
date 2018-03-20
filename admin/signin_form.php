<?php
session_start();
include('../conn.php');
$error = 0;
	if(isset($_POST['email']) and isset($_POST['password'])){
	 $email = $_POST['email'];
	 $password = md5($_POST['password']);
	 $sql = "SELECT * FROM user where email='$email' and password='$password'";

	 $query = mysqli_query($con,$sql);
		
		if( mysqli_num_rows($query) < 1){
			header('Location:login.php?error=1');
			exit;
		}
	 
	 $row = mysqli_fetch_array($query);
	 
	 $_SESSION['admin']['id'] = $row['id'];		 
	 $_SESSION['admin']['email'] = $row['email'];	
	 $_SESSION['admin']['type'] = $row['type'];
	 $_SESSION['admin']['name'] = $row['name'];	
	if($row['type'] ==3){
		header('Location:index.php');
	}else{
		header('Location:index.php');	
	}
}


?>