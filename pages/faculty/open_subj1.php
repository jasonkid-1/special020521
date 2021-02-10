<?php 
include '../../includes/session.php';
include '../../includes/db.php'; 

if (isset($_POST['submit'])) {
  $class_code = mysqli_real_escape_string($db,$_POST['class_code']);
  $subj_id = mysqli_real_escape_string($db,$_POST['subj_id']);
  $day = mysqli_real_escape_string($db,$_POST['day']);
  $time = mysqli_real_escape_string($db,$_POST['time']);
  $room = mysqli_real_escape_string($db,$_POST['room']);
  $faculty_id = mysqli_real_escape_string($db,$_POST['faculty']);
  $semester = $_SESSION['active_sem'];
  $acad_year = $_SESSION['active_acad'];

  $chk = mysqli_query($db,"SELECT * FROM tbl_schedules_old where class_code = '$class_code' AND acad_year = '$acad_year' AND semester = '$semester' AND subj_id = '$subj_id'");
    $ct = mysqli_num_rows($chk);
if($ct == 0)
{
   $query = mysqli_query($db,"INSERT INTO tbl_schedules_old (class_code,subj_id, faculty_id, day, time, room, acad_year, semester) values ('$class_code','$subj_id', '$faculty_id','$day', '$time', '$room', '$acad_year', '$semester')")or die (mysqli_error($db));
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

                  <fieldset style="border: 1px solid;padding: 0px 10px;border-color: #d2d2d2">
                    <legend style="text-align:center">Add Petitioned Subject/s (Old Curr)</legend>
                    <hr>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Class Code</label>
                          <input name="class_code" required type="text" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-8">
                        <div class="form-group">
                          <select name="subj_id" id="status" data-style="btn btn-primary btn-round" required class="form-control select-2">
                            <option selected disabled>Select Subject</option>
                              <?php 
                                $q1 = mysqli_query($db,"SELECT *,tbl_departments.department_id from tbl_subjects 
                                  LEFT JOIN tbl_courses on tbl_courses.course_id = tbl_subjects.course_id
                                  LEFT JOIN tbl_departments on tbl_departments.department_id = tbl_courses.department_id where tbl_departments.department_name = '$_SESSION[department]' and tbl_courses.course_id = '$_GET[course_id]'");
                                while($row1=mysqli_fetch_array($q1)){
                                    echo '<option value="'.$row1['subj_id'].'">'.$row1['subj_code'].' - '.$row1['subj_desc'].'</option>';
                                  }
                              ?>
                          </select>
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
                          <select name="faculty" id="faculty" data-style="btn btn-primary btn-round" required class="form-control select-2">
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
                    <button type="submit" name="submit" class="btn btn-primary pull-right">Add Schedule</button>
                    <div class="clearfix"></div>
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
