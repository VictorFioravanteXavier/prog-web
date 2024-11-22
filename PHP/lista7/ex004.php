<?php
$clima = "chuvoso"; 

switch ($clima) {
    case "nublado":
        echo "O tempo está nublado. Talvez precise de um casaco leve.";
        break;
    case "ensolarado":
        echo "O dia está ensolarado! Não esqueça do protetor solar.";
        break;
    case "chuvoso":
        echo "Leve um guarda-chuva!";
        break;
    case "nevando":
        echo "Está nevando! Mantenha-se aquecido e tome cuidado ao sair.";
        break;
    case "tempestade":
        echo "Há uma tempestade. Fique em casa se puder.";
        break;
    default:
        echo "Condição climática desconhecida. Esteja preparado para qualquer situação!";
}
?>
