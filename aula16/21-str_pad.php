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
        $nome = "Mattar";
        $novo = str_pad($nome, 30, " ", STR_PAD_LEFT);
        print("Este Anderson $novo é da hora!");
    ?>
</div>
</body>
</html>
 