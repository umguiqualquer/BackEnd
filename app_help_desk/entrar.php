<?php
session_start();
?>

<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>
    <link rel="stylesheet" type="text/css" href="bootstrap.css">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" type="text/css" href="estilizacao.css">


    </style>
  </head>

  <body>

    <nav class="navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="index.php">
        <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        App Help Desk
      </a>
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-login">
          <div class="card">
            <div class="card-header">
              Login
            </div>
            <div class="card-body">
              <form action="valida_login.php" method="post">
                <div class="form-group">
                  <input name="email" class="form-control" placeholder="E-mail" required>
                </div>
                <div class="form-group">
                  <input type = "password" name="senha" class="form-control" placeholder="Senha" required>
                </div>
                <?php
                if(isset($_GET['login']) && $_GET['login'] =='erro'){
                  ?>
                  <div class="text-danger">
                    Usuário ou senha invalido(s)
                </div>

                <?php }?>
                <?php
                if(isset($_GET['login']) && $_GET['login'] =='erro2'){
                ?>
                <div class="text-danger">
                  Faça o login primeiro !!!
                </div>

                <?php } ?>
                <button class="btn btn-lg btn-info btn-block" type="submit">Entrar</button>
              </form>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>