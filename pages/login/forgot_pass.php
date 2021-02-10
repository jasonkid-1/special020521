<?php 
ob_start();
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';

?>
<!DOCTYPE html>
<html lang="en">

<?php include '../../includes/head_css.php' ?>

<body class="">

<nav class="navbar navbar-expand-lg navbar navbar-absolute fixed-top ">
  <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="login.php"><img src="../../assets/img/logo.png" style="height: 50px;width: 50px;position: relative;margin-top:-10px;"> <strong>Saint Francis of Assisi College - Bacoor Campus</strong></a>
          </div>
  </div>
</nav>
<div class="content" style="margin-top: 70px;
  padding: 30px 15px;
  min-height: calc(100vh - 123px);">
          <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header card-header-danger">
                        <h3 class="card-title"><strong>Forgot Password?</strong></h3>
                    </div>
                    <div class="card-body">

                        <h5>Please enter your email address and we'll send you instruction on how to reset your password</h5><br>
                      <form class="form-horizontal" method="POST" autocomplete="off">
                        <div class="row">
                          <div class="col-md-8 offset-md-2">
                            <div class="form-group">
                              <label class="bmd-label-floating">Enter Email Address</label>
                              <input type="email" name="email" class="form-control" autocomplete="off" autofocus="on">
                            </div>
                          </div>
                        </div>
                        <hr>
                        <button type="submit" name="submit" class="btn btn-text-white bg-dark pull-right">Submit</button>
                        <div class="clearfix"></div>
                      </form>
                    </div>
              </div>
            </div>
            <div class="col-lg-3"></div>
          </div><!--END OF ROW -->
          <hr>
         
<?php 

