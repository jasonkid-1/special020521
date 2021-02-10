<?php 
ob_start();
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<?php include '../../includes/head_css.php' ?>

<body class="" style="background-image: linear-gradient(rgba(00,0,0,0),rgba(47,23,15,.65)), url('../../assets/img/dota.png');
  background-attachment: fixed;
  background-position: auto;
  background-size: cover">

<nav class="navbar navbar-expand-lg navbar navbar-absolute fixed-top ">
  <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="http://stfrancisbacoor.com"><img src="../../assets/img/logo.png" style="height: 50px;width: 50px;position: relative;margin-top:-10px;"> <strong>Saint Francis of Assisi College - Bacoor Campus</strong></a>
          </div>
  </div>
</nav>
<div class="content" style="margin-top: 70px;
  padding: 30px 15px;
  min-height: calc(100vh - 123px);">
          <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header card-header-danger">
                        <h3 class="card-title">Student Portal</h3>
                    </div>
                    <div class="card-body">
                          <br><h4>With your Student Portal, you can:</h4><br>
                          <ul style="list-style-type: none;">
                            <li><i class="fa fa-2x fa-user"></i> &nbsp; View your personal information</li><br>
                            <li><i class="fa fa-2x fa-calendar"></i> &nbsp; View your current schedule, academic grades, assessment and curriculum</li><br>
                            <li><i class="fa fa-2x fa-globe"></i> &nbsp; Enroll Online</li><br>
                          </ul>
                    </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="card">
                <div class="card-header card-header-tabs card-header-danger">
                  <div class="nav-tabs-navigation">
                    <div class="nav-tabs-wrapper">
                      <ul class="nav nav-tabs" data-tabs="tabs">
                        <li class="nav-item">
                          <a class="nav-link active" href="#profile" data-toggle="tab">
                            <i class="material-icons">assignment_ind</i> Login
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#messages" data-toggle="tab">
                            <i class="material-icons">web</i> Website
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="tab-content">
                    <div class="tab-pane active" id="profile">
                      <form class="form-horizontal" method="POST" autocomplete="off">
                        <div class="row">
                          <div class="col-md-8 offset-md-2">
                            <div class="form-group">
                              <label class="bmd-label-floating">Username</label>
                              <input type="text" name="username" autofocus="on" autocomplete="off" class="form-control">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-8 offset-md-2">
                            <div class="form-group">
                              <label class="bmd-label-floating">Password</label>
                              <input type="password" name="password" class="form-control" autocomplete="off">
                            </div>
                          </div>
                        </div><hr>
                        <a href="forgot_pass.php" class="pull-left">Forgot Password?</a>
                        <button type="submit" name="login" class="btn btn-text-white bg-dark pull-right">Login</button>
                        <div class="clearfix"></div>
                      </form>
                    </div>
                    <div class="tab-pane" id="messages">
                      <table class="table">
                        <tbody>
                          <tr>
                            <td>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox" value="" checked>
                                  <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                </label>
                              </div>
                            </td>
                            <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                            </td>
                            <td class="td-actions text-right">
                              <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                <i class="material-icons">edit</i>
                              </button>
                              <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                <i class="material-icons">close</i>
                              </button>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox" value="">
                                  <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                </label>
                              </div>
                            </td>
                            <td>Sign contract for "What are conference organizers afraid of?"</td>
                            <td class="td-actions text-right">
                              <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                <i class="material-icons">edit</i>
                              </button>
                              <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                <i class="material-icons">close</i>
                              </button>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="tab-pane" id="settings">
                      <table class="table">
                        <tbody>
                          <tr>
                            <td>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox" value="">
                                  <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                </label>
                              </div>
                            </td>
                            <td>Lines From Great Russian Literature? Or E-mails From My Boss?</td>
                            <td class="td-actions text-right">
                              <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                <i class="material-icons">edit</i>
                              </button>
                              <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                <i class="material-icons">close</i>
                              </button>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox" value="" checked>
                                  <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                </label>
                              </div>
                            </td>
                            <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                            </td>
                            <td class="td-actions text-right">
                              <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                <i class="material-icons">edit</i>
                              </button>
                              <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                <i class="material-icons">close</i>
                              </button>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox" value="" checked>
                                  <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                </label>
                              </div>
                            </td>
                            <td>Sign contract for "What are conference organizers afraid of?"</td>
                            <td class="td-actions text-right">
                              <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                <i class="material-icons">edit</i>
                              </button>
                              <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                <i class="material-icons">close</i>
                              </button>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div><!--END OF ROW -->
          <hr>
          <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-10">
              <h4>Follow us on:</h4>
                <a href="https://www.facebook.com/sfacbacoor/"><i class="fa fa-2x fa-facebook"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="https://twitter.com/mysfac"><i class="fa fa-2x fa-twitter"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="https://www.instagram.com/explore/locations/417087977/st-francis-of-assisi-college-bayanan-bacoor-cavite/?hl=en"><i class="fa fa-2x fa-instagram"></i></a>
                      </div>
            <div class="col-lg-1"></div>
          </div>
