<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Case 3</title>
    <link rel="stylesheet" href="../../cssDefault/style.css">
</head>

<body>
    <?php
        $est = isset($_GET["e"]) ? $_GET["e"] : "NÃO ATRIBUÍDO";

        switch ($est) {
            case 1:
                echo "Você é da Região Sudeste.";
                break;
            case 2:
                echo "Você é da Região Sul.";
                break;
            case 3:
                echo "Você é da Região Centro-Oeste.";
                break;
            case 4:
                echo "Você é da Região Nordeste.";
                break;
            case 5:
                echo "Você é da Região Norte.";
                break;
            default:
                echo "Estado inválido";
                exit;
        }

        echo "<br> <a href='./index.html'>Voltar</a>";
    ?>
</body>

</html>