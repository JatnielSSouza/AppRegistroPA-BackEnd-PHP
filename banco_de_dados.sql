create table tb_registroPA(
	id int not null primary key auto_increment,
    sistole int not null,
    diastole int not null,
    responsavel text not null,
    data_cadastrado datetime not null default current_timestamp
)