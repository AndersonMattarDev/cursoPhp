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
        $num = isset($_GET["num"])? $_GET["num"]:1;
        echo "<h1>Analisando o n&uacute;mero $num ...";
        echo "Valores m&uacute;ltiplos";
        $mult = 0;
        for ($c = 1; $c <= $num; $c++) {
            if ($num % $c == 0) {
                $mult++;
                echo "$c ";
            }
        }
        echo "<p> Total de m&uacute;ltiplos: $mult</p>";
        echo "<h2> Resultado: $num <span class='foco'>";
        if ($mult <= 2){
            echo "&Eacute; PRIMO!";
        } else {
            echo "N&Atilde;O &Eacute; PRIMO! ";
        }
        echo "</span></h2>"
    ?>
    <a href="javascript:history.go(-1)" class="botao">Voltar</a>
</div>
</body>
</html>
 