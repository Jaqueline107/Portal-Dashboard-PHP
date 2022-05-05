<?php
include('header.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>T.Torres Portal</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../../vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="../../vendors/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="../../vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="../../vendors/select2/select2.min.css">
  <link rel="stylesheet" href="../../vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <!-- endinject -->
  <!-- Layout styles -->
  <link rel="shortcut icon" href="../../images/favicon.png" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
</head>

<body>
  <div>
    <h2 class="cadastrar">Cadastrar</h2>
    <div class="row">
      <div class="col-md-6 grid-margin stretch-card">
        <div class="card">

          <div class="card-bodya">



            <form class="form" action="cadastrar.php" method="POST">
              <div class="form-group">
                <label for="exampleInputUsernam"><h6 class="vachar" >Nome</h6></label>
                <input name="nome" type="text" class="form-control" placeholder="nome">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1"><h6>Usuário</h6><label>
                    <input name="usuario" type="text" class="form-control" placeholder="usuario">
              </div>
              <div class="form-group">
                <label for="exampleInputConfirmPassword1"><h6>Nivel de usuário</h6></label>
                <input name="usuario_nivel" type="text" class="form-control" placeholder="usuario_nivel">
                <br>
                <div class="form-group">
                  <label for="exampleInputPassword1"><h6>Senha</h6> </label>
                  <input name="senha" type="password" class="form-control" placeholder="senha">
                </div>
                <div class="form-group">
                  <label for="exampleInputConfirmPassword1"><h6>CNPJ</h6></label>
                  <input name="CNPJ" type="text" class="form-control" placeholder="CNPJ">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1"><h6>Nome da empresa</h6></label>
                  <input name="nome_da_empresa" type="text" class="form-control" placeholder="nome_da_empresa">
                </div>
                <div class="form-group">
                  <label for="exampleInputConfirmPassword1"><h6>CEP</h6></label>
                  <input name="CEP" type="text" class="form-control" placeholder="CEP">
                </div>

                <div class="form-group">
                  <label for="exampleInputConfirmPassword1"><h6>Logradouro </h6></label>
                  <input name="logradouro" type="text" class="form-control" placeholder="logradouro">
                </div>
                <div class="form-group">
                  <label for="exampleInputConfirmPassword1"><h6>Complemento</h6></label>
                  <input name="complemento" type="text" class="form-control" placeholder="complemento">
                </div>
                <div class="form-group">
                  <label for="exampleInputConfirmPassword1"><h6>Número</h6></label>
                  <input name="numero" type="text" class="form-control" placeholder="numero">
                </div>
                <div class="form-group">
                  <label for="exampleInputConfirmPassword1"><h6>Bairro</h6></label>
                  <input name="bairro" type="text" class="form-control" placeholder="bairro">
                </div>
                <div class="form-group">
                  <label for="exampleInputConfirmPassword1"><h6>Cidade</h6></label>
                  <input name="cidade" type="text" class="form-control" placeholder="cidade">
                </div>
                <div class="form-group">
                  <label for="exampleInputConfirmPassword1"><h6>Estado</h6></label>
                  <input name="estado" type="text" class="form-control" placeholder="estado">
                </div>
                <br>
                <button class="btn btn-primary m-1 ml-5 " type="submit" name="Cadastrar">Cadastrar</button>
            </form>
            <!-- partial -->
          </div>
          <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
      </div>
      <!-- container-scroller -->
      <!-- plugins:js -->
      <script src="../../vendors/js/vendor.bundle.base.js"></script>
      <!-- endinject -->
      <!-- Plugin js for this page -->
      <script src="../../vendors/select2/select2.min.js"></script>
      <script src="../../vendors/typeahead.js/typeahead.bundle.min.js"></script>
      <!-- End plugin js for this page -->
      <!-- inject:js -->
      <script src="../../js/off-canvas.js"></script>
      <script src="../../js/misc.js"></script>
      <!-- endinject -->
      <!-- Custom js for this page -->
      <script src="../../js/typeahead.js"></script>
      <script src="../../js/select2.js"></script>
      <!-- End custom js for this page -->
    </div>
  </div>
</body>

</html>
<?php
include('footer.php')
?>