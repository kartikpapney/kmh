<?php
	include('admintask_head.php');
?>
	  <div id="mainab" style=" padding:20px; ">
	    <!-- wrapper-main -->
	<!-- admin horizontal menu -->
	      <div class="adminMenu " >
	      <ul class="adminMenuList">
	          <li class="adminMenuElement "><a href="admintask_addboarder.php"><span>Add Boarder</span></a></li>
	          <li class="adminMenuElement"><a href="admintask_editboarder.php"><span>Edit Boarder</span></a></li>
	          <li class="adminMenuElement"><a href="admintask_deleteboarder.php"><span>Delete Boarder</span></a></li>
	          <li class="adminMenuElement"><a href="admintask_search.php"><span>Search Boarder</span></a></li>
	          <li class="adminMenuElement active"><a href="admintask_allboarder.php"><span>View all Boarder</span></a></li>
	          <li class="adminMenuElement"><a href="admintask_addadmin.php"><span>Add Admin</span></a></li>
	          <li class="adminMenuElement"><a href="admintask_mess.php"><span>Mess Details</span></a></li>
	      </ul>tyle="padding: 5px; background-color: #111;"></div>
	  </div>
<!-- tab view_al_boarders -->

	<!-- Information -->
	<div id="page-content">
		<div class="div_adminViewAll_main">
			<h6 class="toggle-trigger"  style="background-color:#6799A6"><a href="#"><strong>Boarder ID: KMHB000000 - KMHB000100</strong></a></h6>
			<div class="toggle-container">
			    <div id="div_admin_viewAll">
					<?php adminViewAll("SELECT * FROM boarder WHERE boarderID >='KMHB000000' AND boarderID <='KMHB000100' ORDER BY boarderID ASC");?>
			    </div>
			</div>
			<h6 class="toggle-trigger" style="background-color:#6799A6"><a href="#"><strong>Boarder ID: KMHB000101 - KMHB000200</strong></a></h6>
			<div class="toggle-container">
			    <div id="div_admin_viewAll">
					<?php adminViewAll("SELECT * FROM boarder WHERE boarderID >='KMHB000101' AND boarderID <='KMHB000200' ORDER BY boarderID ASC");?>
			    </div>
			</div>
			<h6 class="toggle-trigger" style="background-color:#6799A6"><a href="#"><strong>Boarder ID: KMHB000201 - KMHB000300</strong></a></h6>
			<div class="toggle-container">
			    <div class="block">
					<?php adminViewAll("SELECT * FROM boarder WHERE boarderID >='KMHB000201' AND boarderID <='KMHB000300' ORDER BY boarderID ASC");?>
			    </div>
			</div>
			<h6 class="toggle-trigger" style="background-color:#6799A6"><a href="#"><strong>Boarder ID: KMHB000301 - KMHB000400</strong></a></h6>
			<div class="toggle-container">
			    <div id="div_admin_viewAll">
					<?php adminViewAll("SELECT * FROM boarder WHERE boarderID >='KMHB000301' AND boarderID <='KMHB000400' ORDER BY boarderID ASC");?>
			    </div>
			</div>
			<h6 class="toggle-trigger" style="background-color:#6799A6"><a href="#"><strong>Boarder ID: KMHB000401 - KMHB000500</strong></a></h6>
			<div class="toggle-container">
			    <div id="div_admin_viewAll">
					<?php adminViewAll("SELECT * FROM boarder WHERE boarderID >='KMHB000401' AND boarderID <='KMHB000500' ORDER BY boarderID ASC");?>
			    </div>
			</div>
			<h6 class="toggle-trigger" style="background-color:#6799A6"><a href="#"><strong>Boarder ID: KMHB000501 - KMHB000600</strong></a></h6>
			<div class="toggle-container">
			    <div id="div_admin_viewAll">
					<?php adminViewAll("SELECT * FROM boarder WHERE boarderID >='KMHB000501' AND boarderID <='KMHB000600' ORDER BY boarderID ASC");?>
			    </div>
			</div>

	</div>
	<!-- ENDS Information -->
</div>
<!-- ENDS  view_al_boarders -->
	</div>
	<!-- ENDS content -->
</div>
<!-- ENDS wrapper-main -->
</div>
<!-- ENDS MAIN -->

		
</body>
</html>
