$doc = $pdf ->Output('sample.pdf', 'S');
$doc;

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 1;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'sfac.bacoor.unofficial@gmail.com';                 // SMTP username
    $mail->Password = 'SFAC12345';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to
    //Recipients
    $mail->setFrom('sfac.bacoor.unofficial@gmail.com', 'SFAC-Student Record Management System');
    $mail->addAddress('fajut.vhan@gmail.com');     // Add a recipient

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Reset Password';
    $mail->Body    = 'See attachment';
    $mail->addStringAttachment($doc, 'sample.pdf');

    $mail->send();
    echo "<script>alert('Message has been sent to your email!');window.location='forgot_pass.php'</script>";
} 
    catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
