<?php echo'					
					<li class="nav-item dropdown2">
            <a class="nav-link">
              <i class="material-icons">list</i>
              <p>Offer/Open Subjects <span class="caret"></span></p>
            </a>
          </li>
          <div class="dropdown-container" style="display: none;padding-left: 8px;">
          <!--============================ DROPDOWN 2ND LEVEL============================-->
            ';
if ($_SESSION['department'] == "BA Department") 
          { echo'
            <li class="nav-item dropdown2">
              <a class="nav-link">
                <i class="material-icons">list</i>
                <p>Offer/Open Subject(New)<span class="caret"></span></p>
              </a>
            </li>
            <div class="dropdown-container" style="display: none;padding-left: 8px;">
            <li class="nav-item">
              <a class="nav-link" href="../faculty/offered_subj_sped.php">
                <i class="material-icons">list</i>
                <p>for BSPED</p>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../faculty/offered_subj_eced.php">
                <i class="material-icons">list</i>
                <p>for BECED</p>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../faculty/offered_subj_pe.php">
                <i class="material-icons">list</i>
                <p>for BPED</p>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../faculty/offered_subj_beed.php">
                <i class="material-icons">list</i>
                <p>for BEED</p>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../faculty/offered_subj_fili.php">
                <i class="material-icons">list</i>
                <p>for BSED-Fili</p>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../faculty/offered_subj_engl.php">
                <i class="material-icons">list</i>
                <p>for BSED-English</p>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../faculty/offered_subj_math.php">
                <i class="material-icons">list</i>
                <p>for BSED-Math</p>
              </a>
            </li>
            </div>
            <!--===========================END DROPDOWN 2ND LEVEL===========================-->
            <!--============================ DROPDOWN 2ND LEVEL============================-->
            <li class="nav-item dropdown2">
              <a class="nav-link">
                <i class="material-icons">add</i>
                <p>Offer/Open Subject(Old)<span class="caret"></span></p>
              </a>
            </li>
            <div class="dropdown-container" style="display: none;padding-left: 8px;">
            <li class="nav-item">
              <a class="nav-link" href="">
                <i class="material-icons">list</i>
                <p>for BSCS</p>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="">
                <i class="material-icons">list</i>
                <p>for ACT</p>
              </a>
            </li>
            </div>
            <!--===========================END DROPDOWN 2ND LEVEL===========================-->
            <!--================================ DROPDOWN ================================-->
          <li class="nav-item dropdown2">
            <a class="nav-link">
              <i class="material-icons">list</i>
              <p>Curriculum <span class="caret"></span></p>
            </a>
          </li>
          <div class="dropdown-container" style="display: none;padding-left: 8px;">
          <!--============================ DROPDOWN 2ND LEVEL============================-->
            <li class="nav-item dropdown2">
              <a class="nav-link">
                <i class="material-icons">add</i>
                <p>Old Curriculum <span class="caret"></span></p>
              </a>
            </li>
            <div class="dropdown-container" style="display: none;padding-left: 8px;">
              <li class="nav-item">
                <a class="nav-link" href="../old_curr/curri-educ-bio.php">
                <i class="material-icons"></i>
                  <p> BSED Biological Science</p>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../old_curr/curri-educ-eng.php">
                <i class="material-icons"></i>
                  <p> BSED English</p>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../old_curr/curri-educ-fil.php">
                <i class="material-icons"></i>
                  <p> BSED Filipino</p>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../old_curr/curri-educ-phys.php">
                <i class="material-icons"></i>
                  <p> BSED Physical Science</p>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../old_curr/curri-educ-math.php">
                <i class="material-icons"></i>
                  <p> BSED Mathematics</p>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../old_curr/curri-educ-eced.php">
                <i class="material-icons"></i>
                  <p> BEED Early Childhood</p>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../old_curr/curri-educ-sped.php">
                <i class="material-icons"></i>
                  <p> BEED Special Education</p>
                </a>
              </li>
            </div>
            <!--===========================END DROPDOWN 2ND LEVEL===========================-->
            <!--============================ DROPDOWN 2ND LEVEL============================-->
            <li class="nav-item dropdown2">
              <a class="nav-link">
                <i class="material-icons">add</i>
                <p>New Curriculum <span class="caret"></span></p>
              </a>
            </li>
            <div class="dropdown-container" style="display: none;padding-left: 8px;">
              <li class="nav-item">
                <a class="nav-link" href="../new_curr/ncurri-educ-sped.php"><i class="material-icons"></i>
                <p> BSNE</p>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../new_curr/ncurri-educ-eced.php"><i class="material-icons"></i>
                <p> BECEd</p>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../new_curr/ncurri-educ-pe.php"><i class="material-icons"></i>
                <p> Bachelor of PE</p>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../new_curr/ncurri-educ-beed.php"><i class="material-icons"></i>
                <p> BEED</p>
                </a>
              </li>
            </div>
            <!--===========================END DROPDOWN 2ND LEVEL===========================-->
          </div>
          <!--================================ END DROPDOWN ================================-->';
          }