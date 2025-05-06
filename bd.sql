CREATE DATABASE powerquest;

USE powerquest;

CREATE TABLE plano(
    ID INT PRIMARY KEY,
    Plano TEXT
);

CREATE TABLE academias(
    ID INT PRIMARY KEY AUTO_INCREMENT,
    academia TEXT,
    localizacao TEXT
);

CREATE TABLE grupos(
    ID INT PRIMARY KEY AUTO_INCREMENT,
    nome_comunidade TEXT
);
CREATE TABLE categorias(
    ID INT PRIMARY KEY AUTO_INCREMENT,
    nome_categoria TEXT
);
CREATE TABLE condicoes(
    ID INT PRIMARY KEY AUTO_INCREMENT,
    nome_condicao TEXT
);
CREATE TABLE exercicios(
    ID INT PRIMARY KEY AUTO_INCREMENT,
    exercicio TEXT,
    valor FLOAT,
    descricao TEXT
);
CREATE TABLE usuarios(
    ID INT PRIMARY KEY AUTO_INCREMENT,
    cpf INT UNIQUE NOT NULL,
    nome_usuario TEXT,
    email TEXT,
    senha TEXT,
    tipo ENUM("Personal","Nutricionista", "cliente"),
    rank FLOAT,
    plano INT,
    FOREIGN KEY (plano) REFERENCES plano(ID)
);
CREATE TABLE competicao(
    ID INT PRIMARY KEY AUTO_INCREMENT,
    data_inicio DATE,
    data_final DATE,
    fundo FLOAT,
    regras TEXT,
    grupo INT,
    categoria INT,
    FOREIGN KEY (grupo) REFERENCES grupos(ID),
    FOREIGN KEY (categoria) REFERENCES categorias(ID)
);
CREATE TABLE ganhadores(
    ID_Usuario INT,
    ID_Competicao INT,
    data_ganhada DATE,
    CONSTRAINT PRIMARY KEY(ID_Usuario, ID_Competicao, data_ganhada),
    CONSTRAINT FOREIGN KEY (ID_Usuario) REFERENCES usuarios(ID),
    CONSTRAINT FOREIGN KEY(ID_Competicao) REFERENCES competicao(ID)
);
CREATE TABLE grupo_planos(
    ID_Grupo INT,
    ID_Plano INT,
    CONSTRAINT PRIMARY KEY(ID_Grupo, ID_Plano),
    CONSTRAINT FOREIGN KEY (ID_Grupo) REFERENCES grupos(ID),
    CONSTRAINT FOREIGN KEY (ID_Plano) REFERENCES plano(ID)
);
CREATE TABLE academias_grupos(
    ID_Academia INT,
    ID_Grupo INT,
    CONSTRAINT PRIMARY KEY(ID_Academia, ID_Grupo),
    CONSTRAINT FOREIGN KEY (ID_Academia) REFERENCES academias(ID),
    CONSTRAINT FOREIGN KEY (ID_Grupo) REFERENCES grupos(ID)
);
CREATE TABLE academias_propaganda(
    ID INT PRIMARY KEY AUTO_INCREMENT,
    ID_Academia INT,
    imagem TEXT,
    CONSTRAINT FOREIGN KEY(ID_Academia) REFERENCES academias(ID)
);
CREATE TABLE grupos_usuarios(
    ID_grupo INT,
    ID_usuario INT,
    CONSTRAINT PRIMARY KEY(ID_grupo, ID_usuario),
    CONSTRAINT FOREIGN KEY(ID_grupo) REFERENCES grupos(ID),
    CONSTRAINT FOREIGN KEY(Id_usuario) REFERENCES usuarios(ID)
);
CREATE TABLE academias_usuarios(
    ID_academia INT,
    ID_usuario INT,
    CONSTRAINT PRIMARY KEY(ID_academia, ID_usuario),
    CONSTRAINT FOREIGN KEY(ID_academia) REFERENCES academias(ID),
    CONSTRAINT FOREIGN KEY(ID_usuario) REFERENCES usuarios(ID)
);
CREATE TABLE funcionario_usuario(
    ID_funcionario INT,
    ID_usuario INT,
    CONSTRAINT PRIMARY KEY(ID_funcionario, ID_usuario),
    CONSTRAINT FOREIGN KEY(ID_funcionario) REFERENCES usuarios(ID),
    CONSTRAINT FOREIGN KEY(ID_usuario) REFERENCES usuarios(ID)
);
CREATE TABLE nutricionista_dieta(
    ID INT PRIMARY KEY AUTO_INCREMENT,
    ID_nutricionista INT,
    ID_usuario INT,
    descricao TEXT,
    CONSTRAINT FOREIGN KEY(ID_nutricionista) REFERENCES usuarios(ID),
    CONSTRAINT FOREIGN KEY(ID_usuario) REFERENCES usuarios(ID)
);
CREATE TABLE grupos_categorias(
    ID_grupo INT,
    ID_categoria INT,
    CONSTRAINT PRIMARY KEY(ID_grupo, ID_categoria),
    CONSTRAINT FOREIGN KEY(ID_grupo) REFERENCES grupos(ID),
    CONSTRAINT FOREIGN KEY(ID_categoria) REFERENCES categorias(ID)
);
CREATE TABLE personal_exercicios(
    ID INT PRIMARY KEY AUTO_INCREMENT,
    ID_personal INT,
    nome TEXT,
    descricao TEXT,
    CONSTRAINT FOREIGN KEY(ID_personal) REFERENCES usuarios(ID)
);
CREATE TABLE usuario_condicoes(
    ID_usuario INT,
    ID_condicao INT,
    CONSTRAINT PRIMARY KEY(ID_usuario, ID_condicao),
    CONSTRAINT FOREIGN KEY(ID_usuario) REFERENCES usuarios(ID),
    CONSTRAINT FOREIGN KEY(ID_condicao) REFERENCES condicoes(ID)
);
CREATE TABLE competicao_rank(
    ID_usuario INT,
    ID_competicao INT,
    rank FLOAT,
    CONSTRAINT PRIMARY KEY(ID_usuario, ID_competicao),
    CONSTRAINT FOREIGN KEY(ID_usuario) REFERENCES usuarios(ID),
    CONSTRAINT FOREIGN KEY(ID_competicao) REFERENCES competicao(ID)
);
CREATE TABLE exercicios_usuarios(
    ID_usuario INT,
    ID_exercicio INT,
    CONSTRAINT PRIMARY KEY(ID_usuario, ID_exercicio),
    CONSTRAINT FOREIGN KEY(ID_usuario) REFERENCES usuarios(ID),
    CONSTRAINT FOREIGN KEY(ID_exercicio) REFERENCES exercicios(ID)
);
CREATE TABLE funcionario_agenda(
    ID_funcionario INT,
    ID_cliente INT,
    data_consulta DATETIME,
    descricao TEXT,
    CONSTRAINT PRIMARY KEY(ID_funcionario, ID_cliente, data_consulta),
    CONSTRAINT FOREIGN KEY(ID_funcionario) REFERENCES usuarios(ID),
    CONSTRAINT FOREIGN KEY(ID_cliente) REFERENCES usuarios(ID)
);