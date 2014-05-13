<?php require('check.php');?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Delete Group</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<meta name="robots" content="noindex">

    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>
    <link href=".bootstrap/css/bootstrap-responsive.css" rel="stylesheet">

    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
  </head>

  <body>

	<?php include("deletionNav.php"); ?>

    <div class="container">

      <div class="hero-unit">
        <h1>Delete Group</h1>
        <p>Permanantly Delete A Group</p>
      </div>

      <div class="row">
        <div class="span200">
          <h2>Delete Group</h2>
          <div class="alert alert-error">
  				<a class="close" data-dismiss="alert">×</a>
  				<strong>Warning!</strong> If you click "Delete Group" all of the group's data will be lost!
			</div>

            <form method="post" action="deleteGroup.php">
    			<select name="groupName">
                	<?php 
          include "studfunctions.php";

          openConnect();
					$GetAdmin = mysql_query("Select * FROM master_group WHERE username = '".$_SESSION['loggedin']."' and status='admin';")
					or die(mysql_error());
					while($AdminRow = mysql_fetch_array( $GetAdmin )) { 
						$groupName = $AdminRow['group_name'];
						echo '<option value="'.$AdminRow['group_name'].'">'.$AdminRow['group_name'].'</option>';
					}
          closeConnect();
				  </select> <br />

    			<input type="submit" name="submit" value="Delete Group">
    		</form>
        </div>
      </div>

      <hr>

     <?php include('footer.php'); ?>

    </div>

    <script src="bootstrap/js/jquery.js"></script>
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

  </body>
</html>
