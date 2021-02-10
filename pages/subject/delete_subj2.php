<?php 
include '../../includes/session.php';
include('../../includes/db.php');

$get_id=$_GET['subj_id'];

$query = mysqli_query($db,"delete from tbl_subjects where subj_id = '$get_id' ")or die(mysqli_error($db));
if ($query == true) {
	message("Successfully Deleted!","success");
}else{
	message("Something went wrong!","error");
}

header('location:subj_list.php');
?>