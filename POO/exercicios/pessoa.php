<?php
require_once ('class_pessoa.php');

$y = new Pessoa();
$y->nome = "Valter";
$y->idade = 28;

echo "$y->nome <- atributo nome";
echo "<hr>";
echo "$y->idade <- atributo idade";
echo "<hr>";
echo $y->apresentar();
echo "<hr>";
echo $y->caminhar();
echo "<hr>";
echo $y->falar();

?>