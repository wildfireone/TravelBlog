<?php
session_start();
include('./conn.php');
if(!isset($_SESSION['user'])){
	header('Location: ./index.php');	
	
}

$sql3= 'SELECT * FROM comments  WHERE id = '.$_GET['id'] ;
$query3 = mysqli_query($con,$sql3);
$row = mysqli_fetch_array($query3);
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
              <h1>Edit Comments</h1>
        <div class="col-md-10 col-md-offset-1">
    <div class="row">

        <form role="form" action="edit_comments_form.php" method="post">
            		<input type="hidden" name="id" value="<?php echo $_GET['id'];?>" />
                <input type="hidden" name="adventure_id" value="<?php echo $_GET['adventure_id'];?>" />
                <div class="form-group">
                    <label for="InputComments">Comments</label>
                    <div class="input-group">
                    <textarea class="form-control" name="InputComments" id="InputComments" placeholder="Type Comments" required width="100%"><?php echo $row['comments']?></textarea>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                
                <input type="submit" name="submit" id="submit" value="Save Comments" class="btn btn-secondery pull-right">
        </form>
        
    </div>
    </div>
</div>
</section>
    <?php include('footer.php');?>

</body>

</html>
