--Criando tabela de Livro
CREATE TABLE Livro (
    Id INT IDENTITY(1, 1) PRIMARY KEY,
    Titulo VARCHAR(255) NOT NULL,
    Edicao VARCHAR(255) NOT NULL,
    Ano_Publicacao VARCHAR(255) NOT NULL,
    Data_Aquisicao DATE NOT NULL,
    Quantidade INT NOT NULL,
    ISBN VARCHAR(255) NULL,
    Id_genero INT NOT NULL,
    Id_autor INT NOT NULL,
    Id_editora INT NOT NULL
);

--Criando tabela de Exemplar
CREATE TABLE Exemplar (
    Id INT IDENTITY(1, 1) PRIMARY KEY,
    Data_Aquisicao DATE,
    Id_livro INT
);

--Criando tabela de Autor
CREATE TABLE Autor (
    Id INT IDENTITY(1, 1) PRIMARY KEY,
    Nome_Autor VARCHAR(255) NOT NULL
);

--Criando tabela de Gênero
CREATE TABLE Genero (
    Id INT IDENTITY(1, 1) PRIMARY KEY,
    Nome_Genero VARCHAR(255) NOT NULL
);

--Criando tabela de Editora
CREATE TABLE Editora (
    Id INT IDENTITY(1, 1) PRIMARY KEY,
    Nome_Editora VARCHAR(255) NOT NULL,
    Endereco VARCHAR(255) NOT NULL,
    CNPJ VARCHAR(255) NOT NULL,
    Email VARCHAR(255) NOT NULL
);

CREATE TABLE Leitor (
    Id INT IDENTITY(1, 1) PRIMARY KEY,
    Nome_Leitor VARCHAR(255) NOT NULL,
    Data_Nascimento DATE NOT NULL,
    CPF VARCHAR(255) NOT NULL,
    Telefone VARCHAR(255) NOT NULL,
    Endereco VARCHAR(255) NOT NULL,
    Email VARCHAR(255) NOT NULL,
    Id_estado INT
);

CREATE TABLE Estado (
    Id INT IDENTITY(1, 1) PRIMARY KEY,
    Nome_Estado VARCHAR(255) NOT NULL
);

CREATE TABLE Funcionario (
    Id INT IDENTITY(1, 1) PRIMARY KEY,
    Nome_Funcionario VARCHAR(255) NOT NULL,
    Data_Nascimento DATE NOT NULL,
    CPF VARCHAR(255) NOT NULL,
    Endereco VARCHAR(255) NOT NULL,
    Telefone VARCHAR(255) NOT NULL,
    Email VARCHAR(255) NOT NULL,
    Senha VARCHAR(255) NOT NULL,
    Id_funcao INT,
    Id_estado INT
);
CREATE TABLE Emprestimo (
    Id INT IDENTITY(1, 1) PRIMARY KEY,
    Data_Emprestimo DATE NOT NULL,
    Data_Devolucao DATE NOT NULL,
    Obs_Emprestimo VARCHAR(255) NOT NULL,
    Id_leitor INT,
    Id_funcionario INT,
    Id_emprestimoStatus INT,
    Id_estado INT
);

SELECT Editora.Nome_Editora, Livro.Titulo, Livro.Edicao, Livro.Ano_Publicacao, Livro.ISBN, Genero.Nome_Genero, Autor.Nome_Autor
COUNT(Exemplar.Id) AS Quantidade_Exemplares
FROM Editora
INNER JOIN Livro ON Editora.Id = Livro.Id_editora
INNER JOIN Genero ON Livro.Id_genero = Genero.Id
INNER JOIN Autor ON Livro.Id_autor = Autor.Id
INNER JOIN Exemplar ON Livro.Id = Exemplar.Id_livro
GROUP BY Editora.Nome_Editora, Livro.Titulo, Livro.Edicao, Livro.Ano_Publicacao, Livro.ISBN, Genero.Nome_Genero, Autor.Nome_Autor
ORDER BY Editora.Nome_Editora, Livro.Titulo, Livro.Edicao, Livro.Ano_Publicacao, Livro.ISBN, Genero.Nome_Genero, Autor.Nome_Autor;




SELECT Genero.Nome_Genero,
Livro.Titulo,
Livro.Edicao,
Livro.Ano_Publicacao,
Livro.ISBN,
Autor.Nome_Autor,
Editora.Nome_Editora,
FROM Genero
INNER JOIN Livro ON (Genero.Id = Livro.Id_genero)
INNER JOIN Autor ON (Livro.Id_autor = Autor.Id)
INNER JOIN Editora ON (Livro.Id_editora = Editora.Id)

