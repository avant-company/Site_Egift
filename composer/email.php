<?php
require_once('PHPMailer.php');
require_once('SMTP.php');
require_once('Exception.php');

session_start();

$email = $_POST['email'];
$nome = $_POST['nome'];
$assunto = $_POST['assunto'];
$mensagem = $_POST['mensagem'];

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


$mail = new PHPMailer(true);

try{
    $mail -> SMTPDebug = SMTP::DEBUG_SERVER;
    $mail-> isSMTP();
    $mail -> Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = "avantycompany@gmail.com";
    $mail->Password = "av32qnty";
    $mail ->Port = 587;

    $mail ->setFrom('avantycompany@gmail.com');
    $mail ->addAddress($email);
    

    $mail->isHTML(true);
    $mail->Subject = $assunto;
    $mail->Body = "Email do Usuário : ".$email."<br> nomeUsúario :".$nome."<br>".$mensagem ;
    
    if($mail->send()){
        echo "Mensagem Enviada";
        $_SESSION['msg'] = "<script>alert('Mensagem enviada com sucesso');</script>";
       header("Location: ../Contato.php");
       die();
    }else{
        echo "Erro ao enviar message";
    }
}catch(Exception $e){
    echo "DEU ERRP AO ENVIAR mENSAGEM:{$mail->ErrorInfo} ";
}
