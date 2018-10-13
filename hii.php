 require'PHPMailer-5.2.25/PHPMailerAutoload.php'; 
$x=rand(100000,500000);
$mail=new PHPMailer();
$mail->isSMTP();
$mail->SMTPDebug = 0;
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'tls';
	$mail->Host ='smtp.gmail.com';
	$mail->Port = '587';
	$mail->isHTML(true);
	$mail->Username = 'chanakyagondi@gmail.com';
	$mail->Password = 'itzmechanakya';
	$mail->SetFrom('chanakyagondi@gmail.com');
	$mail->Subject = 'REQUEST FOR NEW PASSWORD';
	$mail->Body = "your new password is TNPC-'$x'";
        $mail->AddAddress($_GET["email"]);
 	if(!$mail->Send()) {
   	 echo "Mailer Error: " . $mail->ErrorInfo;
	}
