<?php 

$temperatura = 31;

if ($temperatura < 10) {
    echo "Está muito frio! Use roupas quentes.";
} elseif ($temperatura <= 20) {
    echo "Frio. Vista-se bem!";
} elseif ($temperatura <= 25) {
    echo "Temperatura agradável.";
} elseif ($temperatura <= 30) {
    echo "Está ficando quente!";
} else {
    echo "Tu ta no inferno pra estar tao quente assim!";
}

?>