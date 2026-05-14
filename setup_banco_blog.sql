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

insert into posts (titulo, resumo, texto, autor, data, img)
values('Grêmio 0 x 1 Flamengo',
        'Gremio perde para Flamengo na Arena por 1x0',
        'Grêmio Grêmio Grêmio Grêmio Grêmio Grêmio Grêmio Grêmio Grêmio Grêmio Grêmio Grêmio Grêmio Grêmio v', 
        'Douglas',
        '10/05/26',
        'campo');

insert into posts (titulo, resumo, texto, autor, data, img)
values('Destino de Gabriel Mec',
        'Gabriel Mec a jóia do Grêmio está sendo sondado por times europeus',
        'Grêmio Grêmio Grêmio Grêmio Grêmio Grêmio Grêmio Grêmio Grêmio Grêmio Grêmio Grêmio Grêmio Grêmio v', 
        'Douglas',
        '02/05/26',
        'contratacao');

insert into posts (titulo, resumo, texto, autor, data, img)
values('Tetê em pessima fase...',
        'O jogador Tetê está em pessima fase des de quando chegou ao Grêmio',
        'Grêmio Grêmio Grêmio Grêmio Grêmio Grêmio Grêmio Grêmio Grêmio Grêmio Grêmio Grêmio Grêmio Grêmio v', 
        'Douglas',
        '20/04/26',
        'jogador');

insert into posts (titulo, resumo, texto, autor, data, img)
values('Grêmio x Bragantino',
        'Gremio empata com Bragantino em 1x1',
        'Grêmio Grêmio Grêmio Grêmio Grêmio Grêmio Grêmio Grêmio Grêmio Grêmio Grêmio Grêmio Grêmio Grêmio v', 
        'Douglas',
        '09/02/26',
        'lista');

insert into posts (titulo, resumo, texto, autor, data, img)
values('Grêmio 0 x 1 Flamengo',
        'Gremio perde para Flamengo na Arena por 1x0',
        'Grêmio Grêmio Grêmio Grêmio Grêmio Grêmio Grêmio Grêmio Grêmio Grêmio Grêmio Grêmio Grêmio Grêmio v', 
        'Douglas',
        '10/05/26',
        'penalti');

insert into posts (titulo, resumo, texto, autor, data, img)
values('Destino de Gabriel Mec',
        'Gabriel Mec a jóia do Grêmio está sendo sondado por times europeus',
        'Grêmio Grêmio Grêmio Grêmio Grêmio Grêmio Grêmio Grêmio Grêmio Grêmio Grêmio Grêmio Grêmio Grêmio v', 
        'Douglas',
        '02/05/26',
        'contratacao');

insert into posts (titulo, resumo, texto, autor, data, img)
values('Grêmio 0 x 1 Flamengo',
        'Gremio perde para Flamengo na Arena por 1x0',
        'Grêmio Grêmio Grêmio Grêmio Grêmio Grêmio Grêmio Grêmio Grêmio Grêmio Grêmio Grêmio Grêmio Grêmio v', 
        'Douglas',
        '10/05/26',
        'taça');

insert into posts (titulo, resumo, texto, autor, data, img)
values('Grêmio 0 x 1 Flamengo',
        'Gremio perde para Flamengo na Arena por 1x0',
        'Grêmio Grêmio Grêmio Grêmio Grêmio Grêmio Grêmio Grêmio Grêmio Grêmio Grêmio Grêmio Grêmio Grêmio v', 
        'Douglas',
        '10/05/26',
        'venda');

insert into posts (titulo, resumo, texto, autor, data, img)
values('Gabriel Mec melhor da partida',
        'Gabriel Mec recebe o prêmio de melho da partida no confronto entre Grêmio x Coritiba',
        'Grêmio Grêmio Grêmio Grêmio Grêmio Grêmio Grêmio Grêmio Grêmio Grêmio Grêmio Grêmio Grêmio Grêmio v', 
        'Douglas',
        '25/04/26',
        'estrela');

drop table trofeus;
create table trofeus(
    trofeuId integer not null primary key,
    nome text,
    quantidade integer,
    ano integer,
    img text
);

insert into trofeus (nome, quantidade, ano, img)
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
INSERT INTO usuarios (email, senha,role) 
VALUES ('douglas@gmail.com', '$2y$10$rkjKDBGM0.3btlf.b7tTeul2X0OaU5QifnyFCPzFYFS/Mo9LMKkdq','adm');
-- senha adm: douglas