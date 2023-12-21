<?php
require_once 'Pessoa.php';
//Exemplo de herança para diferença, vai herdar Atributos da classe mãe, porém tem diferenças
class Aluno extends Pessoa
{
    private $matricula;
    private $Curso;

    public function pagarMensalidade(){
        echo "<p>Pagando mensalidade do aluno " . $this->nome . "</p>";
    }

    

    public function getMatricula() {
    	return $this->matricula;
    }

    public function setMatricula($matricula) {
    	$this->matricula = $matricula;
    }

    public function getCurso() {
    	return $this->Curso;
    }

    public function setCurso($Curso) {
    	$this->Curso = $Curso;
    }
}