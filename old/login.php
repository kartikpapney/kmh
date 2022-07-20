<?php require_once ('pagetop.php'); ?>


        <div>
			<!-- MAIN -->
			<div id="main">
				<!-- wrapper-main -->
				<div class="wrapper">
					
					<!-- headline -->
					<div class="clear"></div>
					<div id="headline">
						<span class="main"></span>
						<span class="sub"></span>
					</div>
					<!-- ENDS headline -->
					
					<!-- content -->
					<div id="contentold">
						<div class="div_loginForm">
					 		<form method="post" action="scripts/authenticate.php" class="login" style="text-align:center">
<!-- 				 			<input type="hidden" name="PageName" value="EditDistrict" /> -->
						      	<p>
							      	<label for="login" id="Login">Login ID:</label>&nbsp;&nbsp;
							      	<input type="text" name="userid" id="userid" value="" title="Login ID is mandatory"/>
						    	</p>
							    <p>
							      	<label for="password">Password:</label>
							      	<input type="password" name="password" id="password" value="" title="Password is mandatory"/>
							    </p>
							    <p class="login-submit">
							      	<button type="submit" class="login-button">Login</button>
							    </p>
			  				</form>
						</div>
						<?php
							if (isset($_GET['authenticaion']) AND ($_GET['authenticaion'] == 0))
							{
								echo	'<div class="div_loginFailed">
							 				<p>Authentication Failed. Bad Login ID or Password.</p>
							 	 		</div>';
					 		}
					 	 ?>
					</div>
					<!-- ENDS content -->
				</div>
				<!-- ENDS wrapper-main -->
			</div>
			<!-- ENDS MAIN -->

			
			<!-- FOOTER -->
			<div id="footer">
				<!-- Including the PHP footer file -->
				<?php require_once 'footer.php'; ?>
			</div>
			<!-- ENDS FOOTER -->
		
		
			<!-- Bottom -->
			<div id="bottom">
				<!-- Including the PHP bottom file -->
				<?php require_once 'bottom.php'; ?>
			</div><br />
        <!-- <div align="center">
                    <span><a href="http://validator.w3.org/check?uri=referer" target="_blank"><img src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Transitional" height="31" width="88" /></a> <a href="http://achecker.ca/checker/index.php?uri=refererU+0026gid=WCAG2-AA" target="_blank"><img src="http://achecker.ca/images/icon_W2_aa.jpg" alt="WCAG 2.0 (Level AA)" height="32" width="102" style="border: 0px;" /></a></span>
                  </div> -->
            </div>
        </div>
         </div>
	
	</body>
</html>
