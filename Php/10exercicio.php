<?php
//Criei a lista de 1 a 10
$lista = [1,2,3,4,5,6,7,8,9,10];

//Declarei para ele mostrar a lista atual de 0 a 10 que declarei a cima
echo '<pre>';
print_r ($lista);
echo "<hr>";
echo '</pre>';

echo $lista[0];
echo "<br>";
echo $lista[4];
echo "<br>";
echo $lista[9];
echo "<br>";

//Alterei os valores da tabela
$lista[0] = 100;
$lista[4] = 500;
$lista[9] = 1000;


//Declarei para ele mostrar a lista atualizada com os numeros alterados
echo '<pre>';
print_r ($lista);
echo "<hr>";
echo '</pre>';
echo "Os valores alterados foram <br>";
echo $lista[0];
echo "<br>";
echo $lista[4];
echo "<br>";
echo $lista[9];
echo "<br>";

?>