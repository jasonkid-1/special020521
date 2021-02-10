<?php 
include '../../includes/session.php';
include '../../includes/db.php'; 

if(isset($_POST['submit'])){
    $stud_id = $_GET['stud_id'];
    $acad_year = $_SESSION['active_acad'];
    $semester = $_SESSION['active_sem'];
    $subj_id = $_POST['subj_id'];
    $class_id = $_POST['class_id'];
    $stud = mysqli_query($db,"SELECT * FROM tbl_schoolyears where stud_id = '$stud_id' and sem_id = '$_SESSION[active_sem]' and ay_id='$_SESSION[active_acad]'");
    $srow = mysqli_fetch_array($stud);

    // for ($i=0;$i<$subjId; $i++){

    //     $subj = mysqli_real_escape_string($db,$subj_id[$i]);
        
    //       $sql= mysqli_query($db,"INSERT INTO tbl_enrolled_subjects (class_id,stud_id, subj_id, faculty_id,acad_year,semester) VALUES ('".$class_id[$i]."', '$stud_id', '$subj','','$acad_year','$semester')")or die(mysqli_error($db));
    if ($srow['remark'] == 'Approved') {
        foreach ($_POST['check'] as $i) {
          $sql= mysqli_query($db,"INSERT INTO tbl_enrolled_subjects (class_id,stud_id, subj_id, acad_year,semester,prelim,midterm,finalterm,ofgrade,numgrade,absences,remarks,enroll_status) VALUES ('".$class_id[$i]."', '$stud_id', '".$subj_id[$i]."','$acad_year','$semester','','','','','','','','Approved')")or die(mysqli_error($db));
        }
    }elseif ($srow['remark'] == 'Checked') {
        foreach ($_POST['check'] as $i) {
          $sql= mysqli_query($db,"INSERT INTO tbl_enrolled_subjects (class_id,stud_id, subj_id, acad_year,semester,prelim,midterm,finalterm,ofgrade,numgrade,absences,remarks,enroll_status) VALUES ('".$class_id[$i]."', '$stud_id', '".$subj_id[$i]."','$acad_year','$semester','','','','','','','','Checked')")or die(mysqli_error($db));
        }
    }else{
        foreach ($_POST['check'] as $i) {
          $sql= mysqli_query($db,"INSERT INTO tbl_enrolled_subjects (class_id,stud_id, subj_id, acad_year,semester,prelim,midterm,finalterm,ofgrade,numgrade,absences,remarks,enroll_status) VALUES ('".$class_id[$i]."', '$stud_id', '".$subj_id[$i]."','$acad_year','$semester','','','','','','','','')")or die(mysqli_error($db));
        }
    }
    

  if($sql == true)
    {
      message("Successfully Added!","success");
    }
  else{
      message("Something went wrong!","error");
    }
    header('location:enroll_subj.php?stud_id='.$_GET['stud_id'].'');
  }

  if(isset($_POST['submit2'])){
    $stud_id = $_GET['stud_id'];
    $acad_year = $_SESSION['active_acad'];
    $semester = $_SESSION['active_sem'];
    $subj_id = $_POST['subj_id'];
    $class_id = $_POST['class_id'];
    $stud = mysqli_query($db,"SELECT * FROM tbl_schoolyears where stud_id = '$stud_id' and sem_id = '$_SESSION[active_sem]' and ay_id='$_SESSION[active_acad]'");
    $srow = mysqli_fetch_array($stud);

    // for ($i=0;$i<$subjId; $i++){

    //     $subj = mysqli_real_escape_string($db,$subj_id[$i]);
        
    //       $sql= mysqli_query($db,"INSERT INTO tbl_enrolled_subjects (class_id,stud_id, subj_id, faculty_id,acad_year,semester) VALUES ('".$class_id[$i]."', '$stud_id', '$subj','','$acad_year','$semester')")or die(mysqli_error($db));
    if ($srow['remark'] == 'Approved') {
        foreach ($_POST['check'] as $i) {
          $sql= mysqli_query($db,"INSERT INTO tbl_enrolled_subjects (class_id,stud_id, subj_id, acad_year,semester,prelim,midterm,finalterm,ofgrade,numgrade,absences,remarks,enroll_status) VALUES ('".$class_id[$i]."', '$stud_id', '".$subj_id[$i]."','$acad_year','$semester','','','','','','','','Approved')")or die(mysqli_error($db));
        }
    }elseif ($srow['remark'] == 'Checked') {
        foreach ($_POST['check'] as $i) {
          $sql= mysqli_query($db,"INSERT INTO tbl_enrolled_subjects (class_id,stud_id, subj_id, acad_year,semester,prelim,midterm,finalterm,ofgrade,numgrade,absences,remarks,enroll_status) VALUES ('".$class_id[$i]."', '$stud_id', '".$subj_id[$i]."','$acad_year','$semester','','','','','','','','Checked')")or die(mysqli_error($db));
        }
    }else{
        foreach ($_POST['check'] as $i) {
          $sql= mysqli_query($db,"INSERT INTO tbl_enrolled_subjects (class_id,stud_id, subj_id, acad_year,semester,prelim,midterm,finalterm,ofgrade,numgrade,absences,remarks,enroll_status) VALUES ('".$class_id[$i]."', '$stud_id', '".$subj_id[$i]."','$acad_year','$semester','','','','','','','','')")or die(mysqli_error($db));
        }
    }

  if($sql == true)
    {
      message("Successfully Added!","success");
    }
  else{
      message("Something went wrong!","error");
    }
    header('location:../stud_list/enrolled_subj.php?stud_id='.$_GET['stud_id'].'');
  }
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
                <div class="card-header card-header-danger">
                  <h4 class="card-title">List of Open Subjects for <?php echo $_SESSION['active_sem']; ?> A.Y. <?php echo $_SESSION['active_acad']; ?></h4>
                </div>
                <!--
                // $q = mysqli_query($db,"SELECT *, CONCAT(tbl_students.surname, ', ', tbl_students.firstname, ' ', tbl_students.middlename)  as fullname
                //  FROM tbl_students
                // LEFT JOIN tbl_courses ON tbl_courses.course_id = tbl_students.course_id
                //  where stud_id = '3'");
                // while ($row = mysqli_fetch_array($q))
                //   { echo ' -->
                
                <div class="card-body">
                  <form method="POST" class="form-horizontal" autocomplete="off" enctype="multipart/form-data">
                    <div class="table-responsive">
                    <table class="table table-hover">
                      <thead class=" text-primary">
                        <th>Course Code</th>
                        <th>Course Description</th>
                        <th>Year Level</th>
                        <th>Semester</th>
                        <th>Unit(s)</th>
                        <th>Prerequisite</th>
                        <th>Day</th>
                        <th>Time</th>
                        <th>Room</th>
                      </thead>
                      <tbody>
