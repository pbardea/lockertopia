<?php
session_start();
$_SESSION['loggedin']="@loggedout";
header("Location: login.php");
exit;
?>
