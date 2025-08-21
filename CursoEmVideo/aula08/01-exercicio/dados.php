<?php
    $num = $_GET["num"];

    echo "A raiz quadrada de $num é ". number_format(sqrt($num),2,",",".");
    echo "<a href='index.html'>Voltar</a>"
?>