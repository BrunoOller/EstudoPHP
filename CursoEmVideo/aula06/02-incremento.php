<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2 - Incremento e Decremento</title>
    <link rel="stylesheet" href="../../cssDefault/style.css">
</head>
<body>
    <div>
        <?php
            /* Esse exercício pretende demonstrar 
            o uso de operadores de incremento e decremento */ 
            $ano = $_GET["a"];
            echo "Estamos no ano $ano e ano passado foi ". --$ano;
        ?>
    </div>
</body>
</html>