<?php
	include('scripts/session.php');
?>
<!DOCTYPE  html>
<html>
	<head>
		<?php require_once ('head_section.php');?>
		<link rel="stylesheet" href="css/login.css">
		<link rel="stylesheet" href="css/form.css">
		<script type="text/javascript" src="js/form.js"></script>

		<script>
			$(document).ready(function(){				
				var i=0;
				if(GetQueryStringParams('add') == "add")
					i = 0;
				else if (GetQueryStringParams('edit') == "edit")
					i = 1;
				else if (GetQueryStringParams('delete') == "delete")
					i = 2;
				else if (GetQueryStringParams('search') == "search")
					i = 3;
				else if (GetQueryStringParams('create') == "create")
					i = 5;
				else if (GetQueryStringParams('change') == "change")
				 	i = 6;
				 else if (GetQueryStringParams('mess') == "mess")
				 	i = 7;
				 goToTab(i);
			});

			function goToTab(index){
				var api = $("ul.tabs").data("tabs");
				while (index-- > 0)
					api.next();
			}

			function GetQueryStringParams(sParam){
				var sPageURL = window.location.search.substring(1);
				var sURLVariables = sPageURL.split('&');
				for (var i = 0; i < sURLVariables.length; i++) 
				{
					var sParameterName = sURLVariables[i].split('=');
					if (sParameterName[0] == sParam)
					{ 
						return sParameterName[0];
					}
				}
			}
		</script>

		<style type="text/css">
			        
.adminMenuList {
  border-radius: 3px 35px 0px 0px;
  list-style-type: none;
  margin: 0;
  padding: 0;
  padding-left: 30px;
  overflow: hidden;
  background-color: #333;
}

.adminMenuElement {  
  font-family: Arial, Helvetica, sans-serif;
  margin: 4px 2px 0px 0px;
  float: left;
}

.adminMenuElement a {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 10px 16px 5px 16px;
  text-decoration: none;
}

.adminMenuElement a:hover {
  background-color: #111;
  border-radius: 10px 10px 0px 0px;
}

.active {
  background-color: #111;
  border-radius: 10px 10px 0px 0px;
}
.vl {
  border-left: 2px solid #111;
  height: 140px;
  padding: 3px;
  margin: 5px;
  top: 0;
}
		</style>

	</head>
	
	<body>
			<!-- HEADER -->
			<div id="header">
				<div class="wrapper">
					<img id="logo_kmh" src="pics/logo_kmh.png" alt="KMH Logo" usemap="#kmhlogo">
					<p class="title_text1">Kanchenjunga Mens Hostel</p>
					<p class="title_text2">home...away from home</p>
					<img id="logo_tezu" src="pics/logo_tezu.png" alt="TezU Logo" usemap="#tezulogo">
				</div>
			</div>
			<!-- ENDS HEADER -->
			
			<!-- Menu -->
			<div id="menu">
				<div id="menu-holder">
					<!-- wrapper-menu -->
					<div class="wrapper">
						<div class="div_adminHeader">
							<p>Welcome to Admin Panel</p>
						</div>
					</div>
					<!-- wrapper-menu -->
				</div>
			</div>
			<!-- ENDS Menu -->
			

			<!-- MAIN -->
			<div id="main">
				<!-- wrapper-main -->
				<div class="wrapper col-sm-10">
					
					<!-- headline -->
					<div class="clear"></div>
					<div id="headline">
						<span class="main"></span>
						<span class="sub"></span>
						<form method="post" action="scripts/logout.php">
							<?php echo '<p class="welcome">Welcome <i>'.$session_user .'</i> !</p>'?><button type="submit" id="LogoutButton">Logout</button>
						</form>
					</div>
					<!-- ENDS headline -->
					
					<!-- content -->
					<div id="content">
						<!-- TABS -->
						<!-- the tabs -->

					  <div id="mainab" style=" padding:20px; ">
					    <!-- wrapper-main -->
					<!-- admin horizontal menu -->
					      <div class="adminMenu " >
					      <ul class="adminMenuList tabs">
					          <li class="adminMenuElement"><a href="#"><span>Add Boarder</span></a></li>
					          <li class="adminMenuElement"><a href="#"><span>Edit Boarder</span></a></li>
					          <li class="adminMenuElement"><a href="#"><span>Delete Boarder</span></a></li>
					          <li class="adminMenuElement"><a href="#"><span>Search Boarder</span></a></li>
					          <li class="adminMenuElement"><a href="#"><span>View all Boarder</span></a></li>
					          <li class="adminMenuElement"><a href="#"><span>Add Admin</span></a></li>
					          <li class="adminMenuElement"><a href="#"><span>Change Password</span></a></li>
					          <li class="adminMenuElement"><a href="#"><span>Mess Details</span></a></li>
					      </ul>
					      <div style="padding: 5px; background-color: #111;"></div>
					      </div>
     


						<!-- Add_boarder -->
						<div class="panes">
							<div id="page-content">
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
							</div>
						</div>
						<!-- ENDS Add_boarder -->