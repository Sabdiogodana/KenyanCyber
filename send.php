
<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


require 'vendor/autoload.php';

// $submitted_data =
// $name = ($_GET['name']) ? $_GET['name'] : $_POST['name'];
// $email = ($_GET['email']) ?$_GET['email'] : $_POST['email'];
// $subject = ($_GET['subject']) ? $_GET['subject'] : $_POST['subject'];
// $message = ($_GET['message']) ?$_GET['message'] : $_POST['message'];

if(isset($_POST["submit"])){ 
$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];


//Server settings
$mail = new PHPMailer(true);
$mail->SMTPDebug = 2;
$mail->SMTPSecure = 'ssl';
$mail->Host = 'mail.smartcityplots.co.ke';
$mail->Port = 465;
$mail->isSMTP();
$mail->SMTPAuth=true;
$mail->Username='test@smartcityplots.co.ke';
$mail->Password='^Q&(;rQfBGEF';
$mail->setFrom('test@smartcityplots.co.ke','Website Enquiry From KenyanCyber');
// $mail->addAddress('emmanuelmuema52@gmail.com');
// $mail->addAddress('abedimuange@gmail.com');
$mail->addAddress('sabdiyogodanaj@gmail.com');                                                            
$mail->addAddress('');
$mail->isHTML(true);
$mail->Subject = $subject;
$mail->Body = $data;
if (!$mail->send()) {
	 echo "failed";
	    echo $mail->ErrorInfo;
	} else {
	    echo "success";
	}
}
?>




