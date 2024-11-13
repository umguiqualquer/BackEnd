<?php
require_once ('class_professor.php');

$y = new Professor();
$y->nome = "Ricardo";
$y->disciplina = "Matemática";

echo "$y->nome <- atributo nome";
echo "<hr>";
echo "$y->disciplina <- atributo disciplina";
echo "<hr>";
echo $y->ensinar();
echo "<hr>";
echo $y->corrigirProva();
echo "<hr>";
echo $y->prepararAula();

?>