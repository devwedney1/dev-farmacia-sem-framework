CREATE DATABASE sysFamarcia;

CREATE TABLE IF NOT EXISTS farmacia (
    nomeDaFarmacia VARCHAR(250),
    endereco VARCHAR(250),
    bairro VARCHAR(100),
    numero_comercial INT,
    complemento VARCHAR(200),
    cep INT

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
);

CREATE TABLE IF NOT EXISTS cliente (
    id SERIAL,
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
);

CREATE TABLE IF NOT EXISTS remedio (
    id SERIAL,
    nomeDoRemedio VARCHAR(100),
    valorDoRemedio MONEY,
    id_tipoRemedio INT,
    FOREIGN KEY (id_tipoRemedio) REFERENCES tipoDeRemedio (id);
);

CREATE TABLE IF NOT EXISTS tipoDeRemedio (
    id SERIAL,
    tipoRemedio ENUM('REMEDIO COM RECEITA, REMEDIO SEM RECEITA') NOT NULL,
    UNIQUE (tipoRemedio)
);

INSERT INTO tipoDeRemedio (id,tipoRemedio) VALUE (1, 'REMEDIO COM RECEITA');
INSERT INTO tipoDeRemedio (id,tipoRemedio) VALUE (2, 'REMEDIO SEM RECEITA');