<?php
        include "../../includes/db.php";
        if(isset($_POST['login']))
        { 
            $username = mysqli_real_escape_string($db, $_POST['username']);
            $password = mysqli_real_escape_string($db, $_POST['password']);

            $super_admin = mysqli_query($db, "SELECT * FROM tbl_super_admins where username = '$username' ");
            $numrow2 = mysqli_num_rows($super_admin);

            $admin = mysqli_query($db, "SELECT * FROM tbl_admins where username = '$username' ");
            $numrow = mysqli_num_rows($admin);

            $student = mysqli_query($db, "SELECT * FROM tbl_students where username = '$username' ");
            $numrow1 = mysqli_num_rows($student);

            $faculty = mysqli_query($db, "SELECT *,tbl_departments.department_id FROM tbl_faculties left join tbl_departments on tbl_departments.department_id = tbl_faculties.department_id where username = '$username' ");
            $numrow3 = mysqli_num_rows($faculty);

            $dean = mysqli_query($db, "SELECT * FROM tbl_deans where username = '$username' ");
            $numrow4 = mysqli_num_rows($dean);

          /*  $faculty_staff = mysqli_query($db, "SELECT * FROM tbl_faculties_staff where username = '$username' ");
            $numrow5 = mysqli_num_rows($faculty_staff); */

            $admission = mysqli_query($db, "SELECT * FROM tbl_admissions where username = '$username' ");
            $numrow6 = mysqli_num_rows($admission);

            $president = mysqli_query($db, "SELECT * FROM tbl_presidents where username = '$username' ");
            $numrow7 = mysqli_num_rows($president);

            $accounting = mysqli_query($db, "SELECT * FROM tbl_accounting where username = '$username' ");
            $numrow8 = mysqli_num_rows($accounting);


            if($numrow > 0)
            {   
                while($row = mysqli_fetch_array($admin))
                {
                  $hashedPwdCheck = password_verify($password, $row['password']);
                  if ($hashedPwdCheck == false) 
                  {
                    echo "<script>alert('Your password is invalid!'); window.location='login.php'</script>";
                    exit();
                  } 
                  elseif ($hashedPwdCheck == true) 
                  {
                    $_SESSION['role'] = "Registrar";
                    $_SESSION['userid'] = $row['admin_id'];
                    $_SESSION['name'] = $row['admin_lastname'].', '.$row['admin_firstname'];
                  }    
                  header("location:../dashboard/index.php");
                }
            }
            elseif($numrow1 > 0)
              {   
                while($row = mysqli_fetch_array($student))
                {
                  $hashedPwdCheck1 = password_verify($password, $row['password']);
                  if ($hashedPwdCheck1 == false) 
                  {
                    echo "<script>alert('Your password is invalid!'); window.location='login.php'</script>";
                    exit();
                  } 
                  elseif ($hashedPwdCheck1 == true) 
                  {
                   $_SESSION['role'] = "Student";
                   $_SESSION['userid'] = $row['stud_id'];
                  } 
                 header("location:../dashboard/index.php");
                }
              }
            elseif($numrow2 > 0)
              {   
                while($row = mysqli_fetch_array($super_admin))
                {
                  $hashedPwdCheck1 = password_verify($password, $row['password']);
                  if ($hashedPwdCheck1 == false) 
                  {
                    echo "<script>alert('Your password is invalid!'); window.location='login.php'</script>";
                    exit();
                  } 
                  elseif ($hashedPwdCheck1 == true) 
                  {
                   $_SESSION['role'] = "Super Administrator";
                   $_SESSION['userid'] = $row['sa_id'];
                  } 
                  header("location:../dashboard/index.php");
                }
              }
            elseif($numrow3 > 0)
              {   
                while($row = mysqli_fetch_array($faculty))
                {
                  $hashedPwdCheck1 = password_verify($password, $row['password']);
                  if ($hashedPwdCheck1 == false) 
                  {
                    echo "<script>alert('Your password is invalid!'); window.location='login.php'</script>";
                    exit();
                  } 
                  elseif ($hashedPwdCheck1 == true) 
                  {
                   $_SESSION['role'] = "Faculty";
                   $_SESSION['userid'] = $row['faculty_id'];
                   $_SESSION['department'] = $row['department_name'];
                   $_SESSION['name']= $row['faculty_lastname'].', '.$row['faculty_firstname'];
                  } 
                  header("location:../dashboard/index.php");
                }
              }
            elseif($numrow4 > 0)
              {   
                while($row = mysqli_fetch_array($dean))
                {
                  $hashedPwdCheck1 = password_verify($password, $row['password']);
                  if ($hashedPwdCheck1 == false) 
                  {
                    echo "<script>alert('Your password is invalid!'); window.location='login.php'</script>";
                    exit();
                  } 
                  elseif ($hashedPwdCheck1 == true) 
                  {
                   $_SESSION['role'] = "Dean";
                   $_SESSION['userid'] = $row['dean_id'];
                  } 
                  header("location:../dashboard/index.php");
                }
              }
            elseif($numrow5 > 0)
              {   
                while($row = mysqli_fetch_array($faculty_staff))
                {
                  $hashedPwdCheck1 = password_verify($password, $row['password']);
                  if ($hashedPwdCheck1 == false) 
                  {
                    echo "<script>alert('Your password is invalid!'); window.location='login.php'</script>";
                    exit();
                  } 
                  elseif ($hashedPwdCheck1 == true) 
                  {
                   $_SESSION['role'] = "Faculty Staff";
                   $_SESSION['userid'] = $row['faculty_id'];
                   $_SESSION['name']= $row['faculty_lastname'].', '.$row['faculty_firstname'];
                  } 
                 header("location:../dashboard/index.php");
                }
              }
              elseif($numrow6 > 0)
              {   
                while($row = mysqli_fetch_array($admission))
                {
                  $hashedPwdCheck1 = password_verify($password, $row['password']);
                  if ($hashedPwdCheck1 == false) 
                  {
                    echo "<script>alert('Your password is invalid!'); window.location='login.php'</script>";
                    exit();
                  } 
                  elseif ($hashedPwdCheck1 == true) 
                  {
                   $_SESSION['role'] = "Admission Staff";
                   $_SESSION['userid'] = $row['admission_id'];
                  } 
                 header("location:../dashboard/index.php");
                }
              }
              elseif($numrow7 > 0)
              {   
                while($row = mysqli_fetch_array($president))
                {
                  $hashedPwdCheck1 = password_verify($password, $row['password']);
                  if ($hashedPwdCheck1 == false) 
                  {
                    echo "<script>alert('Your password is invalid!'); window.location='login.php'</script>";
                    exit();
                  } 
                  elseif ($hashedPwdCheck1 == true) 
                  {
                   $_SESSION['role'] = "President";
                   $_SESSION['userid'] = $row['pres_id'];
                  } 
                 header("location:../dashboard/index.php");
                }
              }
                 elseif($numrow8 > 0)
              {   
                while($row = mysqli_fetch_array($accounting))
                {
                  $hashedPwdCheck1 = password_verify($password, $row['password']);
                  if ($hashedPwdCheck1 == false) 
                  {
                    echo "<script>alert('Your password is invalid!'); window.location='login.php'</script>";
                    exit();
                  } 
                  elseif ($hashedPwdCheck1 == true) 
                  {
                   $_SESSION['role'] = "Accounting";
                   $_SESSION['userid'] = $row['account_id'];
                  } 
                 header("location:../dashboard/index.php");
                }
              }
             else
                {
                echo "<script>alert('Invalid Account!'); window.location='login.php'</script>";
                }
             
        }
      ?>
                <!-- Start of Globel Code -->
