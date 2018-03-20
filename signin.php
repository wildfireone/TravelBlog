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
              <h1>Sign In</h1>
        <div class="col-md-6 col-md-offset-3">
    <div class="row">

        <form role="form" action="signin_form.php" method="post">
            		<?php
                if(isset($_GET['error']) and $_GET['error']=='1'){?>
									<div class="alert alert-danger">
                    <span class="glyphicon glyphicon-remove"></span><strong> Error! Wrong email or password.</strong>
                </div>
									
							<?php	}  else if(isset($_GET['error']) and $_GET['error']=='2'){?>
									<div class="alert alert-danger">
                    <span class="glyphicon glyphicon-remove"></span><strong> Error! User is not authorized by the administrator.</strong>
                </div>
									
							<?php	}
 
                
                ?>
                <div class="well well-sm"><strong><span class="glyphicon glyphicon-asterisk"></span>Required Field</strong></div>
                <div class="form-group">
                    <label for="InputName">Email</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="email" id="email" placeholder="Enter Email" required width="100%">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                   
                <div class="form-group">
                    <label for="InputPassword">Password</label>
                    <div class="input-group">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div> 
                
                <input type="submit" name="submit" id="submit" value="Sign In" class="btn btn-secondery pull-right">
        </form>
        
    </div>
    </div>
</div>
</section>
    <?php include('footer.php');?>

</body>

</html>
