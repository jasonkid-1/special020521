<?php 
include '../../includes/session.php';
include('../../includes/db.php');

$get_id=$_GET['admission_id'];

mysqli_query($db,"delete from tbl_admissions where admission_id = '$get_id' ")or die(mysqli_error($db));
message("Successfully Deleted!","success");
header('location:admission.php');
?>