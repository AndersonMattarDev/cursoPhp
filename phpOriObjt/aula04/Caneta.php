<?php
class Caneta {
   public $modelo;
   private $cor;
   private $ponta;
   private $tampada;

    // metodo construtor 1 -- public function Caneta(){ //método construtor, e pode ser definido com o nome da classe ou __construct
    //$this -> cor = "Azul";
    //$this -> tampar();
    //}

   public function Caneta($m, $c, $p){
        $this -> modelo = $m;
        $this -> cor = $c;
        $this -> ponta = $p;
        $this -> tampar();
   }
   
   public function tampar(){
    $this -> tampada = true;
   }
   public function getModelo(){
    return $this-> modelo;
   }
   public function setModelo($m){
    $this-> modelo = $m;
   }
    public function getPonta(){
    return $this-> ponta;
   }
   public function setPonta($p){
    $this-> ponta = $p; 
   }
}