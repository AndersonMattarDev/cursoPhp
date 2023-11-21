<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="estilo.css"/>
    <title>Operações Aritmeticas</title>
</head>
<body>
<div>
    <?php
    $n1 = $_GET["a"];
    $n2 = $_GET["b"];
    echo "<h1>Valores recebidos: $n1 e $n2<h1/>";
    $m = ($n1 + $n2) / 2; //para realizar esse calculo usamos os parênteses para forçar a soma em primeiro lugar segundo a precedencia

    echo "<br/> A soma vale ". ($n1+$n2);
    echo "<br/> A subtração vale ". ($n1-$n2);
    echo "<br/> A multiplicação vale ". ($n1*$n2);
    echo "<br/> A divisão vale ". ($n1/$n2);
    echo "<br/> O modulo ou resto da divisão vale ". ($n1%$n2);
    echo "<br/> A média é $m"
    ?>
</div>


</body>
</html>