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
                <br>
                <br>
                <br>
                <br>
                    <h1 class="section-heading">Dashboard</h1>

                    <p class="lead section-lead"> Welcome <?php echo $_SESSION['user']['name']; ?>.You can post new adventure by clicking on the link at the top navigation</p>
                </div>
            </div>
        </div>
    </section>
    <?php include('footer.php');?>

</body>

</html>
