<?php 
include '../../includes/session.php';
include '../../includes/db.php';

if (isset($_POST['submit'])) {

  $subj_code = mysqli_real_escape_string($db,$_POST['subj_code']);
  $subj_desc = mysqli_real_escape_string($db,$_POST['subj_desc']);
  $unit_lec = mysqli_real_escape_string($db,$_POST['unit_lec']);
  $unit_lab = mysqli_real_escape_string($db,$_POST['unit_lab']);
  $unit_total = mysqli_real_escape_string($db,$_POST['unit_total']);
  $prereq = mysqli_real_escape_string($db,$_POST['prereq']);
  $course = mysqli_real_escape_string($db,$_POST['course']);
  $year = mysqli_real_escape_string($db,$_POST['year']);
  $sem = mysqli_real_escape_string($db,$_POST['sem']);

  $chk = mysqli_query($db,"
    SELECT *, tbl_courses.course_id 
    FROM tbl_subjects_new 
    LEFT JOIN tbl_courses ON tbl_courses.course_id = tbl_subjects_new.course_id 
    WHERE subj_code = '$subj_code' AND subj_desc = '$subj_desc' AND course = '$course'
    ");
    $ct = mysqli_num_rows($chk);

if($ct == 0){
  $query = mysqli_query($db,"
    INSERT INTO tbl_subjects_new (subj_code,subj_desc, unit_lec, unit_lab, unit_total, prereq, course_id, year_id, sem_id) 
    VALUES ('$subj_code','$subj_desc', '$unit_lec','$unit_lab', '$unit_total', '$prereq', '$course', '$year', '$sem')")or die (mysqli_error($db));
    
    if($query == true)
    {
     message("Subject Successfully Added!","success");
    }
  }
    else
    {
      message("Subject Already Exist!","warning");
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
                <div class="card-header card-header-danger">
                    <h4 class="card-title">Add Subject (New Curriculum)</h4>
                </div>
                <div class="card-body">
                  <form method="POST" class="form-horizontal" autocomplete="off" enctype="multipart/form-data">
                  <fieldset style="border: 1px solid;padding: 0px 10px;border-color: #d2d2d2">
                    <legend style="text-align:center">SUBJECT DETAILS</legend>
                    <div class="row">
                      <div class="col-md-5">
                        <div class="form-group">
                          <label class="bmd-label-floating">Subject Code</label>
                          <input name="subj_code" type="text" class="form-control" required="required">
                        </div>
                      </div>
                      <div class="col-md-7">
                        <div class="form-group">
                          <label class="bmd-label-floating">Subject Description</label>
                          <input name="subj_desc" type="text" class="form-control" required="required">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Lecture Unit(s)</label>
                          <input name="unit_lec" type="text" class="form-control" required="required">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Laboratory Unit(s)</label>
                          <input name="unit_lab" type="text" class="form-control" required="required">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Total Unit(s)</label>
                          <input name="unit_total" type="text" class="form-control" required="required">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Prerequisite</label>
                          <input name="prereq" type="text" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-3">
                        <div class="form-group">
                          <select name="course" id="course" data-style="btn btn-primary btn-round" required class="form-control select-2">
                            <option disabled selected>Select Course</option>
                            <?php 
                        $q1 = mysqli_query($db,"SELECT * from tbl_courses");
                        while($row2=mysqli_fetch_array($q1)){
                            echo '<option value="'.$row2['course_id'].'">'.$row2['course_abv'].'</option>';
                                }
                             ?>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <select name="year" id="year" data-style="btn btn-primary btn-round" required class="form-control select-2">
                            <option disabled selected>Select Year Level</option>
                            <?php 
                        $q1 = mysqli_query($db,"SELECT * from tbl_year_levels");
                        while($row2=mysqli_fetch_array($q1)){
                            echo '<option value="'.$row2['year_id'].'">'.$row2['year_level'].'</option>';
                                }
                             ?>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <select name="sem" id="sem" data-style="btn btn-primary btn-round" required class="form-control select-2">
                            <option disabled selected>Select Semester</option>
                            <?php 
                        $q1 = mysqli_query($db,"SELECT * from tbl_semesters");
                        while($row2=mysqli_fetch_array($q1)){
                            echo '<option value="'.$row2['sem_id'].'">'.$row2['semester'].'</option>';
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
                    <button type="submit" name="submit" class="btn btn-primary pull-right">Add Subject</button>
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