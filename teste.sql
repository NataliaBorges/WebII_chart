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




