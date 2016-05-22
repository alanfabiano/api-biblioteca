<?php

// CRIAR TABELAS

$query[] = "
	CREATE TABLE leitor (
	id INT NOT NULL,
	nome VARCHAR(30) NOT NULL,
	email VARCHAR(45) NOT NULL,
	senha VARCHAR(45) NOT NULL,
	status TINYINT(1) NULL,
	CONSTRAINT id PRIMARY KEY(id))";

$query[] = "
	CREATE TABLE categorias (
	id INT NOT NULL,
	nome VARCHAR(45) NOT NULL,
	parent_id INT NULL,
	CONSTRAINT id PRIMARY KEY(id))";

$query[] = "
	CREATE TABLE livros (
	id INT NOT NULL,
	titulo VARCHAR(45) NOT NULL,
	editora INT NOT NULL,
	categoria_id INT NULL,
	CONSTRAINT id PRIMARY KEY(id))";

$query[] = "
	CREATE TABLE escritores (
	id INT NOT NULL,
	nome VARCHAR(45) NOT NULL,
	biografia TEXT NOT NULL,
	CONSTRAINT id PRIMARY KEY(id))";

$query[] = "
	CREATE TABLE autoria (
	autor_id INT NOT NULL,
	livro_id INT NOT NULL,
	CONSTRAINT id PRIMARY KEY(autor_id, livro_id))";

$query[] = "
	CREATE TABLE editoras (
	id INT NOT NULL AUTO_INCREMENT,
	nome VARCHAR(45) NOT NULL,
	CONSTRAINT id PRIMARY KEY(id))";

$query[] = "
	CREATE TABLE leituras (
	leitor_id INT NOT NULL,
	livro_id INT NOT NULL,
	CONSTRAINT id PRIMARY KEY(leitor_id, livro_id))";

$query[] = "
	CREATE TABLE usuarios (
	id INT NOT NULL AUTO_INCREMENT,
	nome VARCHAR(30) NOT NULL,
	email VARCHAR(45) NOT NULL,
	senha VARCHAR(45) NOT NULL,
	status TINYINT(1) NULL,
	CONSTRAINT id PRIMARY KEY(id))";


// ADICIONAR FOREIGN KEY

$query[] = "ALTER TABLE ".$banco.".leituras 
	ADD CONSTRAINT leitura_fk_livro 
		FOREIGN KEY(livro_id) REFERENCES livros(id)
		ON DELETE CASCADE";

$query[] = "ALTER TABLE ".$banco.".leituras 
	ADD CONSTRAINT leitura_fk_leitor
		FOREIGN KEY(leitor_id) REFERENCES leitor(id)
		ON DELETE CASCADE";

$query[] = "ALTER TABLE ".$banco.".livros
	ADD CONSTRAINT livro_fk_categoria
		FOREIGN KEY(categoria_id) REFERENCES categorias(id)
		ON DELETE NO ACTION";

$query[] = "ALTER TABLE ".$banco.".autoria
	ADD CONSTRAINT autoria_fk_livro
		FOREIGN KEY(livro_id) REFERENCES livros(id)
		ON DELETE CASCADE";

$query[] = "ALTER TABLE ".$banco.".autoria
	ADD CONSTRAINT autoria_fk_escritor
		FOREIGN KEY(autor_id) REFERENCES escritores(id)
		ON DELETE CASCADE";

$query[] = "ALTER TABLE ".$banco.".categorias
	ADD CONSTRAINT categoria_fk_parent
		FOREIGN KEY(parent_id) REFERENCES categorias(id)
		ON DELETE CASCADE";


$query[] = "INSERT INTO usuarios(id,nome,email,senha,status)
	VALUES(1, '$dash_nome', '$dash_email', '$dash_pass', 1)";



foreach($query as $q){
	$createTable = $dbh->exec($q);
}




?>