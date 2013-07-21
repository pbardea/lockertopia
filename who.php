<?php require('check.php');
session_start(); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Select Students</title>
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
        <p>Select Students</p>
      </div>

      <!-- Example row of columns -->
      	  <div class="row">

        <div class="span6">
           <p>Who is this for?</p>
           <?php
		    $homework = $_POST['homeworkValue'];
			$groupName = $_POST['groupToAssign'][0];
			$typeOfAssignment = $_POST['typeOfAssignment'];
			
      include "studfunctions.php";
      openConnect();
			$TypeRowArray = mysql_query("Select * FROM master_group where group_name='$groupName';")
			or die(mysql_error());
			while($TypeRow = mysql_fetch_array( $TypeRowArray )) { 
				$groupType = $TypeRow['group_type'];
			}
			
		    echo "<form id='frm1' method='post' action='personalHomeworkPhp.php'>";
			$data = mysql_query("SELECT * FROM ".$groupType." where ".$groupType."_name ='$groupName' ORDER BY username") 
			or die(mysql_error()); 
			echo "<input type='checkbox' name='checkall' onclick='checkedAll(frm1);'> <b>Select Everyone</b><br /><br />";
			while($info = mysql_fetch_array( $data )) { 
				if ($info['username'] != $_SESSION['loggedin']){
					echo "<input type='checkbox' name='homeworkPeople[]' value='".$info['username']."' /> ".$info['username']."<br />";
				}
			} 
			echo '<br />';
			echo '<input type="submit" name="submit" value="Assign">';
			echo "<input type=hidden value='".$groupName."' name=groupName />";
			echo "<input type=hidden value='".$homework."' name=homework />";
			echo "<input type=hidden value='".$typeOfAssignment."' name=typeOfAssignment />";
			echo "<input type=hidden value='".$groupType."' name=groupType />";
			echo "</form>";
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
