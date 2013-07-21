<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == "POST") {
	if (!ereg("^[A-Za-z0-9]", $_POST['username']))
		exit("<p>Invalid characters in the username.</p>");

	$username = $_POST['username'];
	$password = md5($_POST['pword']);	
	
  include "studfunctions.php";

  openConnect();

 	$data = mysql_query("SELECT * FROM users WHERE username = '$username'") 
 	or die(mysql_error()); 
 	while($info2 = mysql_fetch_array( $data )) { 
 		$correctPword = $info2['password']; 
 	} 
	
	if ($password == $correctPword and $username == $_SESSION['loggedin']) {//password is right

		$data = mysql_query("delete from users where username = '$username'") 
		or die(mysql_error());
		
		$AmIIn = mysql_query("Select * FROM master_group WHERE status = 'student';")
		or die(mysql_error());
		while($InIt = mysql_fetch_array( $AmIIn )) { 
			if ($InIt['username'] == $_SESSION['loggedin']){//User is student in table
				$delete = mysql_query("delete from ".$info['Tables_in_lockertopia']." where username = '".$username."'") 
				or die(mysql_error());
			}
		}
		$AmIAdmin = mysql_query("Select * FROM master_group WHERE status = 'admin';")
		or die(mysql_error());
		while($InItAsAdmin = mysql_fetch_array( $AmIAdmin )) { 
			if ($InItAsAdmin['username'] == $_SESSION['loggedin']){//User is admin in table
				$GetGroup = mysql_query("Select * FROM master_group WHERE username = '".$InItAsAdmin['username']."';")
				or die(mysql_error());
				while($GroupName = mysql_fetch_array( $GetGroup )) { 
					$DeleteGroup = mysql_query("delete FROM master_group WHERE group_name = '".$GroupName['group_name']."';")
					or die(mysql_error());
					$DeleteFromOtherTables = mysql_query("delete FROM ".$GroupName['group_type']." WHERE ".$GroupName['group_type']."_name = '".$GroupName['group_name']."';")
					or die(mysql_error());
				}
			}
		}
		
		$tableNames = mysql_query("SHOW TABLES FROM lockertopia") 
		or die(mysql_error()); 
		while($info = mysql_fetch_array( $tableNames )) { 
				
			if ($info['Tables_in_lockertopia'] != "users" and $info['Tables_in_lockertopia'] != "master_group" ){
				$AmIIn = mysql_query("Select * FROM ".$info['Tables_in_lockertopia'].";")
				or die(mysql_error());
				while($InIt = mysql_fetch_array( $AmIIn )) { 
					if ($InIt['username'] == $_SESSION['loggedin']){//User in table
						$delete = mysql_query("delete from ".$info['Tables_in_lockertopia']." where username = '".$username."'") 
						or die(mysql_error());
					}
				}
			}
		}

    closeConnect()
		$_SESSION['loggedin'] = "@loggedout"; 
		header("Location: index.php");
	} else {
		header("Location: deletionFailed.php");
		exit;
	}
}
?>
