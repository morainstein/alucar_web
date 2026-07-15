<?php

include_once __DIR__ . '/../funcoes.php';

$id = $_GET['id'];

$pdo = conn();

$sql = "UPDATE usuarios SET ativo = 0 WHERE id = $id";
$sql = "DELETE FROM usuarios WHERE id = $id";

$pdo->query($sql);

header('Location: ../views/dashboard.php');