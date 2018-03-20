<?php
session_start();
if(!isset($_SESSION['user'])){
	header('Location: ./index.php');	
	
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
              <h1>Post Adventure</h1>
        <div class="col-md-10 col-md-offset-1">
    <div class="row">

        <form role="form" action="post_adventure_form.php" method="post"  enctype="multipart/form-data">
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
                        <input type="text" class="form-control" name="InputAdventureTitle" id="InputAdventureTitle" placeholder="Enter Adventure Title" required width="100%">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputAdventureTags">Adventure Tags</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="InputAdventureTags" id="InputAdventureTags" placeholder="Enter Adventure Tags" required width="100%">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                   <div class="form-group">
                         <label for="InputAdventureCountry">Adventure Country</label> 
                         <div class="input-group"  style="width:100%">  
                             <select class="form-control" name="InputAdventureCountry" value="" style="width:100%">
                    <?php
                    $sql = "SELECT * FROM country";
										$query = mysqli_query($con,$sql);
										while($row = mysqli_fetch_array($query)){
										?>
                    
                                            <option value="<?php echo $row['id']?>"><?php echo $row['name']?></option>
                                                                  
                    <?php }?>
                                     </select>     
                        </div>
                        </div>
               <div class="form-group">
                         <label for="InputAdventureDescription">Adventure Description</label> 
                         <div class="input-group"  style="width:100%">  
                             <textarea name="InputMessage" id="InputAdventureDescription" class="form-control" rows="5" required=""></textarea>     
                        </div>
                        </div>
                  <div class="form-group">
                    <label for="InputAdventureTitle">Adventure Pictures</label>
                    <div class="input-group"  style="width:100%">
                    
                     <div id="apics">
              				<div id="apic1" style="margin-bottom:10px">
                				<div style="float:left;"><input type="file" class="form-control" name="apic[1]"></div>
                				<div class="frdio_butn"><input id="apic_default1" name="apic_default" value="1" type="radio" checked><label for="apic_default1">Default</label></div>
                				<div class="clear"></div>
              				</div>
            				</div>
               			<div class="form-group"> 
                     <div class="input-group"  style="width:100%">   
                     <input name="add1more" type="button" class="btn btn-secondery pull-right" value="Add 1 More" onclick="add_more()">
                    </div>
                    </div>
                    </div>
                </div>
                
                <input type="submit" name="submit" id="submit" value="Post Adventure" class="btn btn-secondery pull-right">
        </form>
        
    </div>
    </div>
</div>
</section>
    <?php include('footer.php');?>

</body>

</html>
