<?php

require_once 'Animal.php';


class Ave extends Animal {
    private $corPena;

    public function alimentar() {
        echo '<h2>Sou Ave e me Alimento </h2><p>Comendo Frutas</p>';        
    }
    public function emitirSom() {
        echo '<p>Som de Ave</p>';
    }
    public function locomover() {
        echo '<h2>Sou Ave e me locomovo </h2><p>Voando</p>';                
    }
    public function fazerNinho() {
        echo '<p>Construindo um Ninho</p>';
    }


    public function getCorPena() {
    	return $this->corPena;
    }

    public function setCorPena($corPena) {
    	$this->corPena = $corPena;
    }
}
