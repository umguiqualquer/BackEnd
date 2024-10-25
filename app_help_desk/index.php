<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avaliação</title>
    <link rel="stylesheet" href="estilo.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Pixelify+Sans:wght@400..700&display=swap');
        </style>
</head>
<body>

<header>
<center>
    <h1 id="titulo" >Bem-Vindo ao site de Avaliação</h1>
    <img id="imagem" src="Imagens/sonic2.png" alt="" height="570" width="570">
</center>
</header>

<center>
<button onclick="location.href='acesso_login.php'" id="login" type="button" >Login</button>
</center>

<div id="Fale">
    <form action="">
        <h3>Nome:</h3>
        <input type="text" id="nome" placeholder="Digite seu Nome aqui"><br><br>
        <h3>E-mail:</h3>
        <input type="email" id="email" placeholder="Digite seu E-mail aqui"><br><br>
        <h3>Mensagem:</h3>
        <textarea id="mensagem" name="Mensagem" placeholder="Digite sua Mensagem aqui" rows="10" cols="35"></textarea>

        <input id="Enviar" type="submit" value="Enviar">
    </form>
</div>

<div id="footer">
    <center>
    <h4>SEGA INCORPORATION @SEGA</h4>
    </center>
</div>

<div id="gif"><img src="Imagens/sonicestressado.gif" alt="" width="80" height="80"></div>

</body>
</html>