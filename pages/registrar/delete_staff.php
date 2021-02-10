<?php 
include '../../includes/session.php';
include('../../includes/db.php');

$get_id=$_GET['faculty_id'];

mysqli_query($db,"delete from tbl_faculties_staff where faculty_id = '$get_id' ")or die(mysql_error());
message("Successfully Deleted!","success");
header('location:faculty.php');
?>