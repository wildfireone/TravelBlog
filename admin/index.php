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
                    <strong><span class="glyphicon glyphicon-ok"></span> Success! User status changed successfully.</strong>
                </div>
									
							<?php }else if($_GET['message']==2){?>
								<div class="alert alert-success">
                    <strong><span class="glyphicon glyphicon-ok"></span> Success! User Role changed successfully.</strong>
                </div>
								
								<?php }
              
              	}?>
              <section class="panel">
                              <header class="panel-heading">
                                  <strong>Users</strong>
                            </header>
            								<div class="panel-body table-responsive">
                                <table class="table table-hover">
                                  <thead>
                                    <tr>
                                     <th>#</th>
                                      <th>User Name</th>
                                      <th>Approve/Disapprove</th>
                                      <th>Change Role</th>
                                    </tr>
                              		</thead>
                              		<tbody>
                                  <?php 
																	$id = $_SESSION['admin']['id'];
																	$sql = "SELECT
`user`.`name`,
`user`.id,
`user`.type,
`user`.status
FROM
`user` WHERE id <> $id";
																	$qry = mysqli_query($con,$sql);
																	$index = 0;
																	while($row= mysqli_fetch_array($qry) ){
                                  $index++;?>
                                  <tr>
                                  <td><?php echo $index;?></td>
                                  	<td><?php echo $row['name']; ?></td>
                                    <td>
                                   <?php if($row['status']==0){?>
																		<a href="change_status.php?id=<?php echo $row['id']?>&status=1"> Approve</a> 
																		<?php }else{?>
																		<a href="change_status.php?id=<?php echo $row['id']?>&status=0"> Disapprove</a> 
																			 
																		<?php	}?>
                                    </td>
                                    <td>
                                    <form action="change_type.php" method="post">
                                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>" >
                                     <select class="form-control" name="InputType" onChange="this.form.submit();">
                    						       <option value="3" <?php  if($row['type']==3){echo 'selected'; }?>>Author</option>
																       <option value="2" <?php  if($row['type']==2){echo 'selected'; }?>>Reader</option>
                                       <option value="1" <?php  if($row['type']==1){echo 'selected'; }?>>admin</option>                                            
                       								</select>
                              			</form>
                                    </td>
                                  </tr> 
                                  
																	<?php 
																	}
																	
																	
																	
																	?>
                                 
        													</tbody>
        												</table>
        											</div>
</section>
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
