<?
require ('class.phpmailer.php');

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->From = "user@domain.com";
$mail->FromName = "Your Name";
$mail->Host = 'localhost';
$mail->SMTPAuth = true; 
$mail->Username = 'user@domain.com';
$mail->Password = 'email-account-password'; 
$mail->AddAddress("sendto@domain.com", "His name");
$mail->Subject = "Here is the subject";
$mail->Body    = "This is the message body";
if($mail->Send())
{
   echo "email sent";
   exit;
}
echo "There was an error sending the message";
?>

