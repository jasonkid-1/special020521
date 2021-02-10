<?php 
include '../../includes/session.php';
include '../../includes/db.php'; 


if (isset($_POST['submit'])) {

  $course = mysqli_real_escape_string($db,$_POST['course']);
  $course_abv = mysqli_real_escape_string($db,$_POST['course_abv']);
  $department = mysqli_real_escape_string($db,$_POST['department']);


  $query = mysqli_query($db,"INSERT INTO tbl_courses (course,course_abv,department_id) values ('$course','$course_abv','$department')")or die (mysqli_error($db));
    if($query == true)
    {
      message("Student Successfully Added!","success");
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
                  <form method="POST" class="form-horizontal" autocomplete="off" enctype="multipart/form-data">
                  <fieldset style="border: 1px solid;padding: 0px 10px;border-color: #d2d2d2">
                    <legend style="text-align:center">ADD COURSE</legend>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Course Name</label>
                          <input name="course" type="text" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Course Abbrev.</label>
                          <input name="course_abv" type="text" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <select name="department" id="department" data-style="btn btn-primary btn-round" required class="form-control select-2">
                            <option selected disabled>Department</option>
                              <?php 
                                $q = mysqli_query($db,"SELECT * from tbl_departments");
                                while($row=mysqli_fetch_array($q)){
                                    echo '<option value="'.$row['department_id'].'">'.$row['department_name'].'</option>';
                                  }
                              ?>
                          </select>
                        </div>
                      </div>
                    </div>
                  </fieldset>
                    <br>
                    <button type="submit" name="submit" class="btn btn-default pull-right">Add Course</button>
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
