<?php

require_once 'Animal.php';

class Mamifero extends Animal {
    private $corPelo;

    public function alimentar()
    {
        echo "<h2>Sou Mamifero e me alimento</h2><p>Mamando</p>";
    }
    public function emitirSom()
    {
        echo "<p>Som de Mamifero</p>";
    }
    public function locomover()
    {
        echo "<h2>Sou mamifero e me locomovo </h2><p>Correndo<p>";
    }
    

    public function getCorPelo() {
    	return $this->corPelo;
    }

    public function setCorPelo($corPelo) {
    	$this->corPelo = $corPelo;
    }
}
