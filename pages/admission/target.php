<?php 
include '../../includes/session.php';

include '../../includes/db.php'; 

if (isset($_POST['submit'])) {

  $lname = mysqli_real_escape_string($db,$_POST['lname']);
  $fname = mysqli_real_escape_string($db,$_POST['fname']);
  $compared = mysqli_real_escape_string($db,$_POST['compared']);
  


$query = mysqli_query($db,"UPDATE tbl_enrollment_target SET new = '$lname',old = '$fname', semester = '$_SESSION[active_sem]',acad_year = '$_SESSION[active_acad]',compared = '$compared'") or die (mysqli_error($db)); 


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
                    
                  <fieldset style="border: 1px solid;padding: 0px 10px;border-color: #d2d2d2">
                    <legend style="text-align:center">Enrollment Target for <?php echo $_SESSION['active_acad'].' - '.$_SESSION['active_sem']; ?></legend><br>
                    <?php $q = mysqli_query($db,"SELECT * FROM tbl_enrollment_target where target_id = '1'");
                    while ($row = mysqli_fetch_array($q)){ ?>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">New Student</label>
                          <input name="lname" type="text" value="<?php echo $row['new']; ?>" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Old Student</label>
                          <input name="fname" type="text" value="<?php echo $row['old']; ?>" class="form-control">
                        </div>
                      </div>

                      
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                          
                          <div class="form-group"><label>Compared to:</label>
                    <select name="compared" id="sem" data-style="btn btn-primary btn-round" required class="form-control select-2">
                      <option selected value="<?php echo $row['compared']; ?>"><?php echo $row['compared']; ?></option>
                              <?php 
                                $q = mysqli_query($db,"SELECT * from tbl_acadyears where academic_year not in ('".$row['academic_year']."')");
                                while($row=mysqli_fetch_array($q)){
                                    echo '<option value="'.$row['academic_year'].'">'.$row['academic_year'].'</option>';
                                  }
                              ?>
                    </select>
                  </div>
                        </div>
                      </div>
                  <?php } ?>
                    <br>
                    <button type="submit" name="submit" class="btn btn-default pull-right">Save</button>
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
