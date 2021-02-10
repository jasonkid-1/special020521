<nav class="navbar navbar-expand-xl navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          
          <div class="navbar-wrapper">
          </div>
          <?php 
          if ($_SESSION['role']=='Student') {
              $que=mysqli_query($db,
                "SELECT *,CONCAT(tbl_students.lastname, ', ', tbl_students.firstname)  AS fullname 
                FROM tbl_students 
                WHERE stud_id ='".$_SESSION['userid']."'");
            $row=mysqli_fetch_array($que);
          }
          elseif ($_SESSION['role']=='Faculty') {
            $que=mysqli_query($db,
              "SELECT *,CONCAT(tbl_faculties.faculty_lastname, ', ', tbl_faculties.faculty_firstname)  AS fullname 
              FROM tbl_faculties 
              WHERE faculty_id ='".$_SESSION['userid']."'");
            $row=mysqli_fetch_array($que);
          }
          elseif ($_SESSION['role']=='Registrar') {
            $que=mysqli_query($db,
              "SELECT *,CONCAT(tbl_admins.admin_lastname, ', ', tbl_admins.admin_firstname)  AS fullname 
              FROM tbl_admins 
              WHERE admin_id ='".$_SESSION['userid']."'");
            $row=mysqli_fetch_array($que);
          }
          elseif ($_SESSION['role']=='Dean') {
            $que=mysqli_query($db,
              "SELECT *,CONCAT(tbl_deans.dean_lastname, ', ', tbl_deans.dean_firstname)  AS fullname 
              FROM tbl_deans 
              WHERE dean_id ='".$_SESSION['userid']."'");
            $row=mysqli_fetch_array($que);
          }
          elseif ($_SESSION['role']=='Super Administrator') {
            $que=mysqli_query($db,
              "SELECT *,CONCAT(tbl_super_admins.name,',')  AS fullname 
              FROM tbl_super_admins 
              WHERE sa_id ='".$_SESSION['userid']."'");
            $row=mysqli_fetch_array($que);
          }
          elseif ($_SESSION['role']=='Faculty Staff') {
            $que=mysqli_query($db,
              "SELECT *,CONCAT(tbl_faculties_staff.faculty_lastname, ', ', tbl_faculties_staff.faculty_firstname)  AS fullname 
              FROM tbl_faculties_staff 
              WHERE faculty_id ='".$_SESSION['userid']."'");
            $row=mysqli_fetch_array($que);
          }
          elseif ($_SESSION['role']=='Admission Staff') {
            $que=mysqli_query($db,
              "SELECT *,CONCAT(tbl_admissions.admission_lastname, ', ', tbl_admissions.admission_firstname)  AS fullname 
              FROM tbl_admissions 
              WHERE admission_id ='".$_SESSION['userid']."'");
            $row=mysqli_fetch_array($que);
          }
          elseif ($_SESSION['role']=='President') {
            $que=mysqli_query($db,
              "SELECT *,CONCAT(tbl_presidents.pres_lastname, ', ', tbl_presidents.pres_firstname)  AS fullname 
              FROM tbl_presidents 
              WHERE pres_id ='".$_SESSION['userid']."'");
            $row=mysqli_fetch_array($que);
          }
           elseif ($_SESSION['role']=='Accounting') {
            $que=mysqli_query($db,
              "SELECT *,CONCAT(tbl_accounting.account_lastname, ', ', tbl_accounting.account_firstname)  AS fullname 
              FROM tbl_accounting 
              WHERE account_id ='".$_SESSION['userid']."'");
            $row=mysqli_fetch_array($que);
          }
          else{

          }
           ?>
          
          <h4>Welcome, <span class="badge badge-pill badge-info" style="font-size: 25px;" ><?php echo $row['fullname'] ?> !</span> You are logged in as --> <span class="badge badge-pill badge-info" ><h4 style="font-size: 25px;"><strong><?php echo $_SESSION['role']; ?></strong></h4></span> </h4>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <form class="navbar-form">
              <div class="input-group no-border">

                
                            
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link" href="#" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">
                    <?php 
                    if($_SESSION['role'] == "Registrar"){
                                    $user = mysqli_query($db,"SELECT * from tbl_admins where admin_id = '".$_SESSION['userid']."' ");
                                    while($row = mysqli_fetch_array($user)){
                                        $_SESSION['user'] = $row['admin_firstname'].' '.$row['admin_lastname'];
                                        echo '
          <img src="data:image/jpeg;base64,'.base64_encode( $row['img'] ).'" class="user-image rounded-circle" alt="User Image" style="height:35px;width:35px">';
                                    }
                                }
                                elseif($_SESSION['role'] == "Student"){
                                    $user = mysqli_query($db,"SELECT * from tbl_students where stud_id = '".$_SESSION['userid']."' ");
                                    while($row = mysqli_fetch_array($user)){
                                        $_SESSION['user'] = $row['firstname'].' '.$row['lastname'];
                                        echo '
          <img src="data:image/jpeg;base64,'.base64_encode( $row['img'] ).'" class="user-image rounded-circle" alt="User Image" style="height:35px;width:35px">';
                                    }
                                }
                                elseif($_SESSION['role'] == "Super Administrator"){
                                    $user = mysqli_query($db,"SELECT * from tbl_super_admins where sa_id = '".$_SESSION['userid']."' ");
                                    while($row = mysqli_fetch_array($user)){
                                        $_SESSION['user'] = $row['name'];
                                        echo '
          <img src="data:image/jpeg;base64,'.base64_encode( $row['img'] ).'" class="user-image rounded-circle" alt="User Image" style="height:35px;width:35px">';
                                    }
                                }
                                elseif($_SESSION['role'] == "Faculty Staff"){
                                    $user = mysqli_query($db,"SELECT * from tbl_faculties_staff where faculty_id = '".$_SESSION['userid']."' ");
                                    while($row = mysqli_fetch_array($user)){
                                        $_SESSION['user'] = $row['faculty_firstname'];
                                        echo '
          <img src="data:image/jpeg;base64,'.base64_encode( $row['img'] ).'" class="user-image rounded-circle" alt="User Image" style="height:35px;width:35px">';
                                    }
                                }
                                elseif($_SESSION['role'] == "Faculty"){
                                    $user = mysqli_query($db,"SELECT * from tbl_faculties where faculty_id = '".$_SESSION['userid']."' ");
                                    while($row = mysqli_fetch_array($user)){
                                        $_SESSION['user'] = $row['faculty_firstname'];
                                        echo '
          <img src="data:image/jpeg;base64,'.base64_encode( $row['img'] ).'" class="user-image rounded-circle" alt="User Image" style="height:35px;width:35px">';
                                    }
                                }
                                 elseif($_SESSION['role'] == "Accounting"){
                                    $user = mysqli_query($db,"SELECT * from tbl_accounting where account_id = '".$_SESSION['userid']."' ");
                                    while($row = mysqli_fetch_array($user)){
                                        $_SESSION['user'] = $row['account_firstname'];
                                        echo '
          <img src="data:image/jpeg;base64,'.base64_encode( $row['img'] ).'" class="user-image rounded-circle" alt="User Image" style="height:35px;width:35px">';
                                    }
                                }
                    ?>
                 
                  </i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <a class="dropdown-item" href="../login/logout.php">Log out</a>
                </div>
              </li>
            </ul>
          </div>
        </div> <!--end container fluid -->
      </nav>
     
      