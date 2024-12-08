SELECT * FROM funcionarios; #Consulta todos

DELETE FROM funcionarios WHERE id IN (25,26); #Deletar um registrofuncionarios
DROP TABLE leon;
SELECT * FROM leona; #Consulta todosleona


CREATE TABLE funcionarios (
	id INT AUTO_INCREMENT PRIMARY KEY,
    idusuario INT,
    nome VARCHAR (50),
    salariohora DOUBLE,
    cargahorariamensalltrabalhada DOUBLE,
    horaextra50 DOUBLE,
    horaextra100 DOUBLE,
    bonificacao DOUBLE
);