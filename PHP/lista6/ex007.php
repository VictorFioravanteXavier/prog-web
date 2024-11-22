<?php 
    $idade = 50;

    if ($idade < 12) {
        echo "Você pode assistir a filmes infantis.";
    } elseif ($idade < 17) {
        echo "Você pode assistir a filmes para adolescentes.";
    } else {
        echo "Você pode assistir a filmes para adultos";
    }
?>