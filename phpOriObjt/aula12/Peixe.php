<?php

require_once 'Animal.php';

class Peixe extends Animal {
    private $corEscama;

    public function alimentar() {
        echo '<h2>Sou Peixe e me Alimento </h2><p>Comendo Substâncias</p>';
    } 

    public function emitirSom() {
        echo '<p>Peixe Não Emite Som</p>';
    }

    public function locomover() {
        echo '<h2>Sou Peixe e me locomovo </h2><p>Nadando</p>';
    }   

    public function soltarBolha() {
        echo '<p>Soltou Uma Bolha</p>';
    }

    public function getCorEscama() {
    	return $this->corEscama;
    }

    public function setCorEscama($corEscama) {
    	$this->corEscama = $corEscama;
    }
}
