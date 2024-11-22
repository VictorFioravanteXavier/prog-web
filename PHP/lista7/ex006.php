<?php
    $emocao = "triste"; 

    switch ($emocao) {
        case "feliz":
            echo "Que ótimo que você está feliz! Continue aproveitando o seu dia!";
            break;
        case "triste":
            echo "Eu sinto muito que você esteja triste. Tente ouvir uma música que você gosta ou conversar com um amigo.";
            break;
        case "nervoso":
            echo "Respire fundo. Talvez um pouco de meditação ou uma pausa possa ajudar.";
            break;
        case "cansado":
            echo "Você parece cansado. Que tal descansar um pouco ou dormir cedo hoje?";
            break;
        case "entediado":
            echo "Parece que você está entediado. Experimente aprender algo novo ou assistir a um filme interessante.";
            break;
        default:
            echo "Eu não reconheço essa emoção. Espero que você tenha um bom dia!";
    }
?>
