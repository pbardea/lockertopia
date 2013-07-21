<?php
session_start();
$groupName = $_POST['groupToAssign'];
$announcement = $_POST['announcement'];

str_replace("'","`",$announcement);

include "studfunctions.php";	
openConnect()
$studentRow = mysql_query("Select * FROM ".$groupName[0]." where type='student';")
or die(mysql_error());
while($infoFromRow = mysql_fetch_array( $studentRow )) { 
	
	$data = mysql_query('UPDATE '.$groupName[0].'
						 SET announcements="'.$announcement.'"
						 WHERE student_name = "'.$infoFromRow['student_name'].'";') 
			or die(mysql_error());
}

closeConnect();
exit($announcement);

//header("Location: classes.php");

		
?>
