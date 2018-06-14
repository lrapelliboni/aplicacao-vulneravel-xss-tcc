<?php
require_once 'config/init.php';
require_once 'config/mysql.conf.php';
?>
<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Loja TCC - Minha Conta</title>
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/main.css">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <?php require_once 'includes/menu.inc.php'; ?>
        </nav>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                  <?php
                  $sql = "select * from usuarios where id = "
                       . $_SESSION["id_usuario"] . "";
                  $result = $conn->query($sql);
                  $row = $result->fetch_array()
                  ?>
                  <h1>Minha Conta</h1>
                  <div class="jumbotron">
                    <h1>Bem-Vindo</h1>
                    <p>
                      <strong>Nome:</strong>&nbsp
                      <span><?php echo $row['nome']; ?></span>
                    </p>
                    <p>
                      <strong>Usuário:</strong>&nbsp;
                      <span><?php echo $row['usuario']; ?></span>
                    </p>
                  </div>
                </div>
            </div>
        </div>
        <!-- /.container -->
        <?php require_once 'includes/footer.inc.php'; ?>
    </body>
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</html>
