<?php
    $texto = $_GET['texto'];
    $fundo = $_GET['fundo'];
    $cor = $_GET['cor'];

    echo "<p style='color: $cor; background-color: $fundo;'>$texto</p>";
?>