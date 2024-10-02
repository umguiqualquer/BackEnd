<?php

echo "<h1> Olá ".$_POST['email'].", seja bem vindo !!! <hr>";

echo '<pre>';
print_r ($_POST);
echo '</pre> <hr>';

echo "E-mail: ";
echo $_POST['email'];
echo '<br>';
echo "Senha: ";
echo $_POST['senha'];