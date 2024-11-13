<?php

//Modelo -> Entidade
class funcionario {
    
    //Atributos -> Caracteristicas
    public $nome = null;
    public $telefone = null;
    public $numFilhos = null;
    public $cargo = null;
    public $salario = null;

    //setters ouverloading
    function __set($atributos, $valor){
        $this->$atributos = $valor;
    }

    //getters overloading
    function __get($atributos){
        return $this->$atributos;
    }

    function resumirCarFunc(){
        //Esse é o resumo do cadastro do funcionario
        //return "$this->nome possui $this->numFilhos filho(s)";
        return $this->__get('nome')." possui ".$this->__get('numFilhos')." filho(s)";
    
    }

}

$y = new funcionario();
$y->__set('nome', 'Guilherme');
$y->__set('numFilhos', 0);
echo $y->resumirCarFunc();

?>