<?php
include('conn.php');
$error = 0;
	if(isset($_POST['InputName']) and isset($_POST['InputCountry']) and isset($_POST['InputEmail']) and isset($_POST['InputPassword'])){
	 $email = $_POST['InputEmail'];
	 $sql = "SELECT * FROM user where email='$email'";
	 $query = mysqli_query($con,$sql);
		if( mysqli_num_rows($query) > 0){
			header('Location:signup.php?error=1');
			exit;
		}
	 
	 $name = $_POST['InputName'];
	 $country =  $_POST['InputCountry'];;
	 $password = md5( $_POST['InputPassword'] );	
		$date =date("Y-m-d H:i:s");
		if($_POST['InputType'] == 'reader'){
		$type = 2;
		}else if( $_POST['InputType'] == 'author'){
		$type = 3;	
		}
		
	 $sql = "INSERT INTO user set email='$email', name='$name', password='$password', country = $country,type = $type, signup_date='$date' ";
	 
	 if(mysqli_query($con,$sql)){	
	 	header('Location:thankyou_signup.php?error=0');
	 }
	}else{
		header('Location:signup.php?error=2');
	
}


?>