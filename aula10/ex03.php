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
        $es = isset($_GET["es"])?$_GET["es"]:0;
        switch ($es){
            case 2:
            case 4:
            case 5:
            case 15:
            case 23:
            case 24:
            case 28:
                echo "Estado da região Norte!";
                break;
            case 3:
            case 7:
            case 11:
            case 16:
            case 18:
            case 19:
            case 21:
            case 27:
                echo "Estado da região Nordeste!";
                break;
            case 8:
            case 10:
            case 12:
            case 13:
                echo "Estado da região Centro-Oeste!";
                break;
            case 9:
            case 14:
            case 20:
            case 26:
                echo "Estado da região Sudeste!";
                break;
            case 17:
            case 22:
            case 25:
                echo "Estado da região Sul!";
                break;
            default:
                echo "Escolha um estado!";
        }
    ?>
    <br><a href="javascript:history.go(-1)" class="botao">Voltar</a>
</div>
</body>
</html>
 