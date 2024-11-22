<?php
    $preco = 10;
    $porcentagem = 5;
    $preco_desconto = ($preco*$porcentagem)/100;
    $preco_total = $preco - $preco_desconto;
    echo "Desconto: R$ $preco_desconto ";
    echo "Preco Total: R$ $preco_total"
?>