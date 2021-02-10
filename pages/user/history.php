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
              <form method="POST">
              <div class="row">
                <div class="col-md-3">
                  <div class="form-group">
                    <select name="acad" id="acad" data-style="btn btn-primary btn-round" required class="form-control select-2">
                      <option selected disabled>School Year</option>
                              <?php 
                                $q1 = mysqli_query($db,"SELECT * from tbl_acadyears order by academic_year DESC");
                                while($row1=mysqli_fetch_array($q1)){
                                    echo '<option value="'.$row1['academic_year'].'">'.$row1['academic_year'].'</option>';
                                  }
                              ?>
                    </select>
                  </div>
                </div>
                
                <div class="col-md-3">
                  <div class="form-group">
                    <select name="sem" id="sem" data-style="btn btn-primary btn-round" required class="form-control select-2">
                      <option selected disabled>Semester</option>
                              <?php 
                                $q = mysqli_query($db,"SELECT * from tbl_semesters");
                                while($row=mysqli_fetch_array($q)){
                                    echo '<option value="'.$row['semester'].'">'.$row['semester'].'</option>';
                                  }
                              ?>
                    </select>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <button type="submit" name="search" class="btn btn-sm btn-primary pull-right">Search</button>
                  </div>
                </div>
                
              </div></form>
            </div>
          </div><!-- END SEARCH -->
          <div class="row">
            <div class="col-md-12">
              <?php if (isset($_POST['search'])) {
                $schoolyear = mysqli_real_escape_string($db,$_POST['acad']);
                $sem = mysqli_real_escape_string($db,$_POST['sem']);

                $asd = mysqli_query($db, "SELECT * FROM tbl_schoolyears LEFT JOIN tbl_courses on tbl_courses.course_id = tbl_schoolyears.course_id where ay_id = '$schoolyear' and sem_id = '$sem' and stud_id = '$_GET[stud_id]'");
                while ($r = mysqli_fetch_array($asd)) {
                  
                
  
                
               ?>
              <div class="card">
                <div class="card-header card-header-danger">
                  <h4 class="card-title">List of Subject(s) taken <?php echo 'School Year: ' .$schoolyear.' - '.$sem.' - '.$r['course']; ?></h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>Course Code</th>
                        <th>Course Description</th>
                        <th>Unit(s)</th>
                        <th>Final Grade</th>
                        <th>Numerical Grade</th>
                      </thead>
                      <tbody>
<?php 
include '../../includes/db.php';

$l= mysqli_query($db, "SELECT * FROM tbl_students WHERE stud_id = '$_SESSION[userid]'");
while($rows = mysqli_fetch_array ($l)){
if($rows['curri'] == "Old Curri"){
$sqls = mysqli_query($db,"SELECT *,tbl_subjects.subj_code,tbl_subjects.subj_desc FROM tbl_enrolled_subjects LEFT JOIN tbl_subjects ON tbl_subjects.subj_id = tbl_enrolled_subjects.subj_id where tbl_enrolled_subjects.acad_year = '$schoolyear' AND tbl_enrolled_subjects.semester = '$sem' AND stud_id = '$_SESSION[userid]'")or die($db);
while($roe = mysqli_fetch_array($sqls)){
  
 ?>
                        <tr>
                          <td><?php echo $roe['subj_code']; ?></td>
                          <td><?php echo $roe['subj_desc']; ?></td>
                          <td><?php echo $roe['unit_total']; ?></td>
                          <td><?php echo $roe['ofgrade']; ?></td>
                          <td><?php echo $roe['numgrade']; ?></td>
                        </tr>
<?php }}else{
  $sqls = mysqli_query($db,"SELECT *,tbl_subjects_new.subj_code,tbl_subjects_new.subj_desc FROM tbl_enrolled_subjects LEFT JOIN tbl_subjects_new ON tbl_subjects_new.subj_id = tbl_enrolled_subjects.subj_id where tbl_enrolled_subjects.acad_year = '$schoolyear' AND tbl_enrolled_subjects.semester = '$sem' AND stud_id = '$_SESSION[userid]'")or die($db);
while($roe = mysqli_fetch_array($sqls)){
  ?>
                        <tr>
                          <td><?php echo $roe['subj_code']; ?></td>
                          <td><?php echo $roe['subj_desc']; ?></td>
                          <td><?php echo $roe['unit_total']; ?></td>
                          <td><?php echo $roe['ofgrade']; ?></td>
                          <td><?php echo $roe['numgrade']; ?></td>
                        </tr>
<?php
}
}} ?>
                      </tbody>
                      <tfoot>
                        <?php $sum = mysqli_query($db,"SELECT SUM(unit_total) as UN FROM tbl_enrolled_subjects LEFT JOIN tbl_subjects_new ON tbl_subjects_new.subj_id = tbl_enrolled_subjects.subj_id where tbl_enrolled_subjects.stud_id = '$_GET[stud_id]' AND tbl_enrolled_subjects.acad_year = '$schoolyear' AND tbl_enrolled_subjects.semester = '$sem'");
                          while($row = mysqli_fetch_array ($sum)){ ?>
                        <tr><td></td></tr>
                        <tr><td  colspan="2"><Strong>Total Units</Strong></td><td><strong><?php echo $row['UN']; ?></strong></td><td></td><td></td><td></td></tr>
                      <?php } ?>
                      </tfoot>
                    </table>
                  </div>
    
                </div>
              </div>
              <?php }} ?>
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
