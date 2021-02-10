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
                  <h4 class="card-title mt-0">Lists of Online Inquiries for A.Y <?php echo $_SESSION['active_acad'].' , '.$_SESSION['active_sem']; ?></h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-hover" id="example1">
                      <thead class="">
                        <th>NAME</th>
                        <th>COURSE</th>
                        <th>ADMIT TYPE</th>
                        <th>STATUS</th>
                        <th>OPTION</th>
                      </thead>
                      <tbody>
                        <?php
                                $query = mysqli_query($db, "SELECT *,CONCAT(tbl_online_registrations.lastname, ', ', tbl_online_registrations.firstname, ' ', tbl_online_registrations.middlename)  as fullname 
                                  FROM tbl_online_registrations 
                                  LEFT JOIN tbl_genders ON tbl_genders.gender_id = tbl_online_registrations.gender_id
                                  LEFT JOIN tbl_courses ON tbl_courses.course_id = tbl_online_registrations.course_id
                                  where acad_year = '$_SESSION[active_acad]' and semester = '$_SESSION[active_sem]'") or die(mysqli_error($db));
                                while ($row= mysqli_fetch_array ($query)){
                                    $id=$row['or_id'];
                                    ?>
                                  <tr>
                                    <td><?php echo $row['fullname']; ?></td>
                                    <td><?php echo $row['course']; ?></td>
                                    <td><?php echo $row['admit_type']; ?></td>
                                    <td><?php echo $row['status']; ?></td>
                                  <td>
                              
                                    <a class="btn btn-primary" for="ViewAdmin" href="../admission/approve_inquiry.php<?php echo '?or_id='.$id; ?>">
                                    <i class="fa fa-eye"></i> View Profile</a>
                                    <!-- <a class="btn btn-info" for="ViewAdmin" href="../forms/reg_form.php<?php echo '?stud_id='.$stud_id; ?>">
                                    <i class="fa fa-eye"></i> Reg. Form</a> -->
                                   </td>
                                </tr>
                              <?php } ?>
                      </tbody>
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
