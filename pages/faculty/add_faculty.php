<?php 
include '../../includes/session.php';
include '../../includes/db.php';

if (isset($_POST['submit'])) {

  $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
  $faculty_no = mysqli_real_escape_string($db,$_POST['faculty_no']);
  $position = mysqli_real_escape_string($db,$_POST['position']);
  $department = mysqli_real_escape_string($db,$_POST['department']);
  $role = mysqli_real_escape_string($db,$_POST['role']);
  $status = mysqli_real_escape_string($db,$_POST['status']);
  $email = mysqli_real_escape_string($db,$_POST['email']);
  $lastname = mysqli_real_escape_string($db,$_POST['lastname']);
  $firstname = mysqli_real_escape_string($db,$_POST['firstname']);
  $middlename = mysqli_real_escape_string($db,$_POST['middlename']);
  $username = mysqli_real_escape_string($db,$_POST['username']);
  $password = mysqli_real_escape_string($db,$_POST['password']);
  $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
  $created_at = date('Y-m-d H:i:s');

  $query = mysqli_query($db,"INSERT INTO tbl_faculties (img,faculty_no, faculty_lastname, faculty_firstname, faculty_middlename, position, department_id, role, status, activation_code, email, username, password, created_at) values ('$image','$faculty_no', '$lastname','$firstname', '$middlename', '$position', '$department', '$role', '$status', '','$email','$username', '$hashedPwd', '$created_at')")or die (mysqli_error($db));
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
                    <div class="card-profile">
                      <div class="card-avatar">
                          <img class="img" src="../../assets/img/user.png" alt="User Image" />
                      </div>
                      <div class="card-body">
                        <input type="file" name="image" class="btn btn-raised btn-round btn-default btn-file">
                      </div>
                    </div>
                  <fieldset style="border: 1px solid;padding: 0px 10px;border-color: #d2d2d2">
                    <legend style="text-align:center">FACULTY DATA</legend>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Last Name</label>
                          <input name="lastname" type="text" class="form-control" required="required">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">First Name</label>
                          <input name="firstname" type="text" class="form-control" required="required">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Middle Name</label>
                          <input name="middlename" type="text" class="form-control" required="required">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Faculty Number</label>
                          <input name="faculty_no" type="text" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">E-mail</label>
                          <input name="email" type="email" class="form-control" required="required">
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
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Role</label>
                          <input name="role" type="text" class="form-control" required="required">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <select name="status" id="status" data-style="btn btn-primary btn-round" required class="form-control select-2">
                            <option disabled selected>Select Employment Status</option>
                            <option value="Full-time">Full-time</option>
                            <option value="Part-time">Part-time</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Position</label>
                          <input name="position" type="text" class="form-control" required="required">
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
                          <input name="username" type="text" class="form-control">
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
                    <a href="javascript:history.back()" class="btn btn-default">
                    <i class="material-icons">keyboard_backspace</i> Back
                    </a>
                    <button type="submit" name="submit" class="btn btn-default pull-right">Add Faculty</button>
                    <div class="clearfix"></div>
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