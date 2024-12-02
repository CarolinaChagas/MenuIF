create table principal_carne(
	id_principal_carne int,
	descricao varchar(50),
	constraint pk_principal_carne primary key (id_principal_carne)
);

create table principal_veg(
	id_principal_veg int,
	descricao varchar(50),
	constraint pk_principal_veg primary key (id_principal_veg)
);

create table usuario(
	id_usuario int,
	email varchar(30),
	senha varchar(30),
	constraint pk_usuario primary key (id_usuario)
);

create table sobremesa(
	id_sobremesa int,
	descricao varchar(50),
	constraint pk_sobremesa primary key (id_sobremesa)
);

create table salada(
	id_salada int,
	descricao varchar(50),
	constraint pk_salada primary key (id_salada)
);

create table acompanhamento(
	id_acompanhamento int,
	descricao varchar(50),
	constraint pk_acompanhamento primary key (id_acompanhamento)
);

create table cardapio(
	id_cardapio int,
	data_cardapio date,
	id_usuario int,
	id_principal_carne int,
	id_principal_veg int,
	constraint pk_cardapio primary key (id_cardapio),
	constraint fk_cardapio_usuario foreign key (id_usuario) 
	references usuario (id_usuario),
	constraint fk_cardapio_principal_carne foreign key (id_principal_carne) 
	references principal_carne (id_principal_carne),
	constraint fk_cardapio_principal_veg foreign key (id_principal_veg) 
	references principal_veg (id_principal_veg)
);

create table card_salada(
	id_card_salada int,
	id_cardapio int,
	id_salada int,
	constraint pk_card_salada primary key (id_card_salada),
	constraint fk_card_salada_cardapio foreign key (id_cardapio) 
	references cardapio(id_cardapio),
	constraint fk_card_salada foreign key (id_salada) 
	references salada(id_salada)
);

create table card_sobremesa(
	id_card_sobremesa int,
	id_cardapio int,
	id_sobremesa int,
	constraint pk_card_sobremesa primary key (id_card_sobremesa),
	constraint fk_card_sobremesa_cardapio foreign key (id_cardapio) 
	references cardapio(id_cardapio),
	constraint fk_card_sobremesa foreign key (id_sobremesa) 
	references sobremesa(id_sobremesa)
);

create table card_acomp(
	id_card_acomp int,
	id_cardapio int,
	id_acompanhamento int,
	constraint pk_card_acomp primary key (id_card_acomp),
	constraint fk_card_acomp_cardapio foreign key (id_cardapio) 
	references cardapio(id_cardapio),
	constraint fk_card_acomp_acompanhamento foreign key (id_acompanhamento) 
	references acompanhamento(id_acompanhamento)
);

-- Segunda - Feira

insert into principal_carne values (1, 'Arroz Branco, Feijão Preto e Frango ao Molho');
insert into principal_veg values (1, 'Arroz Branco, Feijão Preto e Omelete de Forno');
insert into acompanhamento values(1, 'Polenta Cremosa');
insert into salada values (1, 'Almeirão com Cenoura');
insert into salada values (2, 'Vinagrete de Lentilha');
insert into sobremesa values (1, 'Pudim de Leite');
insert into usuario values (1, 'admin@gmail.com', 'fINdZ2IIV6B6rN1');
insert into cardapio values (1, '2024-11-24', 1,1,1);
insert into card_acomp values (1, 1, 1);
insert into card_sobremesa values (1,1,1);
insert into card_salada values (1,1,1);
insert into card_salada values (2,1,2);

select * from usuario

select id_cardapio, data_cardapio, id_usuario, id_principal_carne, id_principal_veg from cardapio;

select descricao from principal_carne where id_principal_carne = 1;

-- Terça - Feira

insert into principal_carne values (2, 'Arroz Branco, Feijão Preto e Picado suíno refogado');
insert into principal_veg values (2, 'Arroz Branco, Feijão Preto e Mini pizza de abobrinha ');
insert into acompanhamento values(2, 'Batata Doce Caramelizada');
insert into salada values (3, 'Alface com Rabanete');
insert into salada values (4, 'Beterraba Cozida');
insert into sobremesa values (2, 'Melancia');
insert into cardapio values (2, '2024-12-03', 1,2,2);
insert into card_acomp values (2, 2, 2);
insert into card_sobremesa values (2,2,2);
insert into card_salada values (3,2,3);
insert into card_salada values (4,2,4);

select * from cardapio

alter table principal_veg alter column descricao type varchar(100);

-- Quarta - Feira 

insert into principal_carne values (3, 'Arroz Branco, Feijão Carioca e Peixe a Milanesa');
insert into principal_veg values (3, 'Arroz Branco, Feijão Carioca e Empadão Integral com proteína de soja');
insert into acompanhamento values(3, 'Purê de cabotiá');
insert into salada values (5, 'Mix de folhas com tomate');
insert into salada values (6, 'Chuchu cozido');
insert into sobremesa values (3, 'Gelatina');
insert into cardapio values (3, '2024-12-04', 1,3,3);
insert into card_acomp values (3, 3, 3);
insert into card_sobremesa values (3,3,3);
insert into card_salada values (5,3,5);
insert into card_salada values (6,3,6);

-- Quinta - Feira


insert into principal_carne values (4, 'Arroz Integral, Feijão Preto e Frango assado');
insert into principal_veg values (4, 'Arroz Integral, Feijão Preto e Charutinhos de couve recheados');
insert into acompanhamento values(4, 'Macarrão ao alho e óleo');
insert into salada values (7, 'Alface com repolho');
insert into salada values (8, 'Cenoura Cozida');
insert into sobremesa values (4, 'Laranja');
insert into cardapio values (4, '2024-12-05', 1,4,4);
insert into card_acomp values (4, 4, 4);
insert into card_sobremesa values (4,4,4);
insert into card_salada values (7,4,7);
insert into card_salada values (8,4,8);

-- Sexta - Feira

insert into principal_carne values (5, 'Arroz Colorido, Feijão Preto e Bife ao molho');
insert into principal_veg values (5, 'Arroz Colorido, Feijão Preto e Ovo Cozido');
insert into acompanhamento values(5, 'Farofa de Cenoura');
insert into salada values (9, 'Acelga com pepino');
insert into salada values (10, 'Mix de grãos');
insert into sobremesa values (5, 'Sagu de Suco');
insert into cardapio values (5, '2024-12-06', 1,5,5);
insert into card_acomp values (5, 5, 5);
insert into card_sobremesa values (5,5,5);
insert into card_salada values (9,5,9);
insert into card_salada values (10,5,10);

select * from usuario
