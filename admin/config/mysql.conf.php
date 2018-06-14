<?php
  $servidor = 'localhost';
  $usuario = 'root';
  $senha = 'rootpass';
  $banco = 'tcc';
  // Conecta-se ao banco de dados MySQL
  $conn = new mysqli($servidor, $usuario, $senha, $banco);
  if (mysqli_connect_errno()) trigger_error(mysqli_connect_error());
?>
