<?php
	include('admintask_head.php');
?>
	  <div id="mainab" style=" padding:20px; ">
	    <!-- wrapper-main -->
	<!-- admin horizontal menu -->
	      <div class="adminMenu " >
	     <ul class="adminMenuList">
	          <li class="adminMenuElement active"><a href="admintask_addboarder.php"><span>Add Boarder</span></a></li>
	          <li class="adminMenuElement"><a href="admintask_editboarder.php"><span>Edit Boarder</span></a></li>
	          <li class="adminMenuElement"><a href="admintask_deleteboarder.php"><span>Delete Boarder</span></a></li>
	          <li class="adminMenuElement"><a href="admintask_search.php"><span>Search Boarder</span></a></li>
	          <li class="adminMenuElement"><a href="admintask_allboarder.php"><span>View all Boarder</span></a></li>
	          <li class="adminMenuElement"><a href="admintask_addadmin.php"><span>Add Admin</span></a></li>
	          <li class="adminMenuElement"><a href="admintask_mess.php"><span>Mess Details</span></a></li>
	      </ul>
	      <div style="padding: 5px; background-color: #111;"></div>
	  </div>
<!-- tab change_password -->
<div class="panes">
	<!-- Information -->
	<div id="page-content">
		<div id="adminSection" style="width:80%; padding-left:20px; padding-top:15px;" >
			<form name="changePswd" method="post" action="scripts/adminTask.php">
				<?php 
					if (isset($_GET['change']))
					{

						echo '<div class="div_admin_prompt">';
							if ($_GET['change'] == 0)
								echo "<p class=\"success_prompt\">Password changed sucessfully !</p>";
							else if ($_GET['change'] == 1)
								echo "<p class=\"failed_prompt\">Failed to change password.</p>";
							else if ($_GET['change'] == 2)
								echo "<p class=\"failed_prompt\">New password &amp; re-typed password are different.</p>";
							else if ($_GET['change'] == 3)
								echo "<p class=\"failed_prompt\">You have entered wrong 'Current Passsword'.</p>";
						echo '</div>';
					}
				?>	

				<label>User ID : </label>
			    <?php echo '<input type="text" name="userId"  readonly="true" value = "'.$session_user.'" style="background-color:#36363C;"></input>';?>

			    <label >Current password : </label>
			    <input type="password" name="currPass" required="true" placeholder="enter current password" maxlength="20" size="20"></input>
		 	
			    <label >New password : </label>
			    <input type="password" name="newPass"  required="true" placeholder=" enter new password" maxlength="20" size="20"></input>

			    <label >Re-type password :</label>
			    <input type="password" name="renewPass" required="true" placeholder=" re-enter new password" maxlength="20" size="20"></input>
			
			    <button type="submit" onclick="return validatePswd(newPass)" style="width:200px;margin-left: 40%;margin-top: 20px;" >Change Password</button>
			</form>
		</div>
	</div>
	<!-- ENDS Information -->
</div>
<!-- ENDS  change_password -->
	</div>
	<!-- ENDS content -->
</div>
<!-- ENDS wrapper-main -->
</div>
<!-- ENDS MAIN -->

		
</body>
</html>