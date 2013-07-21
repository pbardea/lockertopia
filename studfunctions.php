<?php
function openConnect(){//Opens a MySQl connection
	$connect = mysql_connect("localhost", "db_user_name", "db_pword") or die(mysql_error()); 
	mysql_select_db("db_name") or die(mysql_error()); //creates a MySQL connection
}

function closeConnect(){//Closes MySQL connection
	mysql_close(mysql_connect("localhost", "db_user_name", "db_pword"));//Closes MySQL connection
}

?>
