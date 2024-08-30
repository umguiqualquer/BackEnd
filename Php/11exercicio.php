<?php

//Criei uma lista chamada Cadastro
$cadastro = [];

//Adicionei listas (usuario e senha) dentro da lista Cadastro
$cadastro ['usuario'] = ['João','Maria','Pedro'];
$cadastro ['senha'] = ['1234','abcd','5678'];

echo '<pre>';
print_r($cadastro);
echo '</pre>';

echo "<hr>";

//Alterei os dados das listas usuario e senha
$cadastro ['usuario'][1] = 'Ana';
$cadastro ['senha'][0] = 'efgh';

echo "O segunda nome da lista USUARIOS foi atualizado e agora é: <br>", $cadastro['usuario'][1];
echo "<br>";
echo "A primeira senha da lista SENHAS foi atualizado e agora é: <br>", $cadastro['senha'][0];

?>