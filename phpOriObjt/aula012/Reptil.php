<?php

require_once 'Animal.php';

class Reptil extends Animal {
    private $corEscama;
    
    public function alimentar() {
        echo '<h2>Sou Réptil e me alimento </h2><p>Comendo Vegetais</p>';        
    }
    public function emitirSom() {
        echo '<p>Som de Reptíl</p>';        
    }
    public function locomover() {
        echo '<h2>Sou Réptil e me locomovo </h2><p>Rastejando </p>';        
    }

    public function getCorEscama() {
    	return $this->corEscama;
    }

    public function setCorEscama($corEscama) {
    	$this->corEscama = $corEscama;
    }
}
