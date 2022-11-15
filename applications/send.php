<?php

if ($_POST['form_name'] == "carinspection") {
    $subject = $_POST['subject'];
    $data = "Name: " . $_POST['fname'] . " " . $_POST['lname'] . "<br/>Mpesa Code: " . $_POST['MPcode'] . "<br />Car Make: "
        . $_POST['Carmake'] . "<br />Car Registration: " . $_POST['carReg'] . "<br />Primary Mobile: " . $_POST['mobNumber'] .
        "<br />Mpesa Number: " . $_POST['MPnumber'] . "<br />Email: " . $_POST['email'];
} else if ($_POST['form_name'] == "driverslicense") {
    $subject = $_POST['subject'];
    $data = "Name: " . $_POST['fname'] . " " . $_POST['lname'] . "<br/>Date of Birth: " . $_POST['dob'] . "<br/>National ID: " .
        $_POST['idnumber'] . "<br/>Driving License Number: " . $_POST['Dlicence'] . "<br />Email: " . $_POST['email'] . "<br/>
            Mpesa Code: " . $_POST['MPcode'] . "<br />Mpesa Number: " . $_POST['MPnumber'];
} else if ($_POST['form_name'] == "kraform") {
    $subject = "KRA PIN Enquiry";
    $data = "Name: " . $_POST['fname'] . " " . $_POST['lname'] . "<br/>Mpesa Code: " . $_POST['MPcode'] . "<br/>National ID: ".
        $_POST['idnumber'] . "<br/>Date of Birth: " . $_POST['dob'] . "<br />Mpesa Number: " . $_POST['mobNumber'] .
        "<br/>Occupation: " . $_POST['occupation'] . "<br />Email: " . $_POST['email'] . "<br />County: " . $_POST['county'].
        "<br />District: " . $_POST['district'] . "<br />Location: " . $_POST['location'] . "<br />Postal Address: " .
        $_POST['paddress'] . "<br />Postal Code: " . $_POST['pcode'] . "<br />Town/City: " . $_POST['town'];
} else if ($_POST['form_name'] == "timsaccount") {
    $subject = "NEW TIMS ACCOUNT REGISTRATION";
    $data = "Name: " . $_POST['fname'] . " " . $_POST['mname'] . "<br/>Nationality: ".$_POST['nationality']."<br/>Occupation: ".
        $_POST['occupation'] . "<br/>Date of Birth: " . $_POST['dob'] . "<br />Mobile Number: " . $_POST['mobNumber'] .
        "<br />Mpesa Number: " . $_POST['MPnumber']. "<br />Email: " .
        $_POST['email'] . "<br />County: " . $_POST['county'] . "<br />Postal Address: " . $_POST['paddress'] . "<br />
        Postal Code: " . $_POST['pcode']."<br />Town/City: ".$_POST['town']."<br />Mpesa Code: ".$_POST['MPcode']."<br />
        1st time TIMS: ".$_POST['firstTIMS']."<br />Ever replaced ID: ".$_POST['firstID']."<br />ID Serial Number: ".
        $_POST['idserial']."<br />Mothers Name: ".$_POST['mothersname']."<br />TIMS Service: ".$_POST['service']."<br />
        KRA PIN: ".$_POST['kraNumber']."<br />Subcounty: ".$_POST['subcounty']."<br />Security Question: ".
        $_POST['securityquiz']."<br />Physical Address: ".$_POST['phyAddress'];
} else if ($_POST['form_name'] == "logbooksearch") {
    $subject = "Log Book Search Enquiry";
    $data = "Name: " . $_POST['fname'] . " " . $_POST['lname'] . "<br/>Car Registration: ".$_POST['carReg']."<br/>Car Make: ".
        $_POST['Carmake']."<br />Mobile Number: ".$_POST['mobNumber']."<br />Mpesa Number: ".$_POST['MPnumber']."<br />
        Email: ".$_POST['email']."<br />WhatsApp Number: ".$_POST['whatsappNumber']."<br />Mpesa Code: ".$_POST['MPcode'];
} else if ($_POST['form_name'] == "krapinupdate") {
    $subject = "KRA PIN UPDATE SERVICES";
    $data = "Name: " . $_POST['fname'] . " " . $_POST['lname'] . "<br/>ID Number: ".$_POST['idnumber']."<br/>Date of Birth: "
        .$_POST['dob'] . "<br />Mobile Number: " . $_POST['mobNumber']. "<br />
        Email: ".$_POST['email'] . "<br />County: " . $_POST['county'] . "<br />Postal Address: " . $_POST['paddress'] .
        "<br />Postal Code: " . $_POST['pcode']."<br />Town/City: ".$_POST['town']."<br />Mpesa Code: ".$_POST['MPcode'].
        "<br />KRA PIN: ".$_POST['kraNumber']."<br />Subcounty: ".$_POST['subcounty']."<br />District: ".$_POST['district'].
        "<br />Area: " . $_POST['area'];
}
use PHPMailer\PHPMailer\PHPMailer;
$data = 
	"Name: ".$_POST['name']."<br/><br/>
	Email: ".$_POST['email']."<br /><br/>
	Subject: ".$_POST['subject']."<br/><br/>
	Message: ".$_POST['message'];


// require 'phpmailer/PHPMailerAutoload.php';
if(isset($_POST["submit"])){
    require "PHPMailer/src/PHPMailer.php";
    require "PHPMailer/src/OAuth.php";
    require "PHPMailer/src/SMTP.php";
    require "PHPMailer/src/POP3.php";
    require "PHPMailer/src/Exception.php";
    


$mail = new PHPMailer();
// $mail->SMTPDebug = 2;
$mail->SMTPSecure = 'ssl';
$mail->Host = 'mail.smartcityplots.co.ke';
$mail->Port = 465;
$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->Username = 'testmail@smartcityplots.co.ke';
$mail->Password = 'cVzx%K#~CQDC';
$mail->setFrom('testmail@smartcityplots.co.ke', 'Website Enquiry From Kenyan Cyber');
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

