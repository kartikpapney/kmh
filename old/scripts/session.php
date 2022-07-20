<?php
	require_once ("allFunctions.php");
	session_start();
	$session_user = $_SESSION['loggedin_user'];
	$result = queryToDb("SELECT userid FROM administration WHERE userid = '".$session_user."'");
	$row = mysqli_fetch_array($result, MYSQLI_BOTH);
	$login_session = $row[0];
	if(!isset($login_session))
		header("Location:index.php");
?>