<?php

class Pessoa{
    //Atributos
    private $nome;
    private $idade;
    private $sexo;

    //Métodos
    public function fazerAniversario(){
        $this->idade ++; //mesmo que $this->idade=$this->idade = 1; Usando operador de incremento.
    }
    

    function __construct($nome, $idade, $sexo) {
    	$this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getIdade() {
    	return $this->idade;
    }

    public function setIdade($idade) {
    	$this->idade = $idade;
    }

    public function getSexo() {
    	return $this->sexo;
    }

    public function setSexo($sexo) {
    	$this->sexo = $sexo;
    }
}