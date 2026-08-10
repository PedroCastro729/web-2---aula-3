<?php
    $email = $_GET['e-mail'];
    $senha = $_GET['senha'];

    if($email == "fulano@email.com" && $senha == "1234Thanos")
        {
            echo "Acesso permitido";
        }
    else
        {
            echo "Acesso negado";
        }
?>