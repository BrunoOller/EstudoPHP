<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1 - Operadores</title>
    <link rel="stylesheet" href="../../cssDefault/style.css">
</head>
<body>
    <div>
        <?php
            $preco = $_GET["p"];
            $aumento = $preco * 0.1;
            
            echo "O valor original do produto é R$". number_format($preco, 2, ",", ".");
            echo "<br> O aumento é de R$". number_format($aumento, 2, ",", ".");

            $preco += $aumento;
            echo "<br> O preço com o aumento de 10% é de R$". number_format($preco, 2, ".");
        ?>
    </div>
</body>
</html>