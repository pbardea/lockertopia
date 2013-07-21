<?php require('check.php');
session_start(); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Assigner</title>
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
    <script src="bootstrap/js/bootstrap-dropdown.js"></script>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
    
    <!--Script that checks all checkboxes-->
    <script type="text/javascript">
    checked=false;
    function checkedAll (frm1) {
        var aa= document.getElementById('frm1');
         if (checked == false)
              {
               checked = true
              }
            else
              {
              checked = false
              }
        for (var i =0; i < aa.elements.length; i++) 
        {
         aa.elements[i].checked = checked;
        }
          }
    </script>
    
  </head>

  <body>	

	<?php include("assignerNav.php"); ?>

   
    <div class="container">
      <!-- Main hero unit for a primary marketing message or call to action -->
      <div class="page-header">
        <h1>Assigner</h1>
        <p>Assign Homework, Projects and Announcements</p>
      </div>

      <!-- Example row of columns -->
      	  <div class="row">
          
        <div class="span4">
         <h2>Submit <br />Homework</h2>
           <?php
		    echo "<form method='post' action='who.php'>";
      include "studfunctions.php";

      openConnect();

 			echo "Homework:<br /><textarea name='homeworkValue' placeholder='Type Homework Here' cols='100' rows='10'></textarea> <br />";
			$class = mysql_query("SELECT * FROM master_group WHERE username = '".$_SESSION['loggedin']."' and status='admin' and group_type = 'class'") 
			or die(mysql_error()); 
			$wFlag = true;
			while($info = mysql_fetch_array( $class )) { 
				echo "<input type='radio' name='groupToAssign[]' value='".$info['group_name']."' ";
				if ($wFlag){
					echo 'checked';
					$wFlag = false;
				}
				echo "/> ".$info['group_name']." (Class)<br />";
			}
			echo '<input type="submit" name="submit" value="Select Students">';
			echo '<input type="hidden" name="typeOfAssignment" value="homework" />';
			echo "</form>";
      closeConnect();

			?>
            
            
            
        </div>
        
       	   <div class="span4">
         <h2>Submit<br />Project</h2>
           <?php
		    echo "<form method='post' action='who.php'>";
      include "studfunctions.php";
      openConnect();
 			echo "Project:<br /><textarea name='homeworkValue' placeholder='Type Project Here' cols='100' rows='10'></textarea> <br />";
			$class = mysql_query("SELECT * FROM master_group WHERE username = '".$_SESSION['loggedin']."' and status='admin' and group_type = 'class'") 
			or die(mysql_error()); 
			$wFlag = true;
			while($info = mysql_fetch_array( $class )) { 
				echo "<input type='radio' name='groupToAssign[]' value='".$info['group_name']."' ";
				if ($wFlag){
					echo 'checked';
					$wFlag = false;
				}
				echo "/> ".$info['group_name']."(Class)<br />";
			}
			echo '<input type="submit" name="submit" value="Select Students">';
			echo '<input type="hidden" name="typeOfAssignment" value="project" />';
			echo "</form>";
      closeConnect();

			?>
            
            
            
        </div>
        
           <div class="span4">
         <h2>Submit Annoucement</h2>
           <?php
		    echo "<form method='post' action='who.php'>";
      openConnect();
 			echo "Announcement:<br /><textarea name='homeworkValue' placeholder='Type Announcement Here' cols='100' rows='10'></textarea> <br />";
			$class = mysql_query("SELECT * FROM master_group WHERE username = '".$_SESSION['loggedin']."' and status='admin'") 
			or die(mysql_error()); 
			
			$wFlag = true;
			while($info = mysql_fetch_array( $class )) { ;
				echo "<input type='radio' name='groupToAssign[]' value='".$info['group_name']."' ";
				if ($wFlag){
					echo 'checked';
					$wFlag = false;
				}
				echo "/> ".$info['group_name']."(".$info['group_type'].")<br />";
			}
			
			
			
			
			echo '<input type="submit" name="submit" value="Select Students">';
			echo '<input type="hidden" name="typeOfAssignment" value="announcement" />';
			echo "</form>";
      closeConnect();

			?>
        
       </div>

		</div>
      <hr />

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
