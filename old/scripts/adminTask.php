<?php
	require_once ("allFunctions.php");
	
	/*For adding new boarder record to db*/
	if(isset($_POST['boarderID']) AND isset($_POST['roomno']) AND isset($_POST['department']) AND isset($_POST['rollno']) AND isset($_POST['fname']))
	{
		//triming blank spaces
		$_POST['fname'] = trim($_POST['fname']);
		$_POST['mname'] = trim($_POST['mname']);
		$_POST['lname'] = trim($_POST['lname']);
		$_POST['department'] = trim($_POST['department']);
		$_POST['programme'] = trim($_POST['programme']);
		$_POST['roomno'] = trim($_POST['roomno']);
		$_POST['rollno'] = trim($_POST['rollno']);
		$_POST['boarderID'] = trim($_POST['boarderID']);
		$_POST['contactno'] = trim($_POST['contactno']);

		$_POST['fname'] = ucwords($_POST['fname']);
		$_POST['mname'] = ucwords($_POST['mname']);
		$_POST['lname'] = ucwords($_POST['lname']);
		$_POST['rollno'] = strtoupper($_POST['rollno']);
		$_POST['boarderID'] = strtoupper($_POST['boarderID']);

		if(queryToDb("INSERT INTO boarder values (\"".$_POST['fname']."\", \"".$_POST['mname']."\" , \"".$_POST['lname']."\" , \"".$_POST['department']."\" , \"".$_POST['programme']."\" , \"".$_POST['roomno']."\" , \"".$_POST['rollno']."\" , \"".$_POST['boarderID']."\" , \"".$_POST['contactno']."\")"))
			header("Location:../admin.php?add=1");
		else
			header("Location:../admin.php?add=0");
	}

	/*For editing new boarder record to db*/
	if(isset($_POST['editParameter']))
	{
		//triming blank spaces
		$_POST['editParameter'] = trim($_POST['editParameter']);
		if(queryToDb("SELECT * FROM boarder WHERE boarderID = '".$_POST['editParameter']."'"))
			header("Location:../admin.php?edit=1");
		else
			header("Location:../admin.php?edit=0");
	}

	/*For updating database with edited info of boarder */
	if(isset($_POST['eboarderID']) AND isset($_POST['eroomno']) AND isset($_POST['edepartment']) AND isset($_POST['erollno']) AND isset($_POST['efname']))
	{
		//triming blank spaces
		$_POST['efname'] = trim($_POST['efname']);
		$_POST['emname'] = trim($_POST['emname']);
		$_POST['elname'] = trim($_POST['elname']);
		$_POST['edepartment'] = trim($_POST['edepartment']);
		$_POST['eprogramme'] = trim($_POST['eprogramme']);
		$_POST['eroomno'] = trim($_POST['eroomno']);
		$_POST['erollno'] = trim($_POST['erollno']);
		$_POST['eboarderID'] = trim($_POST['eboarderID']);
		$_POST['econtactno'] = trim($_POST['econtactno']);

		$_POST['efname'] = ucwords($_POST['efname']);
		$_POST['emname'] = ucwords($_POST['emname']);
		$_POST['elname'] = ucwords($_POST['elname']);
		$_POST['erollno'] = strtoupper($_POST['erollno']);
		$_POST['eboarderID'] = strtoupper($_POST['eboarderID']);

		if((queryToDb("UPDATE boarder SET fname = \"".$_POST['efname']."\" , mname = \"".$_POST['emname']."\", lname = \"".$_POST['elname']."\", department= \"".$_POST['edepartment']."\", programme = \"".$_POST['eprogramme']."\", roomno = \"".$_POST['eroomno']."\", rollno = \"".$_POST['erollno']."\", contactno = \"".$_POST['econtactno']."\" WHERE boarderID = \"".$_POST['eboarderID']."\"")))
			header("Location:../admin.php?edit=1");
		else
			header("Location:../admin.php?edit=0");
	}

	/*For delete boarder record from databasae*/
	if(isset($_POST['dboarderID']) AND isset($_POST['droomno']) AND isset($_POST['ddepartment']) AND isset($_POST['drollno']) AND isset($_POST['dfname']))
	{
		if((queryToDb("DELETE FROM boarder WHERE boarderID = \"".$_POST['dboarderID']."\"")))
			header("Location:../admin.php?delete=1");
		else
			header("Location:../admin.php?delete=0");
	}

	/*For creating a new administrator account*/
	if(isset($_POST["nuserId"]) AND isset($_POST["ndesignation"]) AND isset($_POST["nPassword"]) AND isset($_POST["nRePassword"]))
	{
		//triming blank spaces
		$_POST['nuserId'] = trim($_POST['nuserId']);
		$_POST['ndesignation'] = trim($_POST['ndesignation']);
		$_POST['nPassword'] = trim($_POST['nPassword']);
		$_POST['nRePassword'] = trim($_POST['nRePassword']);

		if(strlen($_POST['nuserId']) == 0)
			header('Location:../admin.php?create=1');
		else if((strlen($_POST['nPassword']) == 0) or (strlen($_POST['nRePassword']) == 0))
			header('Location:../admin.php?create=2');
		else if (strcmp($_POST["nPassword"], $_POST["nRePassword"]) == 0)
		{
			if(!(queryToDb("INSERT INTO administration values (\"".$_POST['nuserId']."\", \"".md5_base64($_POST['nPassword'])."\" , \"".$_POST['ndesignation']."\" )")))
				header("Location:../admin.php?create=4");
			else
				header("Location:../admin.php?create=4");
		}
		else
			header('Location:../admin.php?create=3');
	}


	/*For changing administrator password*/
	if(isset($_POST["currPass"]) AND isset($_POST["newPass"]) AND isset($_POST["renewPass"]) AND isset($_POST["userId"]))
	{
		//triming blank spaces
		$_POST['currPass'] = trim($_POST['currPass']);
		$_POST['newPass'] = trim($_POST['newPass']);
		$_POST['renewPass'] = trim($_POST['renewPass']);

		if (strcmp($_POST["newPass"], $_POST["renewPass"]) == 0)
		{
			$row = mysql_fetch_array(queryToDb("SELECT password FROM administration WHERE userid = '".$_POST["userId"]."'"));
			if(strcmp($row[0], md5_base64($_POST["currPass"])) == 0)
			{
				if(queryToDb("UPDATE administration SET password = \"" . md5_base64($_POST["newPass"]) . "\" WHERE userid = \"" .$_POST["userId"]."\""))
					header('Location:../admin.php?change=0');
				else
					header('Location:../admin.php?change=1');
			}
			else
				header('Location:../admin.php?change=3');	
		}
		else
			header('Location:../admin.php?change=2');
	}

	/*For mess timming*/
	if(isset($_POST["bTime"]) AND isset($_POST["lTime"]) AND isset($_POST["dTime"]))
	{
		//trimming mess trimming
		$_POST['bTime'] = trim($_POST['bTime']);
		$_POST['lTime'] = trim($_POST['lTime']);
		$_POST['dTime'] = trim($_POST['dTime']);
		//sunday mess
		$_POST['sunB'] = trim($_POST['sunB']);
		$_POST['sunL'] = trim($_POST['sunL']);
		$_POST['sunD'] = trim($_POST['sunD']);
		//monday mess
		$_POST['monB'] = trim($_POST['monB']);
		$_POST['monL'] = trim($_POST['monL']);
		$_POST['monD'] = trim($_POST['monD']);
		//tuesday mess
		$_POST['tueB'] = trim($_POST['tueB']);
		$_POST['tueL'] = trim($_POST['tueL']);
		$_POST['tueD'] = trim($_POST['tueD']);
		//wednessday mess
		$_POST['wedB'] = trim($_POST['wedB']);
		$_POST['wedL'] = trim($_POST['wedL']);
		$_POST['wedD'] = trim($_POST['wedD']);
		//thursday mess
		$_POST['thurB'] = trim($_POST['thurB']);
		$_POST['thurL'] = trim($_POST['thurL']);
		$_POST['thurD'] = trim($_POST['thurD']);
 		//friday mess
		$_POST['friB'] = trim($_POST['friB']);
		$_POST['friL'] = trim($_POST['friL']);
		$_POST['friD'] = trim($_POST['friD']);
		//saturday mess
		$_POST['satB'] = trim($_POST['satB']);
		$_POST['satL'] = trim($_POST['satL']);
		$_POST['satD'] = trim($_POST['satD']);

		//using proper case
		$_POST['sunB'] = ucwords($_POST['sunB']);
		$_POST['sunL'] = ucwords($_POST['sunL']);
		$_POST['sunD'] = ucwords($_POST['sunD']);
		$_POST['monB'] = ucwords($_POST['monB']);
		$_POST['monL'] = ucwords($_POST['monL']);
		$_POST['monD'] = ucwords($_POST['monD']);
		$_POST['tueB'] = ucwords($_POST['tueB']);
		$_POST['tueL'] = ucwords($_POST['tueL']);
		$_POST['tueD'] = ucwords($_POST['tueD']);
		$_POST['wedB'] = ucwords($_POST['wedB']);
		$_POST['wedL'] = ucwords($_POST['wedL']);
		$_POST['wedD'] = ucwords($_POST['wedD']);
		$_POST['thurB'] = ucwords($_POST['thurB']);
		$_POST['thurL'] = ucwords($_POST['thurL']);
		$_POST['thurD'] = ucwords($_POST['thurD']);
		$_POST['friB'] = ucwords($_POST['friB']);
		$_POST['friL'] = ucwords($_POST['friL']);
		$_POST['friD'] = ucwords($_POST['friD']);
		$_POST['satB'] = ucwords($_POST['satB']);
		$_POST['satL'] = ucwords($_POST['satL']);
		$_POST['satD'] = ucwords($_POST['satD']);


		if((strlen($_POST['bTime']) == 0) || (strlen($_POST['lTime']) == 0) || (strlen($_POST['dTime']) == 0))
			header('Location:../admin.php?mess=1');
		else if((strlen($_POST['sunB']) == 0) || (strlen($_POST['sunL']) == 0) || (strlen($_POST['sunD']) == 0))
			header('Location:../admin.php?mess=2');
		else if((strlen($_POST['monB']) == 0) || (strlen($_POST['monL']) == 0) || (strlen($_POST['monD']) == 0))
			header('Location:../admin.php?mess=2');
		else if((strlen($_POST['tueB']) == 0) || (strlen($_POST['tueL']) == 0) || (strlen($_POST['tueD']) == 0))
			header('Location:../admin.php?mess=2');
		else if((strlen($_POST['wedB']) == 0) || (strlen($_POST['wedL']) == 0) || (strlen($_POST['wedD']) == 0))
			header('Location:../admin.php?mess=2');
		else if((strlen($_POST['thurB']) == 0) || (strlen($_POST['thurL']) == 0) || (strlen($_POST['thurD']) == 0))
			header('Location:../admin.php?mess=2');
		else if((strlen($_POST['friB']) == 0) || (strlen($_POST['friL']) == 0) || (strlen($_POST['friD']) == 0))
			header('Location:../admin.php?mess=2');
		else if((strlen($_POST['satB']) == 0) || (strlen($_POST['satL']) == 0) || (strlen($_POST['satD']) == 0))
			header('Location:../admin.php?mess=2');
		else
		{
			if(!($result = queryToDb("UPDATE messtime SET breakfast = \"" . $_POST["bTime"] ."\", lunch = \"" . $_POST["lTime"] ."\", dinner = \"" . $_POST["dTime"] ."\"")))
				header('Location:../admin.php?mess=3');
			if(!($result = queryToDb("UPDATE messmenu SET breakfast = \"" . $_POST["sunB"] ."\", lunch = \"" . $_POST["sunL"] ."\", dinner = \"" . $_POST["sunD"] ."\" WHERE day=\"0\"")))
				header('Location:../admin.php?mess=3');
			if(!($result = queryToDb("UPDATE messmenu SET breakfast = \"" . $_POST["monB"] ."\", lunch = \"" . $_POST["monL"] ."\", dinner = \"" . $_POST["monD"] ."\" WHERE day=\"1\"")))
				header('Location:../admin.php?mess=3');
			if(!($result = queryToDb("UPDATE messmenu SET breakfast = \"" . $_POST["tueB"] ."\", lunch = \"" . $_POST["tueL"] ."\", dinner = \"" . $_POST["tueD"] ."\" WHERE day=\"2\"")))
				header('Location:../admin.php?mess=3');
			if(!($result = queryToDb("UPDATE messmenu SET breakfast = \"" . $_POST["wedB"] ."\", lunch = \"" . $_POST["wedL"] ."\", dinner = \"" . $_POST["wedD"] ."\" WHERE day=\"3\"")))
				header('Location:../admin.php?mess=3');
			if(!($result = queryToDb("UPDATE messmenu SET breakfast = \"" . $_POST["thurB"] ."\", lunch = \"" . $_POST["thurL"] ."\", dinner = \"" . $_POST["thurD"] ."\" WHERE day=\"4\"")))
				header('Location:../admin.php?mess=3');
			if(!($result = queryToDb("UPDATE messmenu SET breakfast = \"" . $_POST["friB"] ."\", lunch = \"" . $_POST["friL"] ."\", dinner = \"" . $_POST["friD"] ."\" WHERE day=\"5\"")))
				header('Location:../admin.php?mess=3');
			if(!($result = queryToDb("UPDATE messmenu SET breakfast = \"" . $_POST["satB"] ."\", lunch = \"" . $_POST["satL"] ."\", dinner = \"" . $_POST["satD"] ."\" WHERE day=\"6\"")))
				header('Location:../admin.php?mess=3');
			else
				header('Location:../admin.php?mess=0');
		}
	}
?> 