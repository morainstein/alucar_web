<?php 

include_once __DIR__ . '/../src/verificaLogin.php';

include_once __DIR__ . '/../src/buscaUsuario.php';

?>

<h2>Formulário de edição de usuário</h2>

<form action="../src/editaUsuario.php" method="post">
  <input type="text" value="<?= $usuario['id']; ?>" name="id" hidden>
  <label> Nome: 
    <input type="text" 
      name="nome" 
      value="<?= $usuario['nome']; ?>" 
      placeholder="<?= $usuario['nome']; ?>" 
      required>
  </label>
  <label> Email: 
    <input type="email" 
      name="email"
      value="<?= $usuario['email']; ?>" 
      placeholder="<?= $usuario['email']; ?>" 
       required>
  </label>
  <label> Senha: 
    <input type="password" 
      name="senha"
      value="<?= $usuario['senha']; ?>" 
      placeholder="<?= $usuario['senha']; ?>" 
       required>
  </label>
  <input type="submit">
</form>
