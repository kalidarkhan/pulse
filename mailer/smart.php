<?php 

$name = $_POST['name'];
$tel = $_POST['tel'];
$email = $_POST['email'];

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer();
$mail->CharSet = 'utf-8';

$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'kalidarkhan@gmail.com';                 // Наш логин
$mail->Password = 'kageqgoowtrlxdaw';                           // Наш пароль от ящика
// $mail->Password = 'D1a6k0o4n';
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
// $mail->SMTPSecure = false;
// $mail->SMTPAutoTLS = false;
$mail->Port = 465;                                    // TCP port to connect to
// $mail->Port = 25;
 
$mail->setFrom('kalidarkhan@gmail.com', 'Pulse');   // От кого письмо 
$mail->addAddress('kalidarkhan@mail.ru');     // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Данные';
$mail->Body    = '
		Пользователь оставил данные <br> 
	Имя: ' . $name . ' <br>
	Номер телефона: ' . $tel . '<br>
	E-mail: ' . $email . '';

if(!$mail->send()) {
    echo 'Ошибка: ' . $mail->ErrorInfo;
} else {
    return true;
}

?>