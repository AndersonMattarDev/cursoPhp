<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
    $nr = isset($_GET["num"])?$_GET["num"]:0;
    $op = isset($_GET["oper"])?$_GET["oper"]:1;
    $r = 0.0;
    switch ($op){
        case 1:
            $r = $nr*2;
            break;
        case 2:
            $r =  (float)($nr ** 3);
            break;
        case 3:
            $r = sqrt($nr); //Ou $nr^(1/2)
    }
    echo "O resultado da operação solicitada foi <span class='foco'>$r</span>";
    ?>
    <br>
    <a href="ex01.html" class="botao">Voltar</a>
</div>
</body>
</html>
 