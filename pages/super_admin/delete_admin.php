<?php 
include '../../includes/session.php';
include('../../includes/db.php');

$get_id=$_GET['admin_id'];

mysqli_query($db,"delete from tbl_admins where admin_id = '$get_id' ")or die(mysql_error());
message("Successfully Deleted!","success");
header('location:admin_list.php');
?>