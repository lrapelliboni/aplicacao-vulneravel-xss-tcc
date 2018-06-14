<?php require_once 'config/mysql.conf.php'; ?>
<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Loja TCC - Resultados da Busca</title>
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/main.css">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <?php require_once 'includes/menu.inc.php'; ?>
        </nav>
        <div class="container">
            <?php
              $sql = "select * from produtos where titulo "
                   . "like '%" . $_GET['busca'] . "%'";
              $result = $conn->query($sql);
            ?>
            <h1 class="title">
              Resultados da Busca: <i>"<?php echo $_GET['busca']; ?>"</i>
            </h1>
            <div class="row">
                <div class="col-lg-4">
                    <?php require_once 'includes/busca.inc.php'; ?>
                </div>
                <!-- /.col-lg-3 -->
                <div class="col-lg-8">
                    <!-- <h1>Produtos em Categoria</h1> -->
                    <div class="row">
                        <?php
                        if ($result->num_rows > 0) {
                          while($row = $result->fetch_array()) {
                        ?>
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <a href="produto.php?estrelas=<?php echo $row['estrelas']; ?>&idProduto=<?php echo $row['id']; ?>"><?php echo $row['titulo']; ?></a>
                                    </h4>
                                    <h5><?php echo 'R$ ' . number_format($row['preco'], 2, ',', '.'); ?></h5>
                                    <p class="card-text"><?php echo $row['descricao']; ?></p>
                                </div>
                                <?php include 'includes/estrelas.php'; ?>
                            </div>
                        </div>
                        <?php
                          }
                        } else {
                          echo "Nenhum resultado";
                        }
                        ?>
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
