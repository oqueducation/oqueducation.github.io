<?php 

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

$phone = $_POST['phone'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];

$mail->isSMTP();                                      
$mail->Host = 'smtp.mail.ru';  																							
$mail->SMTPAuth = true;                              
$mail->Username = 'altyntouroff@mail.ru'; 
$mail->Password = 'codeforces12'; 
$mail->SMTPSecure = 'ssl';                            
$mail->Port = 465; 

$mail->setFrom('altyntouroff@mail.ru'); 
$mail->addAddress('oqueducation@gmail.com');   
$mail->isHTML(true);                                  

$mail->Subject = 'Кто-то записался на интенсив';
$mail->Body    = '' .$fname.' '.$lname.' записался на курсы <br> <b>Его номер телефона:</b>'. $phone;
$mail->AltBody = '';

if(!$mail->send()) {
    echo 'Error';
} else {
    header('location: contact.html');
}
?>
