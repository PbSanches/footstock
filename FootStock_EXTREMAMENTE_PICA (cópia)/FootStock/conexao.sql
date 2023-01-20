CREATE TABLE Endereco (
    ID INTEGER,
    FK_Cliente INTEGER,
    Bairro VARCHAR(200),
    Rua VARCHAR(200),
    CEP VARCHAR(9),
    Cidade VARCHAR(200),
    Estado VARCHAR(200),

    PRIMARY KEY (ID),
    CONSTRAINT (FK_Cliente) FOREIGN KEY (FK_Endereco) REFERENCES Cliente(ID)
);

CREATE TABLE Cliente (
    ID INTEGER,
    FK_Endereco INTEGER,
    Nome VARCHAR(200),
    Situacao VARCHAR(20),
    Data_Cadastro DATE,
    CPF VARCHAR(14),
    Email VARCHAR(50),
    Senha VARCHAR(20),
    
    PRIMARY KEY (ID),
    CONSTRAINT (FK_Endereco) FOREIGN KEY (FK_Endereco) REFERENCES Endereco(ID)
);

CREATE TABLE Produto (
    ID INTEGER NOT NULL,
    FK_Cliente INTEGER NOT NULL,
    Nome VARCHAR(200) NOT NULL,
    Categoria VARCHAR(200) NOT NULL,
    Data_Cadastro DATE NOT NULL,
    Situacao VARCHAR(20) NOT NULL,
    Descricao VARCHAR(200) NOT NULL,
    Cor VARCHAR(10) NOT NULL,

    PRIMARY KEY (ID),
    CONSTRAINT (FK_Cliente) FOREIGN KEY (FK_Cliente) REFERENCES Cliente(ID)
);

CREATE TABLE Categoria (
    ID INTEGER NOT NULL,
    Nome VARCHAR(200) NOT NULL,
    Descricao VARCHAR(200) NOT NULL,
    Data_Cadastro DATE NOT NULL,
    Situacao VARCHAR(20) NOT NULL,
    Data_Baixa DATE,

    PRIMARY KEY (ID)
);

CREATE TABLE Solicita (
    FK_Venda INTEGER,
    FK_Produto INTEGER,

    CONSTRAINT (FK_Venda) FOREIGN KEY (FK_Venda) REFERENCES Venda(ID),
    CONSTRAINT (FK_Produto) FOREIGN KEY (FK_Produto) REFERENCES Produto(ID)
);

CREATE TABLE Venda (
    ID INTEGER,
    FK_Cliente INTEGER,
    FK_Produto INTEGER
    Preco FLOAT,
    Data_Venda DATE,
    Situacao VARCHAR (20),

    CONSTRAINT (FK_Cliente) FOREIGN KEY (FK_Cliente) REFERENCES Cliente(ID),
    CONSTRAINT (FK_Produto) FOREIGN KEY (FK_Produto) REFERENCES Produto(ID)
);