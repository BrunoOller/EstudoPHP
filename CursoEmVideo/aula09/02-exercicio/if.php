<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicional IF</title>
    <link rel="stylesheet" href="../../cssDefault/style.css">
</head>

<body>
    <?php
        $ano = isset($_GET["an"]) ? $_GET["an"] : 0;
        $idade = date("Y") - $ano;

        echo "Você tem $idade anos <br> E ";

        if ($idade < 16) {
            echo "você não pode votar!";
        } elseif ($idade >= 16 && $idade < 18) {
            echo "você não é obrigado a votar";
        } else {
            echo "você vota!";
        }
    ?>
</body>

</html>