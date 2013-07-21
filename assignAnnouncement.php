<?php
session_start();
$groupName = $_POST['groupToAssign'][0];
$announcement = $_POST['announcementValue'];
	
include 'studfunctions.php';

openConnect();

$TypeRowArray = mysql_query("Select * FROM master_group where group_name='$groupName';")
or die(mysql_error());
while($TypeRow = mysql_fetch_array( $TypeRowArray )) { 
	$groupType = $TypeRow['group_type'];
}
$data = mysql_query("UPDATE $groupType
						 SET announcement='".$announcement."'
						 WHERE ".$groupType."_name = '".$groupName."';") 
			or die(mysql_error());
closeConnect();


header("Location: groups.php");

		
?>