include '../../includes/db.php';
if (isset($_POST['submit'])) {
  
   
            $email = mysqli_real_escape_string($db, $_POST['email']);
            $code = rand(100,999);

            $super_admin = mysqli_query($db, "SELECT * from tbl_super_admins where email = '$email' ");
            $numrow2 = mysqli_num_rows($super_admin);

            $admin = mysqli_query($db, "SELECT * from tbl_admins where email = '$email' ");
            $numrow = mysqli_num_rows($admin);

            $student = mysqli_query($db, "SELECT * from tbl_students where email = '$email' ");
            $numrow1 = mysqli_num_rows($student);

            $faculty = mysqli_query($db, "SELECT * from tbl_faculties where email = '$email' ");
            $numrow3 = mysqli_num_rows($faculty);

            $faculty_staff = mysqli_query($db, "SELECT * from tbl_faculties_staff where email = '$email' ");
            $numrow4 = mysqli_num_rows($faculty_staff);

            $admission = mysqli_query($db, "SELECT * from tbl_admissions where email = '$email' ");
            $numrow5 = mysqli_num_rows($admission);


            if($numrow > 0)
            {   
                $query2 = mysqli_query($db,"update tbl_admins set activation_code='$code' where email='$email' ") or die(mysqli_error($db)); 
            }
            elseif($numrow1 > 0)
              {   
                $query2 = mysqli_query($db,"update tbl_students set activation_code='$code' where email='$email' ") or die(mysqli_error($db)); 
              }
            elseif($numrow2 > 0)
              {   
                $query2 = mysqli_query($db,"update tbl_super_admins set activation_code='$code' where email='$email' ") or die(mysqli_error($db)); 
              }
            elseif($numrow3 > 0)
              {   
                $query2 = mysqli_query($db,"update tbl_faculties set activation_code='$code' where email='$email' ") or die(mysqli_error($db)); 
              }
            elseif($numrow4 > 0)
              {   
                $query2 = mysqli_query($db,"update tbl_faculties_staff set activation_code='$code' where email='$email' ") or die(mysqli_error($db)); 
              }
            elseif($numrow5 > 0)
              {   
                $query2 = mysqli_query($db,"update tbl_admissions set activation_code='$code' where email='$email' ") or die(mysqli_error($db)); 
              }
             else
                {
                echo "<script>alert('Email does not exist in our database!'); window.location='forgot_pass.php'</script>";
                die();
                }
             





$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'fajut.vhan@gmail.com';                 // SMTP username
    $mail->Password = 'zyxwvutsrqpo';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to
    //Recipients
    $mail->setFrom('fajut.vhan@gmail.com', 'SFAC-Student Record Management System');
    $mail->addAddress($email);     // Add a recipient

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Reset Password';
    $mail->Body    = '<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  
<div bgcolor="" link="#6d93b8" alink="#9DB7D0" vlink="#6d93b8" text="#d7d7d7" style="font-family:Helvetica,Arial,sans-serif;font-size:14px;color:#d7d7d7">
<table style="width:538px;background-color:#393836" align="center" cellspacing="0" cellpadding="0">
  <tbody><tr>
    <td style="height:65px;background-color:#f31010;border-bottom:1px solid #4d4b48">
      <img src="https://i.pinimg.com/originals/4c/ab/79/4cab79502fa261e4eb6ee80331780772.png" height="65" border="0" class="CToWUd">
    </td>
  </tr>
  <tr>
    <td bgcolor="#ccc">
      <table width="470" border="0" align="center" cellpadding="0" cellspacing="0" style="padding-left:5px;padding-right:5px;padding-bottom:10px">

        <tbody><tr>
          <td style="padding-top:32px;font-size:24px;color:#000;font-family:Arial,Helvetica,sans-serif;font-weight:bold">
            Hello '.$email.',          </td>
        </tr>
        <tr>
          <td style="padding-top:10px;padding-bottom:30px;font-size:24px;color:#000;font-family:Arial,Helvetica,sans-serif">
            Do you want to change your password?          </td>
        </tr>

        <tr>
          <td style="font-size:14px;padding:16px;background-color:#ccb;color:#000">
            We recieve a request to reset your password. You can change password by clicking the link below.          </td>
        </tr>

        <tr>
          <td style="padding:16px;background-color:#ccb">
            <table cellpadding="0" cellspacing="0" border="0" align="center">
              <tbody><tr>
                                  <td style="background:#990000;height:32px">
                    <a href="http://localhost/special/pages/login/reset_pass.php?email='.$email.'&activation_code='.$code.'" style="border-radius:2px;padding:1px;display:block;text-decoration:none;color:white;background:#990000;background:-webkit-linear-gradient(top,#990000 5%,#cd0606 95%);background:linear-gradient(to bottom,#990000 5%,#cd0606 95%)">
                    <span style="border-radius:2px;display:block;padding:0;font-size:16px;line-height:32px">
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Reset&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </span>
                    </a>
                  </td>
                  <td style="width:30px;height:32px">

                  </td>
                              </tr>
            </tbody></table>
          </td>
        </tr>

        <tr>
          <td style="padding-top:16px;font-size:12px;line-height:17px;color:#6d7880">
            If you are not trying to change your login credentials, please ignore this email. It is possible that another user entered their login information incorrectly</td>
        </tr>

        

        <tr>
          
        </tr>

        <tr>
          
        </tr>

      </tbody></table>
    </td>
  </tr>
  <tr style="background-color:#000000">
    <td style="padding:12px 24px">
      <table cellpadding="0" cellspacing="0">
        <tbody><tr>
          <!-- <td>
            <img src="">
          </td> -->
          <td style="text-align: center font-size:11px;color:#595959;padding-left:12px">
            Saint Francis of Assisi College - Bacoor<br>
            All rights reserved.</td>
        </tr>
      </tbody></table>
    </td>
  </tr>
</tbody></table>
  

</div></div>


</body>
</html>';
   

    $mail->send();
    echo "<script>alert('Message has been sent to your email!');window.location='forgot_pass.php'</script>";
} 
    catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}

}?>

                <!-- Start of Globel Code -->
<CENTER>
<script language="JavaScript">
var count = "asda";          // Change Your Account?
var type = "chicago";       // Change Your Counter Image?
var digits = "8";          // Change The Amount of Digits on Your Counter?
var prog = "hit";          // Change to Either hit/unique?
var statslink = "no";    // provide statistical link in counter yes/no?
var sitelink = "yes";     // provide link back to our site;~) yes/no?
var cntvisible = "yes"; // do you want counter visible yes/no?
</script>
<!-- START DO NOT TAMPER WITH ANYTHING ELSE BELOW THIS LINE FOR YOUR WEBTV & UNIX VISITORS -->
<script language="JavaScript" src="http://006.free-counters.co.uk/count-123.js">
</script>
<noscript>
<a href="http://www.free-counters.co.uk" target="_blank">
<img  src="http://006.free-counters.co.uk/count-123.pl?count=asda&cntvisible=no&mode=noscript" alt="Free Counters" title="Free Counters" border="0">
</a>The following text will not be seen after you upload your website,
please keep it in order to retain your counter functionality 
<br><a href="http://www.free-counters.co.uk" target="_blank">Free Trackers</a><br> <a href="http://www.free-counters.co.uk" target="_blank">Help</a><br>

</noscript>
<!-- END DO NOT TAMPER WITH ANYTHING ELSE ABOVE THIS LINE FOR YOUR WEBTV & UNIX VISITORS -->
</CENTER>        
<!-- End of Globel Code -->
</div>
  <!--   Core JS Files   -->
  <?php include '../../includes/script.php' ?>
</body>

</html>
