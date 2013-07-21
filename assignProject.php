<?php
session_start();
$groupName = $_POST['groupToAssign'][0];
$project = $_POST['projectValue'];
	
include "studfunctions.php";
openConnect();
$TypeRowArray = mysql_query("Select * FROM master_group where group_name='$groupName';")
or die(mysql_error());
while($TypeRow = mysql_fetch_array( $TypeRowArray )) { 
	$groupType = $TypeRow['group_type'];
}
$data = mysql_query("UPDATE $groupType
						 SET project='".$project."'
						 WHERE ".$groupType."_name = '".$groupName."';") 
			or die(mysql_error());

closeConnect();

header("Location: groups.php");

		
?>
