<?php
	session_start();
	{
		if(isset($_POST["userid"]) AND isset($_POST["password"]))
		{
			require_once ("allFunctions.php");
			$result = queryToDb("SELECT password FROM administration WHERE userid = '".$_POST["userid"]."'");
			$row = mysqli_fetch_array($result, MYSQLI_BOTH);
			if(($row == NULL) || ($row[0] != $_POST["password"]))
				header('Location:../login.php?authenticaion=0');
			else
			{
				$status = true;
			    $_SESSION['loggedin_user'] = $_POST["userid"];
				header("Location:../admin.php");
			}
		}
	}
?> 