<?php

//Modelo -> Entidade
class funcionario {
    
    //Atributos -> Caracteristicas
    public $nome = 'José';
    public $telefone = null;
    public $numFilhos = 2;

    //Método -> Ações
    function resumirCadFunc(){
    return "$this->nome possui $this->numFilhos filho(s)";

    }

    function modificarNumFilhos($Filhos){
    //Afetar um atributo do abjeto
    $this->numFilhos = $Filhos;
    }

    function modificarNome($AlterarNome){
    $this->nome = $AlterarNome;
    }

}

//Objeto -> Indentidade
$y = new funcionario();
echo $y -> resumirCadFunc(); //Para acessar atributos ou métodos usamos o ->
echo "<hr>";
$y->modificarNumFilhos(3);
echo $y->resumirCadFunc();
echo "<hr>";

$x = new funcionario();
$x->modificarNome('Luiz');
echo $x->resumirCadFunc();
echo "<hr>";
?>