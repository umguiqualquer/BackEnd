<?php
//Ultilizei o FOR para fazer uma repetição para $i chegar até 50 sem parar
for ($i = 1; $i <= 50; $i++){
    //Declarei a conta da raiz com sqrt
    $raiz = sqrt($i);
    $raiz2 = round($raiz, 2); // Codigo para arredondar o resultado de raiz
    echo "A raiz quadrada de $i é $raiz2<br>"; // Saida : A raiz quadrada de 4(exemplo) é 2
}

?>