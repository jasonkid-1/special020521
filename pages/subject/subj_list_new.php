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
                <div class="card-header card-header-tabs card-header-danger">
                  <div class="nav-tabs-navigation">
                    <div class="nav-tabs-wrapper">
                      <h2>New Curriculum</h2>
                      <span class="nav-tabs-title">Courses:</span>
                      <ul class="nav nav-tabs" data-tabs="tabs">
                        <li class="nav-item">
                          <a class="nav-link active" href="#BSCS" data-toggle="tab">
                            <i class="material-icons">bug_report</i> BSCS
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#BSHRM" data-toggle="tab">
                            <i class="material-icons">code</i> BSHM
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#BSBAManagement" data-toggle="tab">
                            <i class="material-icons">cloud</i> BSBA - FM
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#BSBAMarketing" data-toggle="tab">
                            <i class="material-icons">cloud</i> BSBA - MM
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#BEEDEc" data-toggle="tab">
                            <i class="material-icons">cloud</i> BECED
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#BEEDSped" data-toggle="tab">
                            <i class="material-icons">cloud</i> BSPED
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#PE" data-toggle="tab">
                            <i class="material-icons">cloud</i> BPED
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#FILI" data-toggle="tab">
                            <i class="material-icons">cloud</i> BSED - FILIPINO
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#ENGLISH" data-toggle="tab">
                            <i class="material-icons">cloud</i> BSED - ENGLISH
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#MATH" data-toggle="tab">
                            <i class="material-icons">cloud</i> BSED - MATH
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#BEED" data-toggle="tab">
                            <i class="material-icons">cloud</i> BEED
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                        <!-- <li class="nav-item">
                          <a class="nav-link" href="#HRMnonABM" data-toggle="tab">
                            <i class="material-icons">cloud</i> HRM Non-ABM
                            <div class="ripple-container"></div>
                          </a>
                        </li> -->
                        <li class="nav-item">
                          <a class="nav-link" href="#BRIDGING" data-toggle="tab">
                            <i class="material-icons">cloud</i> BRIDGING
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#TCP" data-toggle="tab">
                            <i class="material-icons">cloud</i> TCP
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
<?php include 'tabpane2.php'; ?>
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