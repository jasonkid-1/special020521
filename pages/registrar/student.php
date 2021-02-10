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
  <div class="card-body">
    
  
            <form method="GET">
              <div class="row">
              <div class="col-md-6 offset-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Search Student (Enter Student No. or Name)</label>
                          <input name="search" type="text" class="form-control">
                        </div>
              </div>
              <div class="col-md-6 offset-md-3">
                  <center><button type="submit" name="hanap" class="btn btn-info ">Search Student...?</button></center>
              </div>
              </div>
            </form>
  </div>
</div>
              <div class="card">
                <div class="card-header card-header-success">
                  <h4 class="card-title mt-0">Student Lists</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-hover" id="example1">
                      <thead class="">
                        <th>PICTURE</th>
                        <th>I.D. NO.</th>
                        <th>NAME</th>
                        <th>COURSE</th>
                        <th>GENDER</th>
                        <th>E-MAIL</th>
                        <th>OPTION</th>
                      </thead>
                      <tbody>
                        <?php include '../../includes/db.php';

                        if (isset($_GET['hanap'])) {
                          # code...
                        
                                $query = mysqli_query($db, 
                                  "SELECT *,CONCAT(tbl_students.lastname, ', ', tbl_students.firstname, ' ', tbl_students.middlename)  as fullname
                                  FROM tbl_students 
                                  LEFT JOIN tbl_courses ON tbl_courses.course_id = tbl_students.course_id
                                  LEFT JOIN tbl_genders ON tbl_genders.gender_id = tbl_students.gender_id 
                                  WHERE  (firstname LIKE '%$_GET[search]%' OR middlename LIKE '%$_GET[search]%' OR lastname LIKE '%$_GET[search]%'  OR course LIKE '%$_GET[search]%' OR stud_no LIKE '%$_GET[search]%')
                                  ORDER BY stud_no DESC") or die(mysqli_error($db));
                                  
                                  while ($row= mysqli_fetch_array ($query)){
                                    $id=$row['stud_id'];
                                    ?><tr>
                                    <td><?php
                                    if(empty($row['img'])){
                                      echo'<img class="img" style="height:80px; width:80px;" src="../../assets/img/pano.jpg" />';
                                    }
                                    else{ echo' <img class="img zoom" style="height:80px; width:80px;" src="data:image/jpeg;base64,'.base64_encode( $row['img'] ).'" "/>';} ?></td>
                                    <td><?php echo $row['stud_no']; ?></td>
                                    <td><?php echo $row['fullname']; ?></td>
                                    <td><?php echo $row['course']; ?></td>
                                    <td><?php echo $row['gender']; ?></td>
                                    <td><?php echo $row['email']; ?></td>
                                    <td>
                                      <a class="btn btn-primary" for="ViewAdmin" href="../user/user.php<?php echo '?stud_id='.$id; ?>">
                                    <i class="fa fa-edit"></i> Update</a>
                                      <a class="btn btn-danger" for="DeleteAdmin" href="#delete<?php echo $id;?>" data-toggle="modal" data-target="#delete<?php echo $id;?>">
                                        <i class="glyphicon glyphicon-trash icon-white"></i> Delete
                                    </a>
                                    <div class="modal fade" id="delete<?php  echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Delete Student</h5>
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
                                            <a href="delete_student.php<?php echo '?stud_id='.$id; ?>" class="btn btn-danger">Yes</a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                                   </td>
                                </tr>
                                <?php 
                              } 
                             }
                                ?>
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
