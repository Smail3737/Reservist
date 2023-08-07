<?php 

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'zzz.com.ua';  																							// Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'test@reservist.zzz.com.ua'; // Ваш логин от почты с которой будут отправляться письма
$mail->Password = 'qE05B5@ocLv-s6ibroW9'; // Ваш пароль от почты с которой будут отправляться письма
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465; // TCP port to connect to / этот порт может отличаться у других провайдеров

$mail->setFrom('test@reservist.zzz.com.ua'); // от кого будет уходить письмо?
$mail->addAddress('benjamincam3812@gmail.com');     // Кому будет уходить письмо 
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Заявка із тестового сайту';
$mail->Body    = '' .$name . ' залишив заявку, його телефон ' .$phone. '<br>Пошта цього користувача: ' .$email;
$mail->AltBody = '';

if(!$mail->send()) {
    echo 'Error';
} else {
    header('location: thank-you.html');
}

$email = $_POST['email'];

$subject = "Ваша заявка принята";
$message = "Благодарим вас за вашу заявку. Мы её получили и обработаем в ближайшее время.";
$headers = "From: test@reservist.zzz.com.ua";

mail($email, $subject, $message, $headers);


?>