CREATE DATABASE exemplo_db; #Cria uma nova base

USE exemplo_db; #Seleciona a base

CREATE TABLE produtos (
	id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR (50),
    quantidade INT,
    valor DOUBLE,
    imagem TEXT
); #Criar uma nova tabela

SELECT * FROM funcionarios; #Consulta todos
INSERT INTO produtos (nome, quantidade, valor)
 VALUE('Celular S22',7,7200); #Criando um novo registro
 
 INSERT INTO produtos (nome, quantidade, valor)
 VALUE('Capinha de Celular',25,50); #Criando um novo registro
 
SELECT valor FROM produtos WHERE id = 2;

DELETE FROM produtos WHERE id = 2; #Deletar um registro

UPDATE produtos SET nome = 'Capinha de Celular S22', quantidade = 19, valor = 30
	WHERE id = 3; #atualizar um registro