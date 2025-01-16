<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    session_destroy();
    header("Location: ../html/entrar-cadastrar/entrar.php");
    exit();
} else {
    header("HTTP/1.1 403 Forbidden");
    exit("Acesso não autorizado.");
}
?>