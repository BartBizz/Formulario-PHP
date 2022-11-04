<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);


$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];

$status = null;

try {
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'gabriebart150@gmail.com';
    $mail->Password = 'imksmqdchtuzjlib';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    $mail->setFrom($email, $nome);
    $mail->addAddress('gabriel.bizzotto@etec.sp.gov.br','Gabriel Bizzotto');

    $mail->isHTML(true);
    $mail->Subject = 'formulário de contato - ' . $email;
    $mail->Body = $mensagem;

    $mail->send();
    echo 'Mensagem enviada';
}catch (Exception $e) {
    echo "Mensagem não pode ser enviada. Mailer Error: {$mail->ErrorInfo}";
}

?>

<h1>NOME</h1>
<?=$nome?>
<h1>EMAIL</h1>
<?=$email?>
<h1>MENSAGEM</h1>
<?=$mensagem?>