CREATE DATABASE IF NOT EXISTS sysFamarcia;

USE sysFamarcia;

CREATE TABLE IF NOT EXISTS farmacia (
    id INT AUTO_INCREMENT,
    nomeDaFarmacia VARCHAR(250),
    endereco VARCHAR(250),
    bairro VARCHAR(100),
    numero_comercial INT,
    complemento VARCHAR(200),
    cep INT,
    PRIMARY KEY(id)

);

CREATE TABLE IF NOT EXISTS farmaceutico (
    id SERIAL,
    codigoFarmaceutico INT,
    nome VARCHAR(250),
    dataNascimento INT,
    cpf INT,
    email VARCHAR(150),
    endereco VARCHAR(150),
    bairro VARCHAR(100),
    numero_residencia INT,
    complemento VARCHAR(200),
    cep INT,
    PRIMARY KEY(id)
);

CREATE TABLE IF NOT EXISTS cliente (
    id INT AUTO_INCREMENT,
    codigoCliente INT,
    nome VARCHAR(100),
    dataNascimento INT,
    cpf INT,
    email VARCHAR(150),
    endereco VARCHAR(150),
    endereco VARCHAR(150),
    bairro VARCHAR(100),
    numero_residencia INT,
    complemento VARCHAR(200),
    cep INT,
    PRIMARY KEY(id)
);

CREATE TABLE IF NOT EXISTS remedio (
    id INT AUTO_INCREMENT,
    nomeDoRemedio VARCHAR(100),
    valorDoRemedio MONEY,
    id_tipoRemedio INT,
    FOREIGN KEY (id_tipoRemedio) REFERENCES tipoDeRemedio (id);
    PRIMARY KEY(id)
);

CREATE TABLE IF NOT EXISTS tipoDeRemedio (
    id INT AUTO_INCREMENT,
    tipoRemedio ENUM('REMEDIO COM RECEITA, REMEDIO SEM RECEITA') NOT NULL,
    UNIQUE (tipoRemedio),
    PRIMARY KEY(id)
);

INSERT INTO tipoDeRemedio (id,tipoRemedio) VALUE (1, 'REMEDIO COM RECEITA');
INSERT INTO tipoDeRemedio (id,tipoRemedio) VALUE (2, 'REMEDIO SEM RECEITA');

