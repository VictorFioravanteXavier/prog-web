<?php
    $pontuacao = 8;

    switch (true) {
        case ($pontuacao === 10):
            echo "Excelente";
            break;
        case ($pontuacao === 8 || $pontuacao === 9):
            echo "Muito bom";
            break;
        case ($pontuacao === 6 || $pontuacao === 7):
            echo "Bom, mas pode melhorar";
            break;
        case ($pontuacao < 6):
            echo "Reprovado";
            break;
        default:
            echo "Pontuação inválida.";
    }
?>
