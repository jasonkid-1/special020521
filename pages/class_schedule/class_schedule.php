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
              
<?php if ($_SESSION['department'] == 'EDUC Department') {
                       
  echo '     <div class="card">
                <div class="card-header card-header-tabs card-header-primary">
                  <h4 class="card-title mt-0">Class Schedule for '.$_SESSION['active_sem'].' A.Y '.$_SESSION['active_acad'].'&nbsp;&nbsp;(New Curriculum)</h4>
                  <div class="nav-tabs-navigation">
                    <div class="nav-tabs-wrapper">
                      <span class="nav-tabs-title">Course:</span>
                      <ul class="nav nav-tabs" data-tabs="tabs">
                       
                        <li class="nav-item">
                          <a class="nav-link active" href="#sped" data-toggle="tab">
                            <i class="material-icons">bug_report</i> SPED
                            <div class="ripple-container"></div>
                          </a>
                        </li>

                        <li class="nav-item">
                          <a class="nav-link" href="#eced" data-toggle="tab">
                            <i class="material-icons">code</i> ECED
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#beed" data-toggle="tab">
                            <i class="material-icons">cloud</i> BEED
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#pe" data-toggle="tab">
                            <i class="material-icons">cloud</i> Bachelor of P.E.
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#engl" data-toggle="tab">
                            <i class="material-icons">cloud</i> BSED-English
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#fili" data-toggle="tab">
                            <i class="material-icons">cloud</i> BSED-FILIPINO
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#math" data-toggle="tab">
                            <i class="material-icons">cloud</i> BSED-MATHEMATICS
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#tcp" data-toggle="tab">
                            <i class="material-icons">cloud</i> TCP
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                      </ul>';
}elseif ($_SESSION['department'] == 'CS Department') {
  echo '     <div class="card">
                <div class="card-header card-header-tabs card-header-primary">
                  <h4 class="card-title mt-0">Class Schedule for '.$_SESSION['active_sem'].' A.Y '.$_SESSION['active_acad'].'&nbsp;&nbsp;(New Curriculum)</h4>
                  <div class="nav-tabs-navigation">
                    <div class="nav-tabs-wrapper">
                      <span class="nav-tabs-title">Course:</span>
                      <ul class="nav nav-tabs" data-tabs="tabs">
                        <li class="nav-item">
                          <a class="nav-link active" href="#bscs" data-toggle="tab">
                            <i class="material-icons">bug_report</i> BSCS
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                      </ul>';
}elseif ($_SESSION['department'] == 'BA Department') {
  echo '      <div class="card">
                <div class="card-header card-header-tabs card-header-primary">
                  <h4 class="card-title mt-0">Class Schedule for '.$_SESSION['active_sem'].' A.Y '.$_SESSION['active_acad'].'&nbsp;&nbsp;(New Curriculum)</h4>
                  <div class="nav-tabs-navigation">
                    <div class="nav-tabs-wrapper">
                      <span class="nav-tabs-title">Course:</span>
                      <ul class="nav nav-tabs" data-tabs="tabs">
                        <li class="nav-item">
                          <a class="nav-link active" href="#bamrkt" data-toggle="tab">
                            <i class="material-icons">bug_report</i> BS Marketing Management
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#bamngt" data-toggle="tab">
                            <i class="material-icons">bug_report</i> BS Financial Management
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                      </ul>';
}elseif ($_SESSION['department'] == 'HRM Department') {
  echo '      <div class="card">
                <div class="card-header card-header-tabs card-header-primary">
                  <h4 class="card-title mt-0">Class Schedule for '.$_SESSION['active_sem'].' A.Y '.$_SESSION['active_acad'].'&nbsp;&nbsp;(New Curriculum)</h4>
                  <div class="nav-tabs-navigation">
                    <div class="nav-tabs-wrapper">
                      <span class="nav-tabs-title">Course:</span>
                      <ul class="nav nav-tabs" data-tabs="tabs">
                        <li class="nav-item">
                          <a class="nav-link active" href="#hrm" data-toggle="tab">
                            <i class="material-icons">bug_report</i> BSHM
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                        <!--<li class="nav-item">
                          <a class="nav-link active" href="#non" data-toggle="tab">
                            <i class="material-icons">bug_report</i> BSHRM for Non-ABM
                            <div class="ripple-container"></div>
                          </a>
                        </li>-->
                      </ul>';
}elseif ($_SESSION['department'] == 'Bridging Department') {
  echo '      <div class="card">
                <div class="card-header card-header-tabs card-header-primary">
                  <h4 class="card-title mt-0">Class Schedule for '.$_SESSION['active_sem'].' A.Y '.$_SESSION['active_acad'].'&nbsp;&nbsp;(New Curriculum)</h4>
                  <div class="nav-tabs-navigation">
                    <div class="nav-tabs-wrapper">
                      <span class="nav-tabs-title">Course:</span>
                      <ul class="nav nav-tabs" data-tabs="tabs">
                        <li class="nav-item">
                          <a class="nav-link active" href="#bridging" data-toggle="tab">
                            <i class="material-icons">bug_report</i> Bridging
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                      </ul>';
} ?>
                      
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="tab-content">
<?php if ($_SESSION['department'] == 'EDUC Department'){ ?>
                    <div class="tab-pane active" id="sped">
                      <table class="table table-hover" id="example1">
                      <thead class="text-primary">
                        <th>SECTION</th>
                        <th>SUBJECT CODE</th>
                        <th>SUBJECT DESCRIPTION</th>
                        <th>UNIT(S)</th>
                        <th>PREREQUISITE</th>
                        <th>INSTRUCTOR</th>
                        <th>DAY</th>
                        <th>TIME</th>
                        <th>ROOM</th>
                        <th>SPECIAL TUTORIAL</th>
                        <th>OPTION</th>
                      </thead>
                      <tbody>
                        <?php 
                                $query = mysqli_query($db, "SELECT *,CONCAT(tbl_faculties_staff.faculty_lastname, ', ', tbl_faculties_staff.faculty_firstname, ' ', tbl_faculties_staff.faculty_middlename)  AS fullname,tbl_courses.course_id, tbl_subjects_new.subj_id, tbl_departments.department_id, tbl_year_levels.year_id, tbl_semesters.sem_id, tbl_faculties_staff.faculty_id 
                                  FROM tbl_schedules
                                  LEFT JOIN tbl_subjects_new ON tbl_subjects_new.subj_id = tbl_schedules.subj_id 
                                  LEFT JOIN tbl_courses ON tbl_courses.course_id = tbl_subjects_new.course_id
                                  LEFT JOIN tbl_departments on tbl_departments.department_id = tbl_courses.department_id
                                  LEFT JOIN tbl_year_levels ON tbl_year_levels.year_id = tbl_subjects_new.year_id
                                  LEFT JOIN tbl_semesters ON tbl_semesters.sem_id = tbl_subjects_new.sem_id
                                  LEFT JOIN tbl_faculties_staff ON tbl_faculties_staff.faculty_id = tbl_schedules.faculty_id 
                                  WHERE tbl_departments.department_name = '$_SESSION[department]' AND tbl_courses.course_id = '16' AND tbl_schedules.acad_year = '$_SESSION[active_acad]' AND tbl_schedules.semester = '$_SESSION[active_sem]'");

                                while ($row= mysqli_fetch_array($query)){
                                    $id=$row['class_id'];
                                    ?><tr>
                                    <td><?php echo $row['section']; ?></td>
                                    <td><?php echo $row['subj_code']; ?></td>
                                    <td><?php echo $row['subj_desc']; ?></td>
                                    <td><?php echo $row['unit_total']; ?></td>
                                    <td><?php echo $row['prereq']; ?></td>
                                    <td><?php echo $row['fullname']; ?></td>
                                    <td><?php echo $row['day']; ?></td>
                                    <td><?php echo $row['time']; ?></td>
                                    <td><?php echo $row['room']; ?></td>
                                    <td><?php echo $row['special_tut']; ?></td>
                                    <td>
                                      <a class="btn btn-primary" for="ViewAdmin" href="edit_class.php<?php echo '?class_id='.$id; ?>">
                                    <i class="fa fa-edit"></i> Update</a>
                                      <a class="btn btn-danger" for="DeleteAdmin" href="#delete<?php echo $id;?>" data-toggle="modal" data-target="#delete<?php echo $id;?>">
                                        <i class="glyphicon glyphicon-trash icon-white"></i> Delete
                                    </a>

                                    

                                    <div class="modal fade" id="delete<?php  echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">DELETE SUBJECT</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <div class="modal-body">
                                            <div class="alert alert-danger">
                                                    Are you sure you want to delete <?php echo $row['subj_code'].' - '.$row['subj_desc'] ?>?
                                                </div>
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                                            <a href="delete_class.php<?php echo '?class_id='.$id; ?>" class="btn btn-danger">Yes</a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                                   </td>
                                </tr>
                                <?php } ?>
                      </tbody>
                      </table>
                    </div>
                    <div class="tab-pane" id="eced">
                      <table class="table table-hover" id="example2">
                      <thead class="text-primary">
                      <th>SECTION</th>
                        <th>SUBJECT CODE</th>
                        <th>SUBJECT DESCRIPTION</th>
                        <th>UNIT(S)</th>
                        <th>PREREQUISITE</th>
                        <th>INSTRUCTOR</th>
                        <th>DAY</th>
                        <th>TIME</th>
                        <th>ROOM</th>
                        <th>SPECIAL TUTORIAL</th>
                        <th>OPTION</th>
                      </thead>
                      <tbody>
                        <?php 
                                $query1 = mysqli_query($db, "SELECT *,CONCAT(tbl_faculties_staff.faculty_lastname, ', ', tbl_faculties_staff.faculty_firstname, ' ', tbl_faculties_staff.faculty_middlename)  AS fullname,tbl_courses.course_id, tbl_subjects_new.subj_id, tbl_departments.department_id, tbl_year_levels.year_id, tbl_semesters.sem_id, tbl_faculties_staff.faculty_id 
                                  FROM tbl_schedules
                                  LEFT JOIN tbl_subjects_new ON tbl_subjects_new.subj_id = tbl_schedules.subj_id 
                                  LEFT JOIN tbl_courses ON tbl_courses.course_id = tbl_subjects_new.course_id
                                  LEFT JOIN tbl_departments on tbl_departments.department_id = tbl_courses.department_id
                                  LEFT JOIN tbl_year_levels ON tbl_year_levels.year_id = tbl_subjects_new.year_id
                                  LEFT JOIN tbl_semesters ON tbl_semesters.sem_id = tbl_subjects_new.sem_id
                                  LEFT JOIN tbl_faculties_staff ON tbl_faculties_staff.faculty_id = tbl_schedules.faculty_id 
                                  WHERE tbl_departments.department_name = '$_SESSION[department]' 
                                  AND tbl_courses.course_id = '17' 
                                  AND tbl_schedules.acad_year = '$_SESSION[active_acad]' 
                                  AND tbl_schedules.semester = '$_SESSION[active_sem]'");
                                
                                while ($row1= mysqli_fetch_array($query1)){
                                    $id=$row1['class_id'];
                                    ?><tr>
                                    <td><?php echo $row1['section']; ?></td>
                                    <td><?php echo $row1['subj_code']; ?></td>
                                    <td><?php echo $row1['subj_desc']; ?></td>
                                    <td><?php echo $row1['unit_total']; ?></td>
                                    <td><?php echo $row1['prereq']; ?></td>
                                    <td><?php echo $row1['fullname']; ?></td>
                                    <td><?php echo $row1['day']; ?></td>
                                    <td><?php echo $row1['time']; ?></td>
                                    <td><?php echo $row1['room']; ?></td>
                                    <td><?php echo $row1['special_tut']; ?></td>
                                    <td>
                                      <a class="btn btn-primary" for="ViewAdmin" href="edit_class.php<?php echo '?class_id='.$id; ?>">
                                    <i class="fa fa-edit"></i> Update</a>
                                      <a class="btn btn-danger" for="DeleteAdmin" href="#delete<?php echo $id;?>" data-toggle="modal" data-target="#delete<?php echo $id;?>">
                                        <i class="glyphicon glyphicon-trash icon-white"></i> Delete
                                    </a>

                                    

                                    <div class="modal fade" id="delete<?php  echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">DELETE SUBJECT</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <div class="modal-body">
                                            <div class="alert alert-danger">
                                                    Are you sure you want to delete <?php echo $row1['subj_code'].' - '.$row1['subj_desc'] ?>?
                                                </div>
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                                            <a href="delete_class.php<?php echo '?class_id='.$id; ?>" class="btn btn-danger">Yes</a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                                   </td>
                                </tr>
                                <?php } ?>
                      </tbody>
                      </table>
                    </div>
                    <div class="tab-pane" id="beed">
                      <table class="table table-hover" id="example3">
                      <thead class="text-primary">
                      <th>SECTION</th>
                        <th>SUBJECT CODE</th>
                        <th>SUBJECT DESCRIPTION</th>
                        <th>UNIT(S)</th>
                        <th>PREREQUISITE</th>
                        <th>INSTRUCTOR</th>
                        <th>DAY</th>
                        <th>TIME</th>
                        <th>ROOM</th>
                        <th>SPECIAL TUTORIAL</th>
                        <th>OPTION</th>
                      </thead>
                      <tbody>
                        <?php 
                                $query2 = mysqli_query($db, "SELECT *,CONCAT(tbl_faculties_staff.faculty_lastname, ', ', tbl_faculties_staff.faculty_firstname, ' ', tbl_faculties_staff.faculty_middlename)  AS fullname,tbl_courses.course_id, tbl_subjects_new.subj_id, tbl_departments.department_id, tbl_year_levels.year_id, tbl_semesters.sem_id, tbl_faculties_staff.faculty_id 
                                  FROM tbl_schedules
                                  LEFT JOIN tbl_subjects_new ON tbl_subjects_new.subj_id = tbl_schedules.subj_id 
                                  LEFT JOIN tbl_courses ON tbl_courses.course_id = tbl_subjects_new.course_id
                                  LEFT JOIN tbl_departments on tbl_departments.department_id = tbl_courses.department_id
                                  LEFT JOIN tbl_year_levels ON tbl_year_levels.year_id = tbl_subjects_new.year_id
                                  LEFT JOIN tbl_semesters ON tbl_semesters.sem_id = tbl_subjects_new.sem_id
                                  LEFT JOIN tbl_faculties_staff ON tbl_faculties_staff.faculty_id = tbl_schedules.faculty_id 
                                  WHERE tbl_departments.department_name = '$_SESSION[department]' and tbl_courses.course_id = '19' AND tbl_schedules.acad_year = '$_SESSION[active_acad]' AND tbl_schedules.semester = '$_SESSION[active_sem]'");
                                
                                while ($row2= mysqli_fetch_array($query2)){
                                    $id=$row2['class_id'];
                                    ?><tr>
                                    <td><?php echo $row2['section']; ?></td>
                                    <td><?php echo $row2['subj_code']; ?></td>
                                    <td><?php echo $row2['subj_desc']; ?></td>
                                    <td><?php echo $row2['unit_total']; ?></td>
                                    <td><?php echo $row2['prereq']; ?></td>
                                    <td><?php echo $row2['fullname']; ?></td>
                                    <td><?php echo $row2['day']; ?></td>
                                    <td><?php echo $row2['time']; ?></td>
                                    <td><?php echo $row2['room']; ?></td>
                                    <td><?php echo $row2['special_tut']; ?></td>
                                    <td>
                                      <a class="btn btn-primary" for="ViewAdmin" href="edit_class.php<?php echo '?class_id='.$id; ?>">
                                    <i class="fa fa-edit"></i> Update</a>
                                      <a class="btn btn-danger" for="DeleteAdmin" href="#delete<?php echo $id;?>" data-toggle="modal" data-target="#delete<?php echo $id;?>">
                                        <i class="glyphicon glyphicon-trash icon-white"></i> Delete
                                    </a>

                                    

                                    <div class="modal fade" id="delete<?php  echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">DELETE SUBJECT</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <div class="modal-body">
                                            <div class="alert alert-danger">
                                                    Are you sure you want to delete <?php echo $row2['subj_code'].' - '.$row2['subj_desc'] ?>?
                                                </div>
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                                            <a href="delete_class.php<?php echo '?class_id='.$id; ?>" class="btn btn-danger">Yes</a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                                   </td>
                                </tr>
                                <?php } ?>
                      </tbody>
                      </table>
                    </div>
                    <div class="tab-pane" id="pe">
                      <table class="table table-hover" id="example4">
                      <thead class="text-primary">
                      <th>SECTION</th>
                        <th>SUBJECT CODE</th>
                        <th>SUBJECT DESCRIPTION</th>
                        <th>UNIT(S)</th>
                        <th>PREREQUISITE</th>
                        <th>INSTRUCTOR</th>
                        <th>DAY</th>
                        <th>TIME</th>
                        <th>ROOM</th>
                        <th>SPECIAL TUTORIAL</th>
                        <th>OPTION</th>
                      </thead>
                      <tbody>
                        <?php 
                                $query3 = mysqli_query($db, "SELECT *,CONCAT(tbl_faculties_staff.faculty_lastname, ', ', tbl_faculties_staff.faculty_firstname, ' ', tbl_faculties_staff.faculty_middlename)  AS fullname, tbl_courses.course_id, tbl_subjects_new.subj_id, tbl_departments.department_id, tbl_year_levels.year_id, tbl_faculties_staff.faculty_id 
                                  FROM tbl_schedules
                                  LEFT JOIN tbl_subjects_new ON tbl_subjects_new.subj_id = tbl_schedules.subj_id 
                                  LEFT JOIN tbl_courses ON tbl_courses.course_id = tbl_subjects_new.course_id
                                  LEFT JOIN tbl_departments ON tbl_departments.department_id = tbl_courses.department_id
                                  LEFT JOIN tbl_year_levels ON tbl_year_levels.year_id = tbl_subjects_new.year_id
                                  LEFT JOIN tbl_faculties_staff ON tbl_faculties_staff.faculty_id = tbl_schedules.faculty_id 
                                  WHERE tbl_departments.department_name = '$_SESSION[department]' AND tbl_courses.course_id = '18' AND tbl_schedules.acad_year = '$_SESSION[active_acad]' AND tbl_schedules.semester = '$_SESSION[active_sem]'");
                                
                                while ($row3= mysqli_fetch_array($query3)){
                                    $id=$row3['class_id'];
                                    ?><tr>
                                    <td><?php echo $row3['section']; ?></td>
                                    <td><?php echo $row3['class_code']; ?></td>
                                    <td><?php echo $row3['subj_desc']; ?></td>
                                    <td><?php echo $row3['unit_total']; ?></td>
                                    <td><?php echo $row3['prereq']; ?></td>
                                    <td><?php echo $row3['fullname']; ?></td>
                                    <td><?php echo $row3['day']; ?></td>
                                    <td><?php echo $row3['time']; ?></td>
                                    <td><?php echo $row3['room']; ?></td>
                                    <td><?php echo $row3['special_tut']; ?></td>
                                    <td>
                                      <a class="btn btn-primary" for="ViewAdmin" href="edit_class.php<?php echo '?class_id='.$id; ?>">
                                    <i class="fa fa-edit"></i> Update</a>
                                      <a class="btn btn-danger" for="DeleteAdmin" href="#delete<?php echo $id;?>" data-toggle="modal" data-target="#delete<?php echo $id;?>">
                                        <i class="glyphicon glyphicon-trash icon-white"></i> Delete
                                    </a>

                                    

                                    <div class="modal fade" id="delete<?php  echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">DELETE SUBJECT</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <div class="modal-body">
                                            <div class="alert alert-danger">
                                                    Are you sure you want to delete <?php echo $row3['subj_code'].' - '.$row3['subj_desc'] ?>?
                                                </div>
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                                            <a href="delete_class.php<?php echo '?class_id='.$id; ?>" class="btn btn-danger">Yes</a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                                   </td>
                                </tr>
                                <?php } ?>
                      </tbody>
                      </table>
                    </div>
                    <div class="tab-pane" id="engl">
                      <table class="table table-hover" id="example11">
                      <thead class="text-primary">
                      <th>SECTION</th>
                        <th>SUBJECT CODE</th>
                        <th>SUBJECT DESCRIPTION</th>
                        <th>UNIT(S)</th>
                        <th>PREREQUISITE</th>
                        <th>INSTRUCTOR</th>
                        <th>DAY</th>
                        <th>TIME</th>
                        <th>ROOM</th>
                        <th>SPECIAL TUTORIAL</th>
                        <th>OPTION</th>
                      </thead>
                      <tbody>
                        <?php 
                                $query3 = mysqli_query($db, "SELECT *,CONCAT(tbl_faculties_staff.faculty_lastname, ', ', tbl_faculties_staff.faculty_firstname, ' ', tbl_faculties_staff.faculty_middlename)  AS fullname, tbl_courses.course_id, tbl_subjects_new.subj_id, tbl_departments.department_id, tbl_year_levels.year_id, tbl_faculties_staff.faculty_id 
                                  FROM tbl_schedules
                                  LEFT JOIN tbl_subjects_new ON tbl_subjects_new.subj_id = tbl_schedules.subj_id 
                                  LEFT JOIN tbl_courses ON tbl_courses.course_id = tbl_subjects_new.course_id
                                  LEFT JOIN tbl_departments ON tbl_departments.department_id = tbl_courses.department_id
                                  LEFT JOIN tbl_year_levels ON tbl_year_levels.year_id = tbl_subjects_new.year_id
                                  LEFT JOIN tbl_faculties_staff ON tbl_faculties_staff.faculty_id = tbl_schedules.faculty_id 
                                  WHERE tbl_departments.department_name = '$_SESSION[department]' AND tbl_courses.course_id = '10' AND tbl_schedules.acad_year = '$_SESSION[active_acad]' AND tbl_schedules.semester = '$_SESSION[active_sem]'");
                                
                                while ($row3= mysqli_fetch_array($query3)){
                                    $id=$row3['class_id'];
                                    ?><tr>
                                    <td><?php echo $row3['section']; ?></td>
                                    <td><?php echo $row3['class_code']; ?></td>
                                    <td><?php echo $row3['subj_desc']; ?></td>
                                    <td><?php echo $row3['unit_total']; ?></td>
                                    <td><?php echo $row3['prereq']; ?></td>
                                    <td><?php echo $row3['fullname']; ?></td>
                                    <td><?php echo $row3['day']; ?></td>
                                    <td><?php echo $row3['time']; ?></td>
                                    <td><?php echo $row3['room']; ?></td>
                                    <td><?php echo $row3['special_tut']; ?></td>
                                    <td>
                                      <a class="btn btn-primary" for="ViewAdmin" href="edit_class.php<?php echo '?class_id='.$id; ?>">
                                    <i class="fa fa-edit"></i> Update</a>
                                      <a class="btn btn-danger" for="DeleteAdmin" href="#delete<?php echo $id;?>" data-toggle="modal" data-target="#delete<?php echo $id;?>">
                                        <i class="glyphicon glyphicon-trash icon-white"></i> Delete
                                    </a>

                                    

                                    <div class="modal fade" id="delete<?php  echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">DELETE SUBJECT</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <div class="modal-body">
                                            <div class="alert alert-danger">
                                                    Are you sure you want to delete <?php echo $row3['subj_code'].' - '.$row3['subj_desc'] ?>?
                                                </div>
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                                            <a href="delete_class.php<?php echo '?class_id='.$id; ?>" class="btn btn-danger">Yes</a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                                   </td>
                                </tr>
                                <?php } ?>
                      </tbody>
                      </table>
                    </div>
                    <div class="tab-pane" id="fili">
                      <table class="table table-hover" id="example12">
                      <thead class="text-primary">
                      <th>SECTION</th>
                        <th>SUBJECT CODE</th>
                        <th>SUBJECT DESCRIPTION</th>
                        <th>UNIT(S)</th>
                        <th>PREREQUISITE</th>
                        <th>INSTRUCTOR</th>
                        <th>DAY</th>
                        <th>TIME</th>
                        <th>ROOM</th>
                        <th>SPECIAL TUTORIAL</th>
                        <th>OPTION</th>
                      </thead>
                      <tbody>
                        <?php 
                                $query3 = mysqli_query($db, "SELECT *,CONCAT(tbl_faculties_staff.faculty_lastname, ', ', tbl_faculties_staff.faculty_firstname, ' ', tbl_faculties_staff.faculty_middlename)  AS fullname, tbl_courses.course_id, tbl_subjects_new.subj_id, tbl_departments.department_id, tbl_year_levels.year_id, tbl_faculties_staff.faculty_id 
                                  FROM tbl_schedules
                                  LEFT JOIN tbl_subjects_new ON tbl_subjects_new.subj_id = tbl_schedules.subj_id 
                                  LEFT JOIN tbl_courses ON tbl_courses.course_id = tbl_subjects_new.course_id
                                  LEFT JOIN tbl_departments ON tbl_departments.department_id = tbl_courses.department_id
                                  LEFT JOIN tbl_year_levels ON tbl_year_levels.year_id = tbl_subjects_new.year_id
                                  LEFT JOIN tbl_faculties_staff ON tbl_faculties_staff.faculty_id = tbl_schedules.faculty_id 
                                  WHERE tbl_departments.department_name = '$_SESSION[department]' AND tbl_courses.course_id = '11' AND tbl_schedules.acad_year = '$_SESSION[active_acad]' AND tbl_schedules.semester = '$_SESSION[active_sem]'");
                                
                                while ($row3= mysqli_fetch_array($query3)){
                                    $id=$row3['class_id'];
                                    ?><tr>
                                    <td><?php echo $row3['section']; ?></td>
                                    <td><?php echo $row3['class_code']; ?></td>
                                    <td><?php echo $row3['subj_desc']; ?></td>
                                    <td><?php echo $row3['unit_total']; ?></td>
                                    <td><?php echo $row3['prereq']; ?></td>
                                    <td><?php echo $row3['fullname']; ?></td>
                                    <td><?php echo $row3['day']; ?></td>
                                    <td><?php echo $row3['time']; ?></td>
                                    <td><?php echo $row3['room']; ?></td>
                                    <td><?php echo $row3['special_tut']; ?></td>
                                    <td>
                                      <a class="btn btn-primary" for="ViewAdmin" href="edit_class.php<?php echo '?class_id='.$id; ?>">
                                    <i class="fa fa-edit"></i> Update</a>
                                      <a class="btn btn-danger" for="DeleteAdmin" href="#delete<?php echo $id;?>" data-toggle="modal" data-target="#delete<?php echo $id;?>">
                                        <i class="glyphicon glyphicon-trash icon-white"></i> Delete
                                    </a>

                                    

                                    <div class="modal fade" id="delete<?php  echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">DELETE SUBJECT</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <div class="modal-body">
                                            <div class="alert alert-danger">
                                                    Are you sure you want to delete <?php echo $row3['subj_code'].' - '.$row3['subj_desc'] ?>?
                                                </div>
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                                            <a href="delete_class.php<?php echo '?class_id='.$id; ?>" class="btn btn-danger">Yes</a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                                   </td>
                                </tr>
                                <?php } ?>
                      </tbody>
                      </table>
                    </div>
                    <div class="tab-pane" id="math">
                      <table class="table table-hover" id="example13">
                      <thead class="text-primary">
                      <th>SECTION</th>
                        <th>SUBJECT CODE</th>
                        <th>SUBJECT DESCRIPTION</th>
                        <th>UNIT(S)</th>
                        <th>PREREQUISITE</th>
                        <th>INSTRUCTOR</th>
                        <th>DAY</th>
                        <th>TIME</th>
                        <th>ROOM</th>
                        <th>SPECIAL TUTORIAL</th>
                        <th>OPTION</th>
                      </thead>
                      <tbody>
                        <?php 
                                $query3 = mysqli_query($db, "SELECT *,CONCAT(tbl_faculties_staff.faculty_lastname, ', ', tbl_faculties_staff.faculty_firstname, ' ', tbl_faculties_staff.faculty_middlename)  AS fullname, tbl_courses.course_id, tbl_subjects_new.subj_id, tbl_departments.department_id, tbl_year_levels.year_id, tbl_faculties_staff.faculty_id FROM tbl_schedules
                                  LEFT JOIN tbl_subjects_new ON tbl_subjects_new.subj_id = tbl_schedules.subj_id 
                                  LEFT JOIN tbl_courses ON tbl_courses.course_id = tbl_subjects_new.course_id
                                  LEFT JOIN tbl_departments ON tbl_departments.department_id = tbl_courses.department_id
                                  LEFT JOIN tbl_year_levels ON tbl_year_levels.year_id = tbl_subjects_new.year_id
                                  LEFT JOIN tbl_faculties_staff ON tbl_faculties_staff.faculty_id = tbl_schedules.faculty_id 
                                  WHERE tbl_departments.department_name = '$_SESSION[department]' AND tbl_courses.course_id = '12' AND tbl_schedules.acad_year = '$_SESSION[active_acad]' AND tbl_schedules.semester = '$_SESSION[active_sem]'");
                                
                                while ($row3= mysqli_fetch_array($query3)){
                                    $id=$row3['class_id'];
                                    ?><tr>
                                    <td><?php echo $row3['section']; ?></td>
                                    <td><?php echo $row3['class_code']; ?></td>
                                    <td><?php echo $row3['subj_desc']; ?></td>
                                    <td><?php echo $row3['unit_total']; ?></td>
                                    <td><?php echo $row3['prereq']; ?></td>
                                    <td><?php echo $row3['fullname']; ?></td>
                                    <td><?php echo $row3['day']; ?></td>
                                    <td><?php echo $row3['time']; ?></td>
                                    <td><?php echo $row3['room']; ?></td>
                                    <td><?php echo $row3['special_tut']; ?></td>
                                    <td>
                                      <a class="btn btn-primary" for="ViewAdmin" href="edit_class.php<?php echo '?class_id='.$id; ?>">
                                    <i class="fa fa-edit"></i> Update</a>
                                      <a class="btn btn-danger" for="DeleteAdmin" href="#delete<?php echo $id;?>" data-toggle="modal" data-target="#delete<?php echo $id;?>">
                                        <i class="glyphicon glyphicon-trash icon-white"></i> Delete
                                    </a>

                                    

                                    <div class="modal fade" id="delete<?php  echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">DELETE SUBJECT</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <div class="modal-body">
                                            <div class="alert alert-danger">
                                                    Are you sure you want to delete <?php echo $row3['subj_code'].' - '.$row3['subj_desc'] ?>?
                                                </div>
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                                            <a href="delete_class.php<?php echo '?class_id='.$id; ?>" class="btn btn-danger">Yes</a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                                   </td>
                                </tr>
                                <?php } ?>
                      </tbody>
                      </table>
                    </div>
                    <div class="tab-pane" id="tcp">
                      <table class="table table-hover" id="example14">
                      <thead class="text-primary">
                      <th>SECTION</th>
                        <th>SUBJECT CODE</th>
                        <th>SUBJECT DESCRIPTION</th>
                        <th>UNIT(S)</th>
                        <th>PREREQUISITE</th>
                        <th>INSTRUCTOR</th>
                        <th>DAY</th>
                        <th>TIME</th>
                        <th>ROOM</th>
                        <th>SPECIAL TUTORIAL</th>
                        <th>OPTION</th>
                      </thead>
                      <tbody>
                        <?php 
                                $query3 = mysqli_query($db, "SELECT *,CONCAT(tbl_faculties_staff.faculty_lastname, ', ', tbl_faculties_staff.faculty_firstname, ' ', tbl_faculties_staff.faculty_middlename)  AS fullname, tbl_courses.course_id, tbl_subjects_new.subj_id, tbl_departments.department_id, tbl_year_levels.year_id, tbl_faculties_staff.faculty_id FROM tbl_schedules
                                  LEFT JOIN tbl_subjects_new ON tbl_subjects_new.subj_id = tbl_schedules.subj_id 
                                  LEFT JOIN tbl_courses ON tbl_courses.course_id = tbl_subjects_new.course_id
                                  LEFT JOIN tbl_departments ON tbl_departments.department_id = tbl_courses.department_id
                                  LEFT JOIN tbl_year_levels ON tbl_year_levels.year_id = tbl_subjects_new.year_id
                                  LEFT JOIN tbl_faculties_staff ON tbl_faculties_staff.faculty_id = tbl_schedules.faculty_id 
                                  WHERE tbl_departments.department_name = '$_SESSION[department]' AND tbl_courses.course_id = '24' AND tbl_schedules.acad_year = '$_SESSION[active_acad]' AND tbl_schedules.semester = '$_SESSION[active_sem]'");
                                
                                while ($row3= mysqli_fetch_array($query3)){
                                    $id=$row3['class_id'];
                                    ?><tr>
                                    <td><?php echo $row3['section']; ?></td>
                                    <td><?php echo $row3['class_code']; ?></td>
                                    <td><?php echo $row3['subj_desc']; ?></td>
                                    <td><?php echo $row3['unit_total']; ?></td>
                                    <td><?php echo $row3['prereq']; ?></td>
                                    <td><?php echo $row3['fullname']; ?></td>
                                    <td><?php echo $row3['day']; ?></td>
                                    <td><?php echo $row3['time']; ?></td>
                                    <td><?php echo $row3['room']; ?></td>
                                    <td><?php echo $row3['special_tut']; ?></td>
                                    <td>
                                      <a class="btn btn-primary" for="ViewAdmin" href="edit_class.php<?php echo '?class_id='.$id; ?>">
                                    <i class="fa fa-edit"></i> Update</a>
                                      <a class="btn btn-danger" for="DeleteAdmin" href="#delete<?php echo $id;?>" data-toggle="modal" data-target="#delete<?php echo $id;?>">
                                        <i class="glyphicon glyphicon-trash icon-white"></i> Delete
                                    </a>

                                    

                                    <div class="modal fade" id="delete<?php  echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">DELETE SUBJECT</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <div class="modal-body">
                                            <div class="alert alert-danger">
                                                    Are you sure you want to delete <?php echo $row3['subj_code'].' - '.$row3['subj_desc'] ?>?
                                                </div>
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                                            <a href="delete_class.php<?php echo '?class_id='.$id; ?>" class="btn btn-danger">Yes</a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                                   </td>
                                </tr>
                                <?php } ?>
                      </tbody>
                      </table>
                    </div>
<?php }elseif ($_SESSION['department'] == 'CS Department') { ?>
                    <div class="tab-pane active" id="bscs">
                      <table class="table table-hover" id="example5">
                      <thead class="text-primary">
                      <th>SECTION</th>
                        <th>SUBJECT CODE</th>
                        <th>SUBJECT DESCRIPTION</th>
                        <th>UNIT(S)</th>
                        <th>PREREQUISITE</th>
                        <th>INSTRUCTOR</th>
                        <th>DAY</th>
                        <th>TIME</th>
                        <th>ROOM</th>
                        <th>SPECIAL TUTORIAL</th>
                        <th>OPTION</th>
                      </thead>
                      <tbody>
                        <?php 
                                $query4 = mysqli_query($db, "SELECT *,CONCAT(tbl_faculties_staff.faculty_lastname, ', ', tbl_faculties_staff.faculty_firstname, ' ', tbl_faculties_staff.faculty_middlename)  AS fullname,tbl_courses.course_id, tbl_subjects_new.subj_id, tbl_departments.department_id, tbl_year_levels.year_id, tbl_semesters.sem_id, tbl_faculties_staff.faculty_id 
                                  FROM tbl_schedules
                                  LEFT JOIN tbl_subjects_new ON tbl_subjects_new.subj_id = tbl_schedules.subj_id 
                                  LEFT JOIN tbl_courses ON tbl_courses.course_id = tbl_subjects_new.course_id
                                  LEFT JOIN tbl_departments ON tbl_departments.department_id = tbl_courses.department_id
                                  LEFT JOIN tbl_year_levels ON tbl_year_levels.year_id = tbl_subjects_new.year_id
                                  LEFT JOIN tbl_semesters ON tbl_semesters.sem_id = tbl_subjects_new.sem_id
                                  LEFT JOIN tbl_faculties_staff ON tbl_faculties_staff.faculty_id = tbl_schedules.faculty_id 
                                  WHERE tbl_departments.department_name = '$_SESSION[department]' AND tbl_courses.course_id = '1' AND tbl_schedules.acad_year = '$_SESSION[active_acad]' AND tbl_schedules.semester = '$_SESSION[active_sem]'")or die(mysqli_error($db));
                                
                                while ($row4= mysqli_fetch_array($query4)){
                                    $id=$row4['class_id'];
                                    ?><tr>
                                    <td><?php echo $row4['section']; ?></td>
                                    <td><?php echo $row4['subj_code']; ?></td>
                                    <td><?php echo $row4['subj_desc']; ?></td>
                                    <td><?php echo $row4['unit_total']; ?></td>
                                    <td><?php echo $row4['prereq']; ?></td>
                                    <td><?php echo $row4['fullname']; ?></td>
                                    <td><?php echo $row4['day']; ?></td>
                                    <td><?php echo $row4['time']; ?></td>
                                    <td><?php echo $row4['room']; ?></td>
                                    <td><?php echo $row4['special_tut']; ?></td>
                                    <td>
                                      <a class="btn btn-primary" for="ViewAdmin" href="edit_class.php<?php echo '?class_id='.$id; ?>">
                                    <i class="fa fa-edit"></i> Update</a>
                                      <a class="btn btn-danger" for="DeleteAdmin" href="#delete<?php echo $id;?>" data-toggle="modal" data-target="#delete<?php echo $id;?>">
                                        <i class="glyphicon glyphicon-trash icon-white"></i> Delete
                                    </a>

                                    

                                    <div class="modal fade" id="delete<?php  echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">DELETE SUBJECT</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <div class="modal-body">
                                            <div class="alert alert-danger">
                                                    Are you sure you want to delete <?php echo $row4['subj_code'].' - '.$row4['subj_desc'] ?>?
                                                </div>
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                                            <a href="delete_class.php<?php echo '?class_id='.$id; ?>" class="btn btn-danger">Yes</a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                                   </td>
                                </tr>
                                <?php } ?>
                      </tbody>
                      </table>
                    </div>
<?php }elseif ($_SESSION['department'] == 'HRM Department') { ?>
                    <div class="tab-pane active" id="hrm">
                      <table class="table table-hover" id="example6">
                      <thead class="text-primary">
                      <th>SECTION</th>
                        <th>SUBJECT CODE</th>
                        <th>SUBJECT DESCRIPTION</th>
                        <th>UNIT(S)</th>
                        <th>PREREQUISITE</th>
                        <th>INSTRUCTOR</th>
                        <th>DAY</th>
                        <th>TIME</th>
                        <th>ROOM</th>
                        <th>SPECIAL TUTORIAL</th>
                        <th>OPTION</th>
                      </thead>
                      <tbody>
                        <?php 
                                $query5 = mysqli_query($db, "SELECT *,CONCAT(tbl_faculties_staff.faculty_lastname, ', ', tbl_faculties_staff.faculty_firstname, ' ', tbl_faculties_staff.faculty_middlename)  AS fullname,tbl_courses.course_id, tbl_subjects_new.subj_id, tbl_departments.department_id, tbl_year_levels.year_id, tbl_semesters.sem_id, tbl_faculties_staff.faculty_id 
                                  FROM tbl_schedules
                                  LEFT JOIN tbl_subjects_new ON tbl_subjects_new.subj_id = tbl_schedules.subj_id 
                                  LEFT JOIN tbl_courses ON tbl_courses.course_id = tbl_subjects_new.course_id
                                  LEFT JOIN tbl_departments ON tbl_departments.department_id = tbl_courses.department_id
                                  LEFT JOIN tbl_year_levels ON tbl_year_levels.year_id = tbl_subjects_new.year_id
                                  LEFT JOIN tbl_semesters ON tbl_semesters.sem_id = tbl_subjects_new.sem_id
                                  LEFT JOIN tbl_faculties_staff ON tbl_faculties_staff.faculty_id = tbl_schedules.faculty_id 
                                  WHERE tbl_departments.department_name = '$_SESSION[department]' AND tbl_courses.course_id = '15' AND tbl_schedules.acad_year = '$_SESSION[active_acad]' AND tbl_schedules.semester = '$_SESSION[active_sem]'");
                                
                                while ($row5= mysqli_fetch_array($query5)){
                                    $id=$row5['class_id'];
                                    ?><tr>
                                    <td><?php echo $row5['section']; ?></td>
                                    <td><?php echo $row5['subj_code']; ?></td>
                                    <td><?php echo $row5['subj_desc']; ?></td>
                                    <td><?php echo $row5['unit_total']; ?></td>
                                    <td><?php echo $row5['prereq']; ?></td>
                                    <td><?php echo $row5['fullname']; ?></td>
                                    <td><?php echo $row5['day']; ?></td>
                                    <td><?php echo $row5['time']; ?></td>
                                    <td><?php echo $row5['room']; ?></td>
                                    <td><?php echo $row5['special_tut']; ?></td>
                                    <td>
                                      <a class="btn btn-primary" for="ViewAdmin" href="edit_class.php<?php echo '?class_id='.$id; ?>">
                                    <i class="fa fa-edit"></i> Update</a>
                                      <a class="btn btn-danger" for="DeleteAdmin" href="#delete<?php echo $id;?>" data-toggle="modal" data-target="#delete<?php echo $id;?>">
                                        <i class="glyphicon glyphicon-trash icon-white"></i> Delete
                                    </a>

                                    

                                    <div class="modal fade" id="delete<?php  echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">DELETE SUBJECT</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <div class="modal-body">
                                            <div class="alert alert-danger">
                                                    Are you sure you want to delete <?php echo $row5['subj_code'].' - '.$row5['subj_desc'] ?>?
                                                </div>
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                                            <a href="delete_class.php<?php echo '?class_id='.$id; ?>" class="btn btn-danger">Yes</a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                                   </td>
                                </tr>
                                <?php } ?>
                      </tbody>
                      </table>
                    </div>
<?php }elseif ($_SESSION['department'] == 'BA Department') { ?>
                    <div class="tab-pane active" id="bamrkt">
                      <table class="table table-hover" id="example7">
                      <thead class="text-primary">
                      <th>SECTION</th>
                        <th>SUBJECT CODE</th>
                        <th>SUBJECT DESCRIPTION</th>
                        <th>UNIT(S)</th>
                        <th>PREREQUISITE</th>
                        <th>INSTRUCTOR</th>
                        <th>DAY</th>
                        <th>TIME</th>
                        <th>ROOM</th>
                        <th>SPECIAL TUTORIAL</th>
                        <th>OPTION</th>
                      </thead>
                      <tbody>
                        <?php 
                                $query6 = mysqli_query($db, "SELECT *,CONCAT(tbl_faculties_staff.faculty_lastname, ', ', tbl_faculties_staff.faculty_firstname, ' ', tbl_faculties_staff.faculty_middlename)  AS fullname,tbl_courses.course_id, tbl_subjects_new.subj_id, tbl_departments.department_id, tbl_year_levels.year_id, tbl_semesters.sem_id, tbl_faculties_staff.faculty_id 
                                  FROM tbl_schedules
                                  LEFT JOIN tbl_subjects_new ON tbl_subjects_new.subj_id = tbl_schedules.subj_id 
                                  LEFT JOIN tbl_courses ON tbl_courses.course_id = tbl_subjects_new.course_id
                                  LEFT JOIN tbl_departments ON tbl_departments.department_id = tbl_courses.department_id
                                  LEFT JOIN tbl_year_levels ON tbl_year_levels.year_id = tbl_subjects_new.year_id
                                  LEFT JOIN tbl_semesters ON tbl_semesters.sem_id = tbl_subjects_new.sem_id
                                  LEFT JOIN tbl_faculties_staff ON tbl_faculties_staff.faculty_id = tbl_schedules.faculty_id 
                                  WHERE tbl_departments.department_name = '$_SESSION[department]' AND tbl_courses.course_id = '3' AND tbl_schedules.acad_year = '$_SESSION[active_acad]' AND tbl_schedules.semester = '$_SESSION[active_sem]'");
                                
                                while ($row6= mysqli_fetch_array($query6)){
                                    $id=$row6['class_id'];
                                    ?><tr>
                                    <td><?php echo $row6['section']; ?></td>
                                    <td><?php echo $row6['subj_code']; ?></td>
                                    <td><?php echo $row6['subj_desc']; ?></td>
                                    <td><?php echo $row6['unit_total']; ?></td>
                                    <td><?php echo $row6['prereq']; ?></td>
                                    <td><?php echo $row6['fullname']; ?></td>
                                    <td><?php echo $row6['day']; ?></td>
                                    <td><?php echo $row6['time']; ?></td>
                                    <td><?php echo $row6['room']; ?></td>
                                    <td><?php echo $row6['special_tut']; ?></td>
                                    
                                    <td>
                                      <a class="btn btn-primary" for="ViewAdmin" href="edit_class.php<?php echo '?class_id='.$id; ?>">
                                    <i class="fa fa-edit"></i> Update</a>
                                      <a class="btn btn-danger" for="DeleteAdmin" href="#delete<?php echo $id;?>" data-toggle="modal" data-target="#delete<?php echo $id;?>">
                                        <i class="glyphicon glyphicon-trash icon-white"></i> Delete
                                    </a>

                                    

                                    <div class="modal fade" id="delete<?php  echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">DELETE SUBJECT</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <div class="modal-body">
                                            <div class="alert alert-danger">
                                                    Are you sure you want to delete <?php echo $row6['subj_code'].' - '.$row6['subj_desc'] ?>?
                                                </div>
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                                            <a href="delete_class.php<?php echo '?class_id='.$id; ?>" class="btn btn-danger">Yes</a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                                   </td>
                                </tr>
                                <?php } ?> <!-- end while -->
                      </tbody>
                      </table>
                    </div>
                    <div class="tab-pane" id="bamngt">
                      <table class="table table-hover" id="example8">
                      <thead class="text-primary">
                      <th>SECTION</th>
                        <th>SUBJECT CODE</th>
                        <th>SUBJECT DESCRIPTION</th>
                        <th>UNIT(S)</th>
                        <th>PREREQUISITE</th>
                        <th>INSTRUCTOR</th>
                        <th>DAY</th>
                        <th>TIME</th>
                        <th>ROOM</th>
                        <th>SPECIAL TUTORIAL</th>
                        <th>OPTION</th>
                      </thead>
                      <tbody>
                        <?php 
                                $query7 = mysqli_query($db, "SELECT *,CONCAT(tbl_faculties_staff.faculty_lastname, ', ', tbl_faculties_staff.faculty_firstname, ' ', tbl_faculties_staff.faculty_middlename)  AS fullname,tbl_courses.course_id, tbl_subjects_new.subj_id, tbl_departments.department_id, tbl_year_levels.year_id, tbl_semesters.sem_id, tbl_faculties_staff.faculty_id 
                                  FROM tbl_schedules
                                  LEFT JOIN tbl_subjects_new ON tbl_subjects_new.subj_id = tbl_schedules.subj_id 
                                  LEFT JOIN tbl_courses ON tbl_courses.course_id = tbl_subjects_new.course_id
                                  LEFT JOIN tbl_departments ON tbl_departments.department_id = tbl_courses.department_id
                                  LEFT JOIN tbl_year_levels ON tbl_year_levels.year_id = tbl_subjects_new.year_id
                                  LEFT JOIN tbl_semesters ON tbl_semesters.sem_id = tbl_subjects_new.sem_id
                                  LEFT JOIN tbl_faculties_staff ON tbl_faculties_staff.faculty_id = tbl_schedules.faculty_id 
                                  WHERE tbl_departments.department_name = '$_SESSION[department]' AND tbl_courses.course_id = '25' AND tbl_schedules.acad_year = '$_SESSION[active_acad]' AND tbl_schedules.semester = '$_SESSION[active_sem]'");
                                
                                while ($row7= mysqli_fetch_array($query7)){
                                    $id=$row7['class_id'];
                                    ?><tr>
                                    <td><?php echo $row7['section']; ?></td>
                                    <td><?php echo $row7['subj_code']; ?></td>
                                    <td><?php echo $row7['subj_desc']; ?></td>
                                    <td><?php echo $row7['unit_total']; ?></td>
                                    <td><?php echo $row7['prereq']; ?></td>
                                    <td><?php echo $row7['fullname']; ?></td>
                                    <td><?php echo $row7['day']; ?></td>
                                    <td><?php echo $row7['time']; ?></td>
                                    <td><?php echo $row7['room']; ?></td>
                                    <td><?php echo $row7['special_tut']; ?></td>
                                    <td>
                                      <a class="btn btn-primary" for="ViewAdmin" href="edit_class.php<?php echo '?class_id='.$id; ?>">
                                    <i class="fa fa-edit"></i> Update</a>
                                      <a class="btn btn-danger" for="DeleteAdmin" href="#delete<?php echo $id;?>" data-toggle="modal" data-target="#delete<?php echo $id;?>">
                                        <i class="glyphicon glyphicon-trash icon-white"></i> Delete
                                    </a>

                                    

                                    <div class="modal fade" id="delete<?php  echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">DELETE SUBJECT</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <div class="modal-body">
                                            <div class="alert alert-danger">
                                                    Are you sure you want to delete <?php echo $row7['subj_code'].' - '.$row7['subj_desc'] ?>?
                                                </div>
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                                            <a href="delete_class.php<?php echo '?class_id='.$id; ?>" class="btn btn-danger">Yes</a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                                   </td>
                                </tr>
                                <?php } ?> <!-- end while -->
                      </tbody>
                      </table>
                    </div>

<?php }elseif ($_SESSION['department'] == 'Bridging Department') { ?>
                    <div class="tab-pane active" id="bridging">
                      <table class="table table-hover" id="example9">
                      <thead class="text-primary">
                      <th>SECTION</th>
                        <th>SUBJECT CODE</th>
                        <th>SUBJECT DESCRIPTION</th>
                        <th>UNIT(S)</th>
                        <th>PREREQUISITE</th>
                        <th>INSTRUCTOR</th>
                        <th>DAY</th>
                        <th>TIME</th>
                        <th>ROOM</th>
                        <th>SPECIAL TUTORIAL</th>
                        <th>OPTION</th>
                      </thead>
                      <tbody>
                        <?php 
                                $query8 = mysqli_query($db, "SELECT *,CONCAT(tbl_faculties_staff.faculty_lastname, ', ', tbl_faculties_staff.faculty_firstname, ' ', tbl_faculties_staff.faculty_middlename)  AS fullname,tbl_courses.course_id, tbl_subjects_new.subj_id, tbl_departments.department_id, tbl_year_levels.year_id, tbl_semesters.sem_id, tbl_faculties_staff.faculty_id 
                                  FROM tbl_schedules
                                  LEFT JOIN tbl_subjects_new ON tbl_subjects_new.subj_id = tbl_schedules.subj_id 
                                  LEFT JOIN tbl_courses ON tbl_courses.course_id = tbl_subjects_new.course_id
                                  LEFT JOIN tbl_departments ON tbl_departments.department_id = tbl_courses.department_id
                                  LEFT JOIN tbl_year_levels ON tbl_year_levels.year_id = tbl_subjects_new.year_id
                                  LEFT JOIN tbl_semesters ON tbl_semesters.sem_id = tbl_subjects_new.sem_id
                                  LEFT JOIN tbl_faculties_staff ON tbl_faculties_staff.faculty_id = tbl_schedules.faculty_id 
                                  WHERE tbl_departments.department_name = '$_SESSION[department]' AND tbl_courses.course_id = '8' AND tbl_schedules.acad_year = '$_SESSION[active_acad]' AND tbl_schedules.semester = '$_SESSION[active_sem]'");
                                
                                while ($row8= mysqli_fetch_array($query8)){
                                    $id=$row8['class_id'];
                                    ?><tr>
                                    <td><?php echo $row8['section']; ?></td>
                                    <td><?php echo $row8['subj_code']; ?></td>
                                    <td><?php echo $row8['subj_desc']; ?></td>
                                    <td><?php echo $row8['unit_total']; ?></td>
                                    <td><?php echo $row8['prereq']; ?></td>
                                    <td><?php echo $row8['fullname']; ?></td>
                                    <td><?php echo $row8['day']; ?></td>
                                    <td><?php echo $row8['time']; ?></td>
                                    <td><?php echo $row8['room']; ?></td>
                                    <td><?php echo $row8['special_tut']; ?></td>
                                    <td>
                                      <a class="btn btn-primary" for="ViewAdmin" href="edit_class.php<?php echo '?class_id='.$id; ?>">
                                    <i class="fa fa-edit"></i> Update</a>
                                      <a class="btn btn-danger" for="DeleteAdmin" href="#delete<?php echo $id;?>" data-toggle="modal" data-target="#delete<?php echo $id;?>">
                                        <i class="glyphicon glyphicon-trash icon-white"></i> Delete
                                    </a>

                                    

                                    <div class="modal fade" id="delete<?php  echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">DELETE SUBJECT</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <div class="modal-body">
                                            <div class="alert alert-danger">
                                                    Are you sure you want to delete <?php echo $row8['subj_code'].' - '.$row8['subj_desc'] ?>?
                                                </div>
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                                            <a href="delete_class.php<?php echo '?class_id='.$id; ?>" class="btn btn-danger">Yes</a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                                   </td>
                                </tr>
                                <?php } ?>
                      </tbody>
                      </table>
                    </div>
<?php } ?>
  

                    
                    
                    
                    
                    
                    <div class="tab-pane" id="non">
                      <table class="table table-hover" id="example10">
                      <thead class="text-primary">
                      <th>SECTION</th>
                        <th>SUBJECT CODE</th>
                        <th>SUBJECT DESCRIPTION</th>
                        <th>UNIT(S)</th>
                        <th>PREREQUISITE</th>
                        <th>INSTRUCTOR</th>
                        <th>DAY</th>
                        <th>TIME</th>
                        <th>ROOM</th>
                        <th>SPECIAL TUTORIAL</th>
                        <th>OPTION</th>
                      </thead>
                      <tbody>
                        <?php 
                                $query9 = mysqli_query($db, "SELECT *,CONCAT(tbl_faculties_staff.faculty_lastname, ', ', tbl_faculties_staff.faculty_firstname, ' ', tbl_faculties_staff.faculty_middlename)  AS fullname,tbl_courses.course_id, tbl_subjects_new.subj_id, tbl_departments.department_id, tbl_year_levels.year_id, tbl_semesters.sem_id, tbl_faculties_staff.faculty_id FROM tbl_schedules
                                  LEFT JOIN tbl_subjects_new ON tbl_subjects_new.subj_id = tbl_schedules.subj_id 
                                  LEFT JOIN tbl_courses ON tbl_courses.course_id = tbl_subjects_new.course_id
                                  LEFT JOIN tbl_departments ON tbl_departments.department_id = tbl_courses.department_id
                                  LEFT JOIN tbl_year_levels ON tbl_year_levels.year_id = tbl_subjects_new.year_id
                                  LEFT JOIN tbl_semesters ON tbl_semesters.sem_id = tbl_subjects_new.sem_id
                                  LEFT JOIN tbl_faculties_staff ON tbl_faculties_staff.faculty_id = tbl_schedules.faculty_id 
                                  WHERE tbl_departments.department_name = '$_SESSION[department]' AND tbl_courses.course_id = '15' AND tbl_schedules.acad_year = '$_SESSION[active_acad]' AND tbl_schedules.semester = '$_SESSION[active_sem]'");
                                
                                while ($row9= mysqli_fetch_array($query9)){
                                    $id=$row9['class_id'];
                                    ?><tr>
                                    <td><?php echo $row9['section']; ?></td>
                                    <td><?php echo $row9['subj_code']; ?></td>
                                    <td><?php echo $row9['subj_desc']; ?></td>
                                    <td><?php echo $row9['unit_total']; ?></td>
                                    <td><?php echo $row9['prereq']; ?></td>
                                    <td><?php echo $row9['fullname']; ?></td>
                                    <td><?php echo $row9['day']; ?></td>
                                    <td><?php echo $row9['time']; ?></td>
                                    <td><?php echo $row9['room']; ?></td>
                                    <td><?php echo $row9['special_tut']; ?></td>
                                    <td>
                                      <a class="btn btn-primary" for="ViewAdmin" href="edit_class.php<?php echo '?class_id='.$id; ?>">
                                    <i class="fa fa-edit"></i> Update</a>
                                      <a class="btn btn-danger" for="DeleteAdmin" href="#delete<?php echo $id;?>" data-toggle="modal" data-target="#delete<?php echo $id;?>">
                                        <i class="glyphicon glyphicon-trash icon-white"></i> Delete
                                    </a>

                                    

                                    <div class="modal fade" id="delete<?php  echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">DELETE SUBJECT</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <div class="modal-body">
                                            <div class="alert alert-danger">
                                                    Are you sure you want to delete <?php echo $row9['subj_code'].' - '.$row9['subj_desc'] ?>?
                                                </div>
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                                            <a href="delete_class.php<?php echo '?class_id='.$id; ?>" class="btn btn-danger">Yes</a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                                   </td>
                                </tr>
                                <?php } ?>
                      </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Row -->
        </div><!-- End Container-fluid -->
      </div><!-- End Content -->
      <?php include '../../includes/footer.php'; ?>
    </div><!-- End Main-panel -->
  </div><!-- END WRAPPER -->
  
  <!--   Core JS Files   -->
<?php include '../../includes/script.php'; ?>
</body>

</html>
