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
     $atual = $_GET["aa"];
     echo "O ano atual é $atual e o ano anterior é " .--$atual;
     ?>
 </div>

</body>
</html>