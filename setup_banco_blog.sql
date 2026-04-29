.open banco_blog.db
.mode column

drop table blog;
create table blog(
    id integer not null primary key,
    nome text,
    autor text,
    email_adm text
);

insert into blog(nome, autor, email_adm)
values('Blog do Grêmio','Douglas Daniel', 'douglas@gmail.com');


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

drop table partidas;
create table partidas(
    partidasId integer not null primary key,
    ultimas text,
    proximas text,
    data text,
    hora text
);

drop table usuarios;
create table usuarios(
    partidasId integer not null primary key,
    ultimas text,
    proximas text,
    data text,
    hora text
);

drop table administrador;
create table administrador(
    partidasId integer not null primary key,
    ultimas text,
    proximas text,
    data text,
    hora text
);