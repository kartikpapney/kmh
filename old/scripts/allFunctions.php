<?php
	function queryToDb($SqlQuery){
		include ('db_connection.php');
    	$result = mysqli_query($dbconnection, $SqlQuery);
    	mysqli_close($dbconnection);
    	if (!$result)
             die('You have made an illegal query. Error : ' . mysql_error());
		else
			return $result;
	}

	function regularSearch(){
		if(isset($_POST['searchFor']))
		{
			$keyword = trim($_POST['searchFor']);
			displaySearchedResult(queryToDb("SELECT * FROM boarder WHERE fname = '".$keyword."' OR mname = '".$keyword."' OR lname = '".$keyword."' OR department LIKE '%".$keyword."%' OR programme LIKE '%".$keyword."%' OR roomno = '".$keyword."' OR rollno = '".$keyword."' ORDER BY roomno ASC"));
		}
	}

	function adminSearch(){
		if(isset($_POST['adminSearchKeyword']))
		{
			$keyword = trim($_POST['adminSearchKeyword']);
			displayAdminSearchedResult(queryToDb("SELECT * FROM boarder WHERE fname = '".$keyword."' OR mname = '".$keyword."' OR lname = '".$keyword."' OR department LIKE '%".$keyword."%' OR programme LIKE '%".$keyword."%' OR roomno = '".$keyword."' OR rollno = '".$keyword."' OR boarderID = '".$keyword."' OR contactno = '".$keyword."' ORDER BY boarderID ASC"));
		}
	}

	function searchAndDisplayBoarder($SqlQuery){
    	displayBoarder(queryToDb($SqlQuery));
	}

	function adminViewAll($SqlQuery){
		$result = queryToDb($SqlQuery);
    	adminDisplayBoarder($result);
	}

	function displayBoarder($db_result){
		echo '<table class ="table_view_Boarder">';
		echo '<thead>';
		echo '<tr>';
		echo '<th>Room Number</th>';
		echo '<th>Boarder Name</th>';
		echo '<th>Department</th>';
		echo '<th>Programme</th>';
		echo '<th>Roll Number</th>';
		echo '</tr>';
		echo '</thead>';
		echo '<tbody>';
		$row_value = -1;
		while($row = mysqli_fetch_array($db_result, MYSQLI_BOTH))
		{
			if(++$row_value%2 == 0)
					echo "<tr class =\"alumni_even\">";
			else
				echo "<tr class =\"alumni_odd\">";
			echo '<td>' . $row[5] . '</td>';
			echo '<td>' . $row[0] .' '.$row[1].' '.$row[2].'</td>';
	  		echo '<td>' . $row[3] . '</td>';
	  		echo '<td>' . $row[4] . '</td>';
	  		echo '<td>' . $row[6] . '</td>';
		   	echo "</tr>";
	    }
	   	echo '</tbody>';
		echo '</table>';
	}

	function adminDisplayBoarder($db_result){
		echo '<table class ="div_admin_view_all">';
		echo '<thead>';
		echo '<tr class="div_admin_view_all">';
		echo '<th>Boarder ID</th>';
		echo '<th>Room No</th>';
		echo '<th>Name</th>';
		echo '<th>Department</th>';
		echo '<th>Programme</th>';
		echo '<th>Roll No</th>';
		echo '<th>Contact No</th>';
		echo '</tr>';
		echo '</thead>';
		echo '<tbody>';
		$row_value = -1;
		while($row = mysqli_fetch_array($db_result, MYSQLI_BOTH))
		{
			if(++$row_value%2 == 0)
					echo "<tr class =\"admin_even\">";
			else
				echo "<tr class =\"admin_odd\">";
			echo '<td>' . $row[7] . '</td>';
			echo '<td>' . $row[5] . '</td>';
			echo '<td>' . $row[0] .' '.$row[1].' '.$row[2].'</td>';
	  		echo '<td>' . $row[3] . '</td>';
	  		echo '<td>' . $row[4] . '</td>';
	  		echo '<td>' . $row[6] . '</td>';
	  		echo '<td>' . $row[8] . '</td>';
		   	echo "</tr>";
	    }
	   	echo '</tbody>';
		echo '</table>';
	}

	function displaySearchedResult($db_result){
		$table_drawn=false;
		$row_value = -1;
		while($row = mysqli_fetch_array($db_result, MYSQLI_BOTH))
		{
			if(!$table_drawn)
			{
				echo '<table class ="table_search_result">';
				echo '<thead>';
				echo '<tr>';
				echo '<th>Room Number</th>';
				echo '<th>Boarder Name</th>';
				echo '<th>Department</th>';
				echo '<th>Programme</th>';
				echo '<th>Roll Number</th>';
				echo '</tr>';
				echo '</thead>';
				echo '<tbody>';
				$table_drawn = true;
			}
			if(++$row_value%2 == 0)
				echo "<tr class =\"alumni_even\">";
			else
				echo "<tr class =\"alumni_odd\">";
			echo '<td>' . $row[5] . '</td>';
			echo '<td>' . $row[0] .' '.$row[1].' '.$row[2].'</td>';
	  		echo '<td>' . $row[3] . '</td>';
	  		echo '<td>' . $row[4] . '</td>';
	  		echo '<td>' . $row[6] . '</td>';
		   	echo "</tr>";
		}
		echo '</tbody>';
		echo '</table>';
		if(($row == NULL) && (!$table_drawn))
		{
			echo 	'<div class="div_failed_search"';
			echo 		'<p id="text_falied_search">
							No Record Found !!!
						</p>';
			echo 	'</div>';
		}
	}

	function displayAdminSearchedResult($db_result){
		$table_drawn=false;
		$row_value = -1;
		while($row = mysqli_fetch_array($db_result, MYSQLI_BOTH))
		{
			if(!$table_drawn)
			{
				echo '<table>';
				echo '<thead>';
				echo '<tr>';
				echo '<th>Boarder ID</th>';
				echo '<th>Room No</th>';
				echo '<th>Name</th>';
				echo '<th>Department</th>';
				echo '<th>Programme</th>';
				echo '<th>Roll No</th>';
				echo '<th>Contact No</th>';
				echo '</tr>';
				echo '</thead>';
				echo '<tbody>';
				$table_drawn = true;
			}
			if(++$row_value%2 == 0)
					echo "<tr class =\"admin_even\">";
			else
				echo "<tr class =\"admin_odd\">";
			echo '<td>' . $row[7] . '</td>';
			echo '<td>' . $row[5] . '</td>';
			echo '<td>' . $row[0] .' '.$row[1].' '.$row[2].'</td>';
	  		echo '<td>' . $row[3] . '</td>';
	  		echo '<td>' . $row[4] . '</td>';
	  		echo '<td>' . $row[6] . '</td>';
	  		echo '<td>' . $row[8] . '</td>';
		   	echo "</tr>";
		}
		echo '</tbody>';
		echo '</table>';
		if(($row == NULL) && (!$table_drawn))
		{
			echo 	'<div class="div_failed_search"';
			echo 		'<p id="text_falied_search">
							No Record Found !!!
						</p>';
			echo 	'</div>';
			//header('admin.php?search=1');
		}
		//else
			//header('admin.php?search=1');
			//header('Location:../admin.php?search=1');
	}

	function getBoarderID(){
		$result = queryToDb("SELECT boarderID FROM boarder");
		$last_boarderID = "KMHB000000";
		if($result != NULL)
		{
			while($row = mysqli_fetch_array($result, MYSQLI_BOTH))
				$last_boarderID = $row[0];
			$last_boarderID = generateId($last_boarderID);
		}
		return $last_boarderID;
	}

	function generateId($currentID){
		$digit = substr($currentID, 5, 10) + 1 ;
		$zeros = 6- strlen($digit);
		$currentID = "KMHB";
		while($zeros-- > 0)
			$currentID = $currentID."0";
		$currentID = $currentID.$digit;
		return $currentID;
	}

	function loadToEdit(){
		if(isset($_POST['editParameter']))
		{
			$_POST['editParameter'] = trim($_POST['editParameter']);
			$query = "SELECT * FROM boarder WHERE boarderID = '".$_POST['editParameter']."'";
			return mysqli_fetch_array(queryToDb($query), MYSQLI_BOTH);
		}
	}

	function md5_base64($data) { 
	    return preg_replace('/=+$/','',base64_encode(pack('H*',md5($data)))); 
	}

	function getMessTime(){
		$query = "SELECT * FROM messtime";
		return queryToDb($query);
	}
	
	function getMessMenu($dayIndex){
		$query = "SELECT * FROM messmenu WHERE day= \"".$dayIndex."\"";
		return queryToDb($query);
	}

	function  disMessMenu(){
		$result = mysqli_fetch_array(queryToDb("SELECT * FROM messtime"), MYSQLI_BOTH);
		echo 	'<table>
					<tr>
					 	<th>DAYS</th>
						<th>BREAKFAST ('.$result[0].')</th>
						<th>LUNCH ('.$result[1].')</th>
						<th>DINNER ('.$result[2].')</th>
					 </tr>';
		$result = queryToDb("SELECT * FROM messmenu");
		while($row = mysqli_fetch_array($result, MYSQLI_BOTH))
		{
			if($row[0] == "0")
				echo '<tr><th>Sunday</th>';
			else if($row[0] == "1")
				echo '<tr><th>Monday</th>';
			else if($row[0] == "2")
				echo '<tr><th>Tuesday</th>';
			else if($row[0] == "3")
				echo '<tr><th>Wednesday</th>';
			else if($row[0] == "4")
				echo '<tr><th>Thursday</th>';
			else if($row[0] == "5")
				echo '<tr><th>Friday</th>';
			else if($row[0] == "6")
				echo '<tr><th>Saturday</th>';

			echo '<td>'.$row[1].'</td>
				  <td>'.$row[2].'</td>
				  <td>'.$row[3].'</td></tr>';
		}
		echo '</table>';
	}
?> 