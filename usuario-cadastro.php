<?php
session_start();
require_once 'config/mysql.conf.php';

$nome = $_POST['nome'];
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

if (empty($nome) || empty($usuario) || empty($senha)) {
  header('location: usuario-cadastro-form.php?mensagem=1');
} else {
  $sql = "insert into usuarios values(null, "
       . " '" . $nome . "', "
       . " '" . $usuario . "', "
       . " '" . $senha . "') ";

  $query = $conn->query($sql);
  $_SESSION["logado"] = true;
  $_SESSION["id_usuario"] = $conn->insert_id;
  header('location: admin/minha-conta.php');
}
?>
