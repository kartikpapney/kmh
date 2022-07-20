<?php

	$conn = mysqli_connect("192.168.3.90","kmhdb","mydbkmh16","kmhdb");
	if($conn)
	{
	echo"connected";
	}
	$query = "SELECT * FROM boarder";
	$f = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Department Table</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100">
					<table>
						<thead>
							<tr class="table100-head">
								<th class="column1">Department Code</th>
								<th class="column2">Department Name</th>
								<th class="column3">No. of Course</th>
							</tr>
						</thead>
						<tbody>
								
					<?php while($row = mysqli_fetch_array($f)):?>
                <tr>
                    <td class="column1"><?php echo $row['0'];?></td>
                    <td class="column1"><?php echo $row['1'];?></td>
                    <td class="column1"><?php echo $row['2'];?></td>
                    <td class="column1"><?php echo $row['3'];?></td>
                    <td class="column1"><?php echo $row['4'];?></td>
                    <td class="column1"><?php echo $row['5'];?></td>
                    <td class="column1"><?php echo $row['6'];?></td>
                    <td class="column1"><?php echo $row['7'];?></td>
                    <td class="column1"><?php echo $row['8'];?></td>
                    <td class="column1"><?php echo $row['9'];?></td>
                </tr>
                <?php endwhile;?>

						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>


	

<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
