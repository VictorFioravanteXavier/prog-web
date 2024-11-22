<?php 
    $escolha = 4;

    switch ($escolha) {
        case 1:
            $estilo = "Rock";
            break;
        case 2:
            $estilo = "Pop";
            break;
        case 3:
            $escolha = "Sertanejo";
            break;
        case 4:
            $escolha = "Eletrônica";
            break;
        default:
            echo "opção invalida";
            break;
    }

    echo "Você escolheu $escolha."
?>