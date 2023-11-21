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
        $v = array("A","J","M","X","k");
        print_r($v);
        //unshift coloca elementos no inicio do vetor
        array_unshift($v,"P");
        print_r($v);
        
        //elimina o primeiro elemento do vetor
        array_shift($v);
        print_r($v);



    ?>
    </pre>
    
</div>
</body>
</html>
 