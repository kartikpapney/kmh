<?php require_once ('pagetop.php'); ?>


      <div>
        <div id="mainab">
          <!-- wrapper-main -->

          <div class="wrapperab">
            <!-- headline -->

            <div class="clear"></div>

            <div id="headline">
              <span class="main" style="text-align:justify" id="Mess">Mess</span> <!-- <span class="sub">write anything</span> -->
            </div><!-- ENDS headline -->
            <!-- content -->

            <div id="contentold">
              <!-- TABS -->
              <!-- the tabs -->

              <ul class="tabs">
                <li><a href="#"><span>Information</span></a></li>

                <li><a href="#"><span>Mess Menu of Current Month</span></a></li>
              </ul><!-- tab "panes" -->

              <div class="panes">
                <!-- Information  -->

                <div>
                  <div class="plain-text">
                    <p class="content_text" style="text-align:justify">KMH has one of the best group of mess menials among the hostels at Tezpur University. New dishes are tried out on a regular basis so that the best food is available for the students. Mess managers are changed every month and this provides a chance to new members to implement their innovative ideas. Special dinner is provided on the last Sunday of every month.</p>
                  </div>

                  <ul id="portfolio-list" class="gallery">
                    <li><a href="photos/actuals/mess01.jpg" rel="group1" class="fancybox" title="Dinning hall, equipped with water cooler and filter."><img src="photos/thumbnails/mess01.jpg" alt="Pic" /></a></li>

                    <li><a href="photos/actuals/mess02.jpg" rel="group1" class="fancybox" title="Roti making machine"><img src="photos/thumbnails/mess02.jpg" alt="Pic" /></a></li>

                    <li><a href="photos/actuals/mess03.jpg" rel="group1" class="fancybox" title="Wash room"><img src="photos/thumbnails/mess03.jpg" alt="Pic" /></a></li>
                  </ul><br />
                  <!-- FOOTER -->

                  <div id="footer">
                    <!-- Including the PHP footer file -->
                    <?php require_once 'footer.php'; ?>
                  </div><!-- ENDS FOOTER -->
                  <!-- Bottom -->

                  <div id="bottom">
                    <!-- Including the PHP bottom file -->
                    <?php require_once 'bottom.php'; ?>
                  </div><!-- ENDS Bottom -->
                  <br />

                  <!-- <div align="center">
                    <span><a href="http://validator.w3.org/check?uri=referer" target="_blank"><img src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Transitional" height="31" width="88" /></a> <a href="http://achecker.ca/checker/index.php?uri=refererU+0026gid=WCAG2-AA" target="_blank"><img src="http://achecker.ca/images/icon_W2_aa.jpg" alt="WCAG 2.0 (Level AA)" height="32" width="102" style="border: 0px;" /></a></span>
                  </div> -->
                </div><!-- ENDS Information -->
              </div><!-- ENDS TABS -->
              <!-- tab "panes" -->

              <div class="panes">
                <!-- Information  -->

                <div class="diaplay_menu">
                  <?php
                      require_once ('scripts/allFunctions.php');
                       disMessMenu();
                       ?>
                </div><!-- ENDS Information -->
              </div><!-- ENDS TABS -->
            </div><!-- ENDS content -->
          </div><!-- ENDS wrapper-main -->
        </div>
      </div>
    </div>
  </div>
	</body>
</html>
