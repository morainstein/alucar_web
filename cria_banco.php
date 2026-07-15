<?php 

$sql = 
"DROP DATABASE IF EXISTS alucar;
CREATE DATABASE IF NOT EXISTS alucar;
USE alucar;

# DDL - Data Definition Language
CREATE TABLE usuarios (
	id INT PRIMARY KEY AUTO_INCREMENT,
	nome VARCHAR(255) NOT NULL,
  email VARCHAR(255) UNIQUE NOT  NULL,
  senha VARCHAR(255) NOT NULL
);

CREATE TABLE clientes (
	id INT PRIMARY KEY AUTO_INCREMENT,
	nome VARCHAR(255),
  email VARCHAR(255)
);";

$pdo = new PDO('mysql:host=0.0.0.0;dbname=alucar', 'root', '123');
$pdo->query($sql);