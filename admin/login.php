<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>The Travel Blog - Login</title>

    <!-- Bootstrap core CSS -->

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="fonts/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="css/custom.css" rel="stylesheet">
    <link href="css/icheck/flat/green.css" rel="stylesheet">


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

<body style="background:#F7F7F7;">
    
    <div class="">
        <a class="hiddenanchor" id="toregister"></a>
        <a class="hiddenanchor" id="tologin"></a>

        <div id="wrapper">
            <div id="login" class="animate form">
                <section class="login_content">
                   <form role="form" action="signin_form.php" method="post">
                   <?php
                if(isset($_GET['error']) and $_GET['error']=='1'){?>
									<div class="alert alert-danger">
                    <span class="glyphicon glyphicon-remove"></span><strong> Error! Wrong email or password.</strong>
                </div>
									
							<?php	}?>

                        <h1>Login Form</h1>
                        <div>
                           <input type="text" class="form-control" name="email" id="email" placeholder="Enter Email" required width="100%">
                        </div>
                        <div>
                              <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password" required>
                        </div>
                        <div>
                              <input type="submit" name="submit" id="submit" value="Sign In" class="btn btn-secondery pull-right">
                        </div>
                      
                        
                    </form>
                    <!-- form -->
                </section>
                <!-- content -->
            </div>
            
    </div>

</body>

</html>