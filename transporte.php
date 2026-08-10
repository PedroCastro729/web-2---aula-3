<?php
    $meio = $_GET['metodo'];

    $meio = trim($meio);
    $meio = strtolower($meio);

    if($meio == "bicicleta")
        {
            echo "<img src='https://wallbike.com.br/wp-content/uploads/2021/01/bikes-dia-15-2.png' alt=''>";
        }
    else if($meio == "carro")
        {
            echo "<img src='https://www.fiat.com.br/content/dam/fiat/pulse-my26/assets-home/carrossel/Pulse-2027.webp' alt=''>";
        }
    else if($meio == "moto")
        {
            echo "<img src='https://motolitoral.com.br/wp-content/uploads/2018/09/cg-160-start-2026.png' alt=''>";
        }
    else if($meio == "ônibus")
        {
            echo "<img src='https://www.aptacaminhoes.com.br/wp-content/uploads/2023/11/2023_11_-_00_Escolar_destaque_pagina_inicial.jpeg' alt=''>";
        }
    else if($meio == "à pé")
        {
            echo "<img src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRalATsEIhEwpOiXRa-9nK5uN7GsGdVQHCjJS_WM72j4Q&s=10' alt=''>";
        }
    else
        {
            echo("opção invalida");
        }
?>