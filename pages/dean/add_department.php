<?php 
include '../../includes/session.php';
include '../../includes/db.php'; 


if (isset($_POST['submit'])) {

  $department = mysqli_real_escape_string($db,$_POST['department']);


  $query = mysqli_query($db,"INSERT INTO tbl_departments (department_name) values ('$department')")or die (mysqli_error($db));
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
                    <legend style="text-align:center">ADD DEPARTMENT</legend>
                    <div class="row">
                      <div class="col-md-6 offset-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Department Name</label>
                          <input name="department" type="text" class="form-control">
                        </div>
                      </div>
                    </div>
                  </fieldset>
                    <br>
                    <button type="submit" name="submit" class="btn btn-default pull-right">Add Department</button>
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
