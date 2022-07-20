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
	          <li class="adminMenuElement"><a href="admintask_allboarder.php"><span>View all Boarder</span></a></li>
	          <li class="adminMenuElement active"><a href="admintask_addadmin.php"><span>Add Admin</span></a></li>
	          <li class="adminMenuElement"><a href="admintask_mess.php"><span>Mess Details</span></a></li>
	      </ul>
	      <div style="padding: 5px; background-color: #111;"></div>
	  </div>

<!-- tab new_admin -->
	<div id="page-content">
		<div id="adminSection" style="width:80%; padding-left:20px; padding-top:15px;" >
			<form name="changePswd" method="post" action="scripts/adminTask.php">
				<?php 
					if (isset($_GET['create']))
					{
						echo '<div class="div_admin_prompt">';
							if ($_GET['create'] == 0)
								echo "<p class=\"success_prompt\">New administartor account created sucessfully !</p>";
							else if ($_GET['create'] == 1)
								echo "<p class=\"failed_prompt\">Administartor name cannot be empty</p>";
							else if ($_GET['create'] == 2)
								echo "<p class=\"failed_prompt\">Either of the password fields are left empty.</p>";
							else if ($_GET['create'] == 3)
								echo "<p class=\"failed_prompt\">Entered passwords are different.</p>";
							else if ($_GET['create'] == 4)
								echo "<p class=\"failed_prompt\">Cannot create new Administartor account. Contact Developer.</p>";
						echo '</div>';
					}
				?>	

				<label>User ID : </label>
			    <input type="text" name="nuserId"  required="true" onblur="validateAdminName(nuserId)" maxlength="20" size="20"/>

			    <label>Designation : </label>
				<select name="ndesignation">
					 	<option value="Care Taker">	Care Taker</option>
						<option value="Prefect">	Prefect</option>
						<option value="Assistant Prefect">	Assistant Prefect</option>
						<option value="Warden">	Warden</option>
						<option value="Associate Warden">	Associate Warden</option>
				</select>
	 	
			    <label >Password : </label>
			    <input type="password" name="nPassword"  required="true" placeholder=" enter password" maxlength="20" size="20"/>

			    <label >Re-type password :</label>
			    <input type="password" name="nRePassword" required="true" placeholder=" re-enter password" maxlength="20" size="20"/>
			
			    <button type="submit" onclick="return validatePswd(newPass)" style="width:200px;margin-left: 40%;margin-top: 20px;" >Create Admin</button>
			</form>
	</div>
</div>
<!-- ENDS  new_admin -->
	</div>
	<!-- ENDS content -->
</div>
<!-- ENDS wrapper-main -->
</div>
<!-- ENDS MAIN -->

		
</body>
</html>