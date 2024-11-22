<?php
    $horario = 12;

    switch (true) {
        case ($horario >= 5 && $horario <= 11):
            echo "São $horario horas. Bom dia!";
            break;
        case ($horario >= 12 && $horario <= 17):
            echo "São $horario horas. Boa tarde!";
            break;
        case ($horario >= 18 && $horario <= 21):
            echo "São $horario horas. Boa noite!";
            break;
        case (($horario >= 22 && $horario <= 23) || ($horario >= 0 && $horario <= 4)):
            echo "São $horario horas. Boa madrugada!";
            break;
        default:
            echo "Horário inválido.";
    }
?>
