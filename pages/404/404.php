<?php

include '../../includes/session.php';
include '../../includes/db.php';
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
      <section class="content-header">
      <h1 style="font-size: 80px;top:30%"><center>404</center></h1>
      <h1 style="font-size: 80px;top:30%"><center>Page not found</center></h1>
      <a href="javascript:history.back()" class="btn btn-info">Go Back</a>
    </section>
        </div><!-- end container fluid -->
      </div>
      
      <?php include '../../includes/footer.php'; ?>
    </div>
  </div>
  
  <!--   Core JS Files   -->
<?php include '../../includes/script.php'; ?>
</body>

</html>
