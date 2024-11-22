<?php
    $peso = 70; 
    $altura = 1.75; 

    $imc = $peso / ($altura * $altura);

    switch (true) {
        case ($imc < 18.5):
            echo "IMC: " . number_format($imc, 2) . " - Abaixo do peso";
            break;
        case ($imc >= 18.5 && $imc <= 24.9):
            echo "IMC: " . number_format($imc, 2) . " - Peso normal";
            break;
        case ($imc >= 25 && $imc <= 29.9):
            echo "IMC: " . number_format($imc, 2) . " - Sobrepeso";
            break;
        case ($imc >= 30):
            echo "IMC: " . number_format($imc, 2) . " - Obesidade";
            break;
        default:
            echo "Erro ao calcular o IMC.";
    }
?>
