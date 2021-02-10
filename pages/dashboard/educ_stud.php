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
              <?php 
                    $count = mysqli_fetch_array(mysqli_query($db,"SELECT COUNT(*) as total FROM `tbl_schoolyears` LEFT JOIN tbl_students ON tbl_students.stud_id = tbl_schoolyears.stud_id
                                  LEFT JOIN tbl_genders ON tbl_genders.gender_id = tbl_students.gender_id
                                  LEFT JOIN tbl_courses ON tbl_courses.course_id = tbl_schoolyears.course_id
                                  LEFT JOIN tbl_year_levels ON tbl_year_levels.year_id = tbl_schoolyears.year_id WHERE tbl_schoolyears.course_id = '17' OR tbl_schoolyears.course_id = '13' AND ay_id = '$_SESSION[active_acad]' AND sem_id = '$_SESSION[active_sem]' AND remark = 'Approved'")) or die(mysql_error());
                    $eced = mysqli_fetch_array(mysqli_query($db,"SELECT COUNT(*) as total FROM `tbl_schoolyears` LEFT JOIN tbl_students ON tbl_students.stud_id = tbl_schoolyears.stud_id
                                  LEFT JOIN tbl_genders ON tbl_genders.gender_id = tbl_students.gender_id
                                  LEFT JOIN tbl_courses ON tbl_courses.course_id = tbl_schoolyears.course_id
                                  LEFT JOIN tbl_year_levels ON tbl_year_levels.year_id = tbl_schoolyears.year_id WHERE ay_id = '$_SESSION[active_acad]' AND sem_id = '$_SESSION[active_sem]' AND (tbl_schoolyears.course_id = '17' OR tbl_schoolyears.course_id = '13')  AND remark = 'Approved' AND status='Old'")) or die(mysql_error());
                    $eced1 = mysqli_fetch_array(mysqli_query($db,"SELECT COUNT(*) as total FROM `tbl_schoolyears` LEFT JOIN tbl_students ON tbl_students.stud_id = tbl_schoolyears.stud_id
                                  LEFT JOIN tbl_genders ON tbl_genders.gender_id = tbl_students.gender_id
                                  LEFT JOIN tbl_courses ON tbl_courses.course_id = tbl_schoolyears.course_id
                                  LEFT JOIN tbl_year_levels ON tbl_year_levels.year_id = tbl_schoolyears.year_id WHERE ay_id = '$_SESSION[active_acad]' AND sem_id = '$_SESSION[active_sem]' AND (tbl_schoolyears.course_id = '17' OR tbl_schoolyears.course_id = '13') AND remark = 'Approved' AND status='New'")) or die(mysql_error());
                    $beed = mysqli_fetch_array(mysqli_query($db,"SELECT COUNT(*) as total FROM `tbl_schoolyears` LEFT JOIN tbl_students ON tbl_students.stud_id = tbl_schoolyears.stud_id
                                  LEFT JOIN tbl_genders ON tbl_genders.gender_id = tbl_students.gender_id
                                  LEFT JOIN tbl_courses ON tbl_courses.course_id = tbl_schoolyears.course_id
                                  LEFT JOIN tbl_year_levels ON tbl_year_levels.year_id = tbl_schoolyears.year_id WHERE tbl_schoolyears.course_id = '19' AND ay_id = '$_SESSION[active_acad]' AND sem_id = '$_SESSION[active_sem]' AND remark = 'Approved'")) or die(mysql_error());
                    $beed1 = mysqli_fetch_array(mysqli_query($db,"SELECT COUNT(*) as total FROM `tbl_schoolyears` LEFT JOIN tbl_students ON tbl_students.stud_id = tbl_schoolyears.stud_id
                                  LEFT JOIN tbl_genders ON tbl_genders.gender_id = tbl_students.gender_id
                                  LEFT JOIN tbl_courses ON tbl_courses.course_id = tbl_schoolyears.course_id
                                  LEFT JOIN tbl_year_levels ON tbl_year_levels.year_id = tbl_schoolyears.year_id WHERE ay_id = '$_SESSION[active_acad]' AND sem_id = '$_SESSION[active_sem]' AND tbl_schoolyears.course_id = '19'  AND remark = 'Approved' AND status='Old'")) or die(mysql_error());
                    $beed2 = mysqli_fetch_array(mysqli_query($db,"SELECT COUNT(*) as total FROM `tbl_schoolyears` LEFT JOIN tbl_students ON tbl_students.stud_id = tbl_schoolyears.stud_id
                                  LEFT JOIN tbl_genders ON tbl_genders.gender_id = tbl_students.gender_id
                                  LEFT JOIN tbl_courses ON tbl_courses.course_id = tbl_schoolyears.course_id
                                  LEFT JOIN tbl_year_levels ON tbl_year_levels.year_id = tbl_schoolyears.year_id WHERE ay_id = '$_SESSION[active_acad]' AND sem_id = '$_SESSION[active_sem]' AND tbl_schoolyears.course_id = '19' AND remark = 'Approved' AND status='New'")) or die(mysql_error());
                    $engl = mysqli_fetch_array(mysqli_query($db,"SELECT COUNT(*) as total FROM `tbl_schoolyears` LEFT JOIN tbl_students ON tbl_students.stud_id = tbl_schoolyears.stud_id
                                  LEFT JOIN tbl_genders ON tbl_genders.gender_id = tbl_students.gender_id
                                  LEFT JOIN tbl_courses ON tbl_courses.course_id = tbl_schoolyears.course_id
                                  LEFT JOIN tbl_year_levels ON tbl_year_levels.year_id = tbl_schoolyears.year_id WHERE tbl_schoolyears.course_id = '10' AND ay_id = '$_SESSION[active_acad]' AND sem_id = '$_SESSION[active_sem]' AND remark = 'Approved'")) or die(mysql_error());
                    $engl1 = mysqli_fetch_array(mysqli_query($db,"SELECT COUNT(*) as total FROM `tbl_schoolyears` LEFT JOIN tbl_students ON tbl_students.stud_id = tbl_schoolyears.stud_id
                                  LEFT JOIN tbl_genders ON tbl_genders.gender_id = tbl_students.gender_id
                                  LEFT JOIN tbl_courses ON tbl_courses.course_id = tbl_schoolyears.course_id
                                  LEFT JOIN tbl_year_levels ON tbl_year_levels.year_id = tbl_schoolyears.year_id WHERE ay_id = '$_SESSION[active_acad]' AND sem_id = '$_SESSION[active_sem]' AND tbl_schoolyears.course_id = '10'  AND remark = 'Approved' AND status='Old'")) or die(mysql_error());
                    $engl2 = mysqli_fetch_array(mysqli_query($db,"SELECT COUNT(*) as total FROM `tbl_schoolyears` LEFT JOIN tbl_students ON tbl_students.stud_id = tbl_schoolyears.stud_id
                                  LEFT JOIN tbl_genders ON tbl_genders.gender_id = tbl_students.gender_id
                                  LEFT JOIN tbl_courses ON tbl_courses.course_id = tbl_schoolyears.course_id
                                  LEFT JOIN tbl_year_levels ON tbl_year_levels.year_id = tbl_schoolyears.year_id WHERE ay_id = '$_SESSION[active_acad]' AND sem_id = '$_SESSION[active_sem]' AND tbl_schoolyears.course_id = '10' AND remark = 'Approved' AND status='New'")) or die(mysql_error());
                    $math = mysqli_fetch_array(mysqli_query($db,"SELECT COUNT(*) as total FROM `tbl_schoolyears` LEFT JOIN tbl_students ON tbl_students.stud_id = tbl_schoolyears.stud_id
                                  LEFT JOIN tbl_genders ON tbl_genders.gender_id = tbl_students.gender_id
                                  LEFT JOIN tbl_courses ON tbl_courses.course_id = tbl_schoolyears.course_id
                                  LEFT JOIN tbl_year_levels ON tbl_year_levels.year_id = tbl_schoolyears.year_id WHERE tbl_schoolyears.course_id = '12' AND ay_id = '$_SESSION[active_acad]' AND sem_id = '$_SESSION[active_sem]' AND remark = 'Approved'")) or die(mysql_error());
                    $math1 = mysqli_fetch_array(mysqli_query($db,"SELECT COUNT(*) as total FROM `tbl_schoolyears` LEFT JOIN tbl_students ON tbl_students.stud_id = tbl_schoolyears.stud_id
                                  LEFT JOIN tbl_genders ON tbl_genders.gender_id = tbl_students.gender_id
                                  LEFT JOIN tbl_courses ON tbl_courses.course_id = tbl_schoolyears.course_id
                                  LEFT JOIN tbl_year_levels ON tbl_year_levels.year_id = tbl_schoolyears.year_id WHERE ay_id = '$_SESSION[active_acad]' AND sem_id = '$_SESSION[active_sem]' AND tbl_schoolyears.course_id = '12'  AND remark = 'Approved' AND status='Old'")) or die(mysql_error());
                    $math2 = mysqli_fetch_array(mysqli_query($db,"SELECT COUNT(*) as total FROM `tbl_schoolyears` LEFT JOIN tbl_students ON tbl_students.stud_id = tbl_schoolyears.stud_id
                                  LEFT JOIN tbl_genders ON tbl_genders.gender_id = tbl_students.gender_id
                                  LEFT JOIN tbl_courses ON tbl_courses.course_id = tbl_schoolyears.course_id
                                  LEFT JOIN tbl_year_levels ON tbl_year_levels.year_id = tbl_schoolyears.year_id WHERE ay_id = '$_SESSION[active_acad]' AND sem_id = '$_SESSION[active_sem]' AND tbl_schoolyears.course_id = '12' AND remark = 'Approved' AND status='New'")) or die(mysql_error());
                    
                    $sped = mysqli_fetch_array(mysqli_query($db,"SELECT COUNT(*) as total FROM `tbl_schoolyears` LEFT JOIN tbl_students ON tbl_students.stud_id = tbl_schoolyears.stud_id
                                  LEFT JOIN tbl_genders ON tbl_genders.gender_id = tbl_students.gender_id
                                  LEFT JOIN tbl_courses ON tbl_courses.course_id = tbl_schoolyears.course_id
                                  LEFT JOIN tbl_year_levels ON tbl_year_levels.year_id = tbl_schoolyears.year_id WHERE (tbl_schoolyears.course_id = '16' OR tbl_schoolyears.course_id= '4') AND ay_id = '$_SESSION[active_acad]' AND sem_id = '$_SESSION[active_sem]' AND remark = 'Approved'")) or die(mysql_error());
                    $sped1 = mysqli_fetch_array(mysqli_query($db,"SELECT COUNT(*) as total FROM `tbl_schoolyears` LEFT JOIN tbl_students ON tbl_students.stud_id = tbl_schoolyears.stud_id
                                  LEFT JOIN tbl_genders ON tbl_genders.gender_id = tbl_students.gender_id
                                  LEFT JOIN tbl_courses ON tbl_courses.course_id = tbl_schoolyears.course_id
                                  LEFT JOIN tbl_year_levels ON tbl_year_levels.year_id = tbl_schoolyears.year_id WHERE ay_id = '$_SESSION[active_acad]' AND sem_id = '$_SESSION[active_sem]' AND (tbl_schoolyears.course_id = '16' OR tbl_schoolyears.course_id= '4')  AND remark = 'Approved' AND status='Old'")) or die(mysql_error());
                    $sped2 = mysqli_fetch_array(mysqli_query($db,"SELECT COUNT(*) as total FROM `tbl_schoolyears` LEFT JOIN tbl_students ON tbl_students.stud_id = tbl_schoolyears.stud_id
                                  LEFT JOIN tbl_genders ON tbl_genders.gender_id = tbl_students.gender_id
                                  LEFT JOIN tbl_courses ON tbl_courses.course_id = tbl_schoolyears.course_id
                                  LEFT JOIN tbl_year_levels ON tbl_year_levels.year_id = tbl_schoolyears.year_id WHERE ay_id = '$_SESSION[active_acad]' AND sem_id = '$_SESSION[active_sem]' AND (tbl_schoolyears.course_id = '16' OR tbl_schoolyears.course_id= '4') AND remark = 'Approved' AND status='New'")) or die(mysql_error());
                    $fili = mysqli_fetch_array(mysqli_query($db,"SELECT COUNT(*) as total FROM `tbl_schoolyears` LEFT JOIN tbl_students ON tbl_students.stud_id = tbl_schoolyears.stud_id
                                  LEFT JOIN tbl_genders ON tbl_genders.gender_id = tbl_students.gender_id
                                  LEFT JOIN tbl_courses ON tbl_courses.course_id = tbl_schoolyears.course_id
                                  LEFT JOIN tbl_year_levels ON tbl_year_levels.year_id = tbl_schoolyears.year_id WHERE tbl_schoolyears.course_id = '11' AND ay_id = '$_SESSION[active_acad]' AND sem_id = '$_SESSION[active_sem]' AND remark = 'Approved'")) or die(mysql_error());
                    $fili1 = mysqli_fetch_array(mysqli_query($db,"SELECT COUNT(*) as total FROM `tbl_schoolyears` LEFT JOIN tbl_students ON tbl_students.stud_id = tbl_schoolyears.stud_id
                                  LEFT JOIN tbl_genders ON tbl_genders.gender_id = tbl_students.gender_id
                                  LEFT JOIN tbl_courses ON tbl_courses.course_id = tbl_schoolyears.course_id
                                  LEFT JOIN tbl_year_levels ON tbl_year_levels.year_id = tbl_schoolyears.year_id WHERE ay_id = '$_SESSION[active_acad]' AND sem_id = '$_SESSION[active_sem]' AND tbl_schoolyears.course_id = '11'  AND remark = 'Approved' AND status='Old'")) or die(mysql_error());
                    $fili2 = mysqli_fetch_array(mysqli_query($db,"SELECT COUNT(*) as total FROM `tbl_schoolyears` LEFT JOIN tbl_students ON tbl_students.stud_id = tbl_schoolyears.stud_id
                                  LEFT JOIN tbl_genders ON tbl_genders.gender_id = tbl_students.gender_id
                                  LEFT JOIN tbl_courses ON tbl_courses.course_id = tbl_schoolyears.course_id
                                  LEFT JOIN tbl_year_levels ON tbl_year_levels.year_id = tbl_schoolyears.year_id WHERE ay_id = '$_SESSION[active_acad]' AND sem_id = '$_SESSION[active_sem]' AND tbl_schoolyears.course_id = '11' AND remark = 'Approved' AND status='New'")) or die(mysql_error());
                    $pe = mysqli_fetch_array(mysqli_query($db,"SELECT COUNT(*) as total FROM `tbl_schoolyears` LEFT JOIN tbl_students ON tbl_students.stud_id = tbl_schoolyears.stud_id
                                  LEFT JOIN tbl_genders ON tbl_genders.gender_id = tbl_students.gender_id
                                  LEFT JOIN tbl_courses ON tbl_courses.course_id = tbl_schoolyears.course_id
                                  LEFT JOIN tbl_year_levels ON tbl_year_levels.year_id = tbl_schoolyears.year_id WHERE tbl_schoolyears.course_id = '18' AND ay_id = '$_SESSION[active_acad]' AND sem_id = '$_SESSION[active_sem]' AND remark = 'Approved'")) or die(mysql_error());
                    $pe1 = mysqli_fetch_array(mysqli_query($db,"SELECT COUNT(*) as total FROM `tbl_schoolyears` LEFT JOIN tbl_students ON tbl_students.stud_id = tbl_schoolyears.stud_id
                                  LEFT JOIN tbl_genders ON tbl_genders.gender_id = tbl_students.gender_id
                                  LEFT JOIN tbl_courses ON tbl_courses.course_id = tbl_schoolyears.course_id
                                  LEFT JOIN tbl_year_levels ON tbl_year_levels.year_id = tbl_schoolyears.year_id WHERE ay_id = '$_SESSION[active_acad]' AND sem_id = '$_SESSION[active_sem]' AND tbl_schoolyears.course_id = '18'  AND remark = 'Approved' AND status='Old'")) or die(mysql_error());
                    $pe2 = mysqli_fetch_array(mysqli_query($db,"SELECT COUNT(*) as total FROM `tbl_schoolyears` LEFT JOIN tbl_students ON tbl_students.stud_id = tbl_schoolyears.stud_id
                                  LEFT JOIN tbl_genders ON tbl_genders.gender_id = tbl_students.gender_id
                                  LEFT JOIN tbl_courses ON tbl_courses.course_id = tbl_schoolyears.course_id
                                  LEFT JOIN tbl_year_levels ON tbl_year_levels.year_id = tbl_schoolyears.year_id WHERE ay_id = '$_SESSION[active_acad]' AND sem_id = '$_SESSION[active_sem]' AND tbl_schoolyears.course_id = '18' AND remark = 'Approved' AND status='New'")) or die(mysql_error());
                    $tcp = mysqli_fetch_array(mysqli_query($db,"SELECT COUNT(*) as total FROM `tbl_schoolyears` LEFT JOIN tbl_students ON tbl_students.stud_id = tbl_schoolyears.stud_id
                                  LEFT JOIN tbl_genders ON tbl_genders.gender_id = tbl_students.gender_id
                                  LEFT JOIN tbl_courses ON tbl_courses.course_id = tbl_schoolyears.course_id
                                  LEFT JOIN tbl_year_levels ON tbl_year_levels.year_id = tbl_schoolyears.year_id WHERE tbl_schoolyears.course_id = '24' AND ay_id = '$_SESSION[active_acad]' AND sem_id = '$_SESSION[active_sem]' AND remark = 'Approved'")) or die(mysql_error());
                    $tcp1 = mysqli_fetch_array(mysqli_query($db,"SELECT COUNT(*) as total FROM `tbl_schoolyears` LEFT JOIN tbl_students ON tbl_students.stud_id = tbl_schoolyears.stud_id
                                  LEFT JOIN tbl_genders ON tbl_genders.gender_id = tbl_students.gender_id
                                  LEFT JOIN tbl_courses ON tbl_courses.course_id = tbl_schoolyears.course_id
                                  LEFT JOIN tbl_year_levels ON tbl_year_levels.year_id = tbl_schoolyears.year_id WHERE ay_id = '$_SESSION[active_acad]' AND sem_id = '$_SESSION[active_sem]' AND tbl_schoolyears.course_id = '24'  AND remark = 'Approved' AND status='Old'")) or die(mysql_error());
                    $tcp2 = mysqli_fetch_array(mysqli_query($db,"SELECT COUNT(*) as total FROM `tbl_schoolyears` LEFT JOIN tbl_students ON tbl_students.stud_id = tbl_schoolyears.stud_id
                                  LEFT JOIN tbl_genders ON tbl_genders.gender_id = tbl_students.gender_id
                                  LEFT JOIN tbl_courses ON tbl_courses.course_id = tbl_schoolyears.course_id
                                  LEFT JOIN tbl_year_levels ON tbl_year_levels.year_id = tbl_schoolyears.year_id WHERE ay_id = '$_SESSION[active_acad]' AND sem_id = '$_SESSION[active_sem]' AND tbl_schoolyears.course_id = '24' AND remark = 'Approved' AND status='New'")) or die(mysql_error());
                    ?>
                        <span style="float:right; ">
                        <!---   <a href="borrowed_book.php"><button class="btn btn-primary"><i class="fa fa-info"></i> All Records (<?php /// echo $count['total']; ?>)</button></a> -->
                            <button class="btn btn-success"><i class="fa fa-info"></i> BECED (<?php echo $count['total']; ?>)<br>OLD (<?php echo $eced['total']; ?>) , NEW (<?php echo $eced1['total']; ?>)</button>
                            <button class="btn btn-success"><i class="fa fa-info"></i> BEED (<?php echo $beed['total']; ?>)<br>OLD (<?php echo $beed1['total']; ?>) , NEW (<?php echo $beed2['total']; ?>)</button>
                            <button class="btn btn-success"><i class="fa fa-info"></i> BSED - EGLISH (<?php echo $engl['total']; ?>)<br>OLD (<?php echo $engl1['total']; ?>) , NEW (<?php echo $engl2['total']; ?>)</button>
                            <button class="btn btn-success"><i class="fa fa-info"></i> BSED - MATH (<?php echo $math['total']; ?>)<br>OLD (<?php echo $math1['total']; ?>) , NEW (<?php echo $math2['total']; ?>)</button>
                        </span>
                        <span style="float:right; ">
                        <!---   <a href="borrowed_book.php"><button class="btn btn-primary"><i class="fa fa-info"></i> All Records (<?php /// echo $count['total']; ?>)</button></a> -->
                            <button class="btn btn-success"><i class="fa fa-info"></i> BSED - FILI (<?php echo $fili['total']; ?>)<br>OLD (<?php echo $fili1['total']; ?>) , NEW (<?php echo $fili2['total']; ?>)</button>
                            <button class="btn btn-success"><i class="fa fa-info"></i> BSPED (<?php echo $sped['total']; ?>)<br>OLD (<?php echo $sped1['total']; ?>) , NEW (<?php echo $sped2['total']; ?>)</button>
                            <button class="btn btn-success"><i class="fa fa-info"></i> BPED (<?php echo $pe['total']; ?>)<br>OLD (<?php echo $pe1['total']; ?>) , NEW (<?php echo $pe2['total']; ?>)</button>
                            <button class="btn btn-success"><i class="fa fa-info"></i> TCP (<?php echo $tcp['total']; ?>)<br>OLD (<?php echo $tcp1['total']; ?>) , NEW (<?php echo $tcp2['total']; ?>)</button>
                        </span>
                   
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
<?php check_message(); ?>
                    
              <div class="card">
                <div class="card-header card-header-danger">
                  <h4 class="card-title mt-0">Lists of Enrolled Stundents in EDUC Department for A.Y <?php echo $_SESSION['active_acad'].' , '.$_SESSION['active_sem']; ?></h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-hover" id="example1">
                      <thead class="">
                        <th>STUD ID NO.</th>
                        <th>NAME</th>
                        <th>COURSE</th>
                        <th>YEAR LEVEL</th>
                        <th>STATUS</th>
                        <th>DATE APPLIED</th>
                        <th>REMARKS</th>
                        <?php if($_SESSION['role'] == 'Student' || $_SESSION['role'] == 'President' || $_SESSION['role'] == 'Accounting'){

}else{
  echo'<th>OPTION</th>';
} ?>
                      </thead>
                      <tbody>
                        <?php
                                $query = mysqli_query($db, "SELECT *,CONCAT(tbl_students.lastname, ', ', tbl_students.firstname, ' ', tbl_students.middlename)  as fullname FROM tbl_schoolyears 
                                  LEFT JOIN tbl_students ON tbl_students.stud_id = tbl_schoolyears.stud_id
                                  LEFT JOIN tbl_genders ON tbl_genders.gender_id = tbl_students.gender_id
                                  LEFT JOIN tbl_courses ON tbl_courses.course_id = tbl_schoolyears.course_id
                                  LEFT JOIN tbl_year_levels ON tbl_year_levels.year_id = tbl_schoolyears.year_id
                                  where ay_id = '$_SESSION[active_acad]' and sem_id = '$_SESSION[active_sem]' and department_id= '5' and remark='Approved'") or die(mysqli_error($db));
                                while ($row= mysqli_fetch_array ($query)){
                                    $id=$row['sy_id'];
                                    $stud_id=$row['stud_id'];
                                    ?><tr><form method="POST" class="form-horizontal" autocomplete="off" enctype="multipart/form-data">
                                    <td><input type="hidden" name="sy_id" value="<?php echo $id; ?>"><?php echo $row['stud_no']; ?></td>
                                    <td><?php echo $row['fullname']; ?></td>
                                    <td><?php echo $row['course']; ?></td>
                                    <td><?php echo $row['year_level']; ?></td>
                                    <td><?php echo $row['status']; ?></td>
                                    <td><?php echo $row['date_enrolled']; ?></td>
                                    <td><input type="hidden" name="remark" value="Approved"><?php echo $row['remark']; ?></td>
                                    <?php if($_SESSION['role'] == 'Student' || $_SESSION['role'] == 'President' || $_SESSION['role'] == 'Accounting'){

}else{ ?><td>
                                    <?php if ($row['remark'] == 'Pending') {
                                      echo'<button type="submit" class="btn btn-success" name="submit">
                                    <i class="fa fa-check"></i> Approve</button>';}
                                          else{
                                            echo '';
                                          
                                    } ?>
                                      
                                      <!-- <a class="btn btn-danger" for="DeleteAdmin" href="#delete<?php echo $id;?>" data-toggle="modal" data-target="#delete<?php echo $id;?>">
                                        <i class="glyphicon glyphicon-trash icon-white"></i> Delete
                                      </a> -->
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
                                            <a href="delete_en.php<?php echo '?sy_id='.$id; ?>" class="btn btn-danger">Yes</a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
       
 

                                    <a class="btn btn-primary" for="ViewAdmin" href="../forms/pre.php<?php echo '?stud_id='.$stud_id; ?>">
                                    <i class="fa fa-eye"></i> Pre-enrollment</a>
                                    <a class="btn btn-default" for="ViewAdmin" href="../forms/reg_form.php<?php echo '?stud_id='.$stud_id; ?>">
                                    <i class="fa fa-eye"></i> Reg. Form</a>
      
                                   </td><?php } ?></form>
                                </tr>
                                <?php } ?>
                      </tbody>
                      <?php if (isset($_POST['submit'])) {
                        $sy_id = mysqli_real_escape_string($db,$_POST['sy_id']);
                        $remark = mysqli_real_escape_string($db,$_POST['remark']);

                        $sql = mysqli_query($db, "UPDATE tbl_schoolyears SET remark = '$remark' WHERE sy_id = '$sy_id'")or die(mysqli_error($db)); 

        if($sql == true){
              message("Student has been Approved","success");
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
