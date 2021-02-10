<?php include '../../includes/db.php'; 

if (isset($_POST['submit'])) {

  $stud_id = mysqli_real_escape_string($db,$_POST['stud_id']);
  $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
  $course = mysqli_real_escape_string($db,$_POST['course']);


// $query = mysqli_query($db,"INSERT INTO tbl_students (img,stud_no, course_id, gender, lastname, firstname, middlename, birthdate, birthplace, age, religion, citizenship, civilstatus, contact, email, flastname, ffirstname,fmiddlename, fage, foccupation, mlastname, mfirstname, mmiddlename, mage, moccupation, familyincome, nosiblings, glastname, gfirstname, gmiddlename, relationship, gaddress, elem, elemSY, elemAddress, hs, hsSY, hsAddress, lastschool, course_year, lastSY, lastAddress, username, password) values ('$image','$studno', '$course','$gender', '$lastname', '$firstname', '$middlename','$birthdate','$birthplace','$age','$religion','$citizenship','$civilstatus', '$contact', '$email', '$flastname', '$ffirstname', '$fmiddlename', '$fage','$foccupation', '$mlastname', '$mfirstname','$mmiddlename','$mage', '$moccupation', '$familyincome', '$nosiblings', '$glastname', '$gfirstname', '$gmiddlename', '$relationship', '$gaddress', '$elem', '$elemSY', '$elemAddress', '$hs', '$hsSY', '$hsAddress', '$lastschool', '$course_year', '$lastSY', '$lastAddress', '$username', '$hashedPwd')"); 


$query = mysqli_query($db,"UPDATE tbl_sidebar SET side_logo = '".$image."', side_name = '".$course."' where side_id = '".$stud_id."' ") or die (mysqli_error($db));
    if($query == true)
    {
      echo "<script>alert('Successfull!');</script>";
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
              <div class="card">
                <div class="card-body">
                  <form method="POST" class="form-horizontal" autocomplete="off" enctype="multipart/form-data">
                     <?php 
                $q = mysqli_query($db,"SELECT * FROM tbl_sidebar where side_id = '1'");
                while ($row = mysqli_fetch_array($q))
                  {echo '
                    <div class="card-profile">
                      <div class="card-avatar">
                          <img class="img" src="data:image/jpeg;base64,'.base64_encode( $row['side_logo'] ).'" />
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
                        <input name="stud_id" type="hidden" class="form-control" value="1">
                          <label class="bmd-label-floating">Student Number</label>
                          <input name="course" type="text" class="form-control" value="'.$row['side_name'].'">
                        </div>
                      </div>
                    </div>
                    
                  </fieldset>
                  
                    <br>
                    <button type="submit" name="submit" class="btn btn-default pull-right">Update Profile</button>
                    <div class="clearfix"></div>
                    '; } ?>
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
