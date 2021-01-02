<?php 
if(isset($_POST['submit']))
{
	
$fullname= $_POST['fullname'];
$designation=$_POST['designation'];
$address= $_POST['address'];
$resume= $_FILES['resume'];
$contact= $_POST['contact'];
$email= $_POST['email'];
$society=$_POST['society'];
$sdesignation= $_POST['sdesignation'];
$title= $_POST['title'];
$pages= $_POST['pages'];
$illustrations= $_POST['illustrations'];
$photographs= $_POST['photographs'];

$Message="<table cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" align=\"center\">
<tr>
			    <td width=\"100%\" align=\"center\" colspan=\"5\" style=\"font-size:16px; font-weight:bold;\"> &nbsp; </td>
</tr>
<tr>
				<td width=\"100%\" align=\"left\" colspan=\"2\" style=\"font-size:16px; text-align:center;\"><b>Evangel Publications Enquiry - join As Author</b></td>							
				</tr>
				<tr>
				<td width=\"100%\" align=\"left\" colspan=\"2\" style=\"font-size:16px; text-align:left;\"><b>Details</b></td>							
				</tr>
				<tr>
				<td width=\"100%\" align=\"left\" colspan=\"2\" style=\"font-size:16px;\">Full Name &nbsp;: &nbsp;".$fullname."</td>							
				</tr>
				<tr>
				<td width=\"100%\" align=\"left\" colspan=\"2\" style=\"font-size:16px;\">Designation &nbsp;: &nbsp;".$designation."</td>							
				</tr>

<tr>
				<td width=\"100%\" align=\"left\" colspan=\"2\" style=\"font-size:16px;\">Address &nbsp;:&nbsp;".$address."</td>
				</tr>
				<tr>
				<td width=\"100%\" align=\"left\" colspan=\"2\" style=\"font-size:16px;\">Uploaded CV &nbsp;:&nbsp;".$resume."</td>
				</tr>
<tr>
				<td width=\"100%\" align=\"left\" colspan=\"2\" style=\"font-size:16px;\">Contact Numeber &nbsp;:&nbsp;".$contact."</td>
				</tr>
				
				<tr>
				<td width=\"100%\" align=\"left\" colspan=\"2\" style=\"font-size:16px;\">Email &nbsp;:&nbsp;".$email."</td>
				</tr>
				<tr>
				<td width=\"100%\" align=\"left\" colspan=\"2\" style=\"font-size:16px; text-align:left;\"><b>Society Affiliation</b></td>							
				</tr>
				<tr>
				<td width=\"100%\" align=\"left\" colspan=\"2\" style=\"font-size:16px;\">Society &nbsp;:&nbsp;".$society."</td>
				</tr>
				<tr>
				<td width=\"100%\" align=\"left\" colspan=\"2\" style=\"font-size:16px;\">Society Designation &nbsp;:&nbsp;".$sdesignation."</td>
				</tr>
				<tr>
				<td width=\"100%\" align=\"left\" colspan=\"2\" style=\"font-size:16px; text-align:left;\"><b>Book Outline</b></td>							
				</tr>
				<tr>
				<td width=\"100%\" align=\"left\" colspan=\"2\" style=\"font-size:16px;\">Title &nbsp;:&nbsp;".$title."</td>
				</tr>
				<tr>
				<td width=\"100%\" align=\"left\" colspan=\"2\" style=\"font-size:16px;\">Pages &nbsp;:&nbsp;".$pages."</td>
				</tr>
				<tr>
				<td width=\"100%\" align=\"left\" colspan=\"2\" style=\"font-size:16px;\">Illustrations &nbsp;:&nbsp;".$illustrations."</td>
				</tr>
				<tr>
				<td width=\"100%\" align=\"left\" colspan=\"2\" style=\"font-size:16px;\">Photographs &nbsp;:&nbsp;".$photographs."</td>
				</tr>
				

				
				</table>";

	
		
		require ('PHPMailer/class.phpmailer.php');
				
				 $mail = new phpmailer();
$mail->IsSMTP(true);
$mail->From ="testenquiry@cloudganga.in";
$mail->FromName = $fullname;
$mail->Host = 'cloudganga.in';
$mail->SMTPAuth = true;
$mail->Username = 'testenquiry@cloudganga.in';
$mail->Password = 'queries@12345'; 
$mail->AddReplyTo = $email;
$mail->AddAddress('wp@fsc.co.in');
$mail->Subject = "Evangel Publications Author form";
$mail->Body    =stripcslashes($Message);
$mail->IsHTML(true);
$xmail_=$mail->Send();
if($xmail_)
{
    
    ?>
	<script>

window.location="http://cloudganga.in/evangel/join-as-an-author/";
</script>
<?php


 }
else
{
  
}
}	
?>	
