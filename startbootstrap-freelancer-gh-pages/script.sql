mysql -u root

# criar base dados
create database projeto1;

#conectar uma base de dados
use projeto1;

#criar uma tabele
create table contato(
    idcontato int primary key auto_increment,
    nome varchar (50) not null,
    email varchar (50) not null,
    telefone varchar (14) not null,
    mensagem text
);
#Irei inserir um registro na tabela só para testar
# se esta ok..
insert into contato values
(null, 'testenome', 'teste@gmail.com', '1111-2222', 'teste de mensagem');

#selecionar todos os campos da tabela
select* from contato;