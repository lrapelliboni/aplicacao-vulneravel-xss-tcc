<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Loja TCC</title>
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
                    <div class="row">
                        <table id="cart" class="table table-hover table-condensed">
                  				<thead>
              						<tr>
              							<th style="width:50%">Produto</th>
              							<th style="width:10%">Preço</th>
              							<th style="width:8%">Quantidade</th>
              							<th style="width:22%" class="text-center">Subtotal</th>
              							<th style="width:10%"></th>
              						</tr>
              					</thead>
              					<tbody>
              						<tr>
              							<td data-th="Product">
              								<div class="row">

              									<div class="col-lg-3 hidden-xs">
                                                      <img src="http://placehold.it/100x100" alt="..." class="img-responsive"/>
                                                  </div>

                                                  <div class="col-lg-9">
              										<h4 class="nomargin">Product 1</h4>
              										<p>Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet.</p>
              									</div>

              								</div>
              							</td>
              							<td data-th="Price">$1.99</td>
              							<td data-th="Quantity">
              								<input type="number" class="form-control text-center" value="1">
              							</td>
              							<td data-th="Subtotal" class="text-center">1.99</td>
              							<td class="actions" data-th="">
              								<button class="btn btn-info btn-sm"><i class="fa fa-refresh"></i></button>
              								<button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>
              							</td>
              						</tr>
              					</tbody>
              					<tfoot>
              						<!-- <tr class="visible-xs">
              							<td class="text-center"><strong>Total R$ 12, 99</strong></td>
              						</tr> -->
              						<tr>
              							<td><a href="#" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continuar Comprando</a></td>
              							<td colspan="2" class="hidden-xs"></td>
              							<td class="hidden-xs text-center"><strong>Total R$ 12,99</strong></td>
              							<td><a href="#" class="btn btn-success btn-block">Finalizar Compra <i class="fa fa-angle-right"></i></a></td>
              						</tr>
              					</tfoot>
              				</table>
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
