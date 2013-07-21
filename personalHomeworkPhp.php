<?php
session_start();
$groupName = $_POST['groupName'];
$homework = $_POST['homework'];
$homeworkPeople = $_POST['homeworkPeople'];
$typeOfAssignment = $_POST['typeOfAssignment'];
$groupType = $_POST['groupType'];


	
include "studfunctions.php";
openConnect();
$studentRow = mysql_query("Select * FROM ".$groupType." where ".$groupType."_name='$groupType';")
or die(mysql_error());
	
for($i=0; $i<sizeof($homeworkPeople); $i++){
		$data = mysql_query("UPDATE $groupType
							SET $typeOfAssignment='$homework'
							WHERE username = '$homeworkPeople[$i]' and ".$groupType."_name = '$groupName';") 
		or die(mysql_error());

	}
closeConnect();

header("Location: assigner.php");
?>
