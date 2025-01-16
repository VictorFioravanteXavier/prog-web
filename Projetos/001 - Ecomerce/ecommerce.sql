/* mysql -u root -p */

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

