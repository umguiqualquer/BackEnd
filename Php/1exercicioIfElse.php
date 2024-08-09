<?php
//declarei as 3 notas do aluno
define ('NOTA1','8');
define ('NOTA2','7');
define ('NOTA3','6');

//aqui fiz a conta e como o programa vai definir a media
$media = (NOTA1 + NOTA2 + NOTA3) / 3;

//defini para o programa mostrar as notas que foram declaradas
echo 'A primeira nota é: ', NOTA1, '<br/>';
echo 'A segunda nota é: ', NOTA2, '<br/>';
echo 'A terceira nota é: ', NOTA3, '<br/>';
echo 'Sua nota media é de: ', $media, '<br/>';

//usei o If para o programa mostrar que se caso a media for maior ou igual a 7 mostrar uma mensagem, caso contrario mostrar outra
if ($media >= 7){
    echo 'Passou de ano! Parabens';
}else{
    echo 'Reprovou de ano, mais sorte da proxima vez';
}

?>