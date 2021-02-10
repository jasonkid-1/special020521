<?php 
ob_start();
session_start();

include '../../includes/db.php'; 
if (isset($_POST['update'])) {
    $image = addslashes(file_get_contents($_FILES['side_logo']['tmp_name']));
    $side_name = mysqli_real_escape_string($db,$_POST['side_name']);

    $query = mysqli_query($db,"UPDATE tbl_sidebar SET side_logo = '".$image."', side_name = '".$side_name."' where side_id = '1' ") or die(mysqli_error($db));

    if($query == true)
    {
      echo "<script>alert('Update Successfully!');</script>";
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<?php include '../../includes/head_css.php'; ?>

<body class="">
  <div class="wrapper ">
    <?php include '../../includes/sidebar.php'; ?>
    <div class="main-panel">
      <!-- Navbar -->
      <?php include '../../includes/top_nav.php'; ?>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-body">
<?php 
$qwerty = mysqli_query($db,"SELECT * from tbl_sidebar where side_id = '1' ");
    while($row = mysqli_fetch_array($qwerty)){
?>
                  <form method="POST" class="form-horizontal" autocomplete="off" enctype="multipart/form-data">
                  <fieldset style="border: 1px solid;padding: 0px 10px;border-color: #d2d2d2">
                    <legend style="text-align:center">SIDEBAR SETTINGS</legend><br>
                    <div class="row">
                      <div class="col-md-8 offset-md-2">
                        <div class="card-profile">
                          <div class="card-avatar">
                            <img class="img" src="data:image/jpeg;base64,<?php echo base64_encode( $row['side_logo'] )?>" />
                          </div>
                          <div class="card-body">
                            <input type="file" name="side_logo" class="btn btn-raised btn-round btn-default btn-file">
                          </div>
                        </div>
                      </div>
                    </div>
                      <div class="row">
                        <div class="col-md-8 offset-md-2">
                          <div class="form-group">
                            <label class="bmd-label-floating">Sidebar Name</label>
                            <input name="side_name" type="text" class="form-control" value="<?php echo $row['side_name'] ?>">
                          </div>
                        </div>
                      </div>
                  </fieldset>
                    <br>
                    <button type="submit" name="update" class="btn btn-primary pull-right">Update Sidebar</button>
                    <div class="clearfix"></div>
                  </form>
<?php 
  }
?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php include '../../includes/footer.php';?>
    </div>
  </div>
<?php include '../../includes/script.php'; ?>
</body>

</html>
