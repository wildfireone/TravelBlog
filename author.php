<?php
session_start();
include('./conn.php');


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
                                  <strong>Author</strong><span class="pull-right"></span>
                            </header>
            								<div class="panel-body table-responsive">
                                <table class="table table-hover">
                                  <thead>
                                    <tr>
                                                <th>Author Details</th>
                                      <th>Adventure Title</th>
                                    </tr>
                              		</thead>
                              		<tbody>
                                  <?php 
																$sql = "SELECT
																	user.id,
`user`.`name` AS author_name,
country.`name` AS country_name
FROM
`user`
INNER JOIN country ON `user`.country = country.id
WHERE
user.id = $_GET[id]
";
																	$qry = mysqli_query($con,$sql);
																	
																	while($row= mysqli_fetch_array($qry) ){
                                  ?>
                                  <tr>
                                  <td><?php echo $row['author_name']; ?><br><?php echo $row['country_name']; ?><br></td>
                                    <td>
                                     <table class="table table-hover">
                                     <?php
                                     $sql2 = "SELECT
adventure.title,
adventure.id
FROM
adventure

WHERE
`adventure`.by_id = $row[id]
";
																	$qry2 = mysqli_query($con,$sql2);
																	
																	while($row2= mysqli_fetch_array($qry2) ){?>
																	<tr>
                                  <td><a href="./details.php?id=<?php echo $row2['id'];?>"><?php echo $row2['title']; ?></a></td>
                                  </tr>
																	
																	
																<?php	}
																		 
																		 ?>
                                     
                                     </table>
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
</section>        

    <?php include('footer.php');?>

</body>

</html>
