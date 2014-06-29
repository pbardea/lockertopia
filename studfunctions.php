<?php
function openConnect(){//Opens a MySQl connection
	$connect = mysql_connect("localhost", "db_userName", "db_passWord") or die(mysql_error()); 
	mysql_select_db("lockertopia") or die(mysql_error()); //creates a MySQL connection
}

function closeConnect(){//Closes MySQL connection
	mysql_close(mysql_connect("localhost", "db_userName", "db_passWord"));//Closes MySQL connection
}

?>
