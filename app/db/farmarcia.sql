CREATE DATABASE sysFamarcia;

CREATE TABLE IF NOT EXISTS farmacia (
     id SERIAL,
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
    id SERIAL,
    codigoCliente INT,
    nome VARCHAR(100),
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

CREATE TYPE remedio_tipo AS ENUM ('REMEDIO COM RECEITA', 'REMEDIO SEM RECEITA');

CREATE TABLE IF NOT EXISTS tipoDeRemedio (
    id SERIAL,
    tipoRemedio remedio_tipo,
    UNIQUE (tipoRemedio),
    PRIMARY KEY(id)
);

INSERT INTO tipoDeRemedio (id,tipoRemedio) VALUES (1, 'REMEDIO COM RECEITA');
INSERT INTO tipoDeRemedio (id,tipoRemedio) VALUES (2, 'REMEDIO SEM RECEITA');

CREATE TABLE IF NOT EXISTS remedio (
    id SERIAL,
    nomeDoRemedio VARCHAR(100),
    nomeLaboratorio VARCHAR(100),
    valorDoRemedio MONEY,
    id_tipoRemedio INT,
    tipoMedicamento VARCHAR(100),
    descricao VARCHAR(500),
    FOREIGN KEY (id_tipoRemedio) REFERENCES tipoDeRemedio (id),
    PRIMARY KEY(id)
);



