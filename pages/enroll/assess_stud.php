<?php 
include '../../includes/session.php';

include '../../includes/db.php'; 
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
                <div class="card-header card-header-danger">
                  <h4 class="card-title mt-0">Lists of pending enrollees for A.Y <?php echo $_SESSION['active_acad'].' , '.$_SESSION['active_sem']; ?></h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-hover" id="example1">
                      <thead class="">
                        <th><strong>PICTURE</strong></th>
                        <th><strong>STUD_NO.</strong></th>
                        <th><strong>NAME</strong></th>
                        <th><strong>COURSE</strong></th>
                        <th><strong>YEAR LEVEL</strong></th>
                        <th><strong>STATUS</strong></th>
                        <th><strong>DATE APPLIED</strong></th>
                        <th><strong>REMARKS</strong></th>
                        <th><strong>OFFICIALLY DROP SECTION</strong></th>
                        <th><strong>ACTION</strong></th>
                      </thead>
                      <tbody>
                        <?php
                                $query = mysqli_query($db, 
                                  "SELECT *,CONCAT(tbl_students.lastname, ', ', tbl_students.firstname, ' ', tbl_students.middlename)  as fullname 
                                  FROM tbl_schoolyears 
                                  LEFT JOIN tbl_students ON tbl_students.stud_id = tbl_schoolyears.stud_id
                                  LEFT JOIN tbl_genders ON tbl_genders.gender_id = tbl_students.gender_id
                                  LEFT JOIN tbl_courses ON tbl_courses.course_id = tbl_schoolyears.course_id
                                  LEFT JOIN tbl_departments ON tbl_departments.department_id = tbl_courses.department_id
                                  LEFT JOIN tbl_year_levels ON tbl_year_levels.year_id = tbl_schoolyears.year_id
                                  WHERE department_name = '$_SESSION[department]' AND ay_id = '$_SESSION[active_acad]' AND sem_id = '$_SESSION[active_sem]' AND (remark = 'Pending' OR remark = 'Checked')
                                  ORDER BY stud_no DESC ") or die(mysqli_error($db));
                                
                                while ($row= mysqli_fetch_array ($query)){
                                    $id=$row['sy_id'];
                                    $stud_id=$row['stud_id'];
                                    ?><tr><form method="POST" class="form-horizontal" autocomplete="off" enctype="multipart/form-data">
                                    <td><?php if(empty($row['img'])){
                                      echo'<img class="img zoom" style="height:80px; width:80px;" src="../../assets/img/user2.png" />';
                                    }else{ echo' <img class="img zoom" style="height:80px; width:80px;" src="data:image/jpeg;base64,'.base64_encode( $row['img'] ).'" "/>';} ?></td>
                                    <td><input type="hidden" name="sy_id" value="<?php echo $id; ?>"><?php echo $row['stud_no']; ?></td>
                                    <td><?php echo strtoupper($row['fullname']) ; ?></td>
                                    <td><?php echo $row['course_abv']; ?></td>
                                    <td><?php echo $row['year_level']; ?></td>
                                    <td><?php echo $row['status']; ?></td>
                                    <td><?php echo $row['date_enrolled']; ?></td>
                                    <td><?php echo $row['remark']; ?></td>
                                    <td><?php echo $row['off_drop']; ?></td>
                                    <td>
                                    <?php if ($row['remark'] == 'Pending') {
                                      echo'<input type="hidden" name="remark" value="Checked"><button type="submit" class="btn btn-success" name="submit">
                                    <i class="fa fa-check"></i> Check</button>';}
                                          else{
                                            echo '<input type="hidden" name="remark" value="Pending"><button type="submit" class="btn btn-warning" name="submit">
                                    <i class="fa fa-times"></i> Disapprove</button>';
                                          
                                    } ?>
                                      <a class="btn btn-primary" for="ViewAdmin" href="../stud_list/update.php<?php echo '?stud_id='.$stud_id; ?>">
                                    <i class="fa fa-edit"></i> Update</a>
                                      <a class="btn btn-danger" for="DeleteAdmin" href="#delete<?php echo $id;?>" data-toggle="modal" data-target="#delete<?php echo $id;?>">
                                        <i class='material-icons'>delete_forever</i> Delete
                                      </a>
                                    <div class="modal fade" id="delete<?php  echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <div class="modal-body">
                                            <div class="alert alert-danger">
                                                    Are you sure you want to delete <?php echo $row['lastname'].', '.$row['firstname'].' '.$row['middlename'] ?>?
                                                </div>
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                                            <a href="../stud_list/delete_en.php<?php echo '?sy_id='.$id; ?>" class="btn btn-danger">Yes</a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <a class="btn btn-primary" for="ViewAdmin" href="../forms/pre.php<?php echo '?stud_id='.$stud_id; ?>">
                                    <i class='material-icons'>remove_red_eye</i> Pre-enrollment</a>
                                    <a class="btn btn-info" for="ViewAdmin" href="../forms/reg_form.php<?php echo '?stud_id='.$stud_id; ?>">
                                    <i class="fa fa-eye"></i> Reg. Form</a>
                                    <a class="btn btn-info" for="ViewAdmin" href="../stud_list/enrolled_subj.php<?php echo '?stud_id='.$stud_id; ?>">
                                    <i class="fa fa-eye"></i> Enrolled Subjects</a>
                                   </td></form>
                                </tr>
                                <?php } ?>
                      </tbody>
                      <?php if (isset($_POST['submit'])) {
                        $sy_id = mysqli_real_escape_string($db,$_POST['sy_id']);
                        $remark = mysqli_real_escape_string($db,$_POST['remark']);


                        $quer = mysqli_fetch_array(mysqli_query($db, 
                          "SELECT * 
                          FROM tbl_schoolyears 
                          WHERE sy_id = '$sy_id' and ay_id = '$_SESSION[active_acad]' and sem_id = '$_SESSION[active_sem]'"));

                        $stud_id = $quer['stud_id'];
                        $sql = mysqli_query($db, 
                          "UPDATE tbl_schoolyears 
                          SET remark = '$remark' 
                          WHERE sy_id = '$sy_id'")or die(mysqli_error($db));

                        $sql2 = mysqli_query($db, 
                          "UPDATE tbl_enrolled_subjects 
                          SET enroll_status = '$remark' 
                          WHERE stud_id = '$stud_id' and acad_year = '$_SESSION[active_acad]' and semester = '$_SESSION[active_sem]'")or die(mysqli_error($db));

        if($sql == true){
              message("Successful","success");
              header("Refresh:0");
                }
                      } ?>
                    </table>
                  </div>
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
