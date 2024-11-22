<?php
    $idade = 20;

    switch (true) {
        case ($idade < 13):
            echo "Criança\n";
            break;
        case ($idade >= 13 && $idade <= 17):
            echo "Adolescente\n";
            break;
        case ($idade >= 18 && $idade <= 64):
            echo "Adulto\n";
            break;
        case ($idade >= 65):
            echo "Idoso\n";
            break;
        default:
            echo "Idade inválida.\n";
    }
?>
