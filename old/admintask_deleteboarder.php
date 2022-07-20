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
	          <li class="adminMenuElement active"><a href="admintask_deleteboarder.php"><span>Delete Boarder</span></a></li>
	          <li class="adminMenuElement"><a href="admintask_search.php"><span>Search Boarder</span></a></li>
	          <li class="adminMenuElement"><a href="admintask_allboarder.php"><span>View all Boarder</span></a></li>
	          <li class="adminMenuElement"><a href="admintask_addadmin.php"><span>Add Admin</span></a></li>
	          <li class="adminMenuElement"><a href="admintask_mess.php"><span>Mess Details</span></a></li>
	      </ul>
	      <div style="padding: 5px; background-color: #111;"></div>
	  </div>

<!-- tab delete_boarder -->
	<div id="page-content">
		<div id="adminSection">
			<form name="deleteBoarder" action="" method="post">
				<?php 
					if (isset($_GET['delete']))
					{
						echo '<div class="div_admin_prompt">';
							if ($_GET['delete'] == 1)
								echo "<p class=\"success_prompt\">Selected record deleted sucessfully !</p>";
							else
								echo "<p class=\"failed_prompt\">Failed to delete boarder record !</p>";
						echo '</div>';
					}
				?>	
				<label>Boarder ID : </label>
			    <input type="text" name="editParameter" onkeypress="return isRollNo(event)" maxlength="10" size="10"/>
			    <button type="submit" class="load_button">Load</button>
			    <?php 
			    	if($result != NULL)
			    		$result = loadToEdit();
		    	?>
		    </form>

		    <?php
		    	if($result)
		    	{?>
		    		<form name="deleteBoarder" action="scripts/adminTask.php" method="post">
		    				<div class="empty_div50"></div>

		    				<label >Boarder ID : </label>
							<?php echo '<input type="text" name="dboarderID" readonly="true" value ="'.$result[7].'"/>'?>

						    <label >Room Number : </label>
							<?php echo '<input type="text" name="droomno" readonly="true" value ="'.$result[5].'"/>'?>
					 	
						    <label >First Name : </label>
						    <?php echo '<input type="text" name="dfname"  readonly="true" value ="'.$result[0].'"/>' ?>

						    <label >Middle Name :</label>
						    <?php echo '<input type="text" name="dmname" readonly="true" value ="' .$result[1]. '"/>' ?>
						
						    <label >Last Name :  </label>
						    <?php echo '<input type="text" name="dlname" readonly="true" value ="' .$result[2]. '"/>' ?>

						    <label for="name">Department :  </label>
						    <?php echo '<input type="text" name="ddepartment" readonly="true" value ="'.$result[3].'"/>' ?>

						    <label >Programme :  </label>
						    <?php echo '<input type="text" name="ddepartment" readonly="true" value ="'.$result[4].'"/>' ?>

						    <label >Roll Number :  </label>
						    <?php echo '<input type="text" name="drollno"  readonly="true" value ="'.$result[6].'"/>' ?>

						    <label >Contact Number :  </label>
						    <?php echo '<input type="text" name="dcontactno" readonly="true" value ="'.$result[8].'"/>' ?>
							<button type="submit" class="submit_button" >Delete</button>
						</form>
			<?php
			}
			else
				echo ' <p class="edit_hint">- Use Boarder ID to search and delete record. </p>';

			?>
	</div>
</div>
<!-- ENDS  delete_boarder -->
	</div>
	<!-- ENDS content -->
</div>
<!-- ENDS wrapper-main -->
</div>
<!-- ENDS MAIN -->

		
</body>
</html>
