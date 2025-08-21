<?php
    $nome = isset($_GET["nome"]) ? $_GET["nome"] : "[Não informado.]";
    $ano = isset($_GET["ano"]) ? $_GET["ano"] : 0;
    $sexo = isset($_GET["sexo"]) ? $_GET["sexo"] : "[Não informado.]";
    $idade = date("Y") - $ano;

    echo "Seu nome é $nome, nascido em $ano, é uma pessoa do gênero $sexo e tem $idade anos.";
    echo "<a href='index.html'>Voltar</a>";
?>