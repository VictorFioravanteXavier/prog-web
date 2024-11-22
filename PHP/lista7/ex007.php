<?php
    $num1 = 10; 
    $num2 = 5;  
    $operacao = 1; 

    switch ($operacao) {
        case 1:
            $resultado = $num1 + $num2;
            echo "Resultado: $resultado";
            break;
        case 2:
            $resultado = $num1 - $num2;
            echo "Resultado: $resultado";
            break;
        case 3:
            $resultado = $num1 * $num2;
            echo "Resultado: $resultado";
            break;
        case 4:
            if ($num2 != 0) {
                $resultado = $num1 / $num2;
                echo "Resultado: $resultado";
            } else {
                echo "Erro: Divisão por zero não é permitida.";
            }
            break;
        default:
            echo "Operação invalida";
    }
?>
