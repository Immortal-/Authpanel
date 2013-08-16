<?
/*
 * AuthPanel's Make
 * Coded by Immortal
 * Credits: Twitter's Bootstrap, Hosted 3rd party with a cdn
 * _  PasteBin I stole their Highlighting script and used it in source.php *Sorry pastebin I love you guys*
 * _ jQuery hosted officaly
 * _  8/11/2013
 * */
  require_once ('./includes/config.php');
	
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Auth</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0-rc1/css/bootstrap.css" rel="stylesheet">
  </head>
  <body>
  <!-- Static navbar -->
    <div class="navbar navbar-static-top">
      <div class="container">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Auth Panel</a>
        <div class="nav-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="./index.php">Home</a></li>
            <li class="active"><a href="#">Make AuthCode</a></li>
          </ul>
          
        </div><!--/.nav-collapse -->
      </div>
    </div>
 	 <div class="container">

        <form class="form-signin" action="" method="post">
        	<h2 class="form-signin-heading">Make AuthCode:</h2><br />
        	 <div class="input-group">
     			 <input type="text" class="form-control" placeholder="Name" name="u">
   				   <span class="input-group-btn">
     				   <button class="btn btn-default" type="submit">Create AuthCode!</button>
     			   </span>
     			   <br />
   				 </div><!-- /input-group -->
        </form>
         <? if(isset($_POST['u'])){ echo '<br /> <div class="alert alert-success"><a class="close" data-dismiss="alert" href="#">&times;</a>AuthCode: '.MakeAuth($_POST['u']) . '</div>'; } ?>
    </div> <!-- /container -->
  	  

    <!-- JavaScript plugins (requires jQuery) -->
    <script src="http://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
   <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.js"></script>
   <script src="https://raw.github.com/scottjehl/Respond/master/respond.min.js" ></script>
   </body>
   </html>
