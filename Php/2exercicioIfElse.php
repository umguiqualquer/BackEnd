<?php
//Declarei as variaveis
$salario = 1000;
$tempo = 10;

//Fiz os cauculos do codigo
$salario20 = $salario + ($salario * 0.2);
$salario10 = $salario + ($salario * 0.1);

//Comandos do If, caso o salario for menor que 2000 e o tempo for maior que 10 horas e caso o salario for maior que 2000 e o tempo maior que 5 horas
if ($salario < 2000){
    if ($tempo > 10){
        echo 'Seu salario é de ', $salario20;
    }else{
        echo 'Seu salario é de ', $salario;
    }
}else{
    if ($tempo > 5){
        echo 'Seu salario é de ', $salario10;
    }else{
        echo 'Seu salario é de ', $salario;
    }
}

?>