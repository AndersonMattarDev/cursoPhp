<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
<!-Tudo que estiver dentro da tag pre ficara pre formatado ->
    <pre>
    <?php
        $v = array("A", "J", "M", "X", "K");
        print_r($v);
        //sort coloca os elementos em ordem do menor para o maior
        sort($v);
        print_r($v);
        //rsort coloca em ordem reversa do maior para o menor
        rsort($v);
        print_r($v);
        //asort coloca em ordem mas associa o elemento ao indice mudando este junto com seu elemento correspondente
        asort($v);
        print_r($v);
        //arsort faz o reverso de asort colocar em ordem associativa decrescente os elementos cada um com seu indice
        arsort($v);
        print_r($v);
    ?>
    </pre>
    
</div> 
</body>
</html>
 