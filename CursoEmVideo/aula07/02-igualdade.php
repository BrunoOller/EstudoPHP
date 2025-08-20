<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2 - Igual e Idêntico</title>
    <link rel="stylesheet" href="../../cssDefault/style.css">
</head>
<body>
    <div>
        <?php 
            $x = 3;
            $y = "3";

            $r = $x === $y ? "SIM" : "NAO";

            echo "As variaveis X e Y são iguais? $r";

        ?>
    </div>
</body>
</html>