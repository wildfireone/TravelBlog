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
    <link href="./css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="./css/full-width-pics.css" rel="stylesheet">
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
                <?php
                if(isset($_GET['message']) and $_GET['message']=='success'){?>
								<div class="alert alert-success">
                    <strong><span class="glyphicon glyphicon-ok"></span> Success! Adventure posted successfully.</strong>
                </div>

									
							<?php	}
                
                ?>
                
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="section-heading">All Recent Adventures</h1>
                    <p class="lead section-lead">Below are the adventures posted by Authors.</p>
                </div>
            </div>
            <?php 
						$sql = "SELECT
adventure.id AS adventure_id,
adventure.title,
adventure.description,
uploads.`name`,
adventure.date,
adventure.`status`,
adventure.country,
country.`name` AS country_name,
(SELECT COUNT(*) FROM likes WHERE adventure_id = adventure.id ) AS likes,
(SELECT COUNT(*) FROM comments WHERE adventure_id = adventure.id ) AS comments
FROM
adventure
INNER JOIN uploads ON adventure.id = uploads.adventure_id
INNER JOIN country ON adventure.country = country.id
WHERE
uploads.default_pic = 1 AND
adventure.`status` = 1
order by likes desc
LIMIT 0, 5";
						$query = mysqli_query($con,$sql);
										while($row = mysqli_fetch_array($query)){
						
						?>
            <div class="row">
                <div class="col-lg-6">
                    <p style="vertical-align:top"class="lead section-lead"><?php echo $row['title'];?></p>
                    <p style="vertical-align:top" ><?php echo $row['description'];?></p>
                    <p style="vertical-align:top" >Posted On: <?php echo $row['date'];?></p>
                    <p style="vertical-align:top" >Adventure Country: <?php echo $row['country_name'];?></p>
                </div>
                <div class="col-lg-6"><img height="200" src="./uploads/<?php echo $row['name'];?>"></div>
                <div class="col-lg-12" style="height:10px;" ></div>
                               <div class="col-lg-12" ><div class="alert alert-warning">
                                                        <button data-dismiss="alert" class="close close-sm" type="button">
                                                            <i class="fa fa-times"></i>
                                                        </button>
                                                        <strong><?php echo $row['likes'];?></strong> People voted,<strong><?php echo $row['comments'];?></strong> comments, <span class="pull-right"><a href="details.php?id=<?php echo $row['adventure_id']?>">View Details</a></span> 
                                                    </div></div>
            </div>
            <?php
										}
						?>
            
        </div>
    </section>
    <?php include('footer.php');?>

</body>

</html>
