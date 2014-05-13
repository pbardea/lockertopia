<?php require('check.php');?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Delete Account</title>
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
        <h1>Delete Account</h1>
        <p>To permanantly delete your account, please fill in your credentials below.</p>
      </div>

      <div class="row">
        <div class="span200">
          <h2>Delete Account</h2>
          <div class="alert alert-error">
  				<a class="close" data-dismiss="alert">×</a>
  				<strong>Warning!</strong> If you click "Delete Account" all of your data will be lost!
			</div>

      <form method="post" action="deleteAccount.php">
        <p>Username: <input type="text" name="username" placeholder="JAppleseed"><br /></p>
        <p>Password: <input type="password" name="pword" placeholder="password"><br /></p>

        <input type="submit" name="submit" value="Delete Account">
      </form>

      <div class="alert alert-warning">
        <a class="close" data-dismiss="alert">×</a>
         The username or password you entered is incorrect.
			</div>

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
