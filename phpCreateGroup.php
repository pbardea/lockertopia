<?php
session_start();
$username = $_SESSION['loggedin'];
$groupName = $_POST['groupName'];
$checkBox = $_POST['invitees'];
$type = $_POST['type'];
$goAhead = true;

include "studfunctions.php";
openConnect();
$tableNames = mysql_query("Select * from master_group") 
or die(mysql_error()); 
while($info = mysql_fetch_array( $tableNames )) { 
	if ($groupName == $info['group_name']){
		$goAhead = false;
	}
} 

closeConnect();
	
openConnect();

$dataAdmin = mysql_query("INSERT INTO master_group (username, group_name, group_type, status) VALUES ('".$_SESSION['loggedin']."', '$groupName', '$type', 'admin')") 
or die(mysql_error());

$dataAdminSpecific = mysql_query("INSERT INTO $type (username, ".$type."_name) VALUES ('".$_SESSION['loggedin']."','$groupName')")
or die(mysql_error());

if ($goAhead == true){
	for($i=0; $i<sizeof($checkBox); $i++){
		$dataStudent = mysql_query("INSERT INTO master_group (username, group_name, group_type, status) VALUES ('$checkBox[$i]', '$groupName', '$type', 'student')") 
		or die(mysql_error());
		
		$dataAdminSpecific = mysql_query("INSERT INTO $type (username, ".$type."_name) VALUES ('$checkBox[$i]','$groupName')")
		or die(mysql_error());
	}
}

closeConnect();

header("Location: groups.php");		
?>
