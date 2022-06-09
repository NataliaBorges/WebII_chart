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

SELECT  L.Titulo,
        L.Edicao,
        L.Ano_Publicacao,
        L.Data_Aquisicao,
        L.ISBN,
        G.Nome_Genero,
		A.Nome_Autor,
		ED.Nome_Editora,
		COUNT(E.Id) AS Exemplares
FROM Exemplar AS E
INNER JOIN Livro AS L ON (L.Id = E.Id_livro)
INNER JOIN Genero AS G ON (L.Id_genero = G.Id)
INNER JOIN Autor AS A ON (L.Id_autor = A.Id)
INNER JOIN Editora AS ED ON (L.Id_editora = ED.Id)
GROUP BY L.TItulo, L.Edicao, L.Ano_Publicacao, L.Data_Aquisicao, L.ISBN, G.Nome_Genero, A.Nome_Autor, ED.Nome_Editora;
