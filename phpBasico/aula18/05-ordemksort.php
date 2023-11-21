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
        $v = array(2=>"A", 5=>"J", 0=>"M", 3=>"X", 4=>"K");
        print_r($v);
        //ksort coloca os elementos em ordem pelo indice ou chave (key)
        ksort($v);
        print_r($v);
        //krsort coloca os elementos em ordem decrescente pelo indice ou chave (key)
        krsort($v);
        print_r($v);
    ?>
    </pre>
    
</div> 
</body>
</html>
 