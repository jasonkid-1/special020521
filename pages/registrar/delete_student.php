<?php 
include '../../includes/session.php';
include('../../includes/db.php');

$get_id=$_GET['stud_id'];

mysqli_query($db,"delete from tbl_students where stud_id = '$get_id' ")or die(mysql_error());
message("Successfully Deleted!","success");
header('location:student.php');
?>