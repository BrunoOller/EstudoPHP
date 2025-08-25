<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Case 2</title>
    <link rel="stylesheet" href="../../cssDefault/style.css">
</head>

<body>
    <?php
        $dia = isset($_GET["dia"]) ? $_GET["dia"] : "NÃO ATRIBUÍDO";

        switch ($dia) {
            case 2:
            case 3:
            case 4:
            case 5:
            case 6:
                echo "Você vai para a escola.";
                break;
            case 1:
            case 7:
                echo "Você não vai para a escola!";
                break;
            default:
                echo "Dia inválido";
                exit;
        }

        echo "<br> <a href='./index.html'>Voltar</a>";
    ?>
</body>

</html>