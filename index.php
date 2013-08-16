<?
/*
 * AuthPanel's Index
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
            <li class="active"><a href="#">Home</a></li>
            <li><a href="./make.php">Make AuthCode</a></li>
            </ul>
            
             <ul class="nav navbar-nav pull-right">
            	<li><a class="disabled" href="<? echo ApiLocation;?>">Api Link: <? echo ApiLocation; ?></a></li>
          	</ul>
          
        </div><!--/.nav-collapse -->
      </div>
    </div>


    <div class="container">

      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
        <h1>Code example</h1>
        <p>This is a full example on how to use auth panel's api to validate a authcode. <br />
        I have also included the function to get a persons username based on their authcode.
         </p>
        <p>
             <iframe src="./source2.php" style="border:none;width:100%">
               <script src="./source.php"></script>
             </iframe>
            
       	 </p>
        <p>
          <a class="btn btn-large btn-primary" href="http://pastebin.com/raw.php?i=SBjHFHQp">Download Code &raquo;</a>
        </p>
      </div>

    </div> <!-- /container -->
    

    <!-- JavaScript plugins (requires jQuery) -->
    <script src="http://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
   <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.js"></script>
   <script src="https://raw.github.com/scottjehl/Respond/master/respond.min.js" ></script>
  </body>
</html>
