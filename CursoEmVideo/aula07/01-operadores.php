<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1 - Operadores ternários</title>
    <link rel="stylesheet" href="../../cssDefault/style.css">
</head>
<body>
    <div>
        <?php 
            echo "<h1>SOMA X MULTIPLICAÇÃO</h1>";
            echo "<br> Se você atribuir o valor de r como 1, você fará a soma de X e Y";
            echo "<br> Se você atribuir qualquer outro valor a r <br> será feita a multiplicação de X e Y <br><br>";

            $r = $_GET["r"];
            $x = $_GET["x"];
            $y = $_GET["y"];

            $calc = $r == 1 ? $x + $y : $x * $y;

            echo "X é igual a $x <br> E Y é igual a $y";
            echo "<br> fazendo o cálculo desejado, dá $calc";
        ?>
    </div>
</body>
</html>