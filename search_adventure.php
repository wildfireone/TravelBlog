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
              <h1>Search Adventure</h1>
        <div class="col-md-10 col-md-offset-1">
  			

        <form role="form" action="search_results.php" method="post">
                <div class="form-group">
                    <label for="InputSearch">Type Search String</label>
                    <div class="input-group">
                    <input type="text" class="form-control" name="InputSearch" id="InputSearch" placeholder="Enter Search String" required width="100%">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                 <div class="form-group">
                         <label for="InputSearchBy">Search By</label> 
                         <div class="input-group"  style="width:100%">  
                             <select class="form-control" name="InputSearchBy" style="width:100%">
                             <option value="1">Keywords</option>
                             <option value="2">Author</option>
                             <option value="3">No of Votes</option>
                             </select>     
                        </div>
                        </div>

                <input type="submit" name="submit" id="submit" value="Search Adventure" class="btn btn-secondery pull-right">
        </form>
        
  
    </div>
</div>
</section>
    <?php include('footer.php');?>

</body>

</html>
