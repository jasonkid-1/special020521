<?php 
include '../../includes/session.php';
include('../../includes/db.php');

$get_id=$_GET['sy_id'];

mysqli_query($db,"UPDATE tbl_schoolyears SET remark = 'Dropped' where sy_id = '$get_id' ")or die(mysql_error());

message("Successfully Dropped!","success");
header("Location: enrolled_stud.php");

?>