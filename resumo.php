<?php
    $email = $_GET['e-mail'];
    echo "O e-mail informado foi: $email<br>";

    if(isset($_GET['noticias']))
    {
        echo "Você concordou em receber notícias<br>";
    }

    if(isset($_GET['promocoes']))
    {
        echo "Você aceitou receber promoções<br>";
    }

    else
    {
        echo "Assinatura recusada!";
    }
?>