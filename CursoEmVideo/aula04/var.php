<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Aula 04 - Variáveis</title>
</head>

<body>
    <?php
        $nome = "John";
        $idade = 25;
        $altura = 1.81;
        $trabalho = true;

        // Duas maneiras de exibição do conteúdo
        // echo "Olá, ". $nome. "<br> Você tem ". $idade. " anos e ". $altura. " de altura.";
        echo "Olá, $nome <br> Você tem $idade anos e $altura de altura."; // Melhor maneira de exibição
    ?>
</body>

</html>