<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="estilo.css"/>
    <title>Incremento</title>
</head>
<body>
 <div>
     <?php
     $a = 3;
     // $b = $a; assim a variável b recebe o valor de a  porém nao tem relação com a
     $b = &$a; // Aqui a variável b esta relacionada a varialvel a e esta tem seu valor alterado pela linha abaixo
     $b += 5;
     echo "A variável A vale $a";
     echo "<br/>A variável B vale $b";

     ?>
 </div>

</body>
</html>