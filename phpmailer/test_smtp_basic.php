<html>
<head>
<title>PHPMailer - SMTP basic test with authentication</title>
</head>
<body>

<?php
//error_reporting(E_ALL);
error_reporting(E_STRICT);

date_default_timezone_set('America/Toronto');

require_once('./class.phpmailer.php');
//include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded

$mail             = new PHPMailer();

//$body             = file_get_contents('aboutus.html');
//$body             = eregi_replace("[\]",'',$body);

$mail->IsSMTP(); // telling the class to use SMTP
$mail->SMTPDebug  = 1;                     // enables SMTP debug information (for testing)
                                           // 1 = errors and messages
                                           // 2 = messages only
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->Host       = "sg1apclincpnsvr003.apc.sg"; // sets the SMTP server
$mail->SMTPSecure = "ssl";
$mail->Port       = 465;                    // set the SMTP port for the GMAIL server
$mail->Username   = "support@iac-psp.ae"; // SMTP account username
$mail->Password   = "Vx3D6kmG";        // SMTP account password

$mail->SetFrom($_POST["email"], $_POST["email"]);

$mail->AddReplyTo($_POST["email"],$_POST["email"]);

$mail->Subject    = "iLexExchange Margin Contact Form";
// $date=date("Y-m-d H:i:s")."\n\n";


$contactname="Contact Name: ".$_POST["contact_name"]."\r\n";
$email="Email:".$_POST["email"]."\r\n";
$subject="Subject: ".$_POST["subject"]."\r\n";
$companyname="Company Name: ".$_POST["companyname"]."\r\n";
$description="Description: ".$_POST["description"]."\r\n";

$mail->Body =$contact_name."\n".$email."\n".$subject."\n".$companyname."\n".$description;
//$mail->AltBody = $date."".$name."".$email."".$companyName."".$message; //当邮件不支持html时备用显示，可以省略 

//$mail->MsgHTML($body);

$address = "info@ilexmargin.com";
// $address = "joselleirinebpacia@gmail.com";
$mail->AddAddress($address);

//$mail->AddAttachment("images/phpmailer.gif");      // attachment
//$mail->AddAttachment("images/phpmailer_mini.gif"); // attachment

if(!$mail->Send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;
} else {
  echo "<script language=\"JavaScript\">window.location='../thank-you.php';</script>";
}

?>

</body>
</html>
