<?php 
include '../../includes/session.php';
include('../../includes/db.php');

$get_id=$_GET['department_id'];

mysqli_query($db,"delete from tbl_departments where department_id = '$get_id' ")or die(mysqli_error($db));
message("Successfully Deleted!","success");
header('location:department.php');
?>