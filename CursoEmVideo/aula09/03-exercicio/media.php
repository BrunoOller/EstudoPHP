<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicional IF</title>
    <link rel="stylesheet" href="../../cssDefault/style.css">
    <style>
        span {
            color: #bd0101ff;
        }
    </style>
</head>

<body>
    <?php
        $n1 = isset($_GET["n1"]) ? $_GET["n1"] : 0;
        $n2 = isset($_GET["n2"]) ? $_GET["n2"] : 0;
        $media = ($n1 + $n2) / 2;

        echo "A média entre <span>$n1</span> e <span>$n2</span> é igual a <span>$media</span> <br>";

        if ($media >= 6) {
            echo "Situação do aluno: <span>APROVADO</span>";
        } else {
            echo "Situação do aluno: <span>REPROVADO</span>";
        }
        echo "<br><a href='index.html'>Voltar</a>"
    ?>
</body>

</html>