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
    $nome = isset($_GET["nome"]) ? $_GET["nome"] : "Não Informado!";
    $ano = isset($_GET["ano"]) ? $_GET["ano"] : 0;
    $sexo = isset($_GET["sexo"]) ? $_GET["sexo"] : "[Sem Sexo!]";
    $idade = date("Y") - $ano;
    echo "$nome é $sexo e tem $idade Anos de idade!"

    ?>
    <br>
    <a href="ex02.html">Voltar</a>
</div>
</body>
</html>
 