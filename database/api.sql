DROP DATABASE IF EXISTS apiCidade;
CREATE DATABASE apiCidade;
USE apiCidade;

CREATE TABLE cidade (
id        INT NOT NULL AUTO_INCREMENT,
cep		 VARCHAR(8),
endereco  VARCHAR(255), 
bairro    VARCHAR(255),
cidade    VARCHAR(255),
estado    CHAR(2),
PRIMARY KEY (id),
UNIQUE (cep)
);

INSERT INTO cidade (cep, endereco, bairro, cidade, estado) VALUES 
('29167728', 'Rua Sabino Rosa I', 'Taquara I', 'Serra', 'ES'),
('58400398', 'Rua Carlos Chagas', 'São José', 'Campina Grande', 'PB'),
('65636900', 'Rua Filomena Martins Nazareno Bringel 288','Parque Piauí','Timon','MA'),
('12345678', 'Rua teste', 'Teste', 'Cidade Teste', 'TT');

SELECT * FROM cidade;