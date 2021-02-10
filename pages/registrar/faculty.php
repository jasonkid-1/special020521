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
                <div class="card-header card-header-primary">
                  <h4 class="card-title mt-0">Faculty Staff Lists</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-hover" id="example1">
                      <thead class="">
                        <th>I.D. NO.</th>
                        <th>NAME</th>
                        <th>POSITION</th>
                        <th>STATUS</th>
                        <th>E-MAIL</th>
                        <th>USERNAME</th>
                        <th>created_at</th>
                        <th>updated_at</th>
                        <th>Updated by</th>
                        <th>OPTION</th>
                      </thead>
                      <tbody>
                        <?php include '../../includes/db.php';
                                $query = mysqli_query($db, "SELECT *,CONCAT(tbl_faculties_staff.faculty_lastname, ', ', tbl_faculties_staff.faculty_firstname, ' ', tbl_faculties_staff.faculty_middlename)  as fullname 
                                  FROM tbl_faculties_staff 
                                  ORDER BY faculty_lastname");
                                
                                while ($row= mysqli_fetch_array ($query)){
                                    $id=$row['faculty_id'];
                                    ?><tr>
                                    <td><?php echo $row['faculty_no']; ?></td>
                                    <td><?php echo $row['fullname']; ?></td>
                                    <td><?php echo $row['position']; ?></td>
                                    <td><?php echo $row['status']; ?></td>
                                    <td><?php echo $row['email']; ?></td>
                                    <td><?php echo $row['username']; ?></td>
                                    <td><?php echo $row['created_at']; ?></td>
                                    <td><?php echo $row['updated_at']; ?></td>
                                    <td><?php echo $row['name']; ?></td>
                                    <td>
                                      <a class="btn btn-primary" for="ViewAdmin" href="edit_staff.php<?php echo '?faculty_id='.$id; ?>">
                                    <i class="fa fa-edit"></i> Update</a>
                                      <a class="btn btn-danger" for="DeleteAdmin" href="#delete<?php echo $id;?>" data-toggle="modal" data-target="#delete<?php echo $id;?>">
                                        <i class="glyphicon glyphicon-trash icon-white"></i> Delete
                                    </a>
                                    <div class="modal fade" id="delete<?php  echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Delete Faculty Staff</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <div class="modal-body">
                                            <div class="alert alert-danger">
                                                    Are you sure you want to delete <?php echo $row['faculty_lastname'].', '.$row['faculty_firstname'].' '.$row['faculty_middlename'] ?>?
                                                </div>
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                                            <a href="delete_staff.php<?php echo '?faculty_id='.$id; ?>" class="btn btn-danger">Yes</a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>

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
