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
    if ($ida < 16){
        $tipoVoto = "Não Vota";
    }
    else{
        if ($ida >= 16 && $ida< 18) {
            $tipoVoto = "Voto Opcional";
        }
        else {
            $tipoVoto = "Voto Obrigatório";
        }
    }
    echo "Para essa idade $tipoVoto";
    ?>
     <br>
    <a href="ex02.html">Voltar</a>
</div>
</body>
</html>
 