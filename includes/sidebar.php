<div class="sidebar" data-color="rose" data-background-color="white" data-image="../../assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo">
<?php include '../../includes/db.php';
      include '../../includes/head_css.php'; 
  $q = mysqli_query($db, 
    "SELECT * FROM tbl_sidebar");
  while($row = mysqli_fetch_array($q)){
?>
        <center><img src="<?php echo 'data:image/jpeg;base64,'.base64_encode( $row['side_logo'] ).''; ?>" style="height: 40px;max-width: 40px" alt="SFAC Logo"></center>
        <a href="../dashboard/index.php" class="simple-text logo-normal"><?php echo ''.$row['side_name'].''; ?></a>
<?php
  }
?>

      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="../dashboard/index.php">
              <i class="fas fa-tachometer-alt fa-lg"></i>
              <p>Dashboard</p>
            </a>
          </li>
<?php 
  if($_SESSION['role'] == "Super Administrator")
  {
    echo '<li class="nav-item">
            <a class="nav-link" href="../super_admin/dean_list.php">
              <i class="material-icons">list_alt</i>
              <p>Deans List</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../super_admin/admin_list.php">
              <i class="material-icons">list_alt</i>
              <p>Registrar List</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../accounting/accounting_list.php">
              <i class="material-icons">list_alt</i>
              <p>Accounting List</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../accounting/add_accounting.php">
              <i class="material-icons">person_add</i>
              <p>Add Accounting</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../super_admin/add_admin.php">
              <i class="material-icons">person_add</i>
              <p>Add Registrar</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../dean/add_dean.php">
              <i class="material-icons">person_add</i>
              <p>Add Dean</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../super_admin/add_pres.php">
              <i class="material-icons">person_add</i>
              <p>Add President</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../admission/add_admission.php">
              <i class="material-icons">person_add</i>
              <p>Add Admission Staff</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../admission/admission.php">
              <i class="material-icons">person_add</i>
              <p>Admission Staff</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../skol_info/school_info.php">
              <i class="material-icons">settings</i>
              <p>School Info</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../super_admin/sidebar_setting.php">
              <i class="material-icons">settings</i>
              <p>Sidebar Setting</p>
            </a>   
          </li>';
  }


  elseif($_SESSION['role'] == "Admission Staff")
  {
    echo '
          
          <li class="nav-item">
            <a class="nav-link" href="../admission/user_prof.php">
              <i class="material-icons">person</i>
              <p>User Profile</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../admission/target.php">
              <i class="material-icons">list</i>
              <p>Enrollment Target</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../forms/enroll_stats.php">
              <i class="material-icons">list</i>
              <p>Enrollment Breakdown</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../admission/send_report.php">
              <i class="material-icons">list</i>
              <p>Send Report</p>
            </a>
          </li>';
  }


    elseif($_SESSION['role'] == "Student")
  {
        echo '
          <li class="nav-item">
            <a class="nav-link" href="../user/user.php?stud_id='.$_SESSION['userid'].'">
              <i class="material-icons">person</i>
              <p>User Profile</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../enroll/enroll_subj.php?stud_id='.$_SESSION['userid'].'">
              <i class="material-icons">language</i>
              <p>Enroll Now</p>
            </a>
          </li>
          <!--================================ DROPDOWN ================================-->
          <li class="nav-item dropdown2">
            <a class="nav-link">
              <i class="material-icons">list</i>
              <p>Forms <span class="caret"></span></p>
            </a>
          </li>
          <div class="dropdown-container" style="display: none;padding-left: 8px;">
          <!--============================ DROPDOWN 2ND LEVEL============================-->
            <li class="nav-item dropdown2">
              <a class="nav-link">
                <i class="material-icons">add</i>
                <p>Blank Forms <span class="caret"></span></p>
              </a>
            </li>
            <div class="dropdown-container" style="display: none;padding-left: 8px;">
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <i class="material-icons">list</i>
                  <p>Curriculum</p>
                </a>
              </li>
            </div>
            <!--===========================END DROPDOWN 2ND LEVEL===========================-->
            <!--============================ DROPDOWN 2ND LEVEL============================-->
            <li class="nav-item dropdown2">
              <a class="nav-link">
                <i class="material-icons">add</i>
                <p>Forms w/ Data <span class="caret"></span></p>
              </a>
            </li>
            <div class="dropdown-container" style="display: none;padding-left: 8px;">
              <li class="nav-item">
                <a class="nav-link" href="../forms/pre.php?stud_id='.$_SESSION['userid'].'">
                  <i class="material-icons">list</i>
                  <p>Pre-Enrollment Form</p>
                </a>
              </li>
              ';
        $que = mysqli_query($db,
          "SELECT * 
          FROM tbl_students 
          LEFT JOIN tbl_courses ON tbl_courses.course_id = tbl_students.course_id
          LEFT JOIN tbl_genders ON tbl_genders.gender_id = tbl_students.gender_id 
          WHERE stud_id= '$_SESSION[userid]'");
        while ($row = mysqli_fetch_array($que))
        {
              if($row['course_id'] == '1' && $row['curri']== 'Old Curri'){
                echo'<li class="nav-item">
                <a class="nav-link" href="../view_curri/view_curri_cs_old.php?stud_id='.$_SESSION['userid'].'&course='.$row['course_id'].'">
                  <i class="material-icons">list</i>
                  <p>Curriculum</p>
                </a>
              </li>';
              }
              elseif ($row['course_id'] == '1' && $row['curri']== 'New Curri') {
                echo'<li class="nav-item">
                <a class="nav-link" href="../view_curri/view_curri_cs_new.php?stud_id='.$_SESSION['userid'].'&course='.$row['course_id'].'">
                  <i class="material-icons">list</i>
                  <p>Curriculum</p>
                </a>
              </li>';
              }
              elseif($row['course_id'] == '6' && $row['curri']== 'Old Curri'){
                echo'<li class="nav-item">
                <a class="nav-link" href="../view_curri/view_curri_ahrm_old.php?stud_id='.$_SESSION['userid'].'&course='.$row['course_id'].'">
                  <i class="material-icons">list</i>
                  <p>Curriculum</p>
                </a>
              </li>';
              }
              elseif($row['course_id'] == '2' && $row['curri']== 'Old Curri'){
                echo'<li class="nav-item">
                <a class="nav-link" href="../view_curri/view_curri_hrm_old.php?stud_id='.$_SESSION['userid'].'&course='.$row['course_id'].'">
                  <i class="material-icons">list</i>
                  <p>Curriculum</p>
                </a>
              </li>';
              }
              elseif($row['course_id'] == '15' && $row['curri']== 'New Curri'){
                echo'<li class="nav-item">
                <a class="nav-link" href="../view_curri/view_curri_hrm_new.php?stud_id='.$_SESSION['userid'].'&course='.$row['course_id'].'">
                  <i class="material-icons">list</i>
                  <p>Curriculum</p>
                </a>
              </li>';
              }
              elseif($row['course_id'] == '3' && $row['curri']== 'New Curri'){
                echo'<li class="nav-item">
                <a class="nav-link" href="../view_curri/view_curri_bamm_new.php?stud_id='.$_SESSION['userid'].'&course='.$row['course_id'].'">
                  <i class="material-icons">list</i>
                  <p>Curriculum</p>
                </a>
              </li>';
              }
              elseif($row['course_id'] == '3' && $row['curri']== 'Old Curri'){
                echo'<li class="nav-item">
                <a class="nav-link" href="../view_curri/view_curri_bamm_old.php?stud_id='.$_SESSION['userid'].'&course='.$row['course_id'].'">
                  <i class="material-icons">list</i>
                  <p>Curriculum</p>
                </a>
              </li>';
              }
              elseif($row['course_id'] == '14' && $row['curri']== 'Old Curri'){
                echo'<li class="nav-item">
                <a class="nav-link" href="../view_curri/view_curri_bam_old.php?stud_id='.$_SESSION['userid'].'&course='.$row['course_id'].'">
                  <i class="material-icons">list</i>
                  <p>Curriculum</p>
                </a>
              </li>';
              }
              elseif($row['course_id'] == '25' && $row['curri']== 'New Curri'){
                echo'<li class="nav-item">
                <a class="nav-link" href="../view_curri/view_curri_bafm_new.php?stud_id='.$_SESSION['userid'].'&course='.$row['course_id'].'">
                  <i class="material-icons">list</i>
                  <p>Curriculum</p>
                </a>
              </li>';
              }
              elseif($row['course_id'] == '24' && $row['curri']== 'New Curri'){
                echo'<li class="nav-item">
                <a class="nav-link" href="../view_curri/view_curri_tcp_new.php?stud_id='.$_SESSION['userid'].'&course='.$row['course_id'].'">
                  <i class="material-icons">list</i>
                  <p>Curriculum</p>
                </a>
              </li>';
              }
              elseif($row['curri']== 'New Curri' && ($row['course_id'] == '13' || $row['course_id'] == '17')){
                echo'<li class="nav-item">
                <a class="nav-link" href="../view_curri/view_curri_eced_new.php?stud_id='.$_SESSION['userid'].'&course='.$row['course_id'].'">
                  <i class="material-icons">list</i>
                  <p>Curriculum</p>
                </a>
              </li>';
              }
              elseif($row['curri']== 'Old Curri' && $row['course_id'] == '13'){
                echo'<li class="nav-item">
                <a class="nav-link" href="../view_curri/view_curri_eced_old.php?stud_id='.$_SESSION['userid'].'&course='.$row['course_id'].'">
                  <i class="material-icons">list</i>
                  <p>Curriculum</p>
                </a>
              </li>';
              }
              elseif($row['curri']== 'New Curri' && $row['course_id'] == '18'){
                echo'<li class="nav-item">
                <a class="nav-link" href="../view_curri/view_curri_bped_new.php?stud_id='.$_SESSION['userid'].'&course='.$row['course_id'].'">
                  <i class="material-icons">list</i>
                  <p>Curriculum</p>
                </a>
              </li>';
              }
              elseif($row['curri']== 'New Curri' && $row['course_id'] == '16'){
                echo'<li class="nav-item">
                <a class="nav-link" href="../view_curri/view_curri_sped_new.php?stud_id='.$_SESSION['userid'].'&course='.$row['course_id'].'">
                  <i class="material-icons">list</i>
                  <p>Curriculum</p>
                </a>
              </li>';
              }
              elseif($row['curri']== 'New Curri' && $row['course_id'] == '10'){
                echo'<li class="nav-item">
                <a class="nav-link" href="../view_curri/view_curri_eng_new.php?stud_id='.$_SESSION['userid'].'&course='.$row['course_id'].'">
                  <i class="material-icons">list</i>
                  <p>Curriculum</p>
                </a>
              </li>';
              }
              elseif($row['curri']== 'New Curri' && $row['course_id'] == '11'){
                echo'<li class="nav-item">
                <a class="nav-link" href="../view_curri/view_curri_fili_new.php?stud_id='.$_SESSION['userid'].'&course='.$row['course_id'].'">
                  <i class="material-icons">list</i>
                  <p>Curriculum</p>
                </a>
              </li>';
              }
              elseif($row['curri']== 'New Curri' && $row['course_id'] == '12'){
                echo'<li class="nav-item">
                <a class="nav-link" href="../view_curri/view_curri_math_new.php?stud_id='.$_SESSION['userid'].'&course='.$row['course_id'].'">
                  <i class="material-icons">list</i>
                  <p>Curriculum</p>
                </a>
              </li>';
              }
              elseif($row['curri']== 'Old Curri' && $row['course_id'] == '10'){
                echo'<li class="nav-item">
                <a class="nav-link" href="../view_curri/view_curri_eng_old.php?stud_id='.$_SESSION['userid'].'&course='.$row['course_id'].'">
                  <i class="material-icons">list</i>
                  <p>Curriculum</p>
                </a>
              </li>';
              }
              elseif($row['curri']== 'Old Curri' && $row['course_id'] == '11'){
                echo'<li class="nav-item">
                <a class="nav-link" href="../view_curri/view_curri_fili_old.php?stud_id='.$_SESSION['userid'].'&course='.$row['course_id'].'">
                  <i class="material-icons">list</i>
                  <p>Curriculum</p>
                </a>
              </li>';
              }
              elseif($row['curri']== 'Old Curri' && $row['course_id'] == '11'){
                echo'<li class="nav-item">
                <a class="nav-link" href="../view_curri/view_curri_fili_old.php?stud_id='.$_SESSION['userid'].'&course='.$row['course_id'].'">
                  <i class="material-icons">list</i>
                  <p>Curriculum</p>
                </a>
              </li>';
              }
              elseif($row['curri']== 'New Curri' && $row['course_id'] == '19'){
                echo'<li class="nav-item">
                <a class="nav-link" href="../view_curri/view_curri_beed_new.php?stud_id='.$_SESSION['userid'].'&course='.$row['course_id'].'">
                  <i class="material-icons">list</i>
                  <p>Curriculum</p>
                </a>
              </li>';
              }
        } //end of while loop
              echo'
              
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <i class="material-icons">list</i>
                  <p>My Grades</p>
                </a>
              </li>
            </div>
            <!--===========================END DROPDOWN 2ND LEVEL===========================-->
          </div>
          <!--================================ END DROPDOWN ================================-->
          <li class="nav-item">
                <a class="nav-link" href="../user/history.php?stud_id='.$_SESSION['userid'].'">
                  <i class="material-icons">person</i>
                  <p>History</p>
                </a>
              </li>';
  }


  elseif($_SESSION['role'] == "President")
  {
        echo '
          <li class="nav-item">
            <a class="nav-link" href="../super_admin/pres_update.php">
              <i class="material-icons">person</i>
              <p>User Profile</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../forms/enroll_stats.php">
              <i class="material-icons">list</i>
              <p>Enrollment Breakdown</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../admission/send_report.php">
              <i class="material-icons">list</i>
              <p>Send Report</p>
            </a>
          </li>';
  }


    elseif($_SESSION['role'] == "Dean")
  {
        echo '
          <li class="nav-item">
            <a class="nav-link" href="../dean/profile.php">
              <i class="material-icons">person</i>
              <p>User Profile</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../forms/enroll_stats.php">
              <i class="material-icons">list</i>
              <p>Enrollment Breakdown</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../admission/send_report.php">
              <i class="material-icons">list</i>
              <p>Send Report</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../faculty/add_faculty.php">
              <i class="material-icons">person_add</i>
              <p>Add Enrollment Adviser</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../dean/advisers.php">
              <i class="material-icons">list</i>
              <p>Enrollment Advisers</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../dean/add_department.php">
              <i class="material-icons">add</i>
              <p>Add Department</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../dean/department.php">
              <i class="material-icons">list</i>
              <p>Department List</p>
            </a>
          </li>
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
              <li class="nav-item">
                <a class="nav-link" href="../old_curr/curri-db.php">
                <i class="material-icons"></i>
                  <p> BSCS</p>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../old_curr/curri-db-tuyir.php">
                <i class="material-icons"></i>
                  <p> ACT</p>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../old_curr/curri-ba-mktg-mgmt.php">
                <i class="material-icons"></i>
                  <p> BSBA Marketing Management</p>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../old_curr/curri-ba-mgmt.php">
                <i class="material-icons"></i>
                  <p> BSBA Management</p>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../old_curr/curri-hrm.php">
                <i class="material-icons"></i>
                  <p> BSHRM</p>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../old_curr/curri-hrm-tuyir.php">
                <i class="material-icons"></i>
                  <p> AHRM</p>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../old_curr/curri-bridging.php">
                <i class="fas fa-archway fa-lg"></i>
                  <p> Bridging Program</p>
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
                <a class="nav-link" href="../new_curr/ncurri-hrm-non-abm.php"><i class="material-icons"></i>
                <p> BSHRM for non-ABM</p>
                </a>
              </li>
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
              <li class="nav-item">
                <a class="nav-link" href="../new_curr/ncurri-db-rev.php"><i class="material-icons"></i>
                <p> BSCS</p>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../new_curr/ncurri-hrm.php"><i class="material-icons"></i>
                <p> BSHRM</p>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../new_curr/ncurri-ba-mgmt.php"><i class="material-icons"></i>
                <p> BSBA Management</p>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../new_curr/ncurri-ba-mktg-mgmt.php"><i class="material-icons"></i>
                <p> BSBA Marketing</p>
                </a>
              </li>
            </div>
            <!--===========================END DROPDOWN 2ND LEVEL===========================-->
          </div>
          <!--================================ END DROPDOWN ================================-->';
  }



    elseif($_SESSION['role'] == "Accounting")
  { 
        echo '<li class="nav-item">
              <a class="nav-link" href="../accounting/edit_accounting.php?account_id='.$_SESSION['userid'].'">
                <i class="material-icons">person</i>
                <p>User Profile</p>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../accounting/stud_list.php">
                <i class="material-icons">confirmation_number</i>
                <p>Student List</p>
              </a>
            </li>';
          }



    elseif($_SESSION['role'] == "Registrar")
  { 
        echo '
        <li class="nav-item">
              <a class="nav-link" href="../stud_list/stud_list.php">
                <i class="material-icons">confirmation_number</i>
                <p>Confirm Enrolled Students</p>
              </a>
            </li>
          <!--================================ DROPDOWN ================================-->
          <li class="nav-item dropdown2">
            <a class="nav-link">
              <i class="fas fa-eye fa-lg"></i>
               <p>Forms <span class="caret"></span></p>
            </a>
          </li>
          <div class="dropdown-container" style="display: none;padding-left: 8px;">
          <!--============================ DROPDOWN 2ND LEVEL============================-->
            <li class="nav-item dropdown2">
              <a class="nav-link">
                <i class="material-icons">add</i>
                <p>Blank Forms <span class="caret"></span></p>
              </a>
            </li>
            <div class="dropdown-container" style="display: none;padding-left: 8px;">
              <li class="nav-item">
                <a class="nav-link" href="../forms/preenrollment.php">
                  <i class="material-icons">list</i>
                  <p>Pre-Enrollment Form</p>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="">
                  <i class="material-icons">list</i>
                  <p>Registration Form</p>
                </a>
              </li>
            </div>
            <!--===========================END DROPDOWN 2ND LEVEL===========================-->
            <!--============================ DROPDOWN 2ND LEVEL============================-->
            <li class="nav-item dropdown2">
              <a class="nav-link">
                <i class="material-icons">add</i>
                <p>Forms w/ Data <span class="caret"></span></p>
              </a>
            </li>
            <div class="dropdown-container" style="display: none;padding-left: 8px;">
              <li class="nav-item">
                <a class="nav-link" href="">
                  <i class="material-icons">list</i>
                  <p>Pre-Enrollment Form</p>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="">
                  <i class="material-icons">list</i>
                  <p>Registration Form</p>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="">
                  <i class="material-icons">list</i>
                  <p>Curriculum</p>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="">
                  <i class="material-icons">list</i>
                  <p>My Grades</p>
                </a>
              </li>
            </div>
            <!--===========================END DROPDOWN 2ND LEVEL===========================-->
          </div>
          <!--================================ END DROPDOWN ================================-->
          
          <!--============================= LIST FRANCISCANS DROPDOWN =============================-->
          <li class="nav-item dropdown2">
            <a class="nav-link">
              <i class="material-icons">face</i>
              <p>List Franciscans <span class="caret"></span></p>
            </a>
          </li>
          <div class="dropdown-container" style="display: none;padding-left: 8px;">
            <li class="nav-item">
              <a class="nav-link" href="../registrar/student.php">
                <i class="material-icons">wc</i>
                <p>Student List</p>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../registrar/faculty.php">
                <i class="material-icons">group</i>
                <p>Faculty List</p>
              </a>
            </li>
            <li class="nav-item dropdown2">
              <a class="nav-link">
                <i class="material-icons">book</i>
                <p>Subject List <span class="caret"></span></p>
              </a>
            </li>
            <div class="dropdown-container" style="display: none;padding-left: 8px;">
              <li class="nav-item">
                <a class="nav-link" href="../subject/subj_list_new.php">
                  <i class="material-icons">book</i>
                  <p>Subject List(New Curri)</p>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../subject/subj_list.php">
                  <i class="material-icons">book</i>
                  <p>Subject List(Old Curri)</p>
                </a>
              </li>
            </div>
            <li class="nav-item">
              <a class="nav-link" href="../registrar/course.php">
                <i class="material-icons">folder</i>
                <p>Course List</p>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../registrar/acadyear.php">
                <i class="material-icons">timeline</i>
                <p>Academic Year List</p>
              </a>
            </li>
          </div>
          <!--===========================LIST FRANCISCANS END DROPDOWN ============================-->
          
          <!--================================ DROPDOWN ================================-->
          <li class="nav-item dropdown2">
            <a class="nav-link">
              <i class="material-icons">subject</i>
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
              <li class="nav-item">
                <a class="nav-link" href="../old_curr/curri-db.php">
                <i class="material-icons"></i>
                  <p> BSCS</p>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../old_curr/curri-db-tuyir.php">
                <i class="material-icons"></i>
                  <p> ACT</p>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../old_curr/curri-ba-mktg-mgmt.php">
                <i class="material-icons"></i>
                  <p> BSBA Marketing Management</p>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../old_curr/curri-ba-mgmt.php">
                <i class="material-icons"></i>
                  <p> BSBA Management</p>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../old_curr/curri-hrm.php">
                <i class="material-icons"></i>
                  <p> BSHRM</p>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../old_curr/curri-hrm-tuyir.php">
                <i class="material-icons"></i>
                  <p> AHRM</p>
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
                <a class="nav-link" href="../new_curr/ncurri-db-rev.php">
                <i class="fas fa-laptop-code fa-lg"></i>
                <p> BSCS</p>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../new_curr/ncurri-ba-mktg-mgmt.php">
                <i class="fas fa-bullhorn fa-lg"></i>
                <p> BSMM</p>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../new_curr/ncurri-ba-fncl-mgmt.php">
                <i class="fas fa-credit-card fa-lg"></i>
                <p> BSFM</p>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../new_curr/ncurri-hm.php">
                <i class="fas fa-chalkboard-teacher fa-lg"></i>
                <p> BSHM</p>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../new_curr/ncurri-educ-eng.php">
                <i class="fas fa-chalkboard-teacher fa-lg"></i>
                <p> BSED-ENGL</p>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../new_curr/ncurri-educ-fil.php">
                <i class="fas fa-chalkboard-teacher fa-lg"></i>
                <p> BSED-FILI</p>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../new_curr/ncurri-educ-math.php">
                <i class="fas fa-chalkboard-teacher fa-lg"></i>
                <p> BSED-MATH</p>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../new_curr/ncurri-educ-eced.php">
                <i class="fas fa-chalkboard-teacher fa-lg"></i>
                <p> BECEd</p>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../new_curr/ncurri-educ-pe.php">
                <i class="fas fa-chalkboard-teacher fa-lg"></i>
                <p> BPED</p>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../new_curr/ncurri-educ-beed.php">
                <i class="fas fa-chalkboard-teacher fa-lg"></i>
                <p> BEED</p>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../new_curr/ncurri-tcp.php">
                <i class="fas fa-chalkboard-teacher fa-lg"></i>
                <p> TCP</p>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../old_curr/curri-bridging.php">
                <i class="fas fa-archway fa-lg"></i>
                  <p> Bridging</p>
                </a>
              </li>
            </div>
             <li class="nav-item dropdown2">
              <a class="nav-link">
                <i class="material-icons">add</i>
                <p>Senior Curriculum <span class="caret"></span></p>
              </a>
            </li>
            <div class="dropdown-container" style="display: none;padding-left: 8px;">
              <li class="nav-item">
                <a class="nav-link" href="../senior_curr/ncurri-db-rev.php">
                <i class="fas fa-laptop-code fa-lg"></i>
                <p> ABM </p>
                </a>
              </li>
               <li class="nav-item">
                <a class="nav-link" href="../senior_curr/ncurri-db-rev.php">
                <i class="fas fa-laptop-code fa-lg"></i>
                <p> GAS </p>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../senior_curr/ncurri-db-rev.php">
                <i class="fas fa-laptop-code fa-lg"></i>
                <p> HUMSS </p>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../senior_curr/stem_curr.php">
                <i class="fas fa-laptop-code fa-lg"></i>
                <p> STEM </p>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../senior_curr/ncurri-db-rev.php">
                <i class="fas fa-laptop-code fa-lg"></i>
                <p> TVL </p>
                </a>
              </li>
            </div>
            <!--===========================END DROPDOWN 2ND LEVEL===========================-->
          </div>
          <!--===========================REG MAINTENANCE DROPDOWN ===========================-->
          <li class="nav-item dropdown2">
            <a class="nav-link">
              <i class="material-icons">build</i>
              <p>Registrar Maintenance <span class="caret"></span></p>
            </a>
          </li>
          <div class="dropdown-container" style="display: none;padding-left: 8px;">
            <li class="nav-item">
            <a class="nav-link" href="../user/add_user.php">
              <i class="material-icons">person_add</i>
              <p>Add Student</p>
            </a>
          </li>
            <li class="nav-item">
              <a class="nav-link" href="../registrar/add_acadyear.php">
                <i class="material-icons">add_alarm</i>
                <p>Add Academic Year</p>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../registrar/add_course.php">
                <i class="material-icons">note_add</i>
                <p>Add Course</p>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../registrar/add_dept.php">
                <i class="material-icons">note_add</i>
                <p>Add Department</p>
              </a>
            </li>
            <li class="nav-item dropdown2">
              <a class="nav-link">
                <i class="material-icons">library_add</i>
                <p>Add Subject <span class="caret"></span></p>
              </a>
            </li>

            <!--============================ DROPDOWN 2ND LEVEL============================-->
            
            <div class="dropdown-container" style="display: none;padding-left: 8px;">
              <li class="nav-item">
                <a class="nav-link" href="../subject/add_subj.php">
                  <i class="material-icons">library_add</i>
                  <p>Add Old Subject</p>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../subject/add_subj_new.php">
                  <i class="material-icons">library_add</i>
                  <p>Add New Subject</p>
                </a>
              </li>
            </div>
            <!--===========================END DROPDOWN 2ND LEVEL===========================-->
            <li class="nav-item">
              <a class="nav-link" href="../registrar/add_faculty.php">
                <i class="material-icons">person_add</i>
                <p>Add Faculty</p>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../setting/setting.php">
                <i class="material-icons">settings</i>
                <p>SET Active A.Y & Sem</p>
              </a>
            </li>
          </div>
          <!--===========================REG MAINTENANCE END DROPDOWN ===========================-->
          <!--================================ END DROPDOWN ================================-->
          ';
  } 


     elseif($_SESSION['role'] == "Faculty")
  {
        echo '
          <li class="nav-item">
              <a class="nav-link" href="../enroll/assess_stud.php">
                <i class="material-icons">list</i>
                <p>View Pending Student</p>
              </a>
            </li>
          <!--================================MAINTENANCE DROPDOWN ================================-->
          <li class="nav-item dropdown2">
            <a class="nav-link">
              <i class="material-icons">settings</i>
              <p>Maintenance <span class="caret"></span></p>
            </a>
          </li>
          <div class="dropdown-container" style="display: none;padding-left: 8px;">
            <li class="nav-item">
            <a class="nav-link" href="../user/add_user.php">
              <i class="material-icons">person_add</i>
              <p>Add Student</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../registrar/add_faculty.php">
              <i class="material-icons">person_add</i>
              <p>Add Faculty</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../faculty/edit_prof.php">
              <i class="material-icons">edit</i>
              <p>Update Profile</p>
            </a>
          </li>
          <!--================================MAINTENANCE END DROPDOWN ================================-->
          </div>
          
          <!--================================LISTS DROPDOWN ================================-->
          <li class="nav-item dropdown2">
            <a class="nav-link">
              <i class="material-icons">list</i>
              <p>List Franciscans <span class="caret"></span></p>
            </a>
          </li>
          <div class="dropdown-container" style="display: none;padding-left: 8px;">
          <!--================================2ND DROPDOWN ================================-->
          <li class="nav-item dropdown2">
            <a class="nav-link">
              <i class="material-icons">list</i>
              <p>Class Schedules <span class="caret"></span></p>
            </a>
          </li>';


if ($_SESSION['department'] == "Bridging Department") {
   echo'         <div class="dropdown-container" style="display: none;padding-left: 8px;">
            <li class="nav-item">
              <a class="nav-link" href="../class_schedule/class_schedule_old.php">
                <i class="material-icons">dashboard</i>
                <p>Class Schedules(New Curri)</p>
              </a>
            </li>
          </div>
          ';
}

else{
       echo'   <div class="dropdown-container" style="display: none;padding-left: 8px;">
            <li class="nav-item">
              <a class="nav-link" href="../class_schedule/class_schedule.php">
                <i class="material-icons">dashboard</i>
                <p>Class Schedules(New Curri)</p>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../class_schedule/class_schedule_old.php">
                <i class="material-icons">dashboard</i>
                <p>Class Schedules(Old Curri)</p>
              </a>
            </li>
          </div>
          <!--================================2ND END DROPDOWN ================================-->
          ';
        }echo '
            <li class="nav-item">
              <a class="nav-link" href="../registrar/faculty.php">
                <i class="material-icons">aa</i>
                <p>Faculty List</p>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../registrar/student.php">
                <i class="material-icons">aa</i>
                <p>Student List</p>
              </a>
            </li>
          </div>
          <!--================================LISTS END DROPDOWN ================================-->
          <!--================================ DROPDOWN ================================-->
          <li class="nav-item dropdown2">
            <a class="nav-link">
              <i class="material-icons">list</i>
              <p>Forms <span class="caret"></span></p>
            </a>
          </li>
          <div class="dropdown-container" style="display: none;padding-left: 8px;">
          <!--============================ DROPDOWN 2ND LEVEL============================-->
            <li class="nav-item dropdown2">
              <a class="nav-link">
                <i class="material-icons">add</i>
                <p>Blank Forms <span class="caret"></span></p>
              </a>
            </li>
            <div class="dropdown-container" style="display: none;padding-left: 8px;">
              <li class="nav-item">
                <a class="nav-link" href="">
                  <i class="material-icons">list</i>
                  <p>Pre-Enrollment Form</p>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="">
                  <i class="material-icons">list</i>
                  <p>Registration Form</p>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="">
                  <i class="material-icons">list</i>
                  <p>Curriculum</p>
                </a>
              </li>
            </div>
            <!--===========================END DROPDOWN 2ND LEVEL===========================-->
            <!--============================ DROPDOWN 2ND LEVEL============================-->
            <li class="nav-item dropdown2">
              <a class="nav-link">
                <i class="material-icons">add</i>
                <p>Forms w/ Data <span class="caret"></span></p>
              </a>
            </li>
            <div class="dropdown-container" style="display: none;padding-left: 8px;">
              <li class="nav-item">
                <a class="nav-link" href="">
                  <i class="material-icons">list</i>
                  <p>Pre-Enrollment Form</p>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="">
                  <i class="material-icons">list</i>
                  <p>Registration Form</p>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="">
                  <i class="material-icons">list</i>
                  <p>Curriculum</p>
                </a>
              </li>
            </div>
            <!--===========================END DROPDOWN 2ND LEVEL===========================-->
          </div>
          <!--================================ END DROPDOWN ================================-->
          <!--================================ DROPDOWN ================================-->
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
                <p>Open Subject(New)<span class="caret"></span></p>
              </a>
            </li>
            <div class="dropdown-container" style="display: none;padding-left: 8px;">
            <li class="nav-item">
              <a class="nav-link" href="../faculty/offered_subj_mktg.php">
                <i class="material-icons">list</i>
                <p>for Marketing Management</p>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../faculty/offered_subj_ba_mngt.php">
                <i class="material-icons">list</i>
                <p>for Financial Management</p>
              </a>
            </li>
            </div>
            <!--===========================END DROPDOWN 2ND LEVEL===========================-->
            <!--============================ DROPDOWN 2ND LEVEL============================-->
            <li class="nav-item dropdown2">
              <a class="nav-link">
                <i class="material-icons">list</i>
                <p>Open Subject(Old)<span class="caret"></span></p>
              </a>
            </li>
            <div class="dropdown-container" style="display: none;padding-left: 8px;">
            <li class="nav-item">
              <a class="nav-link" href="../old/old_subj_mktg.php">
                <i class="material-icons">list</i>
                <p>for Marketing Management</p>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../old/old_subj_mngt.php">
                <i class="material-icons">list</i>
                <p>for Management</p>
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
                <a class="nav-link" href="../old_curr/curri-ba-mktg-mgmt.php">
                <i class="material-icons"></i>
                  <p> BSBA Marketing Management</p>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../old_curr/curri-ba-mgmt.php">
                <i class="material-icons"></i>
                  <p> BSBA Financial Management</p>
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
                <a class="nav-link" href="../new_curr/ncurri-ba-mgmt.php"><i class="material-icons"></i>
                <p> BSBA Management</p>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../new_curr/ncurri-ba-mktg-mgmt.php"><i class="material-icons"></i>
                <p> BSBA Marketing</p>
                </a>
              </li>
            </div>
            <!--===========================END DROPDOWN 2ND LEVEL===========================-->
          </div>
          <!--================================ END DROPDOWN ================================-->';
          }


          elseif ($_SESSION['department'] == "HRM Department") 
          { echo'
            <li class="nav-item dropdown2">
              <a class="nav-link">
                <i class="material-icons">list</i>
                <p>Open Subject(New)<span class="caret"></span></p>
              </a>
            </li>
            <div class="dropdown-container" style="display: none;padding-left: 8px;">
            <li class="nav-item">
              <a class="nav-link" href="../faculty/offered_subj_hrm.php">
                <i class="material-icons">list</i>
                <p>BSHM</p>
              </a>
            </li>
            </div>
            <!--===========================END DROPDOWN 2ND LEVEL===========================-->
            <!--============================ DROPDOWN 2ND LEVEL============================-->
            <li class="nav-item dropdown2">
              <a class="nav-link">
                <i class="material-icons">add</i>
                <p>Open Subject(Old)<span class="caret"></span></p>
              </a>
            </li>
            <div class="dropdown-container" style="display: none;padding-left: 8px;">
            <li class="nav-item">
              <a class="nav-link" href="../old/old_subj_hrm.php">
                <i class="material-icons">list</i>
                <p>for BSHRM</p>
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
                <a class="nav-link" href="../old_curr/curri-hrm.php">
                <i class="material-icons"></i>
                  <p> BSHRM</p>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../old_curr/curri-hrm-tuyir.php">
                <i class="material-icons"></i>
                  <p> AHRM</p>
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
                <a class="nav-link" href="../new_curr/ncurri-hrm-non-abm.php"><i class="material-icons"></i>
                <p> BSHRM for non-ABM</p>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../new_curr/ncurri-hrm.php"><i class="material-icons"></i>
                <p> BSHM</p>
                </a>
              </li>
            </div>
            <!--===========================END DROPDOWN 2ND LEVEL===========================-->
          </div>
          <!--================================ END DROPDOWN ================================-->';
          }


          elseif ($_SESSION['department'] == "CS Department") 
          { echo'
            <li class="nav-item dropdown2">
              <a class="nav-link">
                <i class="material-icons">list</i>
                <p>Open Subject(New)<span class="caret"></span></p>
              </a>
            </li>
            <div class="dropdown-container" style="display: none;padding-left: 8px;">
            <li class="nav-item">
              <a class="nav-link" href="../faculty/offered_subj_cs.php">
                <i class="material-icons">list</i>
                <p>for BSCS</p>
              </a>
            </li>
            </div>
            <!--===========================END DROPDOWN 2ND LEVEL===========================-->
            <!--============================ DROPDOWN 2ND LEVEL============================-->
            <li class="nav-item dropdown2">
              <a class="nav-link">
                <i class="material-icons">add</i>
                <p>Open Subject(Old)<span class="caret"></span></p>
              </a>
            </li>
            <div class="dropdown-container" style="display: none;padding-left: 8px;">
            <li class="nav-item">
              <a class="nav-link" href="../old/old_subj_bscs.php">
                <i class="material-icons">list</i>
                <p>for BSCS</p>
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
                <a class="nav-link" href="../old_curr/curri-db.php">
                <i class="material-icons"></i>
                  <p> BSCS</p>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../old_curr/curri-db-tuyir.php">
                <i class="material-icons"></i>
                  <p> ACT</p>
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
                <a class="nav-link" href="../new_curr/ncurri-db-rev.php"><i class="material-icons"></i>
                <p> BSCS</p>
                </a>
              </li>
            </div>
            <!--===========================END DROPDOWN 2ND LEVEL===========================-->
          </div>
          <!--================================ END DROPDOWN ================================-->';
          }

          elseif ($_SESSION['department'] == "Bridging Department") 
          { echo'
            <li class="nav-item">
              <a class="nav-link" href="../faculty/offered_subj_bridging.php">
                <i class="material-icons">list</i>
                <p>for Bridging</p>
              </a>
            </li>
            <!--================================ DROPDOWN ================================-->
          <li class="nav-item dropdown2">
            <a class="nav-link">
              <i class="material-icons">list</i>
              <p>Curriculum <span class="caret"></span></p>
            </a>
          </li>
          <div class="dropdown-container" style="display: none;padding-left: 8px;">
            <!--============================ DROPDOWN 2ND LEVEL============================-->
              <li class="nav-item">
                <a class="nav-link" href="../old_curr/curri-bridging.php"><i class="material-icons">aa</i>
                <p> Bridging</p>
                </a>
              </li>
            <!--===========================END DROPDOWN 2ND LEVEL===========================-->
          </div>
          <!--================================ END DROPDOWN ================================-->';
          }

          
          elseif ($_SESSION['department'] == "EDUC Department") 
          { echo'
            <li class="nav-item dropdown2">
              <a class="nav-link">
                <i class="material-icons">list</i>
                <p>Open Subject(New)<span class="caret"></span></p>
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
            <li class="nav-item">
              <a class="nav-link" href="../faculty/offered_subj_tcp.php">
                <i class="material-icons">list</i>
                <p>for TCP</p>
              </a>
            </li>
            </div>
            <!--===========================END DROPDOWN 2ND LEVEL===========================-->
            <!--============================ DROPDOWN 2ND LEVEL============================-->
            <li class="nav-item dropdown2">
              <a class="nav-link">
                <i class="material-icons">add</i>
                <p>Open Subject(Old)<span class="caret"></span></p>
              </a>
            </li>
            <div class="dropdown-container" style="display: none;padding-left: 8px;">
            <li class="nav-item">
              <a class="nav-link" href="../old/old_subj_engl.php">
                <i class="material-icons">list</i>
                <p>for BSED-ENGL</p>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../old/old_subj_fili.php">
                <i class="material-icons">list</i>
                <p>for BSED-FILI</p>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../old/old_subj_math.php">
                <i class="material-icons">list</i>
                <p>for BSED-MATH</p>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../old/old_subj_eced.php">
                <i class="material-icons">list</i>
                <p>for BEED-ECED</p>
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
          <!--================================ END DROPDOWN ================================-->
            ';
          }
          echo'
          </div>
          <!--================================ END DROPDOWN ================================-->
';
  }
?>
        </ul>
      </div>
    </div>