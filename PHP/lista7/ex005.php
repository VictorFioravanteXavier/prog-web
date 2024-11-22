<?php
    $escolha = "rock";

    switch ($genero) {
        case "rock":
            echo "Artista recomendado: Queen.";
            break;
        case "pop":
            echo "Artista recomendado: Michael Jackson.";
            break;
        case "jazz":
            echo "Artista recomendado: Miles Davis.";
            break;
        case "hip-hop":
            echo "Artista recomendado: Tupac Shakur.";
            break;
        case "sertanejo":
            echo "Artista recomendado: Chitãozinho & Xororó.";
            break;
        default:
            echo "Gênero musical desconhecido. Experimente algo novo!";
    }
?>
