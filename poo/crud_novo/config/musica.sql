CREATE TABLE musicas (
    id SERIAL PRIMARY KEY, 
    nome VARCHAR(255) NOT NULL, 
    minutagem VARCHAR(10) NOT NULL, 
    autor VARCHAR(255) NOT NULL,
    link VARCHAR(500) NOT NULL
    );