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
	          <li class="adminMenuElement active"><a href="admintask_search.php"><span>Search Boarder</span></a></li>
	          <li class="adminMenuElement"><a href="admintask_allboarder.php"><span>View all Boarder</span></a></li>
	          <li class="adminMenuElement"><a href="admintask_addadmin.php"><span>Add Admin</span></a></li>
	          <li class="adminMenuElement"><a href="admintask_mess.php"><span>Mess Details</span></a></li>
	      </ul>
	      <div style="padding: 5px; background-color: #111;"></div>
	  </div>
<!-- tab search_boarder -->
	<!-- Information -->
	<div id="page-content">
		<?php
 			echo 	'<div id="div_admin_search">
	 		 			<form action="" method="post">
	 						<input type="text" name="adminSearchKeyword" required="true" title="Enter keyword to search" placeholder="Enter Keyword" >
 							<input type="submit" onclick="return getValue(adminSearchKeyword)" value="Search">
	 					</form>
 					</div>';
			echo    '<div id ="admin_search_result">';
						adminSearch();
						//header("admin.php?search=1");
			echo 	"</div>";
		?>
	</div>
	<!-- ENDS Information -->
<!-- ENDS  search_boarder -->
	</div>
</div>
<!-- ENDS wrapper-main -->
</div>
<!-- ENDS MAIN -->

		
</body>
</html>