<?php

class Professor{
    public $nome = null;
    public $disciplina = null;
    private $cpf = null;
    protected $salario = null;

    public function ensinar(){
        echo "$this->nome está ensinando na sua aula";
    }
    public function corrigirProva(){
        echo"$this->nome está corrigindo uma prova da materia $this->disciplina";
    }
    public function prepararAula(){
        echo"$this->nome está fazendo uma aula para sua materia de $this->disciplina";
    }
    private function fazerChamada(){
        echo"$this->nome está fazendo a chamada";
    }
    private function corrigirTarefa(){
        echo"$this->nome está corrigindo a tarefa dos seus alunos";
    }
}

?>