<?php 
include '../../includes/session.php';
include('../../includes/db.php');

$get_id=$_GET['dean_id'];

mysqli_query($db,"delete from tbl_deans where dean_id = '$get_id' ")or die(mysql_error());
message("Successfully Deleted!","success");
header('location:dean_list.php');
?>