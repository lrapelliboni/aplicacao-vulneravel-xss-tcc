<?php
session_start();
require_once 'config/mysql.conf.php';

$sql = "select * from usuarios "
     . "WHERE usuario = '" . $_POST['usuario'] . "' "
     . "and senha = '" . $_POST['senha']  . "'";

$result = $conn->query($sql);
if ($result->num_rows == 1) {
  $row = $result->fetch_array();
  $_SESSION["logado"] = true;
  $_SESSION["id_usuario"] = $row['id'];
  header('location: admin/minha-conta.php');
} else {
  header('location: login-form.php?mensagem=1');
}
