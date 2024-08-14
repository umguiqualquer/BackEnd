<?php
//Listando os Números de 1 a 10
for ($i = 1; $i <= 10; $i++) {

    $categoria;
    //Ver se o numero é par ou impar vendo se o resto da divisão é 0
    $imparOUpar = ($i % 2 == 0) ? "par" : "impar";


    //Clasificando se o numero é baixo,medio ou alto
    switch ($i){
        case $i <= 3:
            $categoria = 'baixo';
            break;

        case $i <= 7:
            $categoria = 'médio';
            break;

        case $i <= 10:
            $categoria = 'alto';
            break;

        default:
            $categoria = "numero desconhecido";
            break;
    }

    echo "O número $i é $conjunto e está na categostia $categoria.<br/>"; //mensagem final mostrando todos os resultados
}

?>