<?php
require_once 'config/init.php';
require_once 'config/mysql.conf.php';
?>
<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Loja TCC - Lista de Produtos</title>
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
                    <h1>Produtos Cadastrados</h1>

                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Título</th>
                          <th scope="col">Preço</th>
                          <th scope="col">Descrição</th>
                          <th scope="col">Ações</th>
                        </tr>
                      </thead>
                      <tbody>

                        <?php
                        $sql = "select * from produtos";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                          while($row = $result->fetch_array()) {
                        ?>
                        <tr>
                          <th scope="row"><?php echo $row['id']; ?></th>
                          <td><?php echo $row['titulo']; ?></td>
                          <td><?php echo 'R$ ' . number_format($row['preco'], 2, ',', '.'); ?></td>
                          <td><?php echo $row['descricao']; ?></td>
                          <td><a href="produtos-form.php?id=<?php echo $row['id']; ?>">Editar</a></td>
                        </tr>
                        <?php
                          }
                        } else {
                          echo "Nenhum resultado";
                        }
                        ?>
                      </tbody>
                    </table>

                </div>
            </div>
        </div>
        <!-- /.container -->
        <?php require_once 'includes/footer.inc.php'; ?>
    </body>
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</html>
