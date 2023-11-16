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
        $n = isset($_GET["num"])?$_GET["num"]:1;
        for ($c=1;$c<=10;$c++){
            $r = $n*$c;
            echo "$n x $c =$r <br>";
        }
    ?>
    <a href="javascript:history.go(-1)" class="botao">Voltar</a>
</div>
</body>
</html>
 