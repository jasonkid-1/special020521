<?php 
include '../../includes/session.php';
include '../../includes/db.php';
?>
<!DOCTYPE html>
<html lang="en">
<?php include '../../includes/head_css.php'; ?>

<body class="">
  <div class="wrapper ">
    <?php include '../../includes/sidebar.php'; ?>
    <div class="main-panel">
      <!-- Navbar -->
      <?php include '../../includes/top_nav.php'; ?>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
<?php check_message(); ?>
              <div class="card">
                <div class="card-header card-header-tabs card-header-primary">
                  <div class="nav-tabs-navigation">
                    <div class="nav-tabs-wrapper">
                      <h2>Old Curriculum</h2>
                      <span class="nav-tabs-title">Courses:</span>
                      <ul class="nav nav-tabs" data-tabs="tabs">
                        <li class="nav-item">
                          <a class="nav-link active" href="#BSCS" data-toggle="tab">
                            <i class="material-icons">bug_report</i> BSCS
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#ACT" data-toggle="tab">
                            <i class="material-icons">cloud</i> ACT
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#BSHRM" data-toggle="tab">
                            <i class="fas fa-utensils fa-lg"></i> BSHRM
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#AHRM" data-toggle="tab">
                            <i class="material-icons">cloud</i> AHRM
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#BSBAManagement" data-toggle="tab">
                            <i class="fas fa-briefcase fa-lg"></i> BSBA - Management
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#BSBAMarketing" data-toggle="tab">
                            <i class="fas fa-chart-bar fa-lg"></i> BSBA - Marketing
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#BSEDEng" data-toggle="tab">
                            <i class="fas fa-book-reader fa-lg"></i> BSED - English
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#BSEDFil" data-toggle="tab">
                            <i class="fas fa-book-reader fa-lg"></i> BSED - Filipino
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#BSEDMath" data-toggle="tab">
                            <i class="fas fa-book-reader fa-lg"></i> BSED - Math
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#BSEDBio" data-toggle="tab">
                            <i class="fas fa-book-reader fa-lg"></i> BSED - BioSci
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#BSEDPhys" data-toggle="tab">
                            <i class="fas fa-book-reader fa-lg"></i> BSED - PhySci
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#BEEDEc" data-toggle="tab">
                            <i class="material-icons">cloud</i> BEED - ECED
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#BEEDSped" data-toggle="tab">
                            <i class="material-icons">cloud</i> BEED - SPED
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                        
                        
                      </ul>
                    </div>
                  </div>
                </div>
<?php include 'tabpane.php'; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php include '../../includes/footer.php';?>
    </div>
  </div>
<?php include '../../includes/script.php'; ?>
</body>

</html>