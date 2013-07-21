<?php
include 'functions.php';

  $salt = genSalt(20);
  $first_name = $_POST['firstname'];
  $last_name = $_POST['lastname'];
  $username = strtolower($_POST['email']);
  $pword = md5($_POST['pword'].$salt);
  $pword2 = md5($_POST['pword2'].$salt);
  $type = 'student';
  $time_logged = 0;
  $userGood = true;
  $emailGood = false;

  include "studfunctions.php";
  
  openConnect();
 	$data = mysql_query("SELECT * FROM users") 
 	or die(mysql_error()); 
 	while($info = mysql_fetch_array( $data )) { 
		if ($username == $info['username']){
			$userGood = false;	
		}
 	} 

  closeConnect();
	
	if(filter_var($username, FILTER_VALIDATE_EMAIL)){
		$emailGood = true;	
	}
	
	if ($pword == $pword2 and $userGood and $emailGood){
    openConnect();
		$data = mysql_query("INSERT INTO users (username, password, salt, first_name, last_name, type, times_logged) VALUES ('$username', '$pword', '$salt', '$first_name', '$last_name', '$type', '$time_logged')") 
		or die(mysql_error()); 
    closeConnect();
  
 		$_SESSION['loggedin'] = $username;
		header("Location: index.php");
		exit;
    }else if(!$userGood){
		header("Location: submitAccountUsernameFail.php");
		exit;
	}else{
		header("Location: submitAccountFailed.php");
		exit;
	}
	
?>
