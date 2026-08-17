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

        $desconto = $qtd * 3 * $preco / 100;
            
        $total = $preco * $qtd - $desconto * $qtd;

    echo "O preço será: $total";
?>