<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Livro</title>
</head>
<body>
    <pre>
    <?php
    require_once 'Pessoa.php';
    require_once 'Livro.php';
    
    $p = array();
    $p[0] = new Pessoa("Anderson", 46, "M");
    $p[1] = new Pessoa("Lidiane", 39, "F");
    $p[2] = new Pessoa("Lucas", 14, "M");
    

    $l = array();
    $l[0] = new Livro("O pequeno principe", "St Exuppery", 254, $p[0]);
    $l[1] = new Livro("A ilha do Tesouro", "Costa", 564, $p[2]);
    $l[2] = new Livro("PS. Eu te amo", "js. Simpson", 489, $p[1]);

    $l[0]->abrir();
    $l[0]->folhear(10);
    $l[0]->avancarPag();
    $l[0]->detalhes();

    $l[1]->detalhes();
    $l[2]->detalhes();
    ?>
    </pre>
    
</body>
</html>
