<?php
require_once 'Pessoa.php';
require_once 'Publicacao.php';

class Livro implements Publicacao {
    //Atributos
    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;
    //Métodos
    public function detalhes(){
        echo "<hr>Livro: " . $this->titulo . " Escrito por " . $this->autor;
        echo "<br>Páginas: " . $this->totPaginas . "<br>Atual: " . $this->pagAtual;
        echo "<br>Sendo lido por ... " . $this->leitor->getNome() . " de " . $this->leitor->getIdade() . " anos";
    }
    //Construtor

    function __construct($titulo, $autor, $totPaginas, $leitor) {
    	$this->titulo = $titulo;
        $this->autor = $autor;
        $this->totPaginas = $totPaginas;
        $this->aberto = false;
        $this->pagAtual = 0;
        $this->leitor = $leitor;
    
    }
    //Métodos especiais

    public function getTitulo() {
    	return $this->titulo;
    }
    
    public function setTitulo($titulo) {
    	$this->titulo = $titulo;
    }

    public function getAutor() {
    	return $this->autor;
    }

    public function setAutor($autor) {
    	$this->autor = $autor;
    }

    public function getTotPaginas() {
    	return $this->totPaginas;
    }

    public function setTotPaginas($totPaginas) {
    	$this->totPaginas = $totPaginas;
    }

    public function getAberto() {
    	return $this->aberto;
    }

    public function setAberto($aberto) {
    	$this->aberto = $aberto;
    }

    public function getLeitor() {
    	return $this->leitor;
    }

    public function setLeitor($leitor) {
    	$this->leitor = $leitor;
    }

    //Métodos Abstratos

    public function abrir(){
        $this->aberto = true;
    }
    public function fechar(){
        $this->aberto = false;
    }
    public function folhear($p){
        if($p > $this->totPaginas){
            $this->pagAtual = 0;
        } else {
            $this->pagAtual = $p;
        }
    }
    public function avancarPag(){
        $this->pagAtual ++;

    }
    public function voltarPag(){
        $this->pagAtual --;
    }
}