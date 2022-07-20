<!DOCTYPE html >
<html>
	<head>
        <title>Kanchenjungha Men's Hostel</title>
		<?php require_once ('head_section.php'); ?>
       
<!--company name    :Mend Solutions
Developer name  :Arjun singh
Create Date     :
Modifiy Date    :19-Sep-2014
Description     :Bordoichila Women's Hostel
-->

<!--Mend Solutions Css/Js start here-->
    <script language="javascript" type="text/javascript" src="../../ms_js/td_stylechanger.js"></script>
    <script language="javascript" type="text/javascript" src="../../ms_js/td_colorchanger.js"></script>

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
  text-decoration: none;
  color: white;
  text-align: center;
  padding: 10px 16px 5px 16px;
  text-decoration: none;
}

.adminMenuElement a:visited {
	color: white;
}

.adminMenuElement a:link {
	color: white;
}

.adminMenuElement a:hover {
  background-color: #111;
  text-decoration: none;
  color: white;
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
.exvl {
  border-left: 2px solid #111;
  height: 100px;
  padding: 3px;
  margin: 5px;
  top: 0;
}
.activeimg{
  border-radius: 4px; 
  width:220px;height:220px;
  margin: 4px;
}
.eximg{
	border-radius: 4px; 
 	width:110px;height:110px;
 	margin: 4px;
}


</style>
<link href="../../ms_css/black.css" rel="stylesheet" type="text/css" title="black"/>
<link href="../../ms_css/green.css" rel="stylesheet" type="text/css" title="Green" />
<link href="../../ms_css/red.css" rel="stylesheet" type="text/css" title="Red" />
<link href="../../ms_css/orange.css" rel="stylesheet" type="text/css" title="Orange" />
	</head>
	
	<body class="home" >
	<div class="widthcontent" align="center" >
    <div align="center" style="width:1000px" id="content">
	<table style="width:100%; margin: 0px; border:none" class="textfix">
        <tr>
          <td style="width:6%">
          	<a href="javascript:void(0)"  onclick="setActiveStyleSheet('black'); return false;" >
          		<img src="../../ms_img/Stview.png" alt="Standard View" title="Standard View "/>
          	</a>
          	<a href="javascript:void(0)" onclick="setActiveStyleSheet('Red'); return false;">
          		<img src="../../ms_img/red_button.gif" alt="White on Black" title="White on Black" />
          	</a>
          	<a href="javascript:void(0)" onclick="setActiveStyleSheet('Green'); return false;">
          		<img src="../../ms_img/green_button.gif" alt="Black on White" title="Black on White" />
          	</a>
          	<a href="javascript:void(0)" onclick="setActiveStyleSheet('Orange'); return false;">
          		<img src="../../ms_img/orange_button.gif" alt="White on Blue" title="White on Blue" />
          	</a>
          </td>
          <td style="width:6%">
          	<a href="javascript:void(0)" title="Decrease font size" onclick="changeFontSize(-1);return false;">
          		<img src="../../ms_img/font_decrease.gif" alt="Decrease font size" title="Decrease font size" />
          	</a>
          	<a href="javascript:void(0)" onclick="revertStyles(); return false;">
          		<img src="../../ms_img/font_reset.gif" alt="Reset font size" title="Reset font size" />
          	</a>
          	<a href="javascript:void(0)" onclick="changeFontSize(1);return false;">
          		<img src="../../ms_img/font_increase.gif" title="Increase font size" alt="Increase font size" />
          	</a>
          </td>

          <td style="width:9%">
          	<a href="../../Screenreader.htm" title="Screen Reader"><img src="../../ms_img/screen-reader.png" alt="Screen Reader" title="Screen Reader" />Screen Reader
          	</a>
          </td>

          <td style="width:10%">
          	<a href="index.php#Kanchenjungha" title="Skip to Main Content">Skip to Main Content</a>
          </td>
        </tr>
      </table>

			<!-- HEADER -->
			<div id="header">
				<?php require_once ('header.php'); ?>				
			</div>
			<!-- ENDS HEADER -->
			
			<!-- Menu -->
			<div id="menu">
				<div id="menu-holder">
					<!-- wrapper-menu -->
					<div class="wrapper">
						<!-- Navigation -->
						<ul id="nav" class="sf-menu">
							<li ><a href="index.php" > Home</a></li>
							<li><a href="#" tite="Open/Hide In KMH sub menues">Facilities</a>
								<ul>
									<li><a href="kmh_mess.php" ><span> Mess Facility</span></a></li>
									<li><a href="kmh_library.php" ><span> Library</span></a></li>
									<li><a href="kmh_internet.php" ><span> 24 Hour Internet</span></a></li>
									<li><a href="kmh_commonroom.php" ><span> Common Room</span></a></li>
									<li><a href="kmh_computerroom.php"><span> Computer Room</span></a></li>
									<li><a href="kmh_guest.php"><span> Guest Room</span></a></li>
									<li><a href="kmh_games.php" ><span> Games &amp; Sports</span></a></li>
									<li><a href="kmh_washroom.php"><span> Washing Room</span></a></li>
									<li><a href="kmh_canteen.php"><span> Canteen</span></a></li>
									<li><a href="kmh_photocopy.php"><span> Photocopy Machine</span></a></li>
									<li><a href="kmh_garden.php" ><span> Mini Garden</span></a></li>
									<li><a href="kmh_parking.php" ><span> Vehicle Parking</span></a></li>
								</ul>
							</li>

							<li><a href="kmh_warden.php" itle="Open/Hide Administration sub menues">Administration </a>
							</li>

							<li><a href="#">Boarders </a>
								<ul>
									<li><a href="kmh_boarder.php"><span> Current Boarders</span></a></li>
									<li><a href="kmh_alumni.php"><span> Passed-out Boarders</span></a></li>
								</ul>
							</li>

							<li><a href="kmh_events.php">Events &amp; Achievements</a></li>
							<li><a href="kmh_gallery.php">Gallery</a></li>
							<li><a href="login.php" >Admin Panel</a></li>
							<li><a href="kmh_contactus.php">Contact Us</a></li>
						</ul>
						<!-- Navigation -->
					</div>
					<!-- wrapper-menu -->
				</div>
			</div>
			<!-- ENDS Menu -->
