<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Polimorfismo de Sobreposição</title>
</head>
<body>
    <h1>Aula Polimorfismo - Animais</h1>
    <pre>
    <?php
    require_once 'Mamifero.php';
    require_once 'Reptil.php';
    require_once 'Peixe.php';
    require_once 'Ave.php';
    require_once 'Cachorro.php';
    require_once 'Canguru.php';
    require_once 'Cobra.php';
    require_once 'Tartaruga.php';
    require_once 'GoldFish.php';
    require_once 'Arara.php';
    
    $m = new Mamifero();
    $a = new Ave();
    $r = new Reptil();
    $p = new Peixe();
    $c = new Canguru();
    $k = new Cachorro();
    $co = new Cobra();
    $t = new Tartaruga();
    $gf = new GoldFish();
    $ar = new Arara();
    
    $m->locomover();
    $c->locomover();
    $c->usarBolsa();
    $k->emitirSom();    
    $k->abanarRabo();
    $k->enterrarOsso();
    $t->locomover();


    ?> 
    </pre>
       
</body>
</html>