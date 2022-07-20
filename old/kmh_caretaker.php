<?php require_once ('pagetop.php'); ?>

  <div id="mainab" style=" padding:20px; ">
   <div class="adminMenu" >
      <ul class="adminMenuList">
          <li class="adminMenuElement"><a href="kmh_warden.php" >Warden</a></li>
          <li class="adminMenuElement"><a href="kmh_prefect.php">Prefects</a></li>
          <li class="adminMenuElement"><a href="kmh_convenor.php">Mess Convenors</a></li>
          <li class="adminMenuElement"><a href="kmh_webmaster.php">Web Master</a></li>
          <li class="adminMenuElement"><a href="kmh_messmanager.php">Mess Managers</a></li>
          <li class="adminMenuElement"><a href="kmh_caretaker.php"  class="active">Office Staff</a></li>
      </ul>
      <div style="padding: 5px; background-color: #111;"></div>
      </div>
    <div class="wrapperab" style="border:2px solid black;margin: 0px; border-radius:0px 0px 0px 35px;">
      <!-- headline -->

      <div class="clear"></div>
        <div>
                <div class="card col-sm-10 mb-4" align="left">
                  <div class="card-body" align="left">
                      <div class="d-flex  align-items-center">
                          <div>
                              <img class="activeimg" src="pics/dipak.jpeg">
                          </div>
                          <div class="vl"></div>
                      <div >
                          <h5 class="card-title m-0" style="color:darkred;"> <em><b>Care Taker</b></em></h5>
                          <br>
                          <p class="m-0"><b>Dipak Saikia</b></p>
                          <p class="m-0"><span > <u><b>Tel:</b></u></span> +91 9706472295</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
     
            
    </div><!-- ENDS wrapper-main -->
  </div><!-- ENDS MAIN -->
  <!-- FOOTER -->

  <div id="footer">
    <!-- Including the PHP footer file -->
    <?php require_once 'footer.php'; ?>
  </div><!-- ENDS FOOTER -->
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