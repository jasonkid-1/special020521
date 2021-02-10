<?php 
include '../../includes/session.php';
include '../../includes/db.php';

if (isset($_POST['update'])) {

  $id = mysqli_real_escape_string($db,$_POST['sy_id']);
  $stud_id = mysqli_real_escape_string($db,$_POST['stud_id']);
  $course = mysqli_real_escape_string($db,$_POST['course']);
  $year_level = mysqli_real_escape_string($db,$_POST['year']);
  $status = mysqli_real_escape_string($db,$_POST['status']);

  $query=mysqli_query($db," UPDATE tbl_schoolyears SET course_id = '$course', year_id = '$year_level',status = '$status' where stud_id = '$_GET[stud_id]' AND ay_id='$_SESSION[active_acad]' AND sem_id='$_SESSION[active_sem]' ") or die(mysqli_error($db));

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
<?php 
$query = mysqli_query($db, 
                                  "SELECT *,CONCAT(tbl_students.lastname, ', ', tbl_students.firstname, ' ', tbl_students.middlename)  as fullname 
                                  FROM tbl_schoolyears 
                                  LEFT JOIN tbl_students ON tbl_students.stud_id = tbl_schoolyears.stud_id
                                  LEFT JOIN tbl_genders ON tbl_genders.gender_id = tbl_students.gender_id
                                  LEFT JOIN tbl_courses ON tbl_courses.course_id = tbl_schoolyears.course_id
                                  LEFT JOIN tbl_year_levels ON tbl_year_levels.year_id = tbl_schoolyears.year_id
                                  WHERE ay_id = '$_SESSION[active_acad]' and sem_id = '$_SESSION[active_sem]'and tbl_schoolyears.stud_id ='$_GET[stud_id]'") or die(mysqli_error($db));
                                while ($row= mysqli_fetch_array ($query)){
?>        
          <fieldset style="border: 1px solid;padding: 0px 10px;border-color: #d2d2d2">
                    <legend style="text-align:center">UPDATE STUDENT DETAILS</legend><hr>

                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Student ID</label>
                          <input name="sy_id" type="hidden" class="form-control" value="'.$row['sy_id'].'">
                          <input name="stud_id" type="hidden" class="form-control" value="'.$row['stud_id'].'">
                          <input type="text" name="stud_no" class="form-control" value="<?php echo $row['stud_no'];?>" readonly>
                        </div>
                      </div>
                      <div class="col-md-8">
                        <div class="form-group">
                          <label class="bmd-label-floating">Name</label>
                          <input type="text" name="fullname" class="form-control" value="<?php echo $row['fullname'];?>" readonly>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Course</label>
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
                          <label class="bmd-label-floating">Year Level</label>
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
                          <label class="bmd-label-floating">Status</label>
                          <select name="status" id="status" data-style="btn btn-primary btn-round" required class="form-control select-2">
                            <option selected disabled>Status</option>
                            <option value="New">New Student</option>
                            <option value="Old">Old Student</option>
                            <option value="New-Trans">Transferee</option>
                            <option value="Cross-Enrollee">Cross-Enrollee</option>
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
                    <button type="submit" name="update" class="btn btn-primary pull-right">Update Details</button>
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