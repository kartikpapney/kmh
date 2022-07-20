<?php require_once ('pagetop.php'); ?>


  <div>
        <!-- MAIN -->

  <div id="mainab">
    <!-- wrapper-main -->

    <div class="wrapperab">
      <!-- headline -->

      <div class="clear"></div>

      <div id="headline">
        <span class="main" id="Boarders" style="text-align:justify">Boarders of KMH</span> <!-- <span class="sub">write anything</span> -->
      </div><!-- ENDS headline -->
      <!-- content -->

      <div id="contentold">
        <!-- TABS -->
        <!-- the tabs -->

        <ul class="tabs" style="text-align:left">
          <li><strong><a href="#"><span>Search</span></a></strong></li>

          <li><strong><a href="#"><span>View all Boarders</span></a></strong></li>

          <li><strong><a href="#"><span>Download Boarder List</span></a></strong></li>
        </ul><!-- tab Search -->

        <div class="panes">
          <div id="page-content">
            <?php
                                                                                    require_once('scripts/allFunctions.php');
                                                                                    echo    '<div id="form_search">
                                                                                                            <form action="" method="post">
                                                                                                                    <input type="text" name="searchFor" required="true" title="Enter keyword to search" placeholder="Enter Keyword" >
                                                                                                                    <input type="submit" onclick="return getValue(searchFor)" value="Search">
                                                                                                                    <p> - You can search boarders by their First Name, Middle Name, Last Name, Department, Programme, Room Number or their Roll Number.</p>
                                                                                                            </form>
                                                                                                    </div>';

                                                                                    echo '<div class="empty_div50"></div>';
                                                                                    regularSearch();
                                                                            ?>
          </div>
        </div><!-- ENDS Search -->
        <!-- tab View_All -->

        <div class="panes">
          <div id="Div1">
            <h6 class="toggle-trigger"><a href="#"><strong>Kangbachen Wing</strong></a></h6>

            <div class="toggle-container">
              <div class="block">
                <?php searchAndDisplayBoarder("SELECT * FROM boarder WHERE roomno >='101' AND roomno <='136' ORDER BY roomno ASC");?>
              </div>
            </div>

            <h6 class="toggle-trigger"><a href="#"><strong>Nilgiri Wing</strong></a></h6>

            <div class="toggle-container">
              <div class="block">
                <?php searchAndDisplayBoarder("SELECT * FROM boarder WHERE roomno >='137' AND roomno <='171' ORDER BY roomno ASC");?>
              </div>
            </div>

            <h6 class="toggle-trigger"><a href="#"><strong>Purbachal Wing</strong></a></h6>

            <div class="toggle-container">
              <div class="block">
                <?php searchAndDisplayBoarder("SELECT * FROM boarder WHERE roomno >='201' AND roomno <='236' ORDER BY roomno ASC");?>
              </div>
            </div>

            <h6 class="toggle-trigger"><a href="#"><strong>Jatinga Wing</strong></a></h6>

            <div class="toggle-container">
              <div class="block">
                <?php searchAndDisplayBoarder("SELECT * FROM boarder WHERE roomno >='237' AND roomno <='273' ORDER BY roomno ASC");?>
              </div>
            </div>

            <h6 class="toggle-trigger"><a href="#"><strong>Aravali Wing</strong></a></h6>

            <div class="toggle-container">
              <div class="block">
                <?php searchAndDisplayBoarder("SELECT * FROM boarder WHERE roomno >='301' AND roomno <='336' ORDER BY roomno ASC");?>
              </div>
            </div>

            <h6 class="toggle-trigger"><a href="#"><strong>Shivalink Wing</strong></a></h6>

            <div class="toggle-container">
              <div class="block">
                <?php searchAndDisplayBoarder("SELECT * FROM boarder WHERE roomno >='364' AND roomno <='399' ORDER BY roomno ASC");?>
              </div>
            </div>
          </div>
        </div><!-- ENDS  View_All -->
        <!-- tab Download_Links -->

        <div class="panes">
          <!-- Information -->

          <div id="Div2">
            <!-- Information  -->

            <div class="only_div">
              <ul class="boarder_download_links">
                <li><strong><a href="documents/floor0.pdf" target="_blank">Ground Floor</a></strong></li>

                <li><strong><a href="documents/floor1.pdf" target="_blank">First Floor</a></strong></li>

                <li><strong><a href="documents/floor2.pdf" target="_blank">Second Floor</a></strong></li>
              </ul>
            </div><!-- ENDS Information -->
          </div><!-- ENDS Information -->
        </div><!-- ENDS  Download_Links -->
      </div><!-- ENDS content -->
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
      <div align="center">
                    <span><a href="http://validator.w3.org/check?uri=referer" target="_blank"><img src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Transitional" height="31" width="88" /></a> <a href="http://achecker.ca/checker/index.php?uri=refererU+0026gid=WCAG2-AA" target="_blank"><img src="http://achecker.ca/images/icon_W2_aa.jpg" alt="WCAG 2.0 (Level AA)" height="32" width="102" style="border: 0px;" /></a></span>
                  </div>
      </div>
	</div>
         </div>
	</body>
</html>