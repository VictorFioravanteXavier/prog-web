<?php

    $mes = 11;
    $dia = 21;  

    if (($mes == 3 && $dia >= 21) || ($mes == 4 && $dia <= 19)) {
        echo "Áries";
    } elseif (($mes == 4 && $dia >= 20) || ($mes == 5 && $dia <= 20)) {
        echo "Touro";
    } elseif (($mes == 5 && $dia >= 21) || ($mes == 6 && $dia <= 20)) {
        echo "Gêmeos";
    } elseif (($mes == 6 && $dia >= 21) || ($mes == 7 && $dia <= 22)) {
        echo "Câncer";
    } elseif (($mes == 7 && $dia >= 23) || ($mes == 8 && $dia <= 22)) {
        echo "Leão";
    } elseif (($mes == 8 && $dia >= 23) || ($mes == 9 && $dia <= 22)) {
        echo "Virgem";
    } elseif (($mes == 9 && $dia >= 23) || ($mes == 10 && $dia <= 22)) {
        echo "Libra";
    } elseif (($mes == 10 && $dia >= 23) || ($mes == 11 && $dia <= 21)) {
        echo "Escorpião";
    } elseif (($mes == 11 && $dia >= 22) || ($mes == 12 && $dia <= 21)) {
        echo "Sagitário";
    } elseif (($mes == 12 && $dia >= 22) || ($mes == 1 && $dia <= 19)) {
        echo "Capricórnio";
    } elseif (($mes == 1 && $dia >= 20) || ($mes == 2 && $dia <= 18)) {
        echo "Aquário";
    } elseif (($mes == 2 && $dia >= 19) || ($mes == 3 && $dia <= 20)) {
        echo "Peixes";
    } else {
        echo "Data inválida!";
    }

?>