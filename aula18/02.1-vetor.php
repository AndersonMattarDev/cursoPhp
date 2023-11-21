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
        //para inserir um novo elemento no final do vetor usado em vetores em pilha
        array_push($v, "P");
        print_r($v);

        //para eliminar o ultimo elemento do vetor
        array_pop($v);
        print_r($v);

    ?>
    </pre>
    
</div>
</body>
</html>
 