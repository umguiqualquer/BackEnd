<?php

//Declarei a variavel que de número, para no futuro usar na conta
$numero = 8;

//Declarei que a função da conta de vezes para suar na tabuada
function tabuada($numero, $i){
    return $numero * $i;
}

echo "Tabuada do $numero<br/>";
//Ultilizei FOR para fazer uma lista declarando os numeros de 1 a 10
for ($i = 1; $i <= 10; $i++){
    
    $resultado = tabuada($numero, $i);
    
    echo "$numero x $i = $resultado <br/>"; //Saída : exemplo com 2... 2 x 5(numero de 1 a 10) = 10

}

?>