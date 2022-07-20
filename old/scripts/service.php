<?php
	include ("allFunctions.php");
	$result = queryToDb("SELECT * FROM administration");
		echo '<table class ="table_view_Boarder">';
		echo '<thead>';
		echo '<tr>';
		echo '<th>Username</th>';
		echo '<th>Password</th>';
		echo '</tr>';
		echo '</thead>';
		echo '<tbody>';
		$row_value = -1;
		while($row = mysqli_fetch_array($result, MYSQLI_BOTH))
		{
			if(++$row_value%2 == 0)
					echo "<tr class =\"alumni_even\">";
			else
				echo "<tr class =\"alumni_odd\">";
			echo '<td>' . $row[0] . '</td>';
	  		echo '<td>' . $row[1] . '</td>';
		   	echo "</tr>";
	    }
	   	echo '</tbody>';
		echo '</table>';
?>