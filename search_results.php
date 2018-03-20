<?php
session_start();
include('./conn.php');

if(isset($_POST['InputSearchBy'])){
	$string = $_POST['InputSearch'];
	
	
	switch($_POST['InputSearchBy']){
		
		case 1:
		$sql = "SELECT
adventure.title,
adventure.id
FROM
adventure
WHERE
`adventure`.`tags` LIKE '%$string%' ";
		
		break;
	case 2:
		
	$sql = "SELECT
adventure.title,
adventure.id
FROM
`user`
INNER JOIN adventure ON `user`.id = adventure.by_id
WHERE
`user`.`name` LIKE '%$string%' ";
	
	break;
	case 3:
	$sql = "SELECT
likes.adventure_id,
Count(likes.id) AS total_likes,
adventure.title
FROM
likes
INNER JOIN adventure ON likes.adventure_id = adventure.id
GROUP BY
likes.adventure_id";
	break;
	}
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
        <div class="row">
           		<div class="col-lg-12" >
              <section class="panel">
                              <header class="panel-heading">
                                  <strong>Search Results</strong><span class="pull-right"><a href="./search_adventure.php">Search Again</a></span>
                            </header>
            								<div class="panel-body table-responsive">
                                <table class="table table-hover">
                                  <thead>
                                    <tr>
                                     <th>#</th>
                                      <th>Adventure Title</th>
                                    </tr>
                              		</thead>
                              		<tbody>
                                  <?php 
																	$qry = mysqli_query($con,$sql);
																	$index = 0;
																	while($row= mysqli_fetch_array($qry) ){
                                  
																	
																	if($_POST['InputSearchBy']!=3){
																	$index++;?>
                                  <tr>
                                  <td><?php echo $index;?></td>
                                  	<td><a href="./details.php?id=<?php echo $row['id'];?>"><?php echo $row['title']; ?></a></td>
                                  </tr> 
                                  
																	<?php 
																	}
																	
																	
																	
																	else {
															//	print_r($row);		
																	if($_POST['InputSearch']==$row['total_likes'] ){	
																	$index++;	
																		?>
																		 <tr>
                                  <td><?php echo $index;?></td>
                                  	<td><a href="./details.php?id=<?php echo $row['adventure_id'];?>"><?php echo $row['title']; ?></a></td>
                                  </tr>
																		
																	<?php 
																	}
																	
																	
																	
																	
																	}
																	
																	
																		
																		
																		
																		
																		
																	}
																	
																	?>
                                 
        													</tbody>
        												</table>
        											</div>
</section>
</div></div>

</div>        
</section>        

    <?php include('footer.php');?>

</body>

</html>
