<?php 
include '../../includes/session.php';
include '../../includes/db.php';

if (isset($_POST['update'])) {
  $section = mysqli_real_escape_string($db,$_POST['section']);
  $class_code = mysqli_real_escape_string($db,$_POST['class_code']);
  $subj_id = mysqli_real_escape_string($db,$_POST['subj_id']);
  $day = mysqli_real_escape_string($db,$_POST['day']);
  $time = mysqli_real_escape_string($db,$_POST['time']);
  $room = mysqli_real_escape_string($db,$_POST['room']);
  $faculty_id = mysqli_real_escape_string($db,$_POST['faculty']);
  if ($_SESSION['active_sem']=='Summer') {
    $special_tut = 0;
  }else{$special_tut = mysqli_escape_string($db,$_POST['special_tut']);}
  


  $query=mysqli_query($db," UPDATE tbl_schedules SET section = '$section',class_code = '$class_code', subj_id = '$subj_id',day = '$day', time = '$time',room = '$room', faculty_id = '$faculty_id',special_tut = '$special_tut' where class_id = '".$_GET['class_id']."' ") or die(mysqli_error($db));

  if($query == true)
    {
      message("Successfully Updated!","success");
    }
  else{
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
<?php check_message(); ?>
              <div class="card">
                <div class="card-body">
                  <form method="POST" class="form-horizontal" autocomplete="off" enctype="multipart/form-data">
                  <fieldset style="border: 1px solid;padding: 0px 10px;border-color: #d2d2d2">
                    <legend style="text-align:center">EDIT SCHEDULE (NEW CURR)</legend><hr>
<?php 
$qwerty = mysqli_query($db,"
	SELECT * 
	FROM tbl_schedules
	LEFT JOIN tbl_subjects_new ON tbl_subjects_new.subj_id = tbl_schedules.subj_id 
	LEFT JOIN tbl_courses ON tbl_courses.course_id = tbl_subjects_new.course_id
	LEFT JOIN tbl_departments on tbl_departments.department_id = tbl_courses.department_id
	LEFT JOIN tbl_year_levels ON tbl_year_levels.year_id = tbl_subjects_new.year_id
	LEFT JOIN tbl_semesters ON tbl_semesters.sem_id = tbl_subjects_new.sem_id
	LEFT JOIN tbl_faculties_staff ON tbl_faculties_staff.faculty_id = tbl_schedules.faculty_id 
	WHERE class_id = '".$_GET['class_id']."' ");
                                    while($row = mysqli_fetch_array($qwerty)){
?>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Section</label>
                          <input name="section" type="text" class="form-control" value="<?php echo $row['section'] ?>">
                        </div>
                      </div>
                      <?php if ($_SESSION['active_sem'] == 'Summer') {
                        # code...
                      }else{
                        echo '<div class="col-md-4">
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
                      </div>';
                      } ?>
                      
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <input name="subj_id" type="hidden" class="form-control" value="<?php echo $row['subj_id'] ?>">
                        <div class="form-group">
                          <label class="bmd-label-floating">Class Code</label>
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
                          <input name="day" type="text" value="<?php echo $row['day'] ?>" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Time (hh:mm - hh:mm am/pm)</label>
                          <input name="time" type="text" value="<?php echo $row['time'] ?>" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Room</label>
                          <input name="room" type="text" value="<?php echo $row['room'] ?>" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6 offset-md-3">
                        <div class="form-group">
                          <select name="faculty" id="status" data-style="btn btn-primary btn-round" required class="form-control select-2">
                            <option value="<?php echo $row['faculty_id']; ?>" selected><?php echo $row['faculty_lastname'].' '.$row['faculty_firstname'].' '.$row['faculty_middlename'] ?></option>
                             <?php 
                                $q = mysqli_query($db,"SELECT * from tbl_faculties_staff where faculty_id not in ('".$row['faculty_id']."')");
                                while($row=mysqli_fetch_array($q)){
                                    echo '<option value="'.$row['faculty_id'].'">'.$row['faculty_lastname'].' '.$row['faculty_firstname'].' '.$row['faculty_middlename'].'</option>';
                                  }
                              ?>
                          </select>
                        </div>
                      </div>
                    </div>
                    <?php } ?>
                  </fieldset>
                  <br>
                  <a href="javascript:history.back()" class="btn btn-default">
                    <i class="material-icons">keyboard_backspace</i> Back
                  </a>
                    <button type="submit" name="update" class="btn btn-primary pull-right">Update Schedule</button>
                    <div class="clearfix"></div>
                  </form>
                </div><!-- end card-body --> 
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