<?php 
include '../../includes/db.php';

$q = mysqli_query($db,"SELECT *,tbl_courses.course_id, tbl_subjects.subj_id, tbl_departments.department_id, tbl_year_levels.year_id, tbl_semesters.sem_id FROM tbl_schedules_old
                                  LEFT JOIN tbl_subjects ON tbl_subjects.subj_id = tbl_schedules_old.subj_id 
                                  LEFT JOIN tbl_courses ON tbl_courses.course_id = tbl_subjects.course_id
                                  LEFT JOIN tbl_departments on tbl_departments.department_id = tbl_courses.department_id
                                  LEFT JOIN tbl_year_levels ON tbl_year_levels.year_id = tbl_subjects.year_id
                                  LEFT JOIN tbl_semesters ON tbl_semesters.sem_id = tbl_subjects.sem_id
                                   where tbl_subjects.course_id = '$_GET[course]' AND tbl_schedules_old.acad_year ='$_SESSION[active_acad]' AND tbl_schedules_old.semester='$_SESSION[active_sem]' order by year_abv ") or die(mysqli_error($db));
$i= 0;
while($row = mysqli_fetch_array ($q)){
  $id=$row['class_id'];
  $subj_desc = mysqli_real_escape_string($db,$row['subj_desc']);
$o = mysqli_query($db,"SELECT * FROM tbl_enrolled_subjects LEFT JOIN tbl_subjects ON tbl_subjects.subj_id = tbl_enrolled_subjects.subj_id where subj_desc = '$subj_desc' AND stud_id = '$_GET[stud_id]'");
  $ro = mysqli_fetch_array($o);
  if (isset($ro['subj_desc'])) {
    if ($ro['remarks'] == 'Failed') {
      # code...
      $select = '<input class="form-check-input" type="checkbox" name="check[]" value="'.$i++.'">';
    }else{
      $select = '<input class="form-check-input" type="checkbox" CHECKED = "CHECKED" disabled name="check[]" value="'.$i++.'">';
    }
  }else{
    $select = '<input class="form-check-input" type="checkbox" name="check[]" value="'.$i++.'">';
  }
 echo'                       <tr>
                          <td>
                            '.$select.'
                            <input class="form-check-input" type="hidden" name="class_id[]" value="'.$id.'">
                            <input class="form-check-input" type="hidden" name="subj_id[]" value="'.$row['subj_id'].'">'.$row['subj_code'].'</td>
                          <td>'.$row['subj_desc'].'</td>
                          <td>'.$row['year_abv'].'</td>
                          <td>'.$row['semester'].'</td>
                          <td>'.$row['unit_total'].'</td>
                          <td>'.$row['prereq'].'</td>
                          <td>'.$row['day'].'</td>
                          <td>'.$row['time'].'</td>
                          <td>'.$row['room'].'</td>

                        </tr>';
 } 
?>
                      </tbody>
                    </table>
                  </div>
                  <a href="javascript:history.go(-1)" class="btn btn-default">
                    <i class="material-icons">keyboard_backspace</i> Back
                  </a>
                  <?php 

                  if ($_SESSION['role']== 'Registrar') {
                    # code...
                    echo '<button type="submit" name="submit2" class="btn btn-info"><i class="material-icons">add</i>Add</button>';
                  }else{
                    echo '<button type="submit" name="submit" class="btn btn-info"><i class="material-icons">add</i>Add</button>';
                  }

                   ?>
                  </form>
                </div>
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
