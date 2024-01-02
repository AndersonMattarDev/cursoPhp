<?php
require_once 'Animal13.php';
class Mamifero13 extends Animal13 {
    protected $corPelo;
    public function emitirSom(){
        echo "<p>Som de Mamífero</p>";
    }
}