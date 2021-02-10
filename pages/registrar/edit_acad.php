<?php 
include '../../includes/session.php';
include '../../includes/db.php'; 

$id =$_GET['ay_id'];
 if (isset($_POST['update'])) {
    $department_name =mysqli_real_escape_string($db,$_POST['department_name']);

    $query = mysqli_query($db," UPDATE tbl_acadyears SET academic_year='$department_name' WHERE ay_id = '$id' ")or die(mysqli_error($db));

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
$qwerty = mysqli_query($db,"SELECT * from tbl_acadyears where ay_id = '".$_GET['ay_id']."' ");
                                    while($row = mysqli_fetch_array($qwerty)){
?>
                  <form method="POST" class="form-horizontal" autocomplete="off" enctype="multipart/form-data">
                  <fieldset style="border: 1px solid;padding: 0px 10px;border-color: #d2d2d2">
                    <legend style="text-align:center">A.Y. DETAILS</legend>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">ACADEMIC YEAR</label>
                          <input name="department_name" type="text" class="form-control" value="<?php echo $row['academic_year'] ?>">
                        </div>
                      </div>
                    </div>
                  </fieldset>
                    <br>
                    <button type="submit" name="update" class="btn btn-primary pull-right">Update A.Y.</button>
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
