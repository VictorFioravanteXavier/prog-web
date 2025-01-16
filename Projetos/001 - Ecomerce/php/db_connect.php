<?php
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'ecommerce';

    $conn = new mysqli($host, $user, $password);

    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }

    $sql = "
        CREATE DATABASE IF NOT EXISTS ecommerce;

        USE ecommerce;

        CREATE TABLE IF NOT EXISTS usuarios (
            id INT AUTO_INCREMENT PRIMARY KEY,
            nome VARCHAR(255),
            login VARCHAR(255) UNIQUE,
            email VARCHAR(255),
            cpf VARCHAR(14) UNIQUE,
            senha VARCHAR(255)
        );
    ";

    if ($conn->multi_query($sql)) {
        do {
            if ($result = $conn->store_result()) {
                $result->free();
            }
        } while ($conn->next_result());
    } else {
        die("Erro ao criar o banco de dados ou tabelas: " . $conn->error);
    }

    $conn->select_db($database);
?>