<?php
require_once 'config/init.php';
require_once 'config/mysql.conf.php';

$sql = "select * from produtos where id = '". $_GET['id'] ."'";
$result = $conn->query($sql);
$row = $result->fetch_array();
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
                    <h1>Editar Produto</h1>
                    <form method="POST" action="produtos-atualizar.php" class="needs-validation" novalidate>
                      <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                       <div class="row">
                         <div class="col-md-6 mb-3">
                           <label for="titulo">Título</label>
                           <input type="text" class="form-control" name="titulo" id="titulo" placeholder="Título" value="<?php echo $row['titulo']; ?>" required>
                         </div>
                         <div class="mb-3">
                           <label for="preco">Preço</label>
                           <div class="input-group">
                             <div class="input-group-prepend">
                               <span class="input-group-text">R$</span>
                             </div>
                             <input type="text" class="form-control" name="preco" id="preco" placeholder="Preço" required value="<?php echo number_format($row['preco'], 2, ',', '.'); ?>">
                           </div>
                         </div>
                       </div>
                       <div class="mb-3">
                         <label for="descricao">Descricao</label>
                         <textarea class="form-control" id="descricao" name="descricao" placeholder="Descrição" rows="10"><?php echo $row['descricao']; ?></textarea>
                       </div>
                       <div class="mb-3">
                         <button class="btn btn-primary">Salvar</button>
                         <a class="btn btn-secondary" onclick="parent.location='produtos.php';">Cancelar</a>
                       </div>
                   </form>
                </div>
            </div>
        </div>
        <!-- /.container -->
        <?php require_once 'includes/footer.inc.php'; ?>
    </body>
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</html>
