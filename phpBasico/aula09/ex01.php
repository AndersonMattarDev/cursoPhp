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
    $an = isset($_GET["ano"]) ? $_GET["ano"] : 1900;
    $ida = date("Y") - $an;
    echo "Você nasceu em $an e tem $ida anos. <br/>";

    if ($ida >=18) {
        $voto = "Já pode votar!";
        $dir = "Já pode dirigir!";
    }
    else {
        $voto = "Não pode votar!";
        $dir = "Não pode dirigir!";
    }
    echo "Com essa idade voce $voto E também $dir";
    ?>
     <br>
    <a href="ex01.html">Voltar</a>
</div>
</body>
</html>
 