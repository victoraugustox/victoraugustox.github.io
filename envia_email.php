<?php
$nome = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';


 $mail = new PHPMailer\PHPMailer\PHPMailer();
 $mail->IsSMTP(); // enable SMTP
 $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
 $mail->SMTPAuth = true; // authentication enabled
 $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
 $mail->Host = "br488.hostgator.com.br";
 $mail->Port = 465; // or 587
 $mail->IsHTML(true);
 $mail->Username = "contato@amuiecastro.com.br";
 $mail->Password = "!1Webmaster";
 $mail->SetFrom("contato@amuiecastro.com.br");
 $mail->Subject = ("Novo contato do site");
 $mail->Body = ("Nome:<br> $nome<br><br> E-mail:$email<br><br>Assunto:$subject<br><br>Mensagem:$message ");
 $mail->AddAddress("victoraugustox87@gmail.com");
    if(!$mail->Send()) {
       echo "Mailer Error: " . $mail->ErrorInfo;
    } else {
       echo "<script>alert('E-mail enviado com sucesso!');location.href=\"index.html\";</script>";

    }
?>
