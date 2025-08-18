<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3 - Referências</title>
    <link rel="stylesheet" href="../../cssDefault/style.css">
</head>
<body>
    <div>
        <?php
            /* Aqui nós aprendemos a ligar uma variável a outra,
            ou seja, ambas ficam conectadas tendo o mesmo valor.
            Mesmo se houver alguma alteração na variável X */ 
            $x = $_GET["x"];
            $y = &$x;

            echo "O X equivale a $x e o Y também equivale $y";
            echo "<br> Se acrescentarmos 5 a variável Y";

            $y += 5;
            echo "<br> O X agora vale $x e Y também vale $y"; 
        ?>
    </div>
</body>
</html>