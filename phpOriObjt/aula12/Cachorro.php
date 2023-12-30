<?php

require_once 'Mamifero.php';

class Cachorro extends Mamifero {
    
    public function emitirSom() {
        echo "<h2> Sou um Cachorro e eu me comunico assim </h2><p>Au, au, au!</p>";
    }
    public function enterrarOsso() {
        echo "<h2> Sou um Cachorro e estou </h2><p>Enterrando um osso!</p>";
    }
    public function abanarRabo(){
        echo "<h2> Sou um Cachorro e estou </h2><p>Abanando o Rabo!</p>";        
    }
    
}
