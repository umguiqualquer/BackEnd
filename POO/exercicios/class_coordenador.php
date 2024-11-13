<?php

class Coordenador{
    public $nome = null;
    public $departamento = null;
    private $cpf = null;
    protected $salario = null;

    public function coordenarTurmas(){
        echo"$this->nome está coordenando a turma do seu departamento que é $this->departamento";
    }
    public function planejarAulas(){
        echo"$this->nome está planejando as aulas";
    }
    public function auxiliarProfessores(){
        echo"$this->nome está auxiliando os professores do departamento de $this->departamento";
    }
    private function definirHorarios(){
        echo"$this->nome está definindo o horario das aulas do seu departamente que é $this->departamento";
    }
    private function organizarReunioes(){
        echo"$this->nome está organizando uma reunião";
    }
}

?>