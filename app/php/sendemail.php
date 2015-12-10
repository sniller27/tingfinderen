<?php


$from = $_POST['mail'];
$firstname = $_POST['name'];
$message = $_POST['msg'];

require '../plugins/phpmailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.live.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'heregoesmail@mailcom';                 // SMTP username
$mail->Password = 'kagemand';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->From = "from@example.com";
$mail->FromName = 'bruger';
$mail->addAddress('sniller27@hotmail.com');     // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
$mail->addReplyTo($_POST['mail'], 'Tak for din mail, vi vil besvare din besked hurtigst hurtigt. Mvh  Tingfinderen');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = $_POST['name'];
$mail->Body    = $_POST['mail'] . "<br>" . $_POST['msg'];
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Beskeden sendes. Vent venligst...';

}
    
?>

<html>
<head>
    
    <meta http-equiv="refresh" content="5;url=../contact.php?mailsent">
    
</head>
<body>

</body>

</html>