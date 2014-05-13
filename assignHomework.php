<?php
session_start();
$groupName = $_POST['groupToAssign'][0];
$homework = $_POST['homeworkValue'];
	
include "studfunctions.php";
openConnect();
$TypeRowArray = mysql_query("Select * FROM master_group where group_name='$groupName';")
or die(mysql_error());
exit('$groupName')
while($TypeRow = mysql_fetch_array( $TypeRowArray )) { 
	$groupType = $TypeRow['group_type'];
}
$data = mysql_query("UPDATE $groupType
						 SET homework='".$homework."'
						 WHERE ".$groupType."_name = '".$groupName."';") 
			or die(mysql_error());

closeConnect();

header("Location: groups.php");

?>
