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
                          <label class="bmd-label-floating">Search Subject Description (Enter Subject Description)</label>
                          <input name="search" type="text" class="form-control">
                        </div>
              </div>
              <div class="col-md-6 offset-md-3">
                  <center><button type="submit" name="hanap" class="btn btn-info ">Search Subject Description...?</button></center>
              </div>
              </div>
            </form>
  </div>
</div>


              <div class="card">
                <div class="card-header card-header-primary">
                  <h3 class="card-title ">Open Subjects for BSBA - Marketing Management for all Year Level  (NEW CURRICULUM) </h4>
                  <p class="card-category"><h4> A.Y. : <?php echo $_SESSION['active_acad'].' - '.$_SESSION['active_sem']; ?></h4></p>
                </div>
                <div class="card-body">
                 <form method="POST" class="form-horizontal" autocomplete="off" enctype="multipart/form-data">
                    <div class="table-responsive">
                    <table class="table table-stripped table-condensed" id="example1">
                      <thead class=" text-primary">
                        <th>Course Code</th>
                        <th>Course Description</th>
                        <th>Unit(s)</th>
                        <th>Prerequisite</th>
                        <th>Program</th>
                        <th>Level</th>
                        <th>Semester</th>
                        <th>Action</th>
                      </thead>
                      <tbody>
<?php 
include '../../includes/db.php';
if (isset($_GET['hanap'])) {

$q = mysqli_query($db,"SELECT *, tbl_semesters.sem_id,tbl_year_levels.year_id,tbl_courses.course_id,tbl_courses.department_id,tbl_departments.department_id FROM tbl_subjects_new
      LEFT JOIN tbl_courses ON tbl_courses.course_id = tbl_subjects_new.course_id
      LEFT JOIN tbl_departments ON tbl_departments.department_id = tbl_courses.department_id
      LEFT JOIN tbl_semesters ON tbl_semesters.sem_id = tbl_subjects_new.sem_id
      LEFT JOIN tbl_year_levels ON tbl_year_levels.year_id = tbl_subjects_new.year_id where tbl_departments.department_name = '$_SESSION[department]' 
      and tbl_courses.course_id = '3' 
      and tbl_semesters.semester = '$_SESSION[active_sem]'
      AND subj_desc LIKE '%$_GET[search]%' 
      ORDER BY tbl_year_levels.year_level, tbl_semesters.semester") or die(mysqli_error($db));
while($row = mysqli_fetch_array ($q)){
  $id=$row['subj_id']; ?>
                        <tr>
                          <td><?php echo $row['subj_code']; ?></td>
                          <td><?php echo $row['subj_desc']; ?></td>
                          <td><?php echo $row['unit_total']; ?></td>
                          <td><?php echo $row['prereq']; ?></td>
                          <td><?php echo $row['course_abv']; ?></td>
                          <td><?php echo $row['year_level']; ?></td>
                          <td><?php echo $row['semester']; ?></td>
                          <td><a href="add_schedule.php?subj_id=<?php echo $id; ?>" class="btn btn-success">
                    <i class="material-icons">add</i> Add Schedule
                  </a></td>
                        </tr>
<?php } 
}
?>
                      </tbody>
                    </table>
                  </div>
                  <a href="javascript:history.back()" class="btn btn-default">
                    <i class="material-icons">keyboard_backspace</i> Back
                  </a>
                  <a href="open_subj.php?course_id=3" class="btn btn-success">
                    <i class="material-icons">add</i>Open Petitioned Subjects
                  </a>
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
