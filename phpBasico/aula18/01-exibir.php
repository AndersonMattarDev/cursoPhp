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
    //print_r mostra somente os dados dentro do vetor para o programador sem muita formatação e estilo
    $v = array("A","J","M","X","k");

    //count mostra a contagem de elementos
    $tot = count($v);
    echo "O vetor tem $tot elementos<br>";
    print_r($v);
    
    /*var_dump funciona da mesma maneira que a print_r, 
    com um detalhe ela mostra o tipo do dado nesse caso uma string, 
    e tambem mostra a quantidade de elemantos */
    var_dump($v);
    ?>
    </pre>
    
</div>
</body>
</html>
 