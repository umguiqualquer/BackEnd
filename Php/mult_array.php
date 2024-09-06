<?php
//Declarei a variavel Cadastro
$cadastro = [];

//Declarei uma lista dentro da lista Cadastro
$cadastro['nome'] = ['Jamilton','Enzo','Guilherme','Caleri','Valter'];

//Declarei outra lista dentro da lista Cadastro
$cadastro['email'] = ['jamilton@gmail.com','enzo@gmail.com','guilherme@gmail.com','celeri@gmail.com','valter@gmail.com'];

//Pedi para o programa mostrar as tabelas com seus dado
echo "<pre>";
print_r ($cadastro);
echo "</pre>";

//Mostrei 2 itens especificos das listas
echo $cadastro ['nome'] [3];
echo '<br>';
echo $cadastro ['email'] [4];
echo '<br>';

//Modifiquei os dados das Listas
$cadastro ['nome'] [2] = 'Senai';
$cadastro ['email'] [0] = 'aluno@senai.br';

echo 'Após as alterações o terceiro nome e primeiro o email ficaram: ';
echo '<br>';
echo $cadastro ['nome'] [2];
echo '<br>';
echo $cadastro ['email'] [0];

?>