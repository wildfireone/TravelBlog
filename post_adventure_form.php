<?php
session_start();
if(!isset($_SESSION['user'])){
	header('Location: ./index.php');	
	
}
include('conn.php');

//Array ( [InputAdventureTitle] => kaghan [InputAdventureCountry] => 162 [InputMessage] => khanan a beauty [apic] => Array ( [1] => sump_transparent.png [2] => shop.png ) [apic_default] => 1 [submit] => Signup )

$error = 0;
	if(isset($_POST['InputAdventureTitle']) and isset($_POST['InputAdventureCountry']) and isset($_POST['InputMessage']) ){
	 		
	 
	 $title = addslashes($_POST['InputAdventureTitle']);
	 $country = addslashes($_POST['InputAdventureCountry']);
	 $description =addslashes( $_POST['InputMessage']);
	 $tags = addslashes($_POST['InputAdventureTags']);
	 $by = $_SESSION['user']['id'];
	 $date = date("Y-m-d H:i:s");
	 
		$sql = "INSERT INTO adventure set title='$title', description='$description', country='$country',tags = '$tags', by_id='$by' ,date='$date' ";
	 if(mysqli_query($con,$sql)){	
		
		$last_adventure_id = mysqli_insert_id($con);
		$destination_image="./uploads/";
		
		
		foreach($_FILES['apic']['name'] as $imgid=>$imgname){
			
			//if($_FILES['apic']['error'][$imgid]==4) continue;
				
			$random_number_name = rand().$_FILES['apic']['name'] [$imgid];
			
			$destination_ran=	$destination_image.$random_number_name;
			
			$upload_files= copy($_FILES['apic']['tmp_name'] [$imgid],$destination_ran);
			
			if($upload_files){
					$product_default=0;
				if(isset($_POST['apic_default']) and $_POST['apic_default']==$imgid){
					
					$product_default=1;
					}
				$product_qury="INSERT INTO uploads SET name='".$random_number_name."', 	adventure_id='".$last_adventure_id."',	default_pic='".$product_default."' ";		
				$product_exe	= mysqli_query($con,$product_qury);
				
				
				}
			
				
		}
		
		header('Location:my_adventures.php?message=success');
	 }
	
	
	}else{
		header('Location:post_adventure.php?error=1');
	
}


?>
