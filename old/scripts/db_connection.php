<!-- PHP File to connect to the database
Author: Lakhya Jyoti Nath, MCA2k15, TezU. | Dated : March 29th, 2014 
Updated on July 1st, 2014-->
<?php
	//$dbconnection = mysqli_connect("127.0.0.1","root","","kmh_boarder");
	$dbconnection = mysqli_connect("192.168.3.90","kmhdb","mydbkmh16","kmhdb");
	if (mysqli_connect_errno())
		echo "Failed to connect to KMH Boarder database. Contact Webmaster.<br/>" . mysqli_connect_error();
	// else
	// 	echo "<br/>Conection sucessful.<br/>";
?>
