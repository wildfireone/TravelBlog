<?php
include('conn.php');
if(isset($_SESSION['user'])){?>
	
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="./">Travel Blog</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"><strong>

</strong>
                
                <ul class="nav navbar-nav">
                    <?php if($_SESSION['user']['type']==3){?>
                    <li>
                        <a href="./dashboard.php">Dashboard</a>
                    </li>
                   
                    <li>
                        <a href="my_adventures.php">My Adventures</a>
                    </li>
                    
                      <li>
                        <a href="./post_adventure.php">Post Adventure</a>
                       
                    </li>
                    <?php }?>
                    <li>
                        <a href="./search_authors.php">Search Authors</a> 
                    </li>
                    <li>
                        <a href="./search_adventure.php">Search Adventure</a> 
                    </li>

                    <li>
                        <a href="./signout_form.php">Sign Out</a>
                       
                    </li>
                </ul>
                
     
     
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
	
	
	
	
	
	
<?php	}else{
?>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="./">Travel Blog</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="./search_authors.php">Search Author</a>
                    </li>
                    <li>
                        <a href="./search_adventure.php">Search Adventure</a> 
                    </li>
                    
                </ul>
                <ul class="nav navbar-nav navbar-right">
	  
	  
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
     
      <form id="signin" class="navbar-form navbar-right" role="form" action="signin_form.php" method="post">
	 
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input id="email" type="email" class="form-control" name="email" value="" placeholder="Email Address">                                        
                        </div>

                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input id="password" type="password" class="form-control" name="password" value="" placeholder="Password">   
                  </div>

                        <button type="submit" class="btn btn-secondary">Sign In</button>
                   </form>

     
    </div> 
    
      </ul>
     <ul class="nav navbar-nav navbar-right">
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
     
<span class="navbar-form navbar-right">
	       <a href="./signup.php"> <button type="button" class="btn btn-secondary">Register</button></a>
   </span>  
    </div>
    </ul>
     
     
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
  <?php }?>
