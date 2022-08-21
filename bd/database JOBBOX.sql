create database bd_jobbox

use bd_jobbox;

create table tb_empresa(
id_empresa int not null auto_increment primary key ,
nome_empresa varchar(45) not null,
cnpj_empresa varchar(20) not null,
email_empresa varchar(45) not null,
senha_empresa varchar(45) not null,
cep_empresa varchar(9) not null,
complemento_empresa varchar(45),
num_empresa varchar(10) not null,
rua_empresa varchar(45) not null,
bairro_empresa varchar(45) not null,
telefone_empresa varchar(20) not null
);

create table tb_candidato(
id_candidato int not null auto_increment primary key ,
nome_candidato varchar(45) not null,
cpf_candidato varchar(20) not null,
email_candidato varchar(45) not null,
senha_candidato varchar(45) not null,
cep_candidato varchar(9) not null,
complemento_candidato varchar(45),
num_candidato varchar(10) not null,
rua_candidato varchar(45) not null,
bairro_candidato varchar(45) not null,
telefone_candidato varchar(20) not null,
data_nascimento date not null
);



create table tb_exp_anteriores(
id_exp_anteriores int not null auto_increment primary key,
cargo_anterior varchar(45) not null,
uf varchar(2) not null,
cidade_empregador_anterior varchar(45) not null,
empregador_anterior varchar(45) not null,
data_admissao date not null,
data_demissao date not null
);


create table tb_curriculo(
id_curriculo INT not null auto_increment primary key,
cod_exp_anteriores int not null,
cod_candidato int not null,
foreign key(cod_exp_anteriores) references tb_exp_anteriores (id_exp_anteriores),
foreign key(cod_candidato) references tb_candidato (id_candidato)
);


create table tb_vaga(
id_vaga int not null auto_increment primary key,
salario_vaga int not null,
carga_horaria varchar (45) not null,
requisitos_vaga varchar(200) not null,
cargo_vaga varchar(45) not null,
quantidade_vaga int not null


);