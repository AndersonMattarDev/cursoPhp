<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 013</title>
</head>
<body>
    <h1>Polimorfismo de Sobrecarga!</h1>
<?php
require_once 'Mamifero13.php';
require_once 'Lobo.php';
require_once 'Cachorro13.php';

$m = new Mamifero13();
$m->emitirSom();

$l = new Lobo();
$l-> emitirSom();

$c = new Cachorro13();
$c-> emitirSom();
$c->reagirDono(true);
$c->reagirDono(false);
$c->reagirFrase("Olá");
$c->reagirFrase("Vai Apanhar");
$c->reagirHora(18, 5);
$c->reagirIdadePeso(2, 12.5);
$c->reagirIdadePeso(17, 4.5);
?>
</body>
</html>

