<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
    <style>
        h1 { font: 20pt Arial; }
    </style>
</head>
<body>
<div>
    <?php
     $val = isset($_GET["val"])?$_GET["val"]:0;
     echo "<h1>Mostrando a Tabuada de $val!<br>";
     for ($c = 1; $c <=10; $c++) {
         $res = $val*$c;
         echo "$val x $c = $res <br>";
     }
    ?>
    <br><a href="javascript:history.go(-1)" class="botao">Voltar</a>
</div>
</body>
</html>
 