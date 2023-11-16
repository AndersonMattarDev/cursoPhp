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
   $val = isset($_GET["val"])?$_GET["val"]:1;
   echo "<h1>Calculando o fatorial de $val</h1>";
    $c = $val;
    $fat = 1;

    do{
        $fat = $fat*$c;
        $c--;
    }while($c >= 1);
    echo "<h2>$val ! = $fat</h2>";
    ?>
    <br>
    <a href="ex02fatorial.html">Voltar</a>
</div>
</body>
</html>
 