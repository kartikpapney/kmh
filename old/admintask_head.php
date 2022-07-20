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
  border-radius: 3px;
  list-style-type: none;
  margin: 0;
  padding: 0;
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
				<div class="wrapper">
					
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

