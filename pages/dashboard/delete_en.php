<?php 
include '../../includes/session.php';
include('../../includes/db.php');

$get_id=$_GET['sy_id'];

mysqli_query($db,"delete from tbl_schoolyears where sy_id = '$get_id' ")or die(mysql_error());
message("Successfully Deleted!","success");

?>