<?php
session_start();

if(isset($_SESSION['erros'])){
    echo $_SESSION['erros'];
    unset($_SESSION['erros']);
}

?>
  
  
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Egift</title>
    <link rel="stylesheet" type="text/css" href="style/style.css" media="screen" />
    <link href = "https://fonts.googleapis.com/css2? family = Julius + Sans + One & display = swap" rel = "stylesheet">
    <link rel="stylesheet" href="carrosel/gallery.min.css">
    <link rel="stylesheet" href="carrosel/gallery.theme.css">
</head>
<body style="background-color:#1d3557">

    <header>
       
        <div class="Abas">
            <a href="index.html" id="logo_name">E-gift</a>
          
        </div>
     
    </header>
    
   

     <div id="text_image_inicio">
        <h3>Venda Produtos <strong id="color_text">caceta oq eu escrevo</strong> com<strong id="color_text">Egift</strong></h3>
        
        <div id="space_logo_login">
                <img id="logo_login" src="img/Logo.png" alt="logo side content">
        </div>
        <h1>Pague <strong id="color_text">Hoje</strong> e <strong id="color_text"> Agende </strong> o dia da <strong id="color_text">Entrega.</strong></h1>
        <a href="">Conheça mais benefícios</a>

     </div>

    <div class="Login">
        <div class="content_form">
            <h1>Logar</h1>
            <div id="options_user">
                <li class="a"><a href="LoginF.php">Vou Vender</a></li>
                <li><a href="Login.php">Vou Comprar</a></li>
            </div>
            <form action="composer/LoginF.php" method="post">
                <input type="text" placeholder="Email" name="email">
                <input type="password" placeholder="Senha" name="senha">  
                <div class="check_login">
                    <input type="checkbox" name="">
                    <h4>Manter me logado</h4>
                </div>
                <input type="submit" value="Logar" id="logar" name="logar">
            </form>
        </div>
            <div class="login_footer">
                <a href="Cadastrar_comerciante.html">Cadastrar</a>
                <h3>ainda não tem conta ?</h3>
            </div>
</div>

<!--  
 <section>
        <div id="Fundo">
            <form>
                <input type="email" placeholder="Email" id="EmailForm" >
                <input type="password" placeholder="Senha" id="SenhaForm" Name="Senha">
                <input type="radio" id="ClienteR"><a id="txtClienteA">Cliente</a>
                <input type="radio" id="Vendedor"><a id="txtVendedorA">Vendedor</a>
                <input type="submit" value="Enviar" id="Entrar">
             </form>
        </div>
        <div id="Top">
            <h1 id="LoginH1">
                Login
            </h1>
        </div>

    </section>

    <section>
        <div id="FundoCad">
            <form>
                <input type="email" placeholder="Email" id="EmailForm" >
                <input type="text" placeholder="Usuario" id="SenhaForm">
                <input type="password" placeholder="Senha" id="UsuarioForm">
                <input type="password" placeholder="Confirme a senha" id="SenhaConfirm">
                <input type="radio" id="ClienteR2"><a id="txtCliente2">Cliente</a>
                <input type="radio" id="Vendedor2"><a id="txtVendedor2">Vendedor</a>
                <input type="submit" value="Enviar" id="Entrar2">
             </form>
        </div>
  
  -->  
</body>
</html>