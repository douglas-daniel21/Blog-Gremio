.open banco_blog.db
.mode column


drop table posts;
create table posts(
    postId integer not null primary key,
    titulo text,
    resumo text,
    texto text,
    data text,
    autor text,
    img text
);

insert into posts (titulo, resumo, texto, autor, data, img)
values('Grêmio x Bragantino',
        'Gremio empata com Bragantino em 1x1',
        'Grêmio Grêmio Grêmio Grêmio Grêmio Grêmio Grêmio Grêmio Grêmio Grêmio Grêmio Grêmio Grêmio Grêmio v', 
        'Douglas',
        '09/02/26',
        'campo');

drop table trofeus;
create table trofeus(
    trofeuId integer not null primary key,
    nome text,
    quantidade integer,
    ultimo integer,
    img text
);

insert into trofeus (nome, quantidade, ultimo, img)
values('Libertadores', 3, 2017, 'libertadores');

drop table jogadores;
create table jogadores(
    jogadorId integer not null primary key,
    nome text,
    posicao text,
    idade integer,
    camisa integer,
    nacionalidade text,
    img text
);

DROP TABLE contratacoes;
CREATE TABLE contratacoes(
    contratacaoId integer not null primary key,
    nome text,
    posicao text,
    time text,
    idade integer,
    nacionalidade text,
    valor integer,
    img text
);
INSERT INTO contratacoes (nome, posicao, time, idade, nacionalidade, valor, img)
VALUES('Enamorado', 'PD', 'Junior Barranquila', 27, 'Colombiano', '50000', 'enamorado');



DROP TABLE usuarios;
CREATE TABLE usuarios(
    Id INTEGER NOT NULL PRIMARY KEY,
    email TEXT NOT NULL UNIQUE,
    senha TEXT NOT NULL,
    role TEXT NOT NULL DEFAULT 'user'
);



drop table administradores;
create table administradores(
    Id integer NOT NULL PRiMARY KEY,
    email text NOT NULL UNIQUE,
    senha text NOT NULL,
    role TEXT NOT NULL DEFAULT 'adm'
);

INSERT INTO administradores (email, senha) 
VALUES ('douglas@gmail.com', SHA2('Gremista21', 256));