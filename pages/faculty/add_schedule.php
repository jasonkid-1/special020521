<?php 
include '../../includes/session.php';
include '../../includes/db.php'; 

if (isset($_POST['submit'])) {
  $section = mysqli_real_escape_string($db,$_POST['section']);
  $class_code = mysqli_real_escape_string($db,$_POST['class_code']);
  $subj_id = mysqli_real_escape_string($db,$_POST['subj_id']);
  $day = mysqli_real_escape_string($db,$_POST['day']);
  $time = mysqli_real_escape_string($db,$_POST['time']);
  $room = mysqli_real_escape_string($db,$_POST['room']);
  $faculty_id = mysqli_real_escape_string($db,$_POST['faculty']);
  $special_tut = mysqli_escape_string($db,$_POST['special_tut']);
  $semester = $_SESSION['active_sem'];
  $acad_year = $_SESSION['active_acad'];

  $chk = mysqli_query($db,"SELECT * FROM tbl_schedules where section = '$section' AND class_code = '$class_code' AND acad_year = '$acad_year' AND semester = '$semester' AND subj_id = '$subj_id' and time = '$time' and day='$day' and room='$room' ");
    $ct = mysqli_num_rows($chk);
if($ct == 0)
{
   $query = mysqli_query($db,"INSERT INTO tbl_schedules (section,class_code,subj_id, faculty_id, day, time, room, acad_year, semester, special_tut) values ('$section','$class_code','$subj_id', '$faculty_id','$day', '$time', '$room', '$acad_year', '$semester',$special_tut)")or die (mysqli_error($db));
    if($query == true)
    {
     message("Schedule Successfully Added!","success");
    }
}
else
{
      message("Schedule Already Exist!","error");
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
<?php check_message(); ?>
              <div class="card">
                <div class="card-body">
                  <form method="POST" class="form-horizontal" autocomplete="off" enctype="multipart/form-data">
<?php 
$q = mysqli_query($db,"SELECT *, tbl_semesters.sem_id,tbl_year_levels.year_id,tbl_courses.course_id,tbl_courses.department_id,tbl_departments.department_id FROM tbl_subjects_new
      LEFT JOIN tbl_courses ON tbl_courses.course_id = tbl_subjects_new.course_id
      LEFT JOIN tbl_departments ON tbl_departments.department_id = tbl_courses.department_id
      LEFT JOIN tbl_semesters ON tbl_semesters.sem_id = tbl_subjects_new.sem_id
      LEFT JOIN tbl_year_levels ON tbl_year_levels.year_id = tbl_subjects_new.year_id where subj_id = '".$_GET['subj_id']."'")or die(mysqli_error($db));
      while ($row = mysqli_fetch_array($q)) {
?>
                  <fieldset style="border: 1px solid;padding: 0px 10px;border-color: #d2d2d2">
                    <legend style="text-align:center">Add Schedule</legend>
                    <hr>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Section</label>
                          <input name="section" type="text" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-check">
                          <label class="form-check-label">
                              <input name="special_tut" type="hidden" class="form-control" value="0">
                              <input name="special_tut" class="form-check-input" type="checkbox" value="1">
                                Check if Special Tutotial
                              <span class="form-check-sign">
                                  <span class="check"></span>
                              </span>
                          </label>
                      </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <input name="subj_id" type="hidden" class="form-control" value="<?php echo $row['subj_id'] ?>">
                        <div class="form-group">
                          <label class="bmd-label-floating">Course Code</label>
                          <input name="class_code" readonly type="text" class="form-control" value="<?php echo $row['subj_code'] ?>">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Subject Description</label>
                          <input name="subj_desc" readonly type="text" class="form-control" value="<?php echo $row['subj_desc'] ?>">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Unit(s)</label>
                          <input name="units" type="text" readonly class="form-control" value="<?php echo $row['unit_total'] ?>">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Day (M/T/W/TH/F/S)</label>
                          <input name="day" type="text" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Time (hh:mm - hh:mm am/pm)</label>
                          <input name="time" type="text" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Room</label>
                          <input name="room" type="text" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6 offset-md-3">
                        <div class="form-group">
                          <select name="faculty" id="status" data-style="btn btn-primary btn-round" required class="form-control select-2">
                            <option selected disabled>Instructor</option>
                              <?php 
                                $q = mysqli_query($db,"SELECT * from tbl_faculties_staff");
                                while($row=mysqli_fetch_array($q)){
                                    echo '<option value="'.$row['faculty_id'].'">'.$row['faculty_lastname'].' '.$row['faculty_firstname'].' '.$row['faculty_middlename'].'</option>';
                                  }
                              ?>
                          </select>
                        </div>
                      </div>
                    </div>
                  </fieldset>
                    <br>
                    <a href="javascript:history.back()" class="btn btn-default">
                    <i class="material-icons">keyboard_backspace</i> Back
                    </a>
                    <button type="submit" name="submit" class="btn btn-default pull-right">Add Schedule</button>
                    <div class="clearfix"></div>
<?php } ?>
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
