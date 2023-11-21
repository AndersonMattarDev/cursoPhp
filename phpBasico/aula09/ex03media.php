<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../aulaPHP/_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
    $nota1 = isset($_GET["nota1"])? $_GET["nota1"] : 0;
    $nota2 = isset($_GET["nota2"])? $_GET["nota2"] : 0;
    $media = ($nota1 + $nota2) / 2;
    echo "Sua média é $media </br>";
    if ($media < 5){
        $res = "Reprovado" ;
    }elseif ($media >= 5 && $media < 7 ){
        $res = "Recuperação";
    }else{
        $res = "Aprovado";
    }
    echo "E você está $res </br>";
    ?>
    <a href="ex03media.html">Voltar</a>
</div>
</body>
</html>
 