<!DOCTYPE html>
<html lang="pt">

<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
        require "funcoes.php";// require so carrega o arquivo se ele existir e include continua carregando mesmo sem exitir
        echo "<h1>Testando novas funções!</h1>";

    ola();

    mostraValor(4);
    ?>
</div>
</body>
</html>
 