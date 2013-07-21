<?php
session_start();

$groupName = $_POST['groupName'];
include "studfunctions.php";

openConnect();
$GetType = mysql_query("Select * FROM master_group WHERE group_name = '$groupName';")
or die(mysql_error());
while($AdminRow = mysql_fetch_array( $GetType )) { 
	$groupType = $AdminRow['group_type'];
}

$DeleteGroup = mysql_query("delete FROM master_group WHERE group_name = '$groupName';")
or die(mysql_error());
$DeleteFromOtherTables = mysql_query("delete FROM ".$groupType." WHERE ".$groupType."_name = '$groupName';")
or die(mysql_error());
closeConnect();

header("Location: groupManager.php");
?>
