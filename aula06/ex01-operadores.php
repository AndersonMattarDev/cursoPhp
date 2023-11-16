<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="estilo.css"/>
    <title>Operadores</title>
</head>
<body>
 <div>
     <?php
     $preco = $_GET["p"];
     echo "O preço do produto é RS ". number_format($preco, 2);
     // $preco = $preco + ($preco*10/100); jeito menos eficiente
     $preco += $preco*10/100; // Jeito mais eficiente de fazer atribuição
     // $preco -= $preco*10/100; // Pode ser usado com todos os operadores
     echo "<br/>E o novo preço com 10% de aumento é R$ ". number_format($preco, 2);
     ?>
 </div>

</body>
</html>