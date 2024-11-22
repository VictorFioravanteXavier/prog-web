<?php 

$jogador1 = "Papel";
$jogador2 = "Pedra";

if ($jogador1 == "Pedra" && $jogador2 == "Tesoura") {
    echo "Jogador 1 Ganhou!";
} elseif ($jogador1 == "Papel" && $jogador2 == "Pedra") {
    echo "Jogador 1 Ganhou!";
} elseif ($jogador1 == "Tesoura" && $jogador2 == "Papel") {
    echo "Jogador 1 Ganhou!";
} elseif ($jogador2 == "Pedra" && $jogador1 == "Tesoura") {
    echo "Jogador 2 Ganhou!";
} elseif ($jogador2 == "Papel" && $jogador1 == "Pedra") {
    echo "Jogador 2 Ganhou!";
} elseif ($jogador2 == "Tesoura" && $jogador1 == "Papel") {
    echo "Jogador 2 Ganhou!";
} else {
    echo "Empate!";
}


?>