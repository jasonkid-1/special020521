<?php 
include '../../includes/session.php';
include '../../includes/db.php'; 

$id =$_GET['admission_id'];
 if (isset($_POST['update'])) {
    $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
    $lname = mysqli_real_escape_string($db, $_POST['lname']);
    $fname = mysqli_real_escape_string($db, $_POST['fname']);
    $mname = mysqli_real_escape_string($db, $_POST['mname']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password =mysqli_real_escape_string($db,$_POST['password']);
    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

    $query = mysqli_query($db," UPDATE tbl_admissions SET img='$image', admission_lastname='$lname',admission_firstname='$fname', admission_middlename='$mname', email='$email', username='$username', password='$hashedPwd' WHERE admission_id = '$id' ")or die(mysqli_error($db));

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
$qwerty = mysqli_query($db,"SELECT * from tbl_admissions where admission_id = '".$_GET['admission_id']."' ");
                                    while($row = mysqli_fetch_array($qwerty)){
?>
                  <form method="POST" class="form-horizontal" autocomplete="off" enctype="multipart/form-data">
                    <div class="card-profile">
                      <div class="card-avatar">
                          <img class="img" src="data:image/jpeg;base64,<?php echo base64_encode( $row['img'] )?>" />
                      </div>
                      <div class="card-body">
                        <input type="file" name="image" class="btn btn-raised btn-round btn-default btn-file">
                      </div>
                    </div>
                  <fieldset style="border: 1px solid;padding: 0px 10px;border-color: #d2d2d2">
                    <legend style="text-align:center">PERSONAL DATA</legend>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Last Name</label>
                          <input name="lname" type="text" class="form-control" value="<?php echo $row['admission_lastname'] ?>">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">First Name</label>
                          <input name="fname" type="text" class="form-control" value="<?php echo $row['admission_firstname'] ?>">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Middle Name</label>
                          <input name="mname" type="text" class="form-control" value="<?php echo $row['admission_middlename'] ?>">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6 offset-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">E-mail</label>
                          <input name="email" type="email" class="form-control" value="<?php echo $row['email'] ?>">
                        </div>
                      </div>
                    </div>
                  </fieldset>
                    <br>
                    <fieldset  style="border: 1px solid;padding: 0px 10px;border-color: #d2d2d2">
                    <legend style="text-align:center">ACCOUNT DETAILS</legend>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Username</label>
                          <input name="username" type="text" class="form-control" value="<?php echo $row['username'] ?>">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Password</label>
                          <input name="password" type="password" class="form-control" required>
                        </div>
                      </div>
                    </div>
                    </fieldset>
                    <br>
                    <button type="submit" name="update" class="btn btn-primary pull-right">Update Admission Staff</button>
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
