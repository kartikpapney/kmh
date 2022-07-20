<?php require_once ('pagetop.php'); ?>

<div>
  <!-- MAIN -->

  <div id="mainab">
    <!-- wrapper-main -->

    <div class="wrapperab">
      <!-- headline -->

      <div class="clear"></div>

      <div id="headline">
        <span class="main" style="text-align:justify" id="Passed">Passed out Boarders of KMH</span> <!-- <span class="sub">write anything</span> -->
      </div><!-- ENDS headline -->
      <!-- content -->

      <div id="contentold">
        <!-- TABS -->
        <!-- the tabs -->

        <ul class="tabs">
          <li><strong><a href="#"><span>Year 2011</span></a></strong></li>

          <li><strong><a href="#"><span>Year 2012</span></a></strong></li>

          <li><strong><a href="#"><span>Year 2013</span></a></strong></li>

          <li><strong><a href="#"><span>Year 2014</span></a></strong></li>
		  
		   <li><strong><a href="#"><span>Year 2015</span></a></strong></li>
		   
		   <li><strong><a href="#"><span>Year 2016</span></a></strong></li>
		   
		   <li><strong><a href="#"><span>Year 2017</span></a></strong></li>
        </ul><!-- tab 2011 -->

        <div class="panes">
          <!-- Information -->

          <div id="page-content">
            <!-- Information  -->

            <div class="table_data">
              <table>
                <thead>
                  <tr>
                    <th>Name</th>

                    <th>Programme</th>
                  </tr>
                </thead>

                <tbody>
                  <?php
                                                                                                                  $xml  = simplexml_load_file('data/alumni.xml', null, true);
                                                                                                                  $row_value = -1;
                                                                                                                  foreach($xml->y2011->Broader as $record)
                                                                                                                  {
                                                                                                                          if(++$row_value%2 == 0)
                                                                                                                                  echo "<tr class =\"alumni_even\">";
                                                                                                                          else
                                                                                                                                  echo "<tr class =\"alumni_odd\">";
                                                                                                                          echo "<td>" . $record->name . "</td>";
                                                                                                                          echo "<td>" . $record->programme. "</td>";
                                                                                                                          echo "</tr>";
                                                                                                                  }
                                                                                                          ?>
                </tbody>
              </table>
            </div><!-- ENDS Information -->
          </div><!-- ENDS Information -->
        </div><!-- ENDS 2011 -->
        <!-- tab 2012 -->

        <div class="panes">
          <!-- Information -->

          <div id="Div1">
            <!-- Information  -->

            <div class="table_data">
              <table>
                <thead>
                  <tr>
                    <th>Name</th>

                    <th>Programme</th>
                  </tr>
                </thead>

                <tbody>
                  <?php
                                                                                                                  $row_value = -1;
                                                                                                                  $xml  = simplexml_load_file('data/alumni.xml', null, true);
                                                                                                                  foreach($xml->y2012->Broader as $record)
                                                                                                                  {
                                                                                                                          if(++$row_value%2 == 0)
                                                                                                                                  echo "<tr class =\"alumni_even\">";
                                                                                                                          else
                                                                                                                                  echo "<tr class =\"alumni_odd\">";
                                                                                                                          echo "<td>" . $record->name . "</td>";
                                                                                                                          echo "<td>" . $record->programme. "</td>";
                                                                                                                          echo "</tr>";
                                                                                                                  }
                                                                                                          ?>
                </tbody>
              </table>
            </div><!-- ENDS Information -->
          </div><!-- ENDS Information -->
        </div><!-- ENDS 2012 -->
        <!-- tab 2013 -->

        <div class="panes">
          <!-- Information -->

          <div id="Div2">
            <!-- Information  -->

            <div class="table_data">
              <table>
                <thead>
                  <tr>
                    <th>Name</th>

                    <th>Programme</th>
                  </tr>
                </thead>

                <tbody>
                  <?php
                                                                                                                  $row_value = -1;
                                                                                                                  $xml  = simplexml_load_file('data/alumni.xml', null, true);
                                                                                                                  foreach($xml->y2013->Broader as $record)
                                                                                                                  {
                                                                                                                          if(++$row_value%2 == 0)
                                                                                                                                  echo "<tr class =\"alumni_even\">";
                                                                                                                          else
                                                                                                                                  echo "<tr class =\"alumni_odd\">";
                                                                                                                          echo "<td>" . $record->name . "</td>";
                                                                                                                          echo "<td>" . $record->programme. "</td>";
                                                                                                                          echo "</tr>";
                                                                                                                  }
                                                                                                          ?>
                </tbody>
              </table>
            </div><!-- ENDS Information -->
          </div><!-- ENDS Information -->
        </div><!-- ENDS 2013 -->
        <!-- tab 2014 -->

        <div class="panes">
          <!-- Information -->

          <div id="Div3">
            <!-- Information  -->

            <div class="table_data">
              <table>
                <thead>
                  <tr>
                    <th>Name</th>

                    <th>Programme</th>
                  </tr>
                </thead>

                <tbody>
                  <?php
                                                                                                                  $row_value = -1;
                                                                                                                  $xml  = simplexml_load_file('data/alumni.xml', null, true);
                                                                                                                  foreach($xml->y2014->Broader as $record)
                                                                                                                  {
                                                                                                                          if(++$row_value%2 == 0)
                                                                                                                                  echo "<tr class =\"alumni_even\">";
                                                                                                                          else
                                                                                                                                  echo "<tr class =\"alumni_odd\">";
                                                                                                                          echo "<td>" . $record->name . "</td>";
                                                                                                                          echo "<td>" . $record->programme. "</td>";
                                                                                                                          echo "</tr>";
                                                                                                                  }
                                                                                                          ?>
                </tbody>
              </table>
            </div><!-- ENDS Information -->
          </div><!-- ENDS Information -->
        </div><!-- ENDS 2014 -->
		<!-- tab 2015 -->

        <div class="panes">
          <!-- Information -->

          <div id="Div4">
            <!-- Information  -->

            <div class="table_data">
              <table>
                <thead>
                  <tr>
                    <th>Name</th>

                    <th>Programme</th>
                  </tr>
                </thead>

                <tbody>
                  <?php
                                                                                                                  $row_value = -1;
                                                                                                                  $xml  = simplexml_load_file('data/alumni.xml', null, true);
                                                                                                                  foreach($xml->y2015->Broader as $record)
                                                                                                                  {
                                                                                                                          if(++$row_value%2 == 0)
                                                                                                                                  echo "<tr class =\"alumni_even\">";
                                                                                                                          else
                                                                                                                                  echo "<tr class =\"alumni_odd\">";
                                                                                                                          echo "<td>" . $record->name . "</td>";
                                                                                                                          echo "<td>" . $record->programme. "</td>";
                                                                                                                          echo "</tr>";
                                                                                                                  }
                                                                                                          ?>
                </tbody>
              </table>
            </div><!-- ENDS Information -->
          </div><!-- ENDS Information -->
        </div><!-- ENDS 2015 -->
		<!-- tab 2016 -->

        <div class="panes">
          <!-- Information -->

          <div id="Div4">
            <!-- Information  -->

            <div class="table_data">
              <table>
                <thead>
                  <tr>
                    <th>Name</th>

                    <th>Programme</th>
                  </tr>
                </thead>

                <tbody>
                  <?php
                                                                                                                  $row_value = -1;
                                                                                                                  $xml  = simplexml_load_file('data/alumni.xml', null, true);
                                                                                                                  foreach($xml->y2016->Broader as $record)
                                                                                                                  {
                                                                                                                          if(++$row_value%2 == 0)
                                                                                                                                  echo "<tr class =\"alumni_even\">";
                                                                                                                          else
                                                                                                                                  echo "<tr class =\"alumni_odd\">";
                                                                                                                          echo "<td>" . $record->name . "</td>";
                                                                                                                          echo "<td>" . $record->programme. "</td>";
                                                                                                                          echo "</tr>";
                                                                                                                  }
                                                                                                          ?>
                </tbody>
              </table>
            </div><!-- ENDS Information -->
          </div><!-- ENDS Information -->
        </div><!-- ENDS 2016 -->
		
		<!-- tab 2017 -->

        <div class="panes">
          <!-- Information -->

          <div id="Div4">
            <!-- Information  -->

            <div class="table_data">
              <table>
                <thead>
                  <tr>
                    <th>Name</th>

                    <th>Programme</th>
                  </tr>
                </thead>

                <tbody>
                  <?php
                                                                                                                  $row_value = -1;
                                                                                                                  $xml  = simplexml_load_file('data/alumni.xml', null, true);
                                                                                                                  foreach($xml->y2017->Broader as $record)
                                                                                                                  {
                                                                                                                          if(++$row_value%2 == 0)
                                                                                                                                  echo "<tr class =\"alumni_even\">";
                                                                                                                          else
                                                                                                                                  echo "<tr class =\"alumni_odd\">";
                                                                                                                          echo "<td>" . $record->name . "</td>";
                                                                                                                          echo "<td>" . $record->programme. "</td>";
                                                                                                                          echo "</tr>";
                                                                                                                  }
                                                                                                          ?>
                </tbody>
              </table>
            </div><!-- ENDS Information -->
          </div><!-- ENDS Information -->
        </div><!-- ENDS 2017 -->
		
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
  </div><br/>
  <div align="center">
                    <span><a href="http://validator.w3.org/check?uri=referer" target="_blank"><img src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Transitional" height="31" width="88" /></a> <a href="http://achecker.ca/checker/index.php?uri=refererU+0026gid=WCAG2-AA" target="_blank"><img src="http://achecker.ca/images/icon_W2_aa.jpg" alt="WCAG 2.0 (Level AA)" height="32" width="102" style="border: 0px;" /></a></span>
                  </div>
        </div>
	</div>
         </div>
	</body>
</html>