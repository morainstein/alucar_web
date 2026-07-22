<h2>Listagem de usuários</h2>

<?php

include_once __DIR__ . '/../src/listaUsuarios.php';

foreach ($usuarios as $usuario) :  ?>

    <p> 
      ID: <?= $usuario['id']; ?> | 
      Nome: <?= $usuario['nome']; ?> | 
      Email: <?= $usuario['email']; ?> | 
      <a href="../src/excloiUsuario.php?id=<?= $usuario['id']; ?>">Excluir</a> |
      <a href="./editaUsuarioForm.php?id=<?= $usuario['id']; ?>">Editar</a>
    </p>

<?php endforeach; ?>
