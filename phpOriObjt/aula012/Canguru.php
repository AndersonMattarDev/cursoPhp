<?php
require_once 'Mamifero.php';

class Canguru extends Mamifero {

    public function locomover() {
        echo "<h2>Sou um Canguru e me locomovo </h2><p>Saltando<p>";       
    } 
    public function usarBolsa() {
        echo "<h2>Sou um Canguru e estou usando minha </h2><p>Bolsa<p>";
    }   
}
