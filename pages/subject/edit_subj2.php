<?php 
include '../../includes/session.php';
include '../../includes/db.php';

if (isset($_POST['update'])) {

  $id = mysqli_real_escape_string($db,$_POST['subj_id']);
  $subj_code = mysqli_real_escape_string($db,$_POST['subj_code']);
  $subj_desc = mysqli_real_escape_string($db,$_POST['subj_desc']);
  $unit_lec = mysqli_real_escape_string($db,$_POST['unit_lec']);
  $unit_lab = mysqli_real_escape_string($db,$_POST['unit_lab']);
  $unit_total = mysqli_real_escape_string($db,$_POST['unit_total']);
  $prereq = mysqli_real_escape_string($db,$_POST['prereq']);
  $course = mysqli_real_escape_string($db,$_POST['course']);
  $year = mysqli_real_escape_string($db,$_POST['year']);
  $sem = mysqli_real_escape_string($db,$_POST['sem']);

  $query=mysqli_query($db," UPDATE tbl_subjects SET subj_code = '$subj_code', subj_desc = '$subj_desc',unit_lec = '$unit_lec', unit_lab = '$unit_lab',unit_total = '$unit_total', prereq = '$prereq',course_id = '$course', year_id = '$year',sem_id = '$sem' where subj_id = '".$_GET['subj_id']."' ") or die(mysqli_error($db));

  if($query == true)
    {
      message("Successfully Updated!","success");
    }
  else{
    message("Something went wrong!","error");
  }
  
header('location:subj_list.php');

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
$qwerty = mysqli_query($db,"SELECT * from tbl_subjects
LEFT JOIN tbl_courses ON tbl_courses.course_id = tbl_subjects.course_id
LEFT JOIN tbl_year_levels ON tbl_year_levels.year_id = tbl_subjects.year_id
LEFT JOIN tbl_semesters ON tbl_semesters.sem_id = tbl_subjects.sem_id where subj_id = '".$_GET['subj_id']."' ");
                                    while($row = mysqli_fetch_array($qwerty)){
?>
                  <fieldset style="border: 1px solid;padding: 0px 10px;border-color: #d2d2d2">
                    <legend style="text-align:center">EDIT SUBJECT for (<?php echo $row['course_abv']; ?> - Old Currilum)</legend><hr>

                    <div class="row">
                      <div class="col-md-5">
                        <div class="form-group">
                          <input name="subj_id" type="hidden" class="form-control" value="'.$row['subj_id'].'">
                          <label class="bmd-label-floating">Subject Code</label>
                          <input name="subj_code" type="text" class="form-control" value="<?php echo $row['subj_code'] ?>" required="required">
                        </div>
                      </div>
                      <div class="col-md-7">
                        <div class="form-group">
                          <label class="bmd-label-floating">Subject Description</label>
                          <input name="subj_desc" type="text" class="form-control" value="<?php echo $row['subj_desc'] ?>" required="required">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Lecture Unit(s)</label>
                          <input name="unit_lec" type="text" class="form-control" value="<?php echo $row['unit_lec'] ?>" required="required">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Laboratory Unit(s)</label>
                          <input name="unit_lab" type="text" class="form-control" value="<?php echo $row['unit_lab'] ?>" required="required">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Total Unit(s)</label>
                          <input name="unit_total" type="text" class="form-control" value="<?php echo $row['unit_total'] ?>" required="required">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Prerequisite</label>
                          <input name="prereq" type="text" class="form-control" value="<?php echo $row['prereq'] ?>">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-3">
                        <div class="form-group">
                          <select name="course" id="course" data-style="btn btn-primary btn-round" required class="form-control select-2">
                            <option value="<?php echo $row['course_id'] ?>" selected><?php echo $row['course'] ?></option>
                            <?php 
                        $q = mysqli_query($db,"SELECT * from tbl_courses where course_id not in ('".$row['course_id']."')");
                        while($row1=mysqli_fetch_array($q)){
                            echo '<option value="'.$row1['course_id'].'">'.$row1['course'].'</option>';
                                }
                              ?>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <select name="year" id="year" data-style="btn btn-primary btn-round" required class="form-control select-2">
                            <option value="<?php echo $row['year_id'] ?>" selected><?php echo $row['year_level'] ?></option>
                            <?php 
                        $q = mysqli_query($db,"SELECT * from tbl_year_levels where year_id not in ('".$row['year_id']."')");
                        while($row1=mysqli_fetch_array($q)){
                            echo '<option value="'.$row1['year_id'].'">'.$row1['year_level'].'</option>';
                                }
                              ?>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <select name="sem" id="sem" data-style="btn btn-primary btn-round" required class="form-control select-2">
                            <option value="<?php echo $row['sem_id'] ?>" selected><?php echo $row['semester'] ?></option>
                            <?php 
                        $q = mysqli_query($db,"SELECT * from tbl_semesters where sem_id not in ('".$row['sem_id']."')");
                        while($row1=mysqli_fetch_array($q)){
                            echo '<option value="'.$row1['sem_id'].'">'.$row1['semester'].'</option>';
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
                    <button type="submit" name="update" class="btn btn-primary pull-right">Update Subject</button>
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