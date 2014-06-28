<?php require('check.php');
session_start(); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Lockertopia</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<meta name="robots" content="noindex">

    <!-- Le styles -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>
    <link href=".bootstrap/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
  </head>

  <body>

	<?php include("groupsNav.php"); ?>

    <div class="container">
      <!-- Main hero unit for a primary marketing message or call to action -->
      <div class="page-header">
        <h1>Groups</h1>
        <p>This is where all of your classes, clubs and extra-curricular groups are.</p>
        <p><a href="createGroup.php" class="btn btn-primary btn-large">Create A Group &raquo;</a></p>
      </div>

      <!-- Example row of columns -->
      	  <div class="row">
       <div class="span3">
          <h2>Classes</h2>

           <?php
		 $allClasses = "";
		$allClubs = "";
		$allSports = "";
		$allStudy = "";
          $youArePartOf = "<p>You are part of:</p>";
    openConnect();
			$class = mysql_query("SELECT * FROM class WHERE username = '".$_SESSION['loggedin']."'") 
			or die(mysql_error()); 
			while($info = mysql_fetch_array( $class )) { 
				echo $youArePartOf;
				$youArePartOf = "";
				echo $info['class_name']."<br />";
				$allClasses .= $info['class_name'];
			}
			if (!$allClasses){
				echo "You are not part of any classes yet."	;
			}
          $youArePartOf = "<p>You are part of:</p>";
			?>

      </div>
      <div class="span3">
          <h2>Clubs</h2>
           <?php
      openConnect();
			$class = mysql_query("SELECT * FROM club WHERE username = '".$_SESSION['loggedin']."'") 
			or die(mysql_error()); 
			while($info = mysql_fetch_array( $class )) { 
				echo $youArePartOf;
				$youArePartOf = "";
				echo $info['club_name']."<br />";
				$allClubs .= $info['club_name'];
			}
			if (!$allClubs){
				echo "You are not part of any clubs yet."	;
			}
          $youArePartOf = "<p>You are part of:</p>";
			?>

      </div>
      <div class="span3">
          <h2>Sport Teams</h2>
           <?php
      openConnect();
			$class = mysql_query("SELECT * FROM sport WHERE username = '".$_SESSION['loggedin']."'") 
			or die(mysql_error()); 
			while($info = mysql_fetch_array( $class )) { 
				echo $youArePartOf;
				$youArePartOf = "";			
				echo $info['sport_name']."<br />";
				$allSports .= $info['sport_name'];
			}
			if (!$allSports){
				echo "You are not part of any sport teams yet.";	
			}
          $youArePartOf = "<p>You are part of:</p>";
			?>

      </div>

      <div class="span3">
          <h2>Study Group</h2>
           <?php
      openConnect();
			$class = mysql_query("SELECT * FROM study WHERE username = '".$_SESSION['loggedin']."'") 
			or die(mysql_error()); 
			while($info = mysql_fetch_array( $class )) { 
				echo $youArePartOf;
				$youArePartOf = "";			
				echo $info['study_name']."<br />";
				$allStudy .= $info['study_name'];
			}
			if (!$allStudy){
				echo "You are not part of any study groups yet.";
			}
          $youArePartOf = "<p>You are part of:</p>";
      closeConnect();
			?>

      </div>

 
     </div>

      <hr>

     <?php include('footer.php'); ?>


    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
    <script src="bootstrap/js/jquery.js"></script>
    <script src="bootstrap/js/google-code-prettify/prettify.js"></script>
    <script src="bootstrap/js/bootstrap-transition.js"></script>
    <script src="bootstrap/js/bootstrap-alert.js"></script>
    <script src="bootstrap/js/bootstrap-modal.js"></script>
    <script src="bootstrap/js/bootstrap-dropdown.js"></script>
    <script src="bootstrap/js/bootstrap-scrollspy.js"></script>
    <script src="bootstrap/js/bootstrap-tab.js"></script>
    <script src="bootstrap/js/bootstrap-tooltip.js"></script>
    <script src="bootstrap/js/bootstrap-popover.js"></script>
    <script src="bootstrap/js/bootstrap-button.js"></script>
    <script src="bootstrap/js/bootstrap-collapse.js"></script>
    <script src="bootstrap/js/bootstrap-carousel.js"></script>
    <script src="bootstrap/js/bootstrap-typeahead.js"></script>
    <script src="bootstrap/js/application.js"></script>
     <script>
      var _gauges = _gauges || [];
      (function() {
        var t   = document.createElement('script');
        t.type  = 'text/javascript';
        t.async = true;
        t.id    = 'gauges-tracker';
        t.setAttribute('data-site-id', '4f0dc9fef5a1f55508000013');
        t.src = '//secure.gaug.es/track.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(t, s);
      })();
    </script>

  </body>
</html>
