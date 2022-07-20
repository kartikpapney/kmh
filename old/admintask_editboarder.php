<?php
	include('admintask_head.php');
?>
	  <div id="mainab" style=" padding:20px; ">
	    <!-- wrapper-main -->
	<!-- admin horizontal menu -->
	      <div class="adminMenu " >
	      <ul class="adminMenuList">
	          <li class="adminMenuElement "><a href="admintask_addboarder.php"><span>Add Boarder</span></a></li>
	          <li class="adminMenuElement active"><a href="admintask_editboarder.php"><span>Edit Boarder</span></a></li>
	          <li class="adminMenuElement "><a href="admintask_deleteboarder.php"><span>Delete Boarder</span></a></li>
	          <li class="adminMenuElement"><a href="admintask_search.php"><span>Search Boarder</span></a></li>
	          <li class="adminMenuElement"><a href="admintask_allboarder.php"><span>View all Boarder</span></a></li>
	          <li class="adminMenuElement"><a href="admintask_addadmin.php"><span>Add Admin</span></a></li>
	          <li class="adminMenuElement"><a href="admintask_mess.php"><span>Mess Details</span></a></li>
	      </ul>
	      <div style="padding: 5px; background-color: #111;"></div>
	  </div>


<!-- tab Edit_boarder -->
		<div id="adminSection">
			<form name="editBoarder" action="" method="post">
				<?php 
					if (isset($_GET['edit']))
					{
						echo '<div class="div_admin_prompt">';
							if ($_GET['edit'] == 1)
								echo "<p class=\"success_prompt\">Record updated with edited values !</p>";
							else
								echo "<p class=\"failed_prompt\">Failed to update boarder record !</p>";
						echo '</div>';
					}
				?>	
				<label>Boarder ID : </label>
			    <input type="text" name="editParameter" onkeypress="return isRollNo(event)" maxlength="10" size="10"/>
			    <button type="submit" class="load_button">Load</button>
			    <?php 
			    	//$result = NULL;
			    	if($result != NULL)
			    		$result = loadToEdit();
		    	?>
		    </form>

		    <?php
		    	if($result)
		    	{?>
		    		<form name="updateBoarder" action="scripts/adminTask.php" method="post">
		    				<div class="empty_div50"></div>

		    				<label >Boarder ID : </label>
							<?php echo '<input type="text" name="eboarderID" required="true" readonly="true" value ="'.$result[7].'"></input>'?>

						    <label >Room Number : </label>
							<?php echo '<input type="text" name="eroomno" required="true" placeholder="enter allocated room no." maxlength="5" size="5" onkeypress="return isNumberKey(event)" value ="'.$result[5].'"></input>'?>
					 	
						    <label >First Name : </label>
						    <?php echo '<input type="text" name="efname"  required="true" placeholder=" enter first name" maxlength="30" size="30" onkeypress="return isName(event)" value ="'.$result[0].'"></input>' ?>

						    <label >Middle Name :</label>
						    <?php echo '<input type="text" name="emname" placeholder=" enter middle name" maxlength="20" size="20" onkeypress="return isName(event)" value ="' .$result[1]. '"></input>' ?>
						
						    <label >Last Name :  </label>
						    <?php echo '<input type="text" name="elname" placeholder=" enter last name" maxlength="30" size="30" onkeypress="return isName(event)" value ="' .$result[2]. '"></input>' ?>

						    <label for="name">Department :  </label>
						    <select name="edepartment" id="edept" onchange="populateProgrammeEdit()">
						    	<?php echo '<OPTION value='.$result[3].'>'.$result[3].'</OPTION>'; ?>
						    	<option value="Business Administration">Business Administration</option>
								<option value="Chemical Sciences">Chemical Sciences</option>
								<option value="Commerce">Commerce</option>
								<option value="Civil Engineering">Civil Engineering</option>
								<option value="Computer Science and Engineering">Computer Science &amp; Engineering</option>
								<option value="Cultural Studies">Cultural Studies</option>
								<option value="Electronics and Communication Engineering">Electronics &amp; Communication Engineering</option>
								<option value="Energy">Energy</option>
								<option value="English and Foreign Languages">English &amp; Foreign Languages</option>
								<option value="Environmental Science">Environmental Science</option>
								<option value="Food Engineering and Technology">Food Engineering &amp; Technology</option>
								<option value="Hindi">Hindi</option>
								<option value="Mass Communication and Journalism">Mass Communication &amp; Journalism</option>
								<option value="Mathematical Sciences">Mathematical Sciences</option>
								<option value="Mechanical Engineering">Mechanical Engineering</option>
								<option value="Molecular Biology and Biotechnology">Molecular Biology &amp; Biotechnology</option>
								<option value="Physics">Physics</option>
								<option value="Social Work">Social Work</option>
								<option value="Sociology">Sociology</option>
						    </select>

						    <label >Programme :  </label>
						    <select name="eprogramme" id="eprogramme">
						    		<?php echo '<OPTION value='.$result[4].'>'.$result[4].'</OPTION>'; ?>
							</select>

						    <label >Roll Number :  </label>
						    <?php echo '<input type="text" name="erollno"  required="true" placeholder="enter boarder roll no." maxlength="10" size="10" onkeypress="return isRollNo(event)" value ="'.$result[6].'"></input>' ?>

						    <label >Contact Number :  </label>
						    <?php echo '<input type="text" name="econtactno" placeholder="enter boarder contact no." maxlength="10" size="10" onkeypress="return isNumberKey(event)" value ="'.$result[8].'"></input>' ?>
							<button type="submit" class="submit_button" >Update</button>
						</form>
			<?php
			}
			else
				echo ' <p class="edit_hint">- Use Boarder ID to search and edit record. </p>';
			?>
		</div>
<!-- ENDS  Edit_boarder -->
	</div>
	<!-- ENDS content -->
</div>
<!-- ENDS wrapper-main -->
</div>
<!-- ENDS MAIN -->

		
</body>
</html>