SELECT  Autor.Nome_Autor, 
                            Livro.Titulo, 
                            Livro.Edicao, 
                            Livro.Ano_Publicacao, 
                            Livro.Data_Aquisicao, 
                            Livro.ISBN, 
                            Genero.Nome_Genero,
                            COUNT(Exemplar.Id) AS Quantidade_Exemplares
                            FROM Autor
                    INNER JOIN Livro ON (Autor.Id = Livro.Id_autor)
                    INNER JOIN Genero ON (Livro.Id_genero = Genero.Id)
                    INNER JOIN Exemplar ON (Livro.Id = Exemplar.Id_livro)
                    GROUP BY Autor.Nome_Autor, Livro.Titulo, Livro.Edicao, Livro.Ano_Publicacao, Livro.Data_Aquisicao, Livro.ISBN, Genero.Nome_Genero
                    ORDER BY Autor.Nome_Autor;



INSERT INTO Estado (Nome_Estado) VALUES ('Ativo');
INSERT INTO Estado (Nome_Estado) VALUES ('Inativo');

Delete FROM Estado WHERE Id = 3;

UPDATE Estado SET Nome_Estado = 'Inativo' WHERE Id = 2;


INSERT INTO Leitor (Nome_Leitor, Data_Nascimento, CPF, Telefone, Endereco, Email, Id_estado) 
VALUES ('João', '01/01/2000', '123456789', '123456789', 'Rua 1', 'joao@gmail.com', 1);
INSERT INTO Leitor (Nome_Leitor, Data_Nascimento, CPF, Telefone, Endereco, Email, Id_estado) VALUES 
('Maria', '01/01/2000', '123456789', '123456789', 'Rua 1', 'maria@gmail.com', 1)
Select * from Leitor;


INSERT INTO Funcionario (Nome_Funcionario, Data_Nascimento, CPF, Endereco, Telefone, Email, Senha, Id_funcao, Id_estado) VALUES 
('José', '01/01/2000', '123456789', 'Rua 1', '123456789', 'jose@gmail.com', '123456', 1, 1);

INSERT into Funcao (Nome_Funcao) VALUES ('Bibliotecário');

INSERT into Exemplar (Data_Aquisicao, Id_livro) VALUES ('30/06/2022', 2);

UPDATE LIVRO SET Quantidade = 2;


INSERT INTO Emprestimo (Data_Emprestimo, Data_Devolucao, Obs_Emprestimo, Id_leitor, Id_funcionario, Id_emprestimoStatus, Id_estado) VALUES 
('30/06/2022', '04/07/2022', 'Emprestimo', 1, 1, 1, 1);

SELECT Leitor.Nome_Leitor,
Leitor.Data_Nascimento,
Leitor.CPF,
Leitor.Telefone,
Leitor.Endereco,
Leitor.Email,
Estado.Nome_Estado,
(SELECT Data_Devolucao FROM Emprestimo WHERE Id_leitor = Leitor.Id ORDER BY Id DESC OFFSET 0 ROWS FETCH NEXT 1 ROWS ONLY) As Emprestimo
COUNT(Emprestimo.Id) AS Quantidade_Emprestimo
FROM Leitor 
INNER JOIN Estado ON Leitor.Id_estado = Estado.Id
INNER JOIN Emprestimo ON Leitor.Id = Emprestimo.Id_leitor
GROUP BY Leitor.Nome_Leitor, Leitor.Data_Nascimento, Leitor.CPF, Leitor.Telefone, Leitor.Endereco, Leitor.Email, Estado.Nome_Estado, Emprestimo.Data_Devolucao
ORDER BY Leitor.Nome_Leitor;

SELECT FUNCIONARIO.Nome_Funcionario,
FUNCIONARIO.Data_Nascimento,
FUNCIONARIO.CPF,
FUNCIONARIO.Endereco,
FUNCIONARIO.Telefone,
FUNCIONARIO.Email,
FUNCAO.Nome_Funcao,
ESTADO.Nome_Estado,
COUNT(EMPRESTIMO.Id) AS Quantidade_Emprestimo
FROM FUNCIONARIO
INNER JOIN FUNCAO ON FUNCIONARIO.Id_funcao = FUNCAO.Id
INNER JOIN ESTADO ON FUNCIONARIO.Id_estado = ESTADO.Id
INNER JOIN EMPRESTIMO ON FUNCIONARIO.Id = EMPRESTIMO.Id_funcionario
GROUP BY FUNCIONARIO.Nome_Funcionario, FUNCIONARIO.Data_Nascimento, FUNCIONARIO.CPF, FUNCIONARIO.Endereco, FUNCIONARIO.Telefone, FUNCIONARIO.Email, FUNCAO.Nome_Funcao, ESTADO.Nome_Estado, EMPRESTIMO.Data_Devolucao
ORDER BY FUNCIONARIO.Nome_Funcionario;


SELECT 

