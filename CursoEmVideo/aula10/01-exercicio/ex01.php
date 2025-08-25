<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Case</title>
    <link rel="stylesheet" href="../../cssDefault/style.css">
</head>

<body>
    <?php
        $num = isset($_GET["num"]) ? $_GET["num"] : "NÃO ATRIBUÍDO";
        $op = isset($_GET["op"]) ? $_GET["op"] : "NÃO ATRIBUÍDO";

        switch ($op) {
            case 1:
                $num *= 2;
                break;
            case 2:
                $num **= 3;
                break;
            case 3:
                $num = sqrt($num);
                break;
            default:
                echo "Operação inválida";
                exit;
        }

        echo "O resultado foi: $num";
        echo "<br> <a href='./index.html'>Voltar</a>";
    ?>
</body>

</html>