<?php
    if($_GET['tipo'] == "masculino")
        {
            $preco = 30;
        }
    else
        {
            $preco = 25;
        }

    if($_GET['tamanho'] == "p")
        {
            $preco -= 5;
        }
    else if($_GET['tamanho'] == "m")
        {
            $preco += 1;
        }
    else
        {
            $preco += 10;
        }

    echo "O preço será: $preco";
?>