<?php

//Exemplo com variavel numerico
/*$idade = 20;
$resultado = ($idade >= 18) ? "Maior de ideda" : "Menor de Idade";
echo $resultado;  //Saída: Maior de idade
*/

/*//Declarei o nome do usuario para que a variavel mensagem veja se o nome é ana ou não
$nome = "Ana";
$mensagem = ($nome == "Ana") ? "Olá, Ana!" : "Olá, visitante!";
echo $mensagem; //Saída: Olá, Ana!
*/

$is_logged_in = true;

$mensagem = $is_logged_in ? 'Bem vindo de volta!' : 'Por favor, fça login';
echo $mensagem;

?>