<?php
require_once 'Lobo.php';
class Cachorro13 extends Lobo {
    public function emitirSom(){
        echo "<h2> Sou Cachorro e eu me comunico assim </h2><p>Au au au au!</p>";
    }

    /*isto não é sobrecarga, pois o php nao suporta esse tipo de polimorfismo. 
    Mas é uma alternativa para metodos de assinaturas diferrentes*/
     
    function reagirFrase($frase){
        if ($frase == "Toma comida" || $frase == "Olá"){
            echo "<p>Abanar e Latir</p>";
        } else {
            echo "<p>Rosnar</p>";
        }
    }
    function reagirHora($hora, $min){
        if($hora < 12){
            echo "<p>Abanar</p>";
        } elseif ($hora >= 18) {
            echo "<p>Ignorando...</p>";
        } else {
            echo "<p>Abanar e Latir</p>";
        }
    }
    function reagirDono($dono){
        if ($dono) {
            echo "<p>Abanar</p>";
        } else {
            echo "<p>Rosnar e Latir</p>";
        }
    }
    function reagirIdadePeso($idade, $peso){

        if ($idade < 5) {
            if ($peso < 10) {
                echo "<p>Abanar</p>";
            } else {
                echo "<p>Latir</p>";
            }
        } else {
            if ($peso < 10) {
                echo "<p>Rosnar</p>";
            } else {
                echo "<p>Ignorando...</p>";
            }
        }    
    }
}