<?php
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
      <div class="col-md-6 col-md-offset-3">
      <div class="panel panel-login">
      <div class="container">
         <h1>Login</h1>
         <div class="panel-body">
            <div class="row">
               <div class="col-lg-12">
                  <form id="login-form" action="login.php" method="post" role="form">
                     <div class="form-group">
                        <input type="text" name="usuario" id="usuario" tabindex="1" class="form-control" placeholder="Usuário" value="">
                     </div>
                     <div class="form-group">
                        <input type="password" name="senha" id="senha" tabindex="2" class="form-control" placeholder="Senha">
                     </div>
                     <div class="form-group">
                        <div class="row">
                           <div class="col-sm-6 col-sm-offset-3">
                              <button class="btn btn-primary">Entrar</button>
                              ou
                              <a href="usuario-cadastro-form.php" class="btn btn-success">Cadastre-se</a>
                           </div>
                        </div>
                     </div>
                  </form>
               </div>
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
         alert('Usuário não encontrado');
       <?php } ?>
     });
   </script>
</html>
