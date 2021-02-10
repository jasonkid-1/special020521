<?php 
include '../../includes/session.php';
include('../../includes/db.php');

$get_id=$_GET['course_id'];

mysqli_query($db,"delete from tbl_courses where course_id = '$get_id' ")or die(mysqli_error($db));
message("Successfully Deleted!","success");
header('location:course.php');
?>