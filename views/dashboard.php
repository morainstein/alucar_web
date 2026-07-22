<?php 
include_once __DIR__ . '/../src/verificaLogin.php';
?>

<h1>Dashboard do <?= $_SESSION['nome']; ?></h1> <a href="../src/logout.php">Logout</a>
<ul>
  <li><a href="#">Clientes</a></li>
  <li><a href="#">Carros</a></li>
  <li><a href="#">Aluguéis</a></li>

</ul>



<?php include_once __DIR__ . '/criaUsuarioForm.php'; ?>
<hr>
<?php include_once __DIR__ . '/listaUsuarios.php'; ?>