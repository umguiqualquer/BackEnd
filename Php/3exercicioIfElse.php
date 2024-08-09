<?php
//Declarei as variaveis
$gastou = 500;
// 0 = Desligado | 1 = Ligado (Valter encinou no inicio do curso)
$VIP = 0;

//Ultilizei If com o OR para declarar que se os gastos forem maior ou igual a 500 OU ele ser VIP o desconto é aplicado, caso nenhum dos 2 forem aplicados o cliente fica sem desconto
if ($gastou >= 500 or $VIP >= 1){
    echo 'Cliente com desconto aplicado';
}else{
    echo 'Cliente sem desconto';
}

?>