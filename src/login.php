<?php
session_start();

include_once __DIR__ . '/../funcoes.php';

$pdo = conn();

$email = $_POST['email'] ?? null;
$senha = $_POST['senha'] ?? null;

$sql = "SELECT * FROM usuarios WHERE email = '$email'";

$usuario = $pdo->query($sql)->fetch(PDO::FETCH_ASSOC);

$login = password_verify($senha, $usuario['senha']);

if (!$login) {
  header("Location: ../views/login.php?error=1");
  exit;
}else{
  $_SESSION['nome'] = $usuario['nome'];
  $_SESSION['email'] = $usuario['email'];
  header("Location: ../views/dashboard.php");
}

/** PASSOS PRO LOGIN
 * 1º Receber os dados do formulário (email e senha)
 * 2º Consultar o banco de dados para verificar se existe um usuário com o email e senha informados
 * 3º Se não existir, redirecionar para a página de login 
 * 4º Se existir, redireciona para a página de dashboard
 */


/* COOKIES E SESSÕES
Cookies -> Armazenados no navegador (Cliente)
Sessões -> Armazenados no Servidor (Servidor)

*/



//   == compara apenas o valor, não o tipo
//   === compara o valor e o tipo
// $variavel = 0;

// $variavel == 0; // true
// $variavel == '0'; // true

// $variavel === 0; // true
// $variavel === '0'; //false


