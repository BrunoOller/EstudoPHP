<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 05 - Funções Aritméticas</title>
    <style>
        h2 {
            font-size: 15pt Arial;
        }
    </style>
</head>
<body>
    <div>
        <?php
            $v1 = $_GET["x"];
            $v2 = $_GET["y"];

            echo "<h2>Valores recebidos: $v1 e $v2</h2>";
            echo "O valor absoluto de $v2 é ". abs($v2);
            echo "<br> O valor absoluto de $v1<sup>$v2</sup> é ". pow($v1, $v2);
            echo "<br> A raiz de $v1 é ". sqrt($v1);
            echo "<br> O valor de $v2 arredondado é ". round($v2); // Outras funções de arredondamento: ceil, floor
            // No caso o ceil vai sempre arredondar pra cima,
            // Já o floor, sempre vai arredondar pra baixo, mesmo que seja 2.8
            echo "<br> A parte inteira de $v2 é ". intval($v2);
            echo "<br> O valor de $v1 em moeda é R$". number_format($v1, 2, ",", ".");
        ?>
    </div>
</body>
</html>