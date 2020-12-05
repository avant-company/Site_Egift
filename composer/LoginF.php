<?php
require_once 'conexao.php';
session_start();

$email = $_POST['email'];
$senha = $_POST['senha'];

if(empty($email) or empty($senha)){
    $_SESSION['erros'] = "<script>alert('Os campos email/senha precisam ser preenchidos.');</script>";
    header('Location: ../LoginF.php');

}
if(!empty($_POST['email']) AND !empty($_POST['senha'])){
    $email = mysqli_real_escape_string($connect,$_POST['email']);
    $senha = mysqli_real_escape_string($connect,$_POST['senha']);
    $sql = "SELECT * FROM tbfornecedor WHERE emailFornecedor = '$email' AND senhaFornecedor = '$senha'";

    $resultado = mysqli_query($connect,$sql);

    $row = mysqli_num_rows($resultado);
    if($row > 0 ){
            $_SESSION['email'] = $email;
            $_SESSION['nome'] = "SELECT nomeFornecedor from tbfornecedor WHERE emailFornecedor = '$email'";
            header('Location:../index.html');
        }else{
            $_SESSION['erros'] = "<script>alert('');</script>";
            header('Location:../LoginF.php');
        }
}   



?>