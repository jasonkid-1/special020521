<?php 
include '../../includes/session.php';
include('../../includes/db.php');

$get_id=$_GET['sy_id'];

mysqli_query($db,"
	DELETE FROM tbl_schoolyears 
	WHERE sy_id = '$get_id' ")or die(mysql_error());
message("Successfully Deleted!","success");
header('location:stud_list.php');
?>