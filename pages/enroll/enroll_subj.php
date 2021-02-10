<?php 
include '../../includes/session.php';
include '../../includes/db.php'; 




if (isset($_GET['stud_id'])){

$query = mysqli_query($db,"SELECT * FROM tbl_schoolyears WHERE stud_id = '$_GET[stud_id]' AND ay_id='$_SESSION[active_acad]' AND sem_id='$_SESSION[active_sem]' ") or die(mysqli_error($db));
$row_count = mysqli_num_rows($query);

if($row_count == 0){
  header("Location: enroll.php?stud_id=".$_GET['stud_id']);
}
}
          
if(isset($_POST['delete']))
{
$array = $_POST['check'];
 $listCheck = "'" . implode("','", $array) . "'";
 $sql6 = "DELETE FROM `tbl_enrolled_subjects` WHERE `enrolled_subj_id` IN ($listCheck)";
 $delete = mysqli_query ($db,$sql6)or die(mysqli_error($db));

if ($delete == true) {
  message("Successfully Deleted!","success");
}else{
  message("Something went wrong!","error");
}

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
              <div class="card">
                <div class="card-body">
                  <form method="POST" class="form-horizontal" autocomplete="off" enctype="multipart/form-data">
                    <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>StudID No.</th>
                        <th>Name</th>
                        <th>Course</th>
                        <th>Year Level</th>
                        <th>A.Y.</th>
                        <th>Semester</th>
                        <th>Status</th>
                      </thead>
                      <tbody>
<?php 
include '../../includes/db.php';

$q = mysqli_query($db,"SELECT *, CONCAT(tbl_students.lastname, ', ', tbl_students.firstname, ' ', tbl_students.middlename)  as fullname,tbl_courses.course_id FROM tbl_schoolyears
  LEFT JOIN tbl_students ON tbl_students.stud_id = tbl_schoolyears.stud_id
  LEFT JOIN tbl_year_levels ON tbl_year_levels.year_id = tbl_schoolyears.year_id
  LEFT JOIN tbl_courses ON tbl_courses.course_id = tbl_schoolyears.course_id
  WHERE tbl_schoolyears.stud_id = '$_GET[stud_id]' AND tbl_schoolyears.ay_id = '$_SESSION[active_acad]' AND tbl_schoolyears.sem_id = '$_SESSION[active_sem]' ");
while($row = mysqli_fetch_array ($q)){
  $id=$row['sy_id']; ?>
                        <tr>
                          <td><?php echo $row['stud_no']; ?></td>
                          <td><?php echo $row['fullname']; ?></td>
                          <td><?php echo $row['course']; ?></td>
                          <td><?php echo $row['year_level']; ?></td>
                          <td><?php echo $row['ay_id']; ?></td>
                          <td><?php echo $row['sem_id']; ?></td>
                          <td><?php echo $row['status']; ?></td>
                        </tr>
<?php } ?>
                      </tbody>
                    </table>
                  </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-md-12">
<?php check_message(); ?>
              <div class="card">
                <div class="card-header card-header-danger">
                  <h4 class="card-title">List of your Enrolled Subject(s) <h6 class="card-title"> Note: Verify carefully your subject/s to be enrolled</h6></h4>
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
                        <th>Unit(s)</th>
                        <th>Day</th>
                        <th>Time</th>
                        <th>Room</th> 
                        

                      </thead>
                      <tbody>
<?php include '../../includes/db.php';
if ($_SESSION['userid'] != $_GET['stud_id']) {
  header("location: ../404/404.php");
}
$l= mysqli_query($db, "SELECT * FROM tbl_students WHERE stud_id = '".$_GET['stud_id']."'");
while($rows = mysqli_fetch_array ($l)){
  if($rows['curri'] == "New Curri"){ 
    $q = mysqli_query($db,"
      SELECT *, CONCAT(tbl_students.lastname, ', ', tbl_students.firstname, ' ', tbl_students.middlename)  as fullname,tbl_subjects_new.subj_id 
      FROM tbl_enrolled_subjects
      LEFT JOIN tbl_students ON tbl_students.stud_id = tbl_enrolled_subjects.stud_id
      LEFT JOIN tbl_schedules ON tbl_schedules.class_id = tbl_enrolled_subjects.class_id
      LEFT JOIN tbl_subjects_new ON tbl_subjects_new.subj_id = tbl_enrolled_subjects.subj_id
      WHERE tbl_enrolled_subjects.stud_id = '$_GET[stud_id]' AND tbl_enrolled_subjects.acad_year = '$_SESSION[active_acad]' AND tbl_enrolled_subjects.semester = '$_SESSION[active_sem]'") or die(mysqli_error($db));
while($row = mysqli_fetch_array ($q)){
  $id=$row['enrolled_subj_id']; ?>
    <tr>
                          <td><?php echo'<input class="form-check-input" type="checkbox" name="check[]" value="'.$id.'">'.$row['subj_code']; ?></td>
                          <td><?php echo $row['subj_desc']; ?></td>
                          <td><?php echo $row['unit_total']; ?></td>
                          <td><?php echo $row['day']; ?></td>
                          <td><?php echo $row['time']; ?></td>
                          <td><?php echo $row['room']; ?></td>
                          
                          
                        </tr>
<?php } ?>
                      </tbody>
                      <tfoot>
                        <?php $sum = mysqli_query($db,"SELECT SUM(unit_total) as UN FROM tbl_enrolled_subjects LEFT JOIN tbl_subjects_new ON tbl_subjects_new.subj_id = tbl_enrolled_subjects.subj_id where tbl_enrolled_subjects.stud_id = '$_GET[stud_id]' AND tbl_enrolled_subjects.acad_year = '$_SESSION[active_acad]' AND tbl_enrolled_subjects.semester = '$_SESSION[active_sem]'");
                          while($row = mysqli_fetch_array ($sum)){ ?>
                        <tr><td></td></tr>
                        <tr><td  colspan="2"><Strong>Total Units</Strong></td><td><strong><?php echo $row['UN']; ?></strong></td><td></td><td></td><td></td></tr>
                      <?php } ?>
                      </tfoot>
                    </table>
                  </div>

<?php   }else{
  $q = mysqli_query($db,"SELECT *, CONCAT(tbl_students.lastname, ', ', tbl_students.firstname, ' ', tbl_students.middlename)  as fullname,tbl_subjects.subj_id FROM tbl_enrolled_subjects
  LEFT JOIN tbl_students ON tbl_students.stud_id = tbl_enrolled_subjects.stud_id
  LEFT JOIN tbl_schedules_old ON tbl_schedules_old.class_id = tbl_enrolled_subjects.class_id
  LEFT JOIN tbl_subjects ON tbl_subjects.subj_id = tbl_enrolled_subjects.subj_id
  WHERE tbl_enrolled_subjects.stud_id = '$_GET[stud_id]' AND tbl_enrolled_subjects.acad_year = '$_SESSION[active_acad]' AND tbl_enrolled_subjects.semester = '$_SESSION[active_sem]'") or die(mysqli_error($db));
while($row = mysqli_fetch_array ($q)){
  $id=$row['enrolled_subj_id']; ?>
    <tr>
                          <td><?php echo'<input class="form-check-input" type="checkbox" name="check[]" value="'.$id.'">'.$row['subj_code']; ?></td>
                          <td><?php echo $row['subj_desc']; ?></td>
                          <td><?php echo $row['unit_total']; ?></td>
                          <td><?php echo $row['day']; ?></td>
                          <td><?php echo $row['time']; ?></td>
                          <td><?php echo $row['room']; ?></td>
                        </tr>
<?php } ?>
                      </tbody>
                      <tfoot>
                        <?php $sum = mysqli_query($db,"SELECT SUM(unit_total) as UN FROM tbl_enrolled_subjects LEFT JOIN tbl_subjects ON tbl_subjects.subj_id = tbl_enrolled_subjects.subj_id where tbl_enrolled_subjects.stud_id = '$_GET[stud_id]' AND tbl_enrolled_subjects.acad_year = '$_SESSION[active_acad]' AND tbl_enrolled_subjects.semester = '$_SESSION[active_sem]'");
                          while($row = mysqli_fetch_array ($sum)){ ?>
                        <tr><td></td></tr>
                        <tr><td  colspan="2"><Strong>Total Units</Strong></td><td><strong><?php echo $row['UN']; ?></strong></td><td></td><td></td><td></td></tr>
                      <?php } ?>
                      </tfoot>
                    </table>
                  </div>
<?php }
} ?>



                        
<?php
           $q = mysqli_query($db,"SELECT *, CONCAT(tbl_students.lastname, ', ', tbl_students.firstname, ' ', tbl_students.middlename)  as fullname,tbl_courses.course_id FROM tbl_schoolyears
  LEFT JOIN tbl_students ON tbl_students.stud_id = tbl_schoolyears.stud_id
  LEFT JOIN tbl_year_levels ON tbl_year_levels.year_id = tbl_schoolyears.year_id
  LEFT JOIN tbl_courses ON tbl_courses.course_id = tbl_schoolyears.course_id
  WHERE tbl_schoolyears.stud_id = '$_GET[stud_id]' AND tbl_schoolyears.ay_id = '$_SESSION[active_acad]' AND tbl_schoolyears.sem_id = '$_SESSION[active_sem]' ");
while($row = mysqli_fetch_array ($q)){
  $id=$row['sy_id'];
  if ($row['remark'] == 'Approved') {
    # code...
  }else{
                   $p = mysqli_query($db, "SELECT * FROM tbl_students WHERE stud_id = '".$_GET['stud_id']."'");while($row = mysqli_fetch_array ($p)){ 
              if ($row['curri'] == 'Old Curri') {
                echo'
                  <a href="select_subj2.php?stud_id='.$_GET['stud_id'].'&course='.$row['course_id'].'" class="btn btn-primary">
                    <i class="material-icons">add</i> Choose Subject
                  </a>';
              }else{
                echo'
                  <a href="select_subj.php?stud_id='.$_GET['stud_id'].'&course='.$row['course_id'].'" class="btn btn-primary">
                    <i class="material-icons">add</i> Choose Subject
                  </a>';
                } ?>
                  <button type="submit" name="delete" class="btn btn-danger"><i class="material-icons">delete</i>Drop Selected</button><?php }} ?>
                </div>
                  </form>
    
              </div>
            </div>
          </div>
        </div>
      </div>
<?php } ?>
      <?php include '../../includes/footer.php';?>
    </div>
  </div>
<?php include '../../includes/script.php'; ?>
</body>

</html>
