<?php

//Modelo -> Entidade
class funcionario {
    
    //Atributos -> Caracteristicas
    public $nome = null;
    public $telefone = null;
    public $numFilhos = null;

    //setters
    function setNome($nome){
        $this->nome = $nome;
    }

    function setNumFilhos($numFilhos){
        $this->numFilhos = $numFilhos;
    }

    //getters
    function getNome(){
        return $this->nome;
    }

    function getNumFilhos(){
        return $this->numFilhos;
    }

    function resumirCarFunc(){
        //Esse é o resumo do cadastro do funcionario
        return "$this->nome possui $this->numFilhos filho(s)";
    
    }

}

$y = new funcionario();
$y->setNome('José');
$y->setNumFilhos(2);
//echo $y->resumirCarFunc();
echo $y->getNome().' possui '.$y->getNumFilhos().' filho(s)';
?>