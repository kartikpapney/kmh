
						<!-- tab mess_menu -->
						<div class="panes">
							<!-- Information -->
							<div id="page-content">
								<div id="messMenu" >
									<form name="adminMessMenu" method="post" action="scripts/adminTask.php">
										<?php 
											if (isset($_GET['mess']))
											{
												echo '<div class="div_admin_prompt">';
													if ($_GET['mess'] == 0)
														echo "<p class=\"success_prompt\">Mess menu updated sucessfully !</p>";
													else if ($_GET['mess'] == 1)
														echo "<p class=\"failed_prompt\">Mess timming cannnot be empty</p>";
													else if ($_GET['mess'] == 2)
														echo "<p class=\"failed_prompt\">You cannot leave mess menu fields empty</p>";
													else if ($_GET['mess'] == 3)
														echo "<p class=\"failed_prompt\">Failed to update, contact developer</p>";
												echo '</div>';
											}
										?>	
										<table>
											<tr>
												<th><label>DAYS</label></th>
												<th><label>BREAKFAST</label></th>
												<th><label>LUNCH</label></th>
												<th><label>DINNER</label></th>
											</tr>
											<?php
												$result = mysqli_fetch_array(getMessTime(), MYSQLI_BOTH);
												echo '<tr><th><label>SET Time</label></th>';
												echo '<td><input type="text" name="bTime" value = "'.$result[0].'" required="true"/></td>';
												echo '<td><input type="text" name="lTime" value = "'.$result[1].'" required="true"/></td>';
												echo '<td><input type="text" name="dTime" value = "'.$result[2].'" required="true"/></td></tr>';

												$result = mysqli_fetch_array(getMessMenu("0"), MYSQLI_BOTH);
												echo '<tr>
													  <th><label>Sunday</label></th>';
												echo '<td><input type="text" name="sunB" value = "'.$result[1].'" required="true"/></td>';
												echo '<td><input type="text" name="sunL" value = "'.$result[2].'" required="true"/></td>';
												echo '<td><input type="text" name="sunD" value = "'.$result[3].'" required="true"/></td>
													  </tr>';
												$result = mysqli_fetch_array(getMessMenu("1"), MYSQLI_BOTH);
												echo '<tr>
													  <th><label>Monday</label></th>';
												echo '<td><input type="text" name="monB" value = "'.$result[1].'" required="true"/></td>';
												echo '<td><input type="text" name="monL" value = "'.$result[2].'" required="true"/></td>';
												echo '<td><input type="text" name="monD" value = "'.$result[3].'" required="true"/></td>
													  </tr>';
												$result = mysqli_fetch_array(getMessMenu("2"), MYSQLI_BOTH);
												echo '<tr>
													  <th><label>Tuesday</label></th>';
												echo '<td><input type="text" name="tueB" value = "'.$result[1].'" required="true"/></td>';
												echo '<td><input type="text" name="tueL" value = "'.$result[2].'" required="true"/></td>';
												echo '<td><input type="text" name="tueD" value = "'.$result[3].'" required="true"/></td>
													  </tr>';
												$result = mysqli_fetch_array(getMessMenu("3"), MYSQLI_BOTH);
												echo '<tr>
													  <th><label>Wednesday</label></th>';
												echo '<td><input type="text" name="wedB" value = "'.$result[1].'" required="true"/></td>';
												echo '<td><input type="text" name="wedL" value = "'.$result[2].'" required="true"/></td>';
												echo '<td><input type="text" name="wedD" value = "'.$result[3].'" required="true"/></td>
													  </tr>';
												$result = mysqli_fetch_array(getMessMenu("4"), MYSQLI_BOTH);
												echo '<tr>
													  <th><label>Thursday</label></th>';
												echo '<td><input type="text" name="thurB" value = "'.$result[1].'" required="true"/></td>';
												echo '<td><input type="text" name="thurL" value = "'.$result[2].'" required="true"/></td>';
												echo '<td><input type="text" name="thurD" value = "'.$result[3].'" required="true"/></td>
													  </tr>';
												$result = mysqli_fetch_array(getMessMenu("5"), MYSQLI_BOTH);
												echo '<tr>
													  <th><label>Friday</label></th>';
												echo '<td><input type="text" name="friB" value = "'.$result[1].'" required="true"/></td>';
												echo '<td><input type="text" name="friL" value = "'.$result[2].'" required="true"/></td>';
												echo '<td><input type="text" name="friD" value = "'.$result[3].'" required="true"/></td>
													  </tr>';
												$result = mysqli_fetch_array(getMessMenu("6"), MYSQLI_BOTH);
												echo '<tr>
													  <th><label>Saturday</label></th>';
												echo '<td><input type="text" name="satB" value = "'.$result[1].'" required="true"/></td>';
												echo '<td><input type="text" name="satL" value = "'.$result[2].'" required="true"/></td>';
												echo '<td><input type="text" name="satD" value = "'.$result[3].'" required="true"/></td>
													  </tr>';
										    ?>
										</table>
										<button type="submit">Update Mess Menu</button>
									</form>
								</div>
							</div>
							<!-- ENDS Information -->
						</div>
						<!-- ENDS  mess_menu -->