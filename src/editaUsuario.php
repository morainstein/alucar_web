<?php

include_once __DIR__ . '/../funcoes.php';

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$id = $_POST['id'];

$pdo = conn();

$sql = "UPDATE usuarios SET nome = '$nome', email = '$email', senha = '$senha' WHERE id = '$id'";

$pdo->query($sql);

header('Location: ../views/dashboard.php');
