<?php 
include '../../includes/session.php';
include '../../includes/db.php'; 

$id =$_GET['course_id'];
 if (isset($_POST['update'])) {
    $course =mysqli_real_escape_string($db,$_POST['course']);
    $course_abv =mysqli_real_escape_string($db,$_POST['course_abv']);
    $department =mysqli_real_escape_string($db,$_POST['department']);

    $query = mysqli_query($db," UPDATE tbl_courses SET course='$course',course_abv='$course_abv',department_id='$department' WHERE course_id = '$id' ")or die(mysqli_error($db));

    if($query == true)
    {
      message("Successfully Updated!","success");
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
<?php check_message(); ?>
              <div class="card">
                <div class="card-body">
<?php 
$qwerty = mysqli_query($db,"SELECT * from tbl_courses LEFT JOIN tbl_departments ON tbl_departments.department_id = tbl_courses.department_id where course_id = '".$_GET['course_id']."' ");
                                    while($row = mysqli_fetch_array($qwerty)){
?>
                  <form method="POST" class="form-horizontal" autocomplete="off" enctype="multipart/form-data">
                  <fieldset style="border: 1px solid;padding: 0px 10px;border-color: #d2d2d2">
                    <legend style="text-align:center">COURSE DETAILS</legend>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Course Name</label>
                          <input name="course" type="text" class="form-control" value="<?php echo $row['course'] ?>">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Course Abbrev.</label>
                          <input name="course_abv" type="text" class="form-control" value="<?php echo $row['course_abv'] ?>">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <select name="department" id="department" data-style="btn btn-primary btn-round" required class="form-control select-2">
                            <option value="<?php echo $row['department_id'] ?>" selected><?php echo $row['department_name'] ?></option>';
                       <?php  $q = mysqli_query($db,"SELECT * from tbl_departments where department_id not in ('".$row['department_id']."')");
                        while($row1=mysqli_fetch_array($q)){
                            echo '<option value="'.$row1['department_id'].'">'.$row1['department_name'].'</option>';
                                }
                         ?>
                          </select>
                        </div>
                      </div>
                    </div>
                  </fieldset>
                    <br>
                    <button type="submit" name="update" class="btn btn-primary pull-right">Update Course</button>
                    <div class="clearfix"></div>
                  </form>
<?php 
  }
?>
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
