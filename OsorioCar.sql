
#PARA EVITAR FUTUROS ERROS DE ACENTUACAO 
CREATE DATABASE `osoriocar` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;

show tables;
use osoriocar;
#drop database osoriocar;
#show tables;

select * from pessoa;
create table pessoa(idPessoa int not null auto_increment, primary key(idPessoa),
	nome varchar(50) not null,
		telefone varchar(15) not null) engine = InnoDB;

create table fisica(idFisica int not null auto_increment, primary key(idFisica),
	fk_id_pessoa int not null,
		foreign key fk_id_pessoa(fk_id_pessoa) references
        pessoa(idPessoa)on delete cascade on update cascade,
			sobrenome varchar(75) not null,
				cpf numeric(11)not null) engine = InnoDB;
                
	
                
create table admin(idAdmin int not null auto_increment, primary key(idAdmin),
	fk_id_pessoa int not null,
		foreign key fk_id_pessoa(fk_id_pessoa) references pessoa(idPessoa)on delete cascade on update cascade,
			nome_usuario varchar(16) not null,
				senha varchar(20) not null) engine = InnoDB;
                
create table carro(idCarro int not null auto_increment, primary key(idCarro),	
	fk_id_pessoa int not null,
		foreign key fk_id_pessoa(fk_id_pessoa) references pessoa(idPessoa) on delete cascade on update cascade,
			modelo varchar(20) not null,
				ano varchar(10) not null,
					marca varchar(15) not null,
						placa varchar(10) not null) engine = InnoDB;
					                    
                    
create table conserto(idConcerto int not null auto_increment, primary key(idConcerto),
	fk_id_carro int not null,
		foreign key fk_id_carro(fk_id_carro) references carro(idCarro) on update cascade,
		dataRegistro varchar(10) not null,
			valor_peca double not null,
				pecas_utilizadas varchar(500) not null,
					descricao varchar(600) not null,
                    valorMaoObra double not null,
						valor_total double not null)engine InnoDB;
                        
#select carro.placa,conserto.descricao from carro inner join conserto;
#select * from carro;                        
#select * from conserto;
#INSERT INTO conserto(fk_id_carro,dataRegistro,valor_peca,pecas_utilizadas,descricao,valorMaoObra,valor_total)
#	VALUES(2,'04/08/2016',200,'pecas_utilizadas','descricao',100,300);
#select * from conserto inner join carro on 
#	(conserto.fk_id_carro = carro.idCarro) inner join pessoa 
#		on (carro.fk_id_pessoa = pessoa.idPessoa) where carro.placa = 'DNA-9090';