<CENTER>
<script language="JavaScript">
var count = "asda";          // Change Your Account?
var type = "chicago";       // Change Your Counter Image?
var digits = "8";          // Change The Amount of Digits on Your Counter?
var prog = "hit";          // Change to Either hit/unique?
var statslink = "no";    // provide statistical link in counter yes/no?
var sitelink = "yes";     // provide link back to our site;~) yes/no?
var cntvisible = "yes"; // do you want counter visible yes/no?
</script>
<!-- START DO NOT TAMPER WITH ANYTHING ELSE BELOW THIS LINE FOR YOUR WEBTV & UNIX VISITORS -->
<script language="JavaScript" src="http://006.free-counters.co.uk/count-123.js">
</script>
<noscript>
<a href="http://www.free-counters.co.uk" target="_blank">
<img  src="http://006.free-counters.co.uk/count-123.pl?count=asda&cntvisible=no&mode=noscript" alt="Free Counters" title="Free Counters" border="0">
</a>The following text will not be seen after you upload your website,
please keep it in order to retain your counter functionality 
<br><a href="http://www.free-counters.co.uk" target="_blank">Free Trackers</a><br> <a href="http://www.free-counters.co.uk" target="_blank">Help</a><br>

</noscript>
<!-- END DO NOT TAMPER WITH ANYTHING ELSE ABOVE THIS LINE FOR YOUR WEBTV & UNIX VISITORS -->
</CENTER>        
<!-- End of Globel Code -->
</div>
  <!--   Core JS Files   -->
  <?php include '../../includes/script.php' ?>
</body>

</html>
