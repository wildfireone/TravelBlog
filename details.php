<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>The Travel Blog</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- bjqs.css contains the *essential* css needed for the slider to work -->
    <link rel="stylesheet" href="css/bjqs.css">

   
    <!-- demo.css contains additional styles used to set up this demo page - not required for the slider --> 
    <link rel="stylesheet" href="css/demo.css">

    <!-- load jQuery and the plugin -->
    <script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
    <script src="js/bjqs-1.3.min.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

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
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="section-heading">Adventure details</h1>
                    <p class="lead section-lead">Below are all details of the adventure.</p>
                </div>
            </div>
                        <?php 
				$sql = "SELECT
adventure.title,
adventure.tags,
adventure.description,
adventure.date,
adventure.`status`,
adventure.country,
country.`name` AS country_name,
adventure.id,
adventure.by_id,
(SELECT COUNT(*) FROM likes WHERE adventure_id = adventure.id ) AS likes,
(SELECT COUNT(*) FROM comments WHERE adventure_id = adventure.id ) AS comments

FROM
adventure
INNER JOIN country ON adventure.country = country.id
WHERE
adventure.id = ".$_GET{'id'}." AND 
adventure.`status` = 1 ";
						$query = mysqli_query($con,$sql);
						$row = mysqli_fetch_array($query);
					
						?>
            <div class="row">
                <div class="col-lg-12">
                    <p style="vertical-align:top"class="lead section-lead"><?php echo $row['title'];?></p>
                    <p style="vertical-align:top" ><?php echo $row['description'];?></p>
                    <p style="vertical-align:top" >Posted On: <?php echo $row['date'];?></p>
                    <p style="vertical-align:top" >Adventure Country: <?php echo $row['country_name'];?></p>
                </div>
               <?php
               $sql2= 'SELECT * FROM uploads WHERE adventure_id = '.$_GET['id'] ;
							 $query2 = mysqli_query($con,$sql2);
							 
							if(mysqli_num_rows($query2) > 0 ){ 
			
							 ?> 
                <div class="col-lg-12">
               

        <div id="banner-slide">
          <ul class="bjqs">
            <?php
            
							while( $row2 = mysqli_fetch_array($query2)){
						
						?>
            
            <li>
  	    	    <img src="uploads/<?php echo $row2['name'];?>">
  	    		</li>
          <?php }?>
          
          </ul>
        </div>
 

<?php }?>
                </div>
                </div>
               
                
                <div class="row">
                    <div class="col-lg-12" >
                <div class="alert alert-info">
                    <strong>Adventure Tags: </strong> <?php echo $row['tags']?>
                </div>
                </div>
                </div>
                <div class="row">
                    <div class="col-lg-12" ><div class="alert alert-warning">
                                                        
              <strong><?php echo $row['likes']; ?></strong> People voted,<strong><?php echo $row['comments']?></strong> comments.
              </div></div>
              </div>
              
                <div class="row">
               <div class="col-lg-12" style="height:10px;" ></div></div>
               <?php if(isset($_SESSION['user'])){?>
               		<?php if( $row['by_id'] != $_SESSION['user']['id'] ){?>
                  <div class="row">   <div class="col-lg-12" ><a href="./like_form.php?id=<?php echo $_GET['id'] ?>">Vote</a> this adventure.</div></div>
            	<?php }
               }else{?>
            			<div class="row"> <div class="col-lg-12" >Sign in to Vote or comment on this adventure.</div></div>
            <?php }?>
            <div class="row">
           		<div class="col-lg-12" >
              <section class="panel">
                              <header class="panel-heading">
                                  <strong>Recent Comments</strong>
                            </header>
            	<div class="panel-body table-responsive">
                                <table class="table table-hover">
                                  <thead>
                                    <tr>
                                      <th>Date</th>
                                      <th>Comments</th>
                                    </tr>
                              		</thead>
                              		<tbody>
																	<?php     $sql3= 'SELECT
comments.comments,
comments.id AS comments_id,
comments.commented_by,
`user`.`name`,
comments.date
FROM
comments
INNER JOIN `user` ON comments.commented_by = `user`.id

 WHERE adventure_id = '.$_GET['id'].' ORDER BY
comments.id DESC' ;
							 														 $query3 = mysqli_query($con,$sql3);
																					 
																	?>
                                  
                                	<?php while($row3 = mysqli_fetch_array($query3)){ ?>
                                  	<tr>
                                  <td><?php echo $row3['date'] ?></td>
                                  <td><strong><?php echo $row3['name']?></strong> said:<br><?php echo $row3['comments']?>
                                  <?php 
																	
																	if(isset($_SESSION['user']) and ($row3['commented_by']==$_SESSION['user']['id'] or $row['by_id'] == $_SESSION['user']['id'])){
														
														?>				
															<br><a href="./delete_comments_form.php?id=<?php echo $row3['comments_id'];?>&adventure_id=<?php echo $row['id']?>">Delete Comments</a> 			
																	<?php	}?>
                                  
                                  <?php if(isset($_SESSION['user']) and $row3['commented_by']==$_SESSION['user']['id']){
														?>				
																		- <a href="./edit_comments.php?id=<?php echo $row3['comments_id'];?>&adventure_id=<?php echo $row['id']?>">Edit comments</a>
                               			
																	<?php	}?>
                                  
                                  </td>
                              
                              </tr>
                              <?php }?>
                          </tbody>
                      </table>
                  </div>
                  </section>
              </div> 
            </div>
            <?php if(isset($_SESSION['user'])){?>
            			<div class="row"> 
                  	<div class="col-lg-12 col-xs-offset-1" >
                  	
                    
                <form role="form" action="comments_form.php" method="post">
            		<input type="hidden" name="id" value="<?php echo $_GET['id'];?>" />
                <div class="form-group">
                    <label for="InputComments">Comments</label>
                    <div class="input-group">
                    <textarea class="form-control" name="InputComments" id="InputComments" placeholder="Type Comments" required width="100%"></textarea>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                
                <input type="submit" name="submit" id="submit" value="Post Comments" class="btn btn-secondery pull-right">
        </form>
                    
                    
                    </div>
                   </div>
            <?php }?>
                        
            </div>
  </section>          
            
            
    <?php include('footer.php');?>
 
      <script>
        jQuery(document).ready(function($) {
          
          $('#banner-slide').bjqs({
            animtype      : 'slide',
            width         : 1000,
						height         : 1000,
            responsive    : true,
            randomstart   : true,
						animspeed : 3000 
          });
          
        });
      </script>
      <script src="js/libs/jquery.secret-source.min.js"></script>

    <script>
    jQuery(function($) {

        $('.secret-source').secretSource({
            includeTag: false
        });

    });
    </script>
</body>
 <!-- jQuery -->


<!--  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>-->

</html>
