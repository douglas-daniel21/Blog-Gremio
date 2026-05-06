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

drop table contratacoes;
create table contratacoes(
    contratacaoId integer not null primary key,
    nome text,
    posicao text,
    time text,
    idade integer,
    nacionalidade text,
    valor integer,
    img text
);
insert into contratacoes (nome, posicao, time, idade, nacionalidade, valor, img)
values('Enamorado', 'PD', 'Junior Barranquila', 27, 'Colombiano', '50000', 'enamorado');



drop table usuarios;
create table usuarios(
    Id integer not null primary key,
    email text,
    senha text
);

drop table administradores;
create table administradores(
    Id integer not null primary key,
    email text,
    senha text
);

insert into administradores (email, senha)
VALUES ('douglas@gmail.com', SHA2('minha_senha_segura', 256));
