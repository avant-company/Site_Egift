<?php
if(isset($_SESSION['msg'])){
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
}else{
    echo "<script>alert('');</script>";
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
<body style="background-color: #a8dadc;">

    <header>
            <div class="Abas">
                <a href="index.html" id="logo_name">E-gift</a>
                <a href="index.html" >Home</a>
                <a href="Produtos.html" >Produtos</a>
                <a href="Contato.html" >Contato</a>    
            </div>
           <div class="nav_top">
                <a href="carrinho.html"><img  src="img/Carrinho.png"></a>
                <a href=""> <img  src="img/Perfil.png"></a>
            </div>
        </header>
    </header>   
     
    <section>
        <div id="FundoContato">
            <form action="composer/email.php" method="post">
                <input type="Email" placeholder="Email" name="email" id="EmailForm">
                <input type="text" placeholder="Nome" name="nome" id="SenhaForm">
                <input type="text" placeholder="Assunto" name="assunto">
                <textarea id="Texto" name="mensagem" placeholder="Mensagem..."></textarea>
                <input type="submit" value="Enviar" id="Entrar3">
            </form>
        </div>

        <div id="TopContatoForm">
            <h1 id="TxtTopContato">Fale Com Nós</h1>
        <div>

        </div>
    </section>
</body>
</html>