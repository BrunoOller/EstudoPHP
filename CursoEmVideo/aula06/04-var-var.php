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
            /* Aqui nós aprendemos a criar uma variável de variável */ 
            $x = "abc";
            $$x = "def";

            echo "O conteúdo da variável X é $x";
            echo "<br> A variável criada recebeu o valor $abc";
        ?>
    </div>
</body>
</html>