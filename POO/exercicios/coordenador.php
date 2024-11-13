<?php
require_once ('class_coordenador.php');

$y = new Coordenador();
$y->nome = "Celeri";
$y->departamento = "Biologia";

echo "$y->nome <- atributo nome";
echo "<hr>";
echo "$y->departamento <- atributo departamento";
echo "<hr>";
echo $y->coordenarTurmas();
echo "<hr>";
echo $y->planejarAulas();
echo "<hr>";
echo $y->auxiliarProfessores();

?>