<?php
session_start();
include('../conn.php');
if(!isset($_SESSION['admin'])){
	header('Location: login.php');	
	
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>The Travel Blog: ADMIN PANEL</title>

    <!-- Bootstrap core CSS -->

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="fonts/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="css/custom.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/maps/jquery-jvectormap-2.0.1.css" />
    <link href="css/icheck/flat/green.css" rel="stylesheet" />
    <link href="css/floatexamples.css" rel="stylesheet" type="text/css" />

    <script src="js/jquery.min.js"></script>
   
    
    <!--[if lt IE 9]>
        <script src="../assets/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>


<body class="nav-md">

    <div class="container body">


        <div class="main_container">

            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">

                    <div class="navbar nav_title" style="border: 0;">
                        <a href="index.html" class="site_title"> <span>The Travel Blog - ADMIN PANEL</span></a>
                    </div>
                    <div class="clearfix"></div>

                
                    <!-- sidebar menu -->
                    <?php include('left.php');?>
                    <!-- /sidebar menu -->

                   
                </div>
            </div>

            <!-- top navigation -->
            <div class="top_nav">

                <div class="nav_menu">
                    <nav class="" role="navigation">
                        <div class="nav toggle">
                        
                        </div>

                       
                    </nav>
                </div>

            </div>
            <!-- /top navigation -->


            <!-- page content -->
            
           	  <!-- page content -->
            <div class="right_col" role="main">

                <!-- top tiles -->
                <div class="row tile_count">
                <div class="row">
           		<div class="col-lg-12" >
                 <?php
                if(isset($_GET['message'])){
									if($_GET['message']==1){	
									?>
								<div class="alert alert-success">
                    <strong><span class="glyphicon glyphicon-ok"></span> Success! Specific comments have been deleted successfully.</strong>
                </div>
									
							<?php }else if($_GET['message']==2){?>
								<div class="alert alert-success">
                    <strong><span class="glyphicon glyphicon-ok"></span> Success! All comments have been deleted successfully.</strong>
                </div>
								
								<?php }else if($_GET['message']==3){?>
								<div class="alert alert-success">
                    <strong><span class="glyphicon glyphicon-ok"></span> Success! A vote has been added successfully.</strong>
                </div>
								
								<?php }else if($_GET['message']==4){?>
								<div class="alert alert-success">
                    <strong><span class="glyphicon glyphicon-ok"></span> Success! All votes have been deleted successfully.</strong>
                </div>
								
								<?php }else if($_GET['message']==5){?>
								<div class="alert alert-success">
                    <strong><span class="glyphicon glyphicon-ok"></span> Success! A picture has been deleted successfully.</strong>
                </div>
								
								<?php }else if($_GET['message']==6){?>
								<div class="alert alert-success">
                    <strong><span class="glyphicon glyphicon-ok"></span> Success! All pictures have been deleted successfully.</strong>
                </div>
								
								<?php }
								
              
              	}?>
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
					
						?><div class="row">
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
								while($row_uploads=mysqli_fetch_array($query2)){
								?>
              
               <div class="col-lg-3"><img height="150" src="../uploads/<?php echo $row_uploads['name'];?>" /><br><a href="delete_picture.php?id=<?php echo $row_uploads['id']?>&adventure_id=<?php echo $row['id'];?>" style="color:blue;">Delete</a></div>
								
							<?php
								}
								}?>
                </div>
                <div class="row"> 
                <div class="col-lg-12" style="height:10px;" ></div></div>
                
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
              
                  <div class="row">   <div class="col-lg-12" ><a href="add_vote.php?id=<?php echo $_GET['id'] ?>" style="color:blue;">Vote</a> this adventure. OR 
                  <a href="delete_votes.php?id=<?php echo $_GET['id'] ?>" style="color:blue;">Delete</a> all votes</div></div>
            	
            <div class="row">
           		<div class="col-lg-12" >
              <section class="panel">
                              <header class="panel-heading">
                                  <strong>Recent Comments <a href="delete_all_comments.php?id=<?php echo $row['id']?>" style="color:blue;">Delete All Comments</a></strong>
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
                                 		
																	<br><a href="delete_comments.php?id=<?php echo $row3['comments_id'];?>&adventure_id=<?php echo $row['id']?>" style="color:blue;">Delete Comments</a> 			
																	
                                  
                                
                                  
                                  </td>
                              
                              </tr>
                              <?php }?>
                          </tbody>
                      </table>
                  </div>
                  </section>
              </div> 
            </div>
            
                        
            </div>
</div></div>
                </div>
                </div>
            
            <!-- /page content -->

        </div>

    </div>

    <div id="custom_notifications" class="custom-notifications dsp_none">
        <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
        </ul>
        <div class="clearfix"></div>
        <div id="notif-group" class="tabbed_notifications"></div>
    </div>

   
</body>

</html>
