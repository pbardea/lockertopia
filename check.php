<?php
$userexists = false;
session_start();

if (!isset($_SESSION['loggedin'])) {
	header("Location: login.php");
	exit;
} else if($_SESSION["loggedin"] == "@loggedout"){
	header("Location: login.php");
	exit();
}else {
	// the session variable exists, let's check it's valid:
  include "studfunctions.php";
  openConnect();

 	$data = mysql_query("SELECT * FROM users") 
 	 or die(mysql_error()); 
 	while($info = mysql_fetch_array( $data )) { 
 		if (strtolower($info['username']) == strtolower($_SESSION['loggedin'])){
			$userexists = true;
		}
 	}	
  closeConnect();
	
	if ($userexists !== true) {
		exit('<p>This user does not exist, please <a href="login.php">login</a>.</p>');
	}
}
?>
