<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 4 - Variável de Variável</title>
    <link rel="stylesheet" href="../../cssDefault/style.css">
</head>
<body>
    <div>
        <?php 
            $ano = $_GET["an"];
            $idade = 2025 - $ano;
            $tipo = ($idade >= 18 && $idade < 65) ? "OBRIGATÓRIO" : "NÃO OBRIGATÓRIO";

            echo "Quem nasceu em $ano tem idade de $idade <br> Então no seu caso o voto é $tipo";
        ?>
    </div>
</body>
</html>