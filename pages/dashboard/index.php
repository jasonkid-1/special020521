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

<?php if ($_SESSION['role'] == 'Student') {
echo'<div class="row">';
  $que = mysqli_query($db, "SELECT *,tbl_courses.course_id,tbl_departments.department_id FROM tbl_students LEFT JOIN tbl_courses ON tbl_courses.course_id = tbl_students.course_id
    LEFT JOIN tbl_departments ON tbl_departments.department_id = tbl_courses.department_id where stud_id = '$_SESSION[userid]'");
      while ($row22= mysqli_fetch_array ($que)){
      
    echo'
    
      <div class="col-lg-3 col-md-3 col-sm-3">
              ';
        if($row22['department_id'] == '3'){
          echo'<div class="card card-stats">
                <div class="card-header card-header-default card-header-icon">
                  <div class="card-icon">
                    <i class="fas fa-laptop-code"></i>
                  </div>
                  <p class="card-category">Total No. of <br>Enrolled Students in  <br><strong>School of Computer Studies <br> (SCOM)</strong></p>';
        }
        elseif($row22['department_id'] == '4'){
          echo'<div class="card card-stats">
                <div class="card-header card-header-primary card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">business</i>
                  </div>
                  <p class="card-category">Total No. of <br>Enrolled Students in  <br><strong>School of Business Administration <br> (SBAD)</strong></p>';
        }
        elseif($row22['department_id'] == '5'){
          echo'<div class="card card-stats">
                <div class="card-header card-header-info card-header-icon">
                  <div class="card-icon">
                    <i class="fas fa-chalkboard-teacher"></i>
                  </div>
                  <p class="card-category">Total No. of <br>Enrolled Students in  <br><strong>School of Education<br> (SOE)</strong></p>';
        }
        elseif($row22['department_id'] == '6'){
          echo'<div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">local_dining</i>
                  </div>
                  <p class="card-category">Total No. of <br>Enrolled Students in  <br><strong>School of Hospitality Management <br> (SHOM)</strong></p>';
        }
        else{
          
        }

                            $result2 = mysqli_query($db,"SELECT * 
                              FROM tbl_schoolyears 
                              LEFT JOIN tbl_courses on tbl_courses.course_id = tbl_schoolyears.course_id
                              LEFT JOIN  tbl_departments on tbl_departments.department_id = tbl_courses.department_id 
                              WHERE tbl_courses.department_id='$row22[department_id]' AND ay_id = '$_SESSION[active_acad]' AND sem_id = '$_SESSION[active_sem]' AND remark='Approved'");
                            $num_rows2 = mysqli_num_rows($result2);
                            echo'
          <h2 class="card-title">'.$num_rows2.'</h2>
                </div>
                <div class="card-footer">';
        if($row22['department_id'] == '3'){
          echo'<div class="stats">
                    <a href="cs_stud.php">View Details</a>
                  </div>';
        }elseif($row22['department_id'] == '4'){
          echo'<div class="stats">
                    <a href="ba_stud.php">View Details</a>
                  </div>';
        }elseif($row22['department_id'] == '5'){
          echo'<div class="stats">
                    <a href="educ_stud.php">View Details</a>
                  </div>';
        }elseif($row22['department_id'] == '6'){
          echo'<div class="stats">
                    <a href="hrm_stud.php">View Details</a>
                  </div>';
        }else{
          
        }
                 echo '
                </div>
              </div>
            </div>
            
    ';
      }
      echo '
      <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <i class="fas fa-users"></i>
                  </div>
                  <p class="card-category"><strong>Enrolled Subjects </strong></p>';
                  
                            $count3 = mysqli_fetch_array(mysqli_query($db,"SELECT COUNT(*) as total FROM `tbl_enrolled_subjects` LEFT JOIN tbl_students ON tbl_students.stud_id = tbl_enrolled_subjects.stud_id
                                   WHERE tbl_enrolled_subjects.stud_id = '$_SESSION[userid]' AND semester = '$_SESSION[active_sem]' AND acad_year = '$_SESSION[active_acad]' ")) or die(mysqli_error($db));
                        
echo'
                  <h2 class="card-title">'.$count3['total'].'</h2>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <a href="../enroll/enroll_subj.php?stud_id='.$_SESSION['userid'].'">View Details</a>
                  </div>
                </div>
              </div>
            </div></div>';
      }else{ ?>

          <div class="row">

            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <i class="fas fa-users"></i>
                  </div>
                  <p class="card-category"><strong>Total No. of</strong> <br><strong> Enrolled Students </strong></p>
                  <?php
                            $result = mysqli_query($db,"SELECT * FROM tbl_schoolyears WHERE remark='Approved' AND ay_id = '$_SESSION[active_acad]' AND sem_id = '$_SESSION[active_sem]'");
                            $num_rows = mysqli_num_rows($result);
                            ?>
                  <h2 class="card-title"><?php echo $num_rows; ?></h2>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <a href="enrolled_stud.php">View Details</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <i class="fas fa-users"></i>
                  </div>
                  <p class="card-category">Total No. of <br> <strong> Enrolled New  Students </strong></p>
                  <?php
                            $result = mysqli_query($db,"SELECT * FROM tbl_schoolyears WHERE remark='Approved' AND (status = 'New' || status='New-Trans') AND ay_id = '$_SESSION[active_acad]' AND sem_id = '$_SESSION[active_sem]' ");
                            $num_rows = mysqli_num_rows($result);
                            ?>
                  <h2 class="card-title"><?php echo $num_rows; ?></h2>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <a href="enrolled_new_stud.php">View Details</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <i class="fas fa-users"></i>
                  </div>
                  <p class="card-category">Total No. of <br> <strong>Enrolled Old Students </strong></p>
                  <?php
                            $result = mysqli_query($db,"SELECT * FROM tbl_schoolyears WHERE remark='Approved' AND status = 'Old' AND ay_id = '$_SESSION[active_acad]' AND sem_id = '$_SESSION[active_sem]' ");
                            $num_rows = mysqli_num_rows($result);
                            ?>
                  <h2 class="card-title"><?php echo $num_rows; ?></h2>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <a href="enrolled_old_stud.php">View Details</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="card card-stats">
                <div class="card-header card-header-info card-header-icon">
                  <div class="card-icon">
                    <i class="fas fa-hands fa-lg"></i>
                  </div>
                  <p class="card-category">Total No. of <br> <strong>Pending Enrollees</strong></p>
                  <?php
                            $result1 = mysqli_query($db,"SELECT * FROM tbl_schoolyears WHERE remark='Pending' AND ay_id = '$_SESSION[active_acad]' AND sem_id = '$_SESSION[active_sem]'");
                            $num_rows1 = mysqli_num_rows($result1);
                            ?>
                  <h2 class="card-title"><?php echo $num_rows1; ?></h2>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <a href="pending_stud.php">View Details</a>
                  </div>
                </div>
              </div>
            </div>

            
          </div>
          </div>
          <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="card card-stats">
                <?php if ($_SESSION['role'] == 'Admission Staff') { ?>
                <div class="card-header card-header-danger card-header-icon">
                  <div class="card-icon">
                    <i class="fas fa-users"></i>
                  </div>
                  
                  <p class="card-category">Total No. of <br> <strong>Online Inquiries</strong></p>
                  <?php
                            $result10 = mysqli_query($db,"SELECT * FROM tbl_online_registrations where acad_year = '$_SESSION[active_acad]' AND semester = '$_SESSION[active_sem]'");
                            $num_rows10 = mysqli_num_rows($result10);
                            ?>
                  <h2 class="card-title"><?php echo $num_rows10; ?></h2>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <a href="online_inquiry.php">View Details</a>
                  </div>
                </div>
              <?php }else{?>
                <div class="card-header card-header-danger card-header-icon">
                  <div class="card-icon">
                    <i class="fas fa-users"></i>
                  </div>
                  
                  <p class="card-category">Total No. of <br> <strong>Dropped Students</strong></p>
                  <?php
                            $result10 = mysqli_query($db,"SELECT * FROM tbl_schoolyears WHERE remark='Dropped' AND ay_id = '$_SESSION[active_acad]' AND sem_id = '$_SESSION[active_sem]'");
                            $num_rows10 = mysqli_num_rows($result10);
                            ?>
                  <h2 class="card-title"><?php echo $num_rows10; ?></h2>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <a href="dropped.php">View Details</a>
                  </div>
                </div>
              <?php } ?>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="card card-stats">
                <?php if ($_SESSION['role'] != 'Admission Staff') { ?>
                <div class="card-header card-header-danger card-header-icon">
                  <div class="card-icon">
                    <i class="fas fa-users"></i>
                  </div>
                  
                  <p class="card-category">Total No. of <br> <strong>Online Inquiries</strong></p>
                  <?php
                            $result10 = mysqli_query($db,"SELECT * FROM tbl_online_registrations where acad_year = '$_SESSION[active_acad]' AND semester = '$_SESSION[active_sem]'");
                            $num_rows10 = mysqli_num_rows($result10);
                            ?>
                  <h2 class="card-title"><?php echo $num_rows10; ?></h2>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <a href="online_inquiry.php">View Details</a>
                  </div>
                </div>
              <?php } ?>
              </div>
            </div>
            
            
            
           
          </div> <!-- end row -->
          <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="card card-stats">
                <div class="card-header card-header-primary card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">business</i>
                  </div>
                  <p class="card-category">Total No. of <br>Enrolled Students in  <br><strong>School of Business Administration <br>(SBAD)</strong></p>
                  <?php
                            $result2 = mysqli_query($db,"SELECT * 
                              FROM tbl_schoolyears 
                              LEFT JOIN tbl_courses ON tbl_courses.course_id = tbl_schoolyears.course_id
                              LEFT JOIN  tbl_departments ON tbl_departments.department_id = tbl_courses.department_id WHERE tbl_courses.department_id='4' AND ay_id = '$_SESSION[active_acad]' AND sem_id = '$_SESSION[active_sem]' AND remark='Approved'");
                            $num_rows2 = mysqli_num_rows($result2);
                            ?>
                  <h2 class="card-title"><?php echo $num_rows2; ?></h2>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <a href="ba_stud.php">View Details</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="card card-stats">
                <div class="card-header card-header-default card-header-icon">
                  <div class="card-icon">
                    <i class="fas fa-laptop-code"></i>
                  </div>
                  <p class="card-category">Total No. of <br>Enrolled Students in  <br><strong>School of Computer Studies <br> (SCOM)</strong></p>
                  <?php
                            $result2 = mysqli_query($db,"SELECT * 
                              FROM tbl_schoolyears 
                              LEFT JOIN tbl_courses on tbl_courses.course_id = tbl_schoolyears.course_id
                              LEFT JOIN  tbl_departments on tbl_departments.department_id = tbl_courses.department_id 
                              WHERE tbl_courses.department_id='3' AND ay_id = '$_SESSION[active_acad]' AND sem_id = '$_SESSION[active_sem]' AND remark='Approved'");
                            $num_rows2 = mysqli_num_rows($result2);
                            ?>
                  <h2 class="card-title"><?php echo $num_rows2; ?></h2>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <a href="cs_stud.php">View Details</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="card card-stats">
                <div class="card-header card-header-danger card-header-icon">
                  <div class="card-icon">
                    <i class="fas fa-chalkboard-teacher fa-lg"></i>
                  </div>
                  <p class="card-category">Total No. of <br>Enrolled Students in <br><strong>School of Education<br> (SOE)</strong></p>
                  <?php
                            $result2 = mysqli_query($db,"SELECT * 
                              FROM tbl_schoolyears 
                              LEFT JOIN tbl_courses on tbl_courses.course_id = tbl_schoolyears.course_id
                              LEFT JOIN  tbl_departments on tbl_departments.department_id = tbl_courses.department_id 
                              WHERE tbl_courses.department_id='5' AND ay_id = '$_SESSION[active_acad]' AND sem_id = '$_SESSION[active_sem]' AND remark='Approved'");
                            $num_rows2 = mysqli_num_rows($result2);
                            ?>
                  <h2 class="card-title"><?php echo $num_rows2; ?></h2>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <a href="educ_stud.php">View Details</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">local_dining</i>
                  </div>
                  <p class="card-category">Total No. of <br>Enrolled Students in  <br><strong>School of Hospitality Management <br> (SHOM)</strong></p>
                  <?php
                            $result2 = mysqli_query($db,"SELECT * 
                              FROM tbl_schoolyears 
                              LEFT JOIN tbl_courses on tbl_courses.course_id = tbl_schoolyears.course_id
                              LEFT JOIN  tbl_departments on tbl_departments.department_id = tbl_courses.department_id 
                              WHERE tbl_courses.department_id='6' AND ay_id = '$_SESSION[active_acad]' AND sem_id = '$_SESSION[active_sem]' AND remark='Approved'");
                            $num_rows2 = mysqli_num_rows($result2);
                            ?>
                  <h2 class="card-title"><?php echo $num_rows2; ?></h2>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <a href="hrm_stud.php">View Details</a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            
           <!--  <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="card card-stats">
                <div class="card-header card-header-info card-header-icon">
                  <div class="card-icon">
                    <i class="fas fa-archway"></i>
                  </div>

                  <p class="card-category">Total No. of <br> <strong>Enrolled in Bridging Program <br>(BP)</strong> </p> -->
                   <?php
                  //           $result3 = mysqli_query($db,"SELECT * 
                  //             FROM tbl_schoolyears 
                  //             LEFT JOIN tbl_courses on tbl_courses.course_id = tbl_schoolyears.course_id
                  //             LEFT JOIN  tbl_departments on tbl_departments.department_id = tbl_courses.department_id 
                  //             WHERE tbl_schoolyears.course_id='8' AND ay_id = '$_SESSION[active_acad]' AND sem_id = '$_SESSION[active_sem]' AND remark='Approved'");
                  //           $num_rows3 = mysqli_num_rows($result3);
                            ?>
               <!--    <h2 class="card-title"><?php echo $num_rows3; ?></h2>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <a href="bridging_stud.php">View Details</a>
                  </div>
                </div>
              </div>

            </div> -->


<?php } ?>
        </div><!-- end container fluid -->
      </div>
      
      <?php include '../../includes/footer.php'; ?>
    </div>
  </div>
  
  <!--   Core JS Files   -->
<?php include '../../includes/script.php'; ?>
</body>

</html>
