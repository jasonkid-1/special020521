<?php session_start();
ob_start(); ?>
<?php include '../../includes/db.php';
$email = $_GET['email'];
$code = $_GET['activation_code'];?>
<!DOCTYPE html>
<html>
<?php include '../../includes/head_css.php' ?>

<body class="">

<nav class="navbar navbar-expand-lg navbar navbar-absolute fixed-top ">
  <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="login.php"><img src="../../assets/img/logo.png" style="height: 50px;width: 50px;position: relative;margin-top:-10px;"> <strong>Saint Francis of Assisi College - Bacoor Campus</strong></a>
          </div>
  </div>
</nav>
<div class="content" style="margin-top: 70px;
  padding: 30px 15px;
  min-height: calc(100vh - 123px);">
          <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header card-header-danger">
                        <h3 class="card-title"><strong>Reset Password</strong></h3>
                    </div>
                    <div class="card-body">

                        <h5>Please enter your new password</h5><br>
                      <form class="form-horizontal" method="POST" autocomplete="off">
                        <div class="row">
                          <div class="col-md-8 offset-md-2">
                            <div class="form-group">
                              <label class="bmd-label-floating">Enter New Password</label>
                              <input type="password" name="password" class="form-control">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-8 offset-md-2">
                            <div class="form-group">
                              <label class="bmd-label-floating">Confirm Password</label>
                              <input type="password" name="password1" class="form-control">
                            </div>
                          </div>
                        </div>
                        <hr>
                        <button type="submit" name="submit" class="btn btn-text-white bg-dark pull-right">Submit</button>
                        <div class="clearfix"></div>
                      </form>
                    </div>
              </div>
            </div>
            <div class="col-lg-3"></div>
          </div><!--END OF ROW -->
          <hr>
         
<?php 

if (isset($_POST['submit'])) {
  # code...
        $email = $_GET['email'];
        $code = $_GET['code'];
        $password = mysqli_real_escape_string($db,$_POST['password']);
        $confirm = mysqli_real_escape_string($db,$_POST['password1']);

        if ($password == $confirm) {
            $super_admin = mysqli_query($db, "SELECT * from tbl_super_admins where email = '$email' ");
            $numrow2 = mysqli_num_rows($super_admin);

            $admin = mysqli_query($db, "SELECT * from tbl_admins where email = '$email' ");
            $numrow = mysqli_num_rows($admin);

            $student = mysqli_query($db, "SELECT * from tbl_students where email = '$email' ");
            $numrow1 = mysqli_num_rows($student);

            $faculty = mysqli_query($db, "SELECT * from tbl_faculties where email = '$email' ");
            $numrow3 = mysqli_num_rows($faculty);

            $faculty_staff = mysqli_query($db, "SELECT * from tbl_faculties_staff where email = '$email' ");
            $numrow4 = mysqli_num_rows($faculty_staff);

            $admission = mysqli_query($db, "SELECT * from tbl_admissions where email = '$email' ");
            $numrow5 = mysqli_num_rows($admission);

            if ($numrow == 1) {
              $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
              $query3 = mysqli_query($db,"UPDATE tbl_admins set password='".$hashedPwd."' where email='".$email."' and activation_code='".$code."'")or die(mysqli_error($db)); 
              echo "<script>alert('Password successfully changed!'); window.location='login.php'</script>";
            }
            elseif ($numrow1 == 1) {
              $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
              $query3 = mysqli_query($db,"UPDATE tbl_students set password='".$hashedPwd."' where email='".$email."' and activation_code='".$code."'")or die(mysqli_error($db)); 
              echo "<script>alert('Password successfully changed!'); window.location='login.php'</script>";
            }
            elseif ($numrow2 == 1) {
              $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
              $query3 = mysqli_query($db,"UPDATE tbl_super_admins set password='".$hashedPwd."' where email='".$email."' and activation_code='".$code."'")or die(mysqli_error($db)); 
              echo "<script>alert('Password successfully changed!'); window.location='login.php'</script>";
            }
            elseif ($numrow3 == 1) {
              $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
              $query3 = mysqli_query($db,"UPDATE tbl_faculties set password='".$hashedPwd."' where email='".$email."' and activation_code='".$code."'")or die(mysqli_error($db)); 
              echo "<script>alert('Password successfully changed!'); window.location='login.php'</script>";
            }
            elseif ($numrow4 == 1) {
              $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
              $query3 = mysqli_query($db,"UPDATE tbl_faculties_staff set password='".$hashedPwd."' where email='".$email."' and activation_code='".$code."'")or die(mysqli_error($db)); 
              echo "<script>alert('Password successfully changed!'); window.location='login.php'</script>";
            }
            elseif ($numrow5 == 1) {
              $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
              $query3 = mysqli_query($db,"UPDATE tbl_admissions set password='".$hashedPwd."' where email='".$email."' and activation_code='".$code."'")or die(mysqli_error($db)); 
              echo "<script>alert('Password successfully changed!'); window.location='login.php'</script>";
            }
            else{
              echo "<script>alert('Someting went wrong!'); window.location='login.php'</script>";
            }
        }else{
            echo "<script>alert('Password did not match!')</script>";
        }
}

?>


      
<!-- End of Globel Code -->
</div>
  <!--   Core JS Files   -->
  <?php include '../../includes/script.php' ?>
</body>

</html>