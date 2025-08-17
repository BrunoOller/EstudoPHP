<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 05 - Operadores Aritméticos</title>
    <link rel="stylesheet" href="../../cssDefault/style.css">
</head>
<body>
    <?php
        $n1 = 3;
        $n2 = $_GET["a"]; // Pegando valor pela URL

        // Operações
        $soma = $n1 + $n2;
        $subtracao = $n1 - $n2;
        $multiplicacao = $n1 * $n2;
        $divisao = $n1 / $n2;
        $modulo = $n1 % $n2;
        $media = ($n1 + $n2) / 2;

        echo "<h1>Cálculos entre $n1 e $n2</h1>";
        echo "$n1 + $n2 é igual a $soma. <br>";
        echo "$n1 - $n2 é igual a $subtracao. <br>";
        echo "$n1 * $n2 é igual a $multiplicacao. <br>";
        echo "$n1 / $n2 é igual a $divisao. <br>";
        echo "$n1 % $n2 é igual a $modulo. <br>";
        echo "A média de $n1 e $n2 é igual a $media.";

        // Outro modo de fazer um cálculo seria
        // echo "A soma entre $n1 e $n2 é ". ($n1 + $n2);
    ?>
</body>
</html>