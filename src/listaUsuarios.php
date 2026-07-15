<?php

include_once __DIR__ . '/../funcoes.php';


$pdo = conn();

$sql = "SELECT * FROM usuarios";
$usuarios = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);