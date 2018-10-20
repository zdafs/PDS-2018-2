create table Agente (
	email_agente varchar(100) primary key,
	nome_agente varchar(100) not null,
	senha_agente varchar(255) not null
);

create table Cliente (
	email_cliente varchar(100) primary key,
	nome_cliente varchar(100) not null,
	senha_cliente varchar(255) not null
);

create table Pedidos (
	pedido_id timestamp,
	email_cliente varchar(100) references Cliente(email_cliente) ON DELETE CASCADE ON UPDATE CASCADE,
	url varchar(200) not null,
	descricao text not null,
	qnt_adultos smallint not null,
	qnt_criancas smallint not null,
	qnt_bebes smallint not null,
	tipo_viagem smallint not null,
	tipo_passagem smallint not null,
	preferencia text default null,
	primary key(pedido_id, email_cliente)
);

create table Oferta (
	email_cliente varchar(100),
	pedido_id timestamp,
	email_agente varchar(100) references Agente(email_agente) ON DELETE CASCADE ON UPDATE CASCADE,
	preco numeric(8, 2) not null,
	descricao text not null,
	foreign key (email_cliente, pedido_id) references Pedidos(email_cliente, pedido_id) ON DELETE CASCADE ON UPDATE CASCADE,
	primary key(email_cliente, pedido_id, email_agente)
);