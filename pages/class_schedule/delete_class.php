<?php 
include '../../includes/session.php';
include('../../includes/db.php');

$get_id=$_GET['class_id'];

$query = mysqli_query($db,"delete from tbl_schedules where class_id = '$get_id' ")or die(mysqli_error($db));
if ($query == true) {
	message("Successfully Deleted!","success");
}else{
	message("Something went wrong!","error");
}

header('location:class_schedule.php');
?>