<?php
/*
//declarando uma variavel com o array que faz com que ela vire uma lista
$lista_frutas = array("Banana","Maçã","Morango","Uva");
//escolho a posição do número, começa sempre do 0, exemplo: 0 , 1 , 2 , 3
echo $lista_frutas[3]; 
*/

/*
//Criando a array Lista de frutas
$lista_frutas = ["Banana","Maçã","Morango","Uva"];

echo "$lista_frutas[2]";

//Alterando o Valor 0 -> Banana para Melancia
$lista_frutas[2] = "Pera";

echo "<hr>";
echo $lista_frutas[2];
*/

//Criando a array lista de frutas
$lista_frutas = ["Banana","Maçã","Morango","Uva"];

echo '<pre>';
print_r ($lista_frutas);
echo $lista_frutas[0];
echo "<hr>";
echo '</pre>';

echo '<pre>';
//Alterando o Valor 0 -> Banana para Melancia
$lista_frutas[0] = "Melancia";
print_r ($lista_frutas);
echo '</pre>';

echo "<br>";

echo $lista_frutas[0];

?>