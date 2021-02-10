<?php 
include '../../includes/session.php';
include '../../includes/db.php';

if (isset($_POST['submit'])) {

    $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
    $faculty_no = mysqli_real_escape_string($db, $_POST['faculty_no']);
    $lname = mysqli_real_escape_string($db, $_POST['lname']);
    $fname = mysqli_real_escape_string($db, $_POST['fname']);
    $mname = mysqli_real_escape_string($db, $_POST['mname']);
    $position = mysqli_real_escape_string($db, $_POST['position']);
    $role = mysqli_real_escape_string($db, $_POST['role']);
    $department = mysqli_real_escape_string($db, $_POST['department']);
    $status = mysqli_real_escape_string($db, $_POST['status']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password =mysqli_real_escape_string($db,$_POST['password']);
    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

    $query = mysqli_query($db," UPDATE tbl_faculties SET img='$image', faculty_no='$faculty_no', faculty_lastname='$lname',faculty_firstname='$fname', faculty_middlename='$mname', position='$position', department_id='$department', role='$role', status='$status', email='$email', username='$username', password='$hashedPwd' where faculty_id = '".$_SESSION['userid']."'")or die (mysqli_error($db));
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
                  <form method="POST" class="form-horizontal" autocomplete="off" enctype="multipart/form-data">
<?php 
$q = mysqli_query($db,"SELECT *,tbl_departments.department_id from tbl_faculties LEFT JOIN tbl_departments ON tbl_departments.department_id = tbl_faculties.department_id where faculty_id = '".$_SESSION['userid']."'")or die(mysqli_error($db));
      while ($row = mysqli_fetch_array($q)) 
        { echo '
                    <div class="card-profile">
                      <div class="card-avatar">
                          <img class="img" src="data:image/jpeg;base64,'.base64_encode( $row['img'] ).'" />
                      </div>
                      <div class="card-body">
                        <input type="file" name="image" class="btn btn-raised btn-round btn-default btn-file">
                      </div>
                    </div>'; 
?>
                  <fieldset style="border: 1px solid;padding: 0px 10px;border-color: #d2d2d2">
                    <legend style="text-align:center">PERSONAL DATA</legend>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">FacultyID Number</label>
                          <input name="faculty_no" type="text" class="form-control" value="<?php echo $row['faculty_no'] ?>">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Last Name</label>
                          <input name="lname" type="text" class="form-control" value="<?php echo $row['faculty_lastname'] ?>">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">First Name</label>
                          <input name="fname" type="text" class="form-control" value="<?php echo $row['faculty_firstname'] ?>">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Middle Name</label>
                          <input name="mname" type="text" class="form-control" value="<?php echo $row['faculty_middlename'] ?>">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Position</label>
                          <input name="position" type="text" class="form-control" value="<?php echo $row['email'] ?>">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Role</label>
                          <input name="role" type="text" class="form-control" value="<?php echo $row['role'] ?>">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <select name="department" id="department" data-style="btn btn-primary btn-round" required class="form-control select-2">
                            <option value="<?php echo $row['department_id'] ?>" selected><?php echo $row['department_name'] ?></option>
                            <?php 
                        $q = mysqli_query($db,"SELECT * from tbl_departments where department_id not in ('".$row['department_id']."')");
                        while($row1=mysqli_fetch_array($q)){
                            echo '<option value="'.$row1['department_id'].'">'.$row1['department_name'].'</option>';
                                }
                              ?>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Position</label>
                          <input name="position" type="text" class="form-control" value="<?php echo $row['position'] ?>">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <select name="status" id="status" data-style="btn btn-primary btn-round" required class="form-control select-2">
                            <option value="<?php echo $row['status'] ?>" selected><?php echo $row['status'] ?></option>
                            <option value="Full-time">Full-time</option>
                            <option value="Part-time">Part-time</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-4">
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
                          <input name="username" type="text" value="<?php echo $row['username']; ?>" class="form-control" required>
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
                    <button type="submit" name="submit" class="btn btn-default pull-right">Update</button>
                    <div class="clearfix"></div>
<?php } ?>
                  </form>
                </div>
              </div>
            </div>
            <!-- <div class="col-md-4">
              <div class="card card-profile">
                <div class="card-avatar">
                  <a href="#pablo">
                    <img class="img" src="../../assets/img/faces/marc.jpg" />
                  </a>
                </div>
                <div class="card-body">
                  <h6 class="card-category text-gray">CEO / Co-Founder</h6>
                  <h4 class="card-title">Alec Thompson</h4>
                  <p class="card-description">
                    Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                  </p>
                  <a href="#pablo" class="btn btn-primary btn-round">Follow</a>
                </div>
              </div>
            </div> -->
          </div>
        </div>
      </div>
      <?php include '../../includes/footer.php';?>
    </div>
  </div>
<?php include '../../includes/script.php'; ?>
</body>

</html>