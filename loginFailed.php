<?php
$unameValid = $_GET['uname'];
	
$errorMssg = "<strong>Warning!</strong> The ";
if ($unameValid == "false"){
$errorMssg .= "email address";
}else if($unameValid == "true"){
	$errorMssg .= "password";
}else{
	$errorMssg .= "credentials";
}
$errorMssg .= " you entered is incorrect.";
	
if ($_SERVER['REQUEST_METHOD'] == "POST") {
	if (!ereg("^[A-Za-z0-9]", $_POST['username']))
		exit("<p>Invalid characters in the username.</p>");

	$username = $_POST['username'];
	$password = md5($_POST['password']);	
	
	
  include "studfunctions.php";
  openConnect();
 	$data = mysql_query("SELECT * FROM users WHERE username = '$username'") 
 	or die(mysql_error()); 
 	while($info = mysql_fetch_array( $data )) { 
 		$correctPword = $info['password']; 
		$timesLoggedIn = $info['times_logged'];
 	} 

	session_start();
		if ($password == $correctPword) {//password is right
			$timesLoggedIn += 1;
			$updateTimesLogged = mysql_query("UPDATE users SET times_logged=$timesLoggedIn WHERE username = '$username';") 
 			or die(mysql_error());
      closeConnect();
			$_SESSION['loggedin'] = $username;
			header("Location: index.php");
			exit;
		} else {
			session_start();
      closeConnect();
			$_SESSION['loggedin']="@loggedout";
			header("Location: loginFailed.php");
			exit;
		}
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
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

     <?php include('loginNav.php'); ?>


    <div class="container">

      <!-- Main hero unit for a primary marketing message or call to action -->
      <div class="hero-unit">
        <h1>Login</h1>
        <p>You need to login to access this webpage</p>
      </div>

      <!-- Example row of columns -->
      <div class="row">
        <div class="span200">
          <h2>Login</h2>
          	<div class="alert alert-error">
  				<a class="close" data-dismiss="alert">×</a>
  				<?php echo $errorMssg; ?>
			</div>
			
            <form method="post" action="login.php">
    			<p><input type="text" name="username" placeholder="Email Address"><br /></p>
    			<p><input type="password" name="password" placeholder="Password"><br /></p>

    			<input type="submit" name="submit" value="Login">
    		</form>
            
        </div>
      </div>

      <hr>

     <?php include('footer.php'); ?>


    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
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
