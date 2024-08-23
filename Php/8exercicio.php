<?php
//criei uma variavel para armazenar o resultado da conta
$resultado = 0; 

//ultilizei o for para que ele não pare ate que valor de $i seja 100
for ($i = 1; $i <= 100; $i++){
    //declarei que o resultado + o numero atual vai ser o resultado novo, mudando o valor de resultado
    $resultado = $i + $resultado;
    echo "$resultado<br>";
}

?>