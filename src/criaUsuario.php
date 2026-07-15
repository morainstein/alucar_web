<?php

include_once __DIR__ . '/../funcoes.php';

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$pdo = conn();

$pdo->query("INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')");

header('Location: ../views/dashboard.php');
