<?php
session_start();
include('conn.php');

if(!isset($_SESSION['user'])){
	header('Location: ./index.php');	
	
}
$adventure_id = $_GET['id'];
$sql = "SELECT
adventure.title,
adventure.country,
adventure.description,
adventure.by_id,
adventure.tags
FROM
adventure WHERE id = $adventure_id";

	$qry = 	mysqli_query($con,$sql);
	$row =  mysqli_fetch_array($qry);
	if($row['by_id'] != $_SESSION['user']['id'] ){
		echo 'You are not allowed to edit this adventure.';
		exit;
	}
	

?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CM3028: WEB APPLICATION DEVELOPMENT</title>

    <!-- Bootstrap Core CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="./css/full-width-pics.css" rel="stylesheet">
    
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
		<script defer src="./js/js.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<style>

.center form {
    display:inline-block;
}

</style>
</head>

<body>

    <!-- Navigation -->
    <?php include('outer_header.php');?>

    <!-- Full Width Image Header with Logo -->
    <!-- Image backgrounds are set within the full-width-pics.css file. -->
 <!--   <header class="image-bg-fluid-height">
        <img class="img-responsive img-center" src="images/grand-canyon-1083745_1920.jpg" alt="">
    </header>-->

    <!-- Content Section -->
    <section>
        <div class="container ">
              <h1>Edit Adventure</h1>
        <div class="col-md-10 col-md-offset-1">
    <div class="row">

        <form role="form" action="edit_adventure_form.php" method="post"  enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $_GET['id']?>">
            		<?php
                if(isset($_GET['error']) and $_GET['error']=='1'){?>
									<div class="alert alert-danger">
                    <span class="glyphicon glyphicon-remove"></span><strong> Error! All fields are mandatory.</strong>
                </div>
									
							<?php	}
                
                ?>
                
                <div class="well well-sm"><strong><span class="glyphicon glyphicon-asterisk"></span>Required Field</strong></div>
                <div class="form-group">
                    <label for="InputAdventureTitle">Adventure Title</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="InputAdventureTitle" id="InputAdventureTitle" value="<?php echo $row['title']; ?>" placeholder="Enter Adventure Title" required width="100%">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                 <div class="form-group">
                    <label for="InputAdventureTags">Adventure Tags</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="InputAdventureTags" id="InputAdventureTags" value="<?php echo $row['tags']; ?>"  placeholder="Enter Adventure Tags"  required width="100%">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                   <div class="form-group">
                         <label for="InputAdventureCountry">Adventure Country</label> 
                         <div class="input-group"  style="width:100%">  
                             <select class="form-control" name="InputAdventureCountry"  style="width:100%">
                    <?php
                    $sql = "SELECT * FROM country";
										$query = mysqli_query($con,$sql);
										while($row_con = mysqli_fetch_array($query)){
										?>
                    
                                            <option value="<?php echo $row_con['id']?>" <?php if($row['country'] ==$row_con['id']){echo 'selected'; }?> ><?php echo $row_con['name']?></option>
                                                                  
                    <?php }?>
                                     </select>     
                        </div>
                        </div>
               <div class="form-group">
                         <label for="InputAdventureDescription">Adventure Description</label> 
                         <div class="input-group"  style="width:100%">  
                             <textarea name="InputMessage" id="InputAdventureDescription" class="form-control" rows="5"  required=""><?php echo $row['description']; ?></textarea>     
                        </div>
                        </div>
                  <div class="form-group">
                    <label for="InputAdventureTitle">Adventure Pictures</label>
                    <div class="input-group"  style="width:100%">
                    
                     <div id="apics">
              				<div id="apic1" style="margin-bottom:10px">
                				<div style="float:left;"><input type="file" class="form-control" name="apic[1]"></div>
                				<div class="frdio_butn"><input id="apic_default1" name="apic_default" type="radio" checked><label for="apic_default1">Default</label></div>
                				<div class="clear"></div>
              				</div>
            				</div>
               			<div class="form-group"> 
                     <div class="input-group"  style="width:100%">   
                     <input name="add1more" type="button" class="btn btn-secondery pull-right" value="Add 1 More" onclick="add_more()">
                    </div>
                    </div>
                     <?php
               $sql_uploads= 'SELECT * FROM uploads WHERE adventure_id = '.$_GET['id'] ;
							 $query_uploads = mysqli_query($con,$sql_uploads);
							 
							if(mysqli_num_rows($query_uploads) > 0 ){ 
					echo '<strong>Already Uploaded Pictures:<br></strong>';
					$counter = 1;
									while( $row_uploads = mysqli_fetch_array($query_uploads)){
					$counter++;	
					?>
            
              <div class="col-lg-6"><img height="150" src="./uploads/<?php echo $row_uploads['name'];?>" /><input id="apic_default1" name="apic_default" value="<?php echo $counter;?>" type="radio" checked><label for="apic_default1">Default</label><br><input type="button" value="Delete this picture" onClick="delete_picture(<?php echo $row_uploads['id']; ?>)"  class="btn btn-danger" >  </div>
  	    		<?php }
								
							}?> 
                    
                    
                    
                    </div>
                </div>
                
                <input type="submit" name="submit" id="submit" value="Save Changes" class="btn btn-secondery pull-right">
        </form>
        
    </div>
    </div>
</div>
</section>

    <?php include('footer.php');?>

</body>
</html>
