<?php 
include '../../includes/session.php';
include '../../includes/db.php'; 



if (isset($_POST['submit'])) {

  $stud_no = mysqli_real_escape_string($db,$_POST['stud_no']);
  $curri = mysqli_real_escape_string($db,$_POST['curri']);
  $username = mysqli_real_escape_string($db,$_POST['username']);
  $password = mysqli_real_escape_string($db,$_POST['password']);
  $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

 $chk = mysqli_query($db,"SELECT * FROM tbl_students where stud_no = '$stud_no'");
    $ct = mysqli_num_rows($chk);
// $query = mysqli_query($db,"INSERT INTO tbl_students (img,stud_no, course_id, gender, lastname, firstname, middlename, birthdate, birthplace, age, religion, citizenship, civilstatus, contact, email, flastname, ffirstname,fmiddlename, fage, foccupation, mlastname, mfirstname, mmiddlename, mage, moccupation, familyincome, nosiblings, glastname, gfirstname, gmiddlename, relationship, gaddress, elem, elemSY, elemAddress, hs, hsSY, hsAddress, lastschool, course_year, lastSY, lastAddress, username, password) values ('$image','$studno', '$course','$gender', '$lastname', '$firstname', '$middlename','$birthdate','$birthplace','$age','$religion','$citizenship','$civilstatus', '$contact', '$email', '$flastname', '$ffirstname', '$fmiddlename', '$fage','$foccupation', '$mlastname', '$mfirstname','$mmiddlename','$mage', '$moccupation', '$familyincome', '$nosiblings', '$glastname', '$gfirstname', '$gmiddlename', '$relationship', '$gaddress', '$elem', '$elemSY', '$elemAddress', '$hs', '$hsSY', '$hsAddress', '$lastschool', '$course_year', '$lastSY', '$lastAddress', '$username', '$hashedPwd')"); 
if($ct == 0){

  $query = mysqli_query($db,"INSERT INTO tbl_students (img,stud_no, course_id, gender_id, lastname, firstname, middlename, birthdate, birthplace, age, religion, citizenship, civilstatus, contact, email, flastname, ffirstname,fmiddlename, fage, foccupation, mlastname, mfirstname, mmiddlename, mage, moccupation, familyincome, nosiblings, glastname, gfirstname, gmiddlename, relationship, gaddress, elem, elemSY, elemAddress, hs, hsSY, hsAddress, lastschool, course_year, lastSY, lastAddress, username, password,curri) values ('','$stud_no', '','', '', '', '','','','','','','', '', '', '', '', '', '','', '', '','','', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '$username', '$hashedPwd','$curri')")or die (mysqli_error($db));
    if($query == true)
    {
      message("Student Successfully Added!","success");
    }
  }else{
      message("Student No. already exist!","error");
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
                    <legend style="text-align:center">STUDENT'S DATA</legend>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">StudentID Number</label>
                          <input name="stud_no" type="text" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <select required name="curri" id="curri" data-style="btn btn-primary btn-round"  class="form-control select-2">
                            <option selected disabled>Select Curriculum</option>
                            <option value="Old Curri">Old Curriculum(Effective A.Y. 2008-2009)</option>
                            <option value="New Curri">New Curriculum(Effective A.Y. 2018-2019)</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <hr>
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
                          <input name="password" type="password" class="form-control">
                        </div>
                      </div>
                    </div>
                  </fieldset>
                    <br>
                    <a href="javascript:history.back()" class="btn btn-default">
                    <i class="material-icons">keyboard_backspace</i> Back
                    </a>
                    <button type="submit" name="submit" class="btn btn-primary pull-right">Add Student</button>
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
