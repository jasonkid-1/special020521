<?php 
ob_start();
session_start();
include '../../includes/db.php';

if (isset($_POST['submit'])) {

  $subj_code = mysqli_real_escape_string($db,$_POST['subj_code']);
  $subj_desc = mysqli_real_escape_string($db,$_POST['subj_desc']);
  $unit_lec = mysqli_real_escape_string($db,$_POST['unit_lec']);
  $unit_lab = mysqli_real_escape_string($db,$_POST['unit_lab']);
  $unit_total = mysqli_real_escape_string($db,$_POST['unit_total']);
  $prereq = mysqli_real_escape_string($db,$_POST['prereq']);
  $course = mysqli_real_escape_string($db,$_POST['course']);
  $year = mysqli_real_escape_string($db,$_POST['year']);
  $sem = mysqli_real_escape_string($db,$_POST['sem']);

  $chk = mysqli_query($db,"SELECT *, tbl_courses.course_id FROM tbl_subjects LEFT JOIN tbl_courses ON tbl_courses.course_id = tbl_subjects.course_id where subj_code = '".$subj_code."' AND subj_desc = '".$subj_desc."' AND subj_desc = '".$subj_desc."' AND course = '".$course."'");
    $ct = mysqli_num_rows($chk);

if($ct == 0){
  $query = mysqli_query($db,"INSERT INTO tbl_subjects (subj_code,subj_desc, unit_lec, unit_lab, unit_total, prereq, course_id, year_id, sem_id) values ('$subj_code','$subj_desc', '$unit_lec','$unit_lab', '$unit_total', '$prereq', '$course', '$year', '$sem')")or die (mysqli_error($db));
    if($query == true)
    {
      echo "<script>alert('Successfully Added');</script>";
    }
  }
    else
    {
      echo "<script>alert('Subject Already Exist!');</script>";
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