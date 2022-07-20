<?php require_once ('pagetop.php'); ?>

			<!-- MAIN -->
			<div id="main">
				<!-- wrapper-main -->
				<div class="wrapper">
					
					<!-- headline -->
					<div class="clear"></div>
					<div id="headline">
						<span class="main">A Online CGPA / SGPA Calculator</span>
						<span class="sub">Based on Tezpur University grading system</span>
					</div>
					<!-- ENDS headline -->
					
					<!-- content -->
					<div id="content">
						
						<!-- TABS -->
						<!-- the tabs -->
						<ul class="tabs">
							<strong>
								<li><a href="#"><span>SGPA Calculator</span></a></li>
								<li><a href="#"><span>CGPA Calculator</span></a></li>
								<li><a href="#"><span>Grade Point Equivalent</span></a></li>
							</strong>
						</ul>

						<!-- tab CGPA -->
						<div class="panes">
							<!-- Information -->
							<div id="page-content">
								<p><b><i>The name of paper is optional. 
									Fill the credit value and select the corresponding grade that you have ontained in that particular paper.
									<u>Make sure javascript is enabled on your browser.</u></i></b></p>
								<div id="div_calcualtor">
				 		 			<form>
				 		 				<table>
											<tr>
												<th style="width: 400px; ">Name of paper (optional)</th>
												<th style="width: 200px;">Credit</th>
												<th>Grade Obtained</th>
											</tr>
											<tr>
												<td><input type="text" id="paper"  placeholder="Paper I" style="width: 400px;"/></td>
												<td><input type="text" id="credit0"  style="width: 200px;" maxlength="2" size="2" onkeypress="return isCredit(event)" /></td>
												<td>
													<select id="grade0" style="width: 200px;">
													<?php include('grade.php');?>
												</td>
											</tr>

											<tr>
												<td><input type="text" id="paper" placeholder="Paper II" style="width: 400px;"/></td>
												<td><input type="text" id="credit1"  style="width: 200px;" maxlength="2" size="2" onkeypress="return isCredit(event)"/></td>
												<td>
													<select id="grade1" style="width: 200px;">
													<?php include('grade.php');?>
												</td>
											</tr>

											<tr>
												<td><input type="text" id="paper" placeholder="Paper III" style="width: 400px;"/></td>
												<td><input type="text" id="credit2"  style="width: 200px;" maxlength="2" size="2" onkeypress="return isCredit(event)"/></td>
												<td>
													<select id="grade2" style="width: 200px;">
													<?php include('grade.php');?>
												</td>
											</tr>

											<tr>
												<td><input type="text" id="paper" placeholder="Paper IV" style="width: 400px;"/></td>
												<td><input type="text" id="credit3"  style="width: 200px;" maxlength="2" size="2" onkeypress="return isCredit(event)"/></td>
												<td>
													<select id="grade3" style="width: 200px;">
													<?php include('grade.php');?>
												</td>
											</tr>

											<tr>
												<td><input type="text" id="paper" placeholder="Paper V" style="width: 400px;"/></td>
												<td><input type="text" id="credit4"  style="width: 200px;" maxlength="2" size="2" onkeypress="return isCredit(event)"/></td>
												<td>
													<select id="grade4" style="width: 200px;">
													<?php include('grade.php');?>
												</td>
											</tr>

											<tr>
												<td><input type="text" id="paper" placeholder="Paper VI" style="width: 400px;"/></td>
												<td><input type="text" id="credit5"  style="width: 200px;" maxlength="2" size="2" onkeypress="return isCredit(event)"/></td>
												<td>
													<select id="grade5" style="width: 200px;">
													<?php include('grade.php');?>
												</td>
											</tr>

											<tr>
												<td><input type="text" id="paper" placeholder="Paper VII" style="width: 400px;"/></td>
												<td><input type="text" id="credit6"  style="width: 200px;" maxlength="2" size="2" onkeypress="return isCredit(event)"/></td>
												<td>
													<select id="grade6" style="width: 200px;">
													<?php include('grade.php');?>
												</td>
											</tr>

											<tr>
												<td><input type="text" id="paper" placeholder="Paper VIII" style="width: 400px;"/></td>
												<td><input type="text" id="credit7"  style="width: 200px;" maxlength="2" size="2" onkeypress="return isCredit(event)"/></td>
												<td>
													<select id="grade7" style="width: 200px;">
													<?php include('grade.php');?>
												</td>
											</tr>

											<tr>
												<td><input type="text" id="paper" placeholder="Paper IX" style="width: 400px;"/></td>
												<td><input type="text" id="credit8"  style="width: 200px;" maxlength="2" size="2" onkeypress="return isCredit(event)"/></td>
												<td>
													<select id="grade8" style="width: 200px;">
													<?php include('grade.php');?>
												</td>
											</tr>

											<tr>
												<td><input type="text" id="paper" placeholder="Paper X" style="width: 400px;"/></td>
												<td><input type="text" id="credit9"  style="width: 200px;" maxlength="2" size="2" onkeypress="return isCredit(event)"/></td>
												<td>
													<select id="grade9" style="width: 200px;">
													<?php include('grade.php');?>
												</td>
											</tr>
				 		 				</table>
				 		 				<button class="submit_button" onclick="calculateSGPA()">Calculate SGPA</button>
				 					</form>
			 					</div>
							</div>
							<!-- ENDS Information -->
						</div>
						<!-- ENDS CGPA -->

						<!-- tab SGPA -->
						<div class="panes">
							<div id="page-content">
								<p><b><i>The semester number is optional. 
									Fill the SGPA values that you have obtained in various semesters along with the total credit of the particular semester and hit the 'Calculate CGPA' button.
									<u>Make sure javascript is enabled on your browser.</u></i></b></p>
								<div id="div_cgpa">
				 		 			<form>
				 		 				<table>
											<tr>
												<th style="width: 400px; ">Semester number (optional)</th>
												<th style="width: 200px;">Total Credit</th>
												<th style="width: 200px;">SGPA Obtained</th>
											</tr>
											<tr>
												<td><input type="text" id="semester" style="width: 400px;" placeholder="Semester I"/></td>
												<td><input type="sgpa" id="cgpa_credit0" maxlength="2" size="2" onkeypress="return isCredit(event)"/></td>
												<td><input type="sgpa" id="sgpa0" maxlength="10" size="10" onkeypress="return isSgpa(event)"/></td>
											</tr>
											<tr>
												<td><input type="text" id="semester" style="width: 400px;" placeholder="Semester II"/></td>
												<td><input type="sgpa" id="cgpa_credit1" maxlength="2" size="2" onkeypress="return isCredit(event)"/></td>
												<td><input type="sgpa" id="sgpa1"  style="width: 200px; text-align:right;" maxlength="10" size="10" onkeypress="return isSgpa(event)"/></td>
											</tr>
											<tr>
												<td><input type="text" id="semester" style="width: 400px;" placeholder="Semester III"/></td>
												<td><input type="sgpa" id="cgpa_credit2" maxlength="2" size="2" onkeypress="return isCredit(event)"/></td>
												<td><input type="sgpa" id="sgpa2" maxlength="10" size="10" onkeypress="return isSgpa(event)"/></td>
											</tr>
											<tr>
												<td><input type="text" id="semester"style="width: 400px;"  placeholder="Semester VI"/></td>
												<td><input type="sgpa" id="cgpa_credit3" maxlength="2" size="2" onkeypress="return isCredit(event)"/></td>
												<td><input type="sgpa" id="sgpa3" maxlength="10" size="10" onkeypress="return isSgpa(event)"/></td>
											</tr>
											<tr>
												<td><input type="text" id="semester"style="width: 400px;"  placeholder="Semester V"/></td>
												<td><input type="sgpa" id="cgpa_credit4" maxlength="2" size="2" onkeypress="return isCredit(event)"/></td>
												<td><input type="sgpa" id="sgpa4" maxlength="10" size="10" onkeypress="return isSgpa(event)"/></td>
											</tr>
											<tr>
												<td><input type="text" id="semester"style="width: 400px;"  placeholder="Semester VI"/></td>
												<td><input type="sgpa" id="cgpa_credit5" maxlength="2" size="2" onkeypress="return isCredit(event)"/></td>
												<td><input type="sgpa" id="sgpa5" maxlength="10" size="10" onkeypress="return isSgpa(event)"/></td>
											</tr>
											<tr>
												<td><input type="text" id="semester"style="width: 400px;"  placeholder="Semester VII"/></td>
												<td><input type="sgpa" id="cgpa_credit6" maxlength="2" size="2" onkeypress="return isCredit(event)"/></td>
												<td><input type="sgpa" id="sgpa6" maxlength="10" size="10" onkeypress="return isSgpa(event)"/></td>
											</tr>
											<tr>
												<td><input type="text" id="semester"style="width: 400px;"  placeholder="Semester VIII"/></td>
												<td><input type="sgpa" id="cgpa_credit7" maxlength="2" size="2" onkeypress="return isCredit(event)"/></td>
												<td><input type="sgpa" id="sgpa7" maxlength="10" size="10" onkeypress="return isSgpa(event)"/></td>
											</tr>
											<tr>
												<td><input type="text" id="semester"style="width: 400px;"  placeholder="Semester IX"/></td>
												<td><input type="sgpa" id="cgpa_credit8" maxlength="2" size="2" onkeypress="return isCredit(event)"/></td>
												<td><input type="sgpa" id="sgpa8" maxlength="10" size="10" onkeypress="return isSgpa(event)"/></td>
											</tr>
											<tr>
												<td><input type="text" id="semester"style="width: 400px;"  placeholder="Semester X"/></td>
												<td><input type="sgpa" id="cgpa_credit9" maxlength="2" size="2" onkeypress="return isCredit(event)"/></td>
												<td><input type="sgpa" id="sgpa9" maxlength="10" size="10" onkeypress="return isSgpa(event)"/></td>
											</tr>
				 		 				</table>
				 		 				<button class="submit_button" onclick="calculateCGPA()">Calculate CGPA</button>
				 					</form>
			 					</div>
							</div>
						</div>
						<!-- ENDS SGPA -->

						<div class="panes">
							<div id="page-content">
								<table style="text-align:center;">
									<tr>
										<th style="background-color: #2E2E2E;">Grade</th>
										<th style="background-color: #2E2E2E;">Grade Point</th>
										<th style="background-color: #2E2E2E;">Description  (as per UGC)</th>
									</tr>
									<tr>
										<td>A+</td>
										<td>10</td>
										<td>Outstanding</td>
									</tr>
									<tr>
										<td>A</td>
										<td>9</td>
										<td>Excellent</td>
									</tr>
									<tr>
										<td>B+</td>
										<td>8</td>
										<td>Commendable</td>
									</tr>
									<tr>
										<td>B</td>
										<td>7</td>
										<td>Very Good</td>
									</tr>
									<tr>
										<td>C+</td>
										<td>6</td>
										<td>Good</td>
									</tr>
									<tr>
										<td>C</td>
										<td>5</td>
										<td>Average</td>
									</tr>
									<tr>
										<td>D</td>
										<td>4</td>
										<td>Marginal</td>
									</tr>
									<tr>
										<td>F</td>
										<td>0</td>
										<td>Poor</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
					<!-- ENDS content -->
				</div>
				<!-- ENDS wrapper-main -->
			</div>
			<!-- ENDS MAIN -->

	</body>
</html>