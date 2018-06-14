<?php
require_once 'config/init.php';
require_once 'config/mysql.conf.php';

$id = $_POST['id'];
$titulo = $_POST['titulo'];

$preco = $_POST['preco'];
$descricao = $_POST['descricao'];

$sql = "UPDATE produtos SET titulo = '" . $titulo . "', "
     . "preco = " . str_replace(',', '.', $preco) . ", "
     . "descricao = '" . $descricao . "' "
     . "WHERE id = ". $id . "";

$query = $conn->query($sql);
header('Location: produtos.php');
?>
