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
	          <li class="adminMenuElement "><a href="admintask_deleteboarder.php"><span>Delete Boarder</span></a></li>
	          <li class="adminMenuElement"><a href="admintask_search.php"><span>Search Boarder</span></a></li>
	          <li class="adminMenuElement"><a href="admintask_allboarder.php"><span>View all Boarder</span></a></li>
	          <li class="adminMenuElement"><a href="admintask_addadmin.php"><span>Add Admin</span></a></li>
	          <li class="adminMenuElement"><a href="admintask_mess.php"><span>Mess Details</span></a></li>
	      </ul>
	      <div style="padding: 5px; background-color: #111;"></div>
	  </div>

<!-- Add_boarder -->
		<div id="adminSection">
			<form name="addBoarder" action="scripts/adminTask.php" method="post">
				<?php 
					if (isset($_GET['add']))
					{
						echo '<div class="div_admin_prompt">';
							if ($_GET['add'] == 1)
								echo "<p class=\"success_prompt\">Boarder record added sucessfully !</p>";
							else
								echo "<p class=\"failed_prompt\">Failed to add new boarder record !</p>";
						echo '</div>';
					}
				?>	

				<label>Boarder ID : </label>
			    <?php echo '<input type="text" name="boarderID"  readonly="true" value = "'.getBoarderID().'" style="background-color:#36363C;"></input>';?>

			    <label >Room Number : </label>
			    <input type="text" name="roomno" required="true" placeholder="enter allocated room no." maxlength="5" size="5" onkeypress="return isNumberKey(event)"></input>
		 	
			    <label >First Name : </label>
			    <input type="text" name="fname"  required="true" placeholder=" enter first name" maxlength="30" size="30" onkeypress="return isName(event)"></input>

			    <label >Middle Name :</label>
			    <input type="text" name="mname" placeholder=" enter middle name" maxlength="20" size="20" onkeypress="return isName(event)"></input>
			
			    <label >Last Name :  </label>
			    <input type="text" name="lname" placeholder=" enter last name" maxlength="30" size="30" onkeypress="return isName(event)"></input>

			    <label for="name">Department :  </label>
			    <select name="department" id="dept" onchange="populateProgramme()">
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
			    <select name="programme" id="programme">
			    	<option value="MBA">MBA</option>
					<option value="P.G. Diploma in Tourism Management">P.G. Diploma in Tourism Management</option>
			    </select>

			    <label >Roll Number :  </label>
			    <input type="text" name="rollno"  required="true" placeholder="enter boarder roll no." maxlength="10" size="8" onkeypress="return isRollNo(event)"></input>

			    <label >Contact Number :  </label>
			    <input type="text" name="contactno" placeholder="enter boarder contact no." maxlength="10" size="10" onkeypress="return isNumberKey(event)"></input>
				<button type="submit" class="submit_button" >Submit</button>
			</form>
		</div>
<!-- ENDS Add_boarder -->
	</div>
	<!-- ENDS content -->
</div>
<!-- ENDS wrapper-main -->
</div>
<!-- ENDS MAIN -->

		
</body>
</html>
