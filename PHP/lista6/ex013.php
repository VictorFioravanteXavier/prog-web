<?php

    $mes = 10;
    $dia = 9; 

    if (($mes == 3 && $dia >= 21) || ($mes == 4 && $dia <= 19)) {
        echo "Áries - Coragem e determinação!";
    } elseif (($mes == 4 && $dia >= 20) || ($mes == 5 && $dia <= 20)) {
        echo "Touro - Persistência e praticidade!";
    } elseif (($mes == 5 && $dia >= 21) || ($mes == 6 && $dia <= 20)) {
        echo "Gêmeos - Curiosidade e versatilidade!";
    } elseif (($mes == 6 && $dia >= 21) || ($mes == 7 && $dia <= 22)) {
        echo "Câncer - Sensibilidade e lealdade!";
    } elseif (($mes == 7 && $dia >= 23) || ($mes == 8 && $dia <= 22)) {
        echo "Leão - Liderança e criatividade!";
    } else {
        echo "Signo não identificado! Verifique o mês e o dia.";
}
?>