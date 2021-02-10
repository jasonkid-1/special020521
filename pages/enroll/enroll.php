<?php 
include '../../includes/session.php';
include '../../includes/db.php'; ?>
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
                <div class="card-header card-header-danger">
                  <h4 class="card-title">Enroll Online</h4>
                  <p class="card-category">Complete your profile</p>
                </div>
                <?php
                $q = mysqli_query($db,"SELECT *,CONCAT(tbl_students.lastname, ', ', tbl_students.firstname, ' ', tbl_students.middlename)  as fullname, tbl_courses.course_id,tbl_courses.course,tbl_genders.gender_id
                 FROM tbl_students
                LEFT JOIN tbl_courses ON tbl_courses.course_id = tbl_students.course_id
                LEFT JOIN tbl_genders ON tbl_genders.gender_id = tbl_students.gender_id
                 where stud_id = '".$_GET['stud_id']."'");
                while ($row = mysqli_fetch_array($q))
                  { echo '
                
                <div class="card-body">
                  <form method="POST" class="form-horizontal" autocomplete="off" enctype="multipart/form-data">
                    <div class="row">
                      <input type="hidden" name="stud_id" class="form-control" readonly value="'.$row['stud_id'].'">
                      <input type="hidden" name="remark" class="form-control" value="Pending">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Student Number</label>
                          <input type="text" name="stud_no" class="form-control" readonly value=" '.$row['stud_no'].'">
                        </div>
                      </div>
                      <div class="col-md-8">
                        <div class="form-group">
                          <label class="bmd-label-floating">Name</label>
                          <input type="text" name="fullname" class="form-control" value=" '.$row['fullname'].'" readonly>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-8">
                        <div class="form-group">
                          <label class="bmd-label-floating">Course</label>
                          <select name="course" id="course" data-style="btn btn-primary btn-round" required class="form-control select-2">
                            <option value="'.$row['course_id'].'" selected>'.$row['course'].'</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Status</label>
                          <select name="status" id="status" data-style="btn btn-primary btn-round" required class="form-control select-2">
                            <option selected disabled>Status</option>
                            <option value="New">New Student</option>
                            <option value="Old">Old Student</option>
                            <option value="New-Trans">Transferee</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <select name="year" id="year" data-style="btn btn-primary btn-round" required class="form-control select-2">
                            <option selected disabled>Year Level</option>';
                            $q = mysqli_query($db,"SELECT * from tbl_year_levels");
                                while($row=mysqli_fetch_array($q)){
                                    echo '<option value="'.$row['year_id'].'">'.$row['year_level'].'</option>';
                                  }
                              echo '
                          </select>
                        </div>
                      </div>
                    </div>
                    <button type="submit" name="submit" class="btn btn-default pull-right">Next</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
            ';}
            ?>
          </div>
        </div>
      </div>

      <?php 

      if (isset($_POST['submit'])) {
        $stud_id = mysqli_real_escape_string($db,$_POST['stud_id']);
        $stud_no = mysqli_real_escape_string($db,$_POST['stud_no']);
        $fullname = mysqli_real_escape_string($db,$_POST['fullname']);
        $course = mysqli_real_escape_string($db,$_POST['course']);
        $acad_year = mysqli_real_escape_string($db,$_SESSION['active_acad']);
        $year = mysqli_real_escape_string($db,$_POST['year']);
        $sem = $_SESSION['active_sem'];
        $status = mysqli_real_escape_string($db,$_POST['status']);
        $remark = mysqli_real_escape_string($db,$_POST['remark']);
        $created =  date('Y-m-d');

        $query = mysqli_query($db,"INSERT INTO tbl_schoolyears (ay_id,year_id,sem_id,course_id,stud_id,date_enrolled,status,remark) values ('$acad_year','$year','$sem','$course','$stud_id','$created','$status','$remark')") or die(mysqli_error($db)); 

        if($query == true){
              message("Success! Choose Subjects to be enrolled!","success");
              header('Location: enroll_subj.php?stud_id='.$_SESSION['userid'].'');
                }
        }
      ?>

      <?php include '../../includes/footer.php';?>
    </div>
  </div>
<?php include '../../includes/script.php'; ?>
</body>

</html>
