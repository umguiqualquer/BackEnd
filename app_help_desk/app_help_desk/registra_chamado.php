<?php

echo "<pre>";
print_r ($_POST);
echo "</pre>";
echo "<hr>";

$variavel_tirulo = $_POST['titulo'];
$variavel_categoria = $_POST['categoria'];
$variavel_descricao = $_POST['descricao'];

$texto = $variavel_tirulo.' | '.$variavel_categoria.' | '.$variavel_descricao.PHP_EOL;


echo $texto;

$arquivo = fopen ('../../app_help_desk/registro.txt', 'a');

fwrite($arquivo, $texto);

fclose($arquivo);

header ('Location: abrir_chamado.php');

?>