<?php 
include '../../includes/session.php';
include '../../includes/db.php'; 

$q = mysqli_query($db,"SELECT * from tbl_students where stud_id = '1'");
while ($result = mysqli_fetch_array($q)) {
  $image = $result['img'];
  }


if (isset($_POST['submit'])) {

  $set_acad = mysqli_real_escape_string($db,$_POST['set_acad']);

  $query = mysqli_query($db,"INSERT INTO tbl_active_acads (ay_id) values ('$set_acad')")or die (mysqli_error($db));
    if($query == true)
    {
      message("Active A.Y. Set Successfully!","success");
    }else{
      message("Something went wrong!","error");
    }
}

if (isset($_POST['update'])) {
                                                    
$up_acad = mysqli_real_escape_string($db,$_POST['up_acad']);

$sql=mysqli_query($db," UPDATE tbl_active_acads SET ay_id='$up_acad' ") or die (mysqli_error($db));
if($sql == true)
    {
      message("A.Y. Updated Successfully!","success");
    }else{
      message("Something went wrong!","error");
    }
}

if (isset($_POST['update2'])) {
                                                    
$up_acad = mysqli_real_escape_string($db,$_POST['up_acad']);

$sql=mysqli_query($db," UPDATE tbl_active_sem SET sem_id='$up_acad' ") or die (mysqli_error($db));
if($sql == true)
    {
      message("Active Semester Updated Successfully!","success");
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
                  <fieldset style="border: 1px solid;padding: 0px 10px;border-color: #d2d2d2">
                    <legend style="text-align:center">SET ACTIVE ACADEMIC YEAR</legend>
                    
                    <hr>
                    <div class="row">
                      <div class="col-md-6 offset-md-3">
                        <table class="table table-stripped table-condensed">
                      <thead class=" text-primary">
                        <th>A.Y.</th>
                        <th>Action</th>
                      </thead>
                      <tbody>
<?php 
include '../../includes/db.php';

$q = mysqli_query($db,
  "SELECT *, tbl_acadyears.ay_id 
  FROM tbl_active_acads
  LEFT JOIN tbl_acadyears ON tbl_acadyears.ay_id = tbl_active_acads.ay_id") or die(mysqli_error($db));
while($row = mysqli_fetch_array ($q)){
  $id=$row['active_acad_id']; ?>
                        <tr>
                          <td><?php echo $row['academic_year']; ?></td>
                          <td><a class="btn btn-primary" for="ViewAdmin" href="#edit<?php echo $id; ?>" data-toggle="modal" data-target="#edit<?php echo $id;?>"><i class="material-icons">edit</i> Set</a></td>

                          <div class="modal fade" id="edit<?php  echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">SET  ACTIVE A.Y.</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <div class="modal-body">
                                            <form method="POST" class="form-horizontal" autocomplete="off" enctype="multipart/form-data">
                      <div class="col-md-12">
                        <div class="form-group">
                          <select name="up_acad" id="course" data-style="btn btn-primary btn-round" required class="form-control select-2">
                            <option disabled selected>Select A.Y.</option>
                            <?php 
                          $q1 = mysqli_query($db,"SELECT * from tbl_acadyears ORDER BY academic_year DESC");
                          while($row2=mysqli_fetch_array($q1)){
                            echo '<option value="'.$row2['ay_id'].'">'.$row2['academic_year'].'</option>';
                                }
                             ?>
                          </select>
                        </div>
                      </div>
                                            </form>
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                                            <button type="submit" name="update" class="btn btn-default pull-right">Set A.Y.</button>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                        </tr>
<?php } ?>
                      </tbody>
                    </table>
                      </div>
                    </div>
                  </fieldset>
                    <br>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
<?php check_message(); ?>
              <div class="card">
                <div class="card-body">
                  <form method="POST" class="form-horizontal" autocomplete="off" enctype="multipart/form-data">
                  <fieldset style="border: 1px solid;padding: 0px 10px;border-color: #d2d2d2">
                    <legend style="text-align:center">SET ACTIVE SEMESTER</legend>
                    
                    <hr>
                    <div class="row">
                      <div class="col-md-6 offset-md-3">
                        <table class="table table-stripped table-condensed">
                      <thead class=" text-primary">
                        <th>Semester</th>
                        <th>Action</th>
                      </thead>
                      <tbody>
<?php 
include '../../includes/db.php';

$q = mysqli_query($db,"SELECT *, tbl_semesters.sem_id FROM tbl_active_sem
      LEFT JOIN tbl_semesters ON tbl_semesters.sem_id = tbl_active_sem.sem_id") or die(mysqli_error($db));
while($row = mysqli_fetch_array ($q)){
  $id=$row['active_sem_id']; ?>
                        <tr>
                          <td><?php echo $row['semester']; ?></td>
                          <td><a class="btn btn-primary" for="ViewAdmin" href="#2edit<?php echo $id; ?>" data-toggle="modal" data-target="#2edit<?php echo $id;?>"><i class="material-icons">edit</i> Set</a></td>

                          <div class="modal fade" id="2edit<?php  echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">SET UPDATE ACTIVE SEMESTER</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <div class="modal-body">
                                            <form method="POST" class="form-horizontal" autocomplete="off" enctype="multipart/form-data">
                      <div class="col-md-12">
                        <div class="form-group">
                          <select name="up_acad" id="course" data-style="btn btn-primary btn-round" required class="form-control select-2">
                            <option disabled selected>Select Semester</option>
                            <?php 
                          $q1 = mysqli_query($db,"SELECT * from tbl_semesters ORDER BY semester ASC");
                          while($row2=mysqli_fetch_array($q1)){
                            echo '<option value="'.$row2['sem_id'].'">'.$row2['semester'].'</option>';
                                }
                             ?>
                          </select>
                        </div>
                      </div>
                                            </form>
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                                            <button type="submit" name="update2" class="btn btn-default pull-right">Set Semester</button>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                        </tr>
<?php } ?>
                      </tbody>
                    </table>
                      </div>
                    </div>
                  </fieldset>
                    <br>
                    <div class="clearfix"></div>
                  </form>
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
