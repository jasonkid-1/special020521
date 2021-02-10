<?php 

if(isset($_POST['delete']))
{
    $checkbox = $_POST['checkbox'];

for($i=0;$i<count($check);$i++){

$del_id = $check[$i];
$result = mysqli_query($db,"DELETE FROM tbl_enrolled_subjects WHERE enrolled_subj_id='".$del_id."'")or die(mysqli_error($db));
}
if ($result == true) {
	message("Successfully Deleted!","success");
}else{
	message("Something went wrong!","error");
}

header('location:enroll_subj.php');
}
?>