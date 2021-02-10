<?php 
include '../../includes/session.php';

include '../../includes/db.php'; 

if (isset($_POST['submit'])) {

  $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
  $lname = mysqli_real_escape_string($db,$_POST['lname']);
  $fname = mysqli_real_escape_string($db,$_POST['fname']);
  $mname = mysqli_real_escape_string($db,$_POST['mname']);
  $email = mysqli_real_escape_string($db,$_POST['email']);
  $username = mysqli_real_escape_string($db,$_POST['username']);
  $password = mysqli_real_escape_string($db,$_POST['password']);
  $hashedPwd = password_hash($password, PASSWORD_DEFAULT);


$query = mysqli_query($db,"INSERT INTO tbl_deans(img, dean_firstname, dean_middlename, dean_lastname, activation_code, email, username, password) values ('$image', '$fname', '$mname', '$lname', '', '$email', '$username', '$hashedPwd')") or die (mysqli_error($db)); 


// $query = mysqli_query($db,"UPDATE tbl_students SET img = '".$image."', course_id = '".$course."', gender_id = '".$gender."', lastname = '".$lastname."', firstname = '".$firstname."', middlename = '".$middlename."', address = '".$address."', birthdate = '".$birthdate."', birthplace = '".$birthplace."', age = '".$age."', religion = '".$religion."', citizenship = '".$citizenship."', civilstatus = '".$civilstatus."', contact = '".$contact."', email = '".$email."', flastname = '".$flastname."', ffirstname = '".$ffirstname."',fmiddlename = '".$fmiddlename."', fage = '".$fage."', foccupation = '".$foccupation."', mlastname = '".$mlastname."', mfirstname = '".$mfirstname."', mmiddlename = '".$mmiddlename."', mage ='".$mage."', moccupation = '".$moccupation."', familyincome = '".$familyincome."', nosiblings = '".$nosiblings."', glastname = '".$glastname."', gfirstname = '".$gfirstname."', gmiddlename = '".$gmiddlename."', relationship = '".$relationship."', gaddress = '".$gaddress."', elem = '".$elem."', elemSY = '".$elemSY."', elemAddress = '".$elemAddress."', hs = '".$hs."', hsSY = '".$hsSY."', hsAddress = '".$hsAddress."', lastschool = '".$lastschool."', course_year = '".$course_year."', lastSY = '".$lastSY."', lastAddress = '".$lastAddress."', username = '".$username."', password = '".$hashedPwd."' where stud_id = '".$stud_id."' ") or die (mysqli_error($db));
    if($query == true)
    {
      message("Added!","info");
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
<?php
check_message();
?>
              <div class="card">
                <div class="card-body">
                  <form method="POST" class="form-horizontal" autocomplete="off" enctype="multipart/form-data">
                    <div class="card-profile">
                      <div class="card-avatar">
                          <img class="img" src="../../assets/img/user.png" />
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
                          <input name="lname" type="text" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">First Name</label>
                          <input name="fname" type="text" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Middle Name</label>
                          <input name="mname" type="text" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6 offset-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">E-mail</label>
                          <input name="email" type="email" class="form-control">
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
                    <button type="submit" name="submit" class="btn btn-default pull-right">Add Dean</button>
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
