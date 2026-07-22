<?php

include_once __DIR__ . '/../funcoes.php';

$id = $_GET['id'] ?? null;

$pdo = conn();

$sql = "SELECT * FROM usuarios WHERE id = $id";
$usuario = $pdo->query($sql)->fetch(PDO::FETCH_ASSOC);