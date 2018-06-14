<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Loja TCC - Cadastro de Usuário</title>
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
                    <h1>Cadastro de Usuário</h1>
                    <form method="POST" action="usuario-cadastro.php" class="needs-validation" novalidate>
                      <input type="hidden" name="id">
                      <div class="row">
                        <div class="col-md-6 mb-3">
                          <label for="nome">Nome</label>
                          <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome" required>
                        </div>
                      </div>
                       <div class="row">
                         <div class="col-md-6 mb-3">
                           <label for="usuario">Usuário</label>
                           <input type="text" class="form-control" name="usuario" id="usuário" placeholder="Usuário" required>
                         </div>
                       </div>

                       <div class="row">
                         <div class="col-md-6 mb-3">
                           <label for="senha">Senha</label>
                           <input type="password" class="form-control" name="senha" id="senha" placeholder="Senha"  required>
                         </div>
                       </div>

                       <div class="mb-3">
                         <button class="btn btn-primary">Cadastre-se</button>
                         <a class="btn btn-secondary" onclick="parent.location='index.php';">Cancelar</a>
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
    <script>
      $(document).ready(function(){
        <?php if (isset($_GET['mensagem'])) { ?>
          alert('Todos os campos devem ser preenchidos!');
        <?php } ?>
      });
    </script>
</html>
