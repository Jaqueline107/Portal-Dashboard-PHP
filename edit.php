<?php

use LDAP\Result;

include('conexao.php');
include('header.php');

$userId = $_GET["usuario_id"]; // pega da queries na url http://seulink.com/algo?usuario_id=1212
$sqlSelect = "SELECT * FROM usuario WHERE usuario_id = $userId";
$id_filter = ['usuario_id'];

if (!empty($_GET['usuario_id']));



$result = $conexao->query($sqlSelect);

if ($result->num_rows > 0) {

  while ($user_data = mysqli_fetch_assoc($result)) {

    $usuario_id = mysqli_real_escape_string($conexao, trim($user_data  ['usuario_id'] ));
    $nome = mysqli_real_escape_string($conexao, trim($user_data['nome']));
    $usuario = mysqli_real_escape_string($conexao, trim($user_data['usuario']));
    $senha = mysqli_real_escape_string($conexao, trim(md5($user_data['senha'])));
    $usuario_nivel = mysqli_real_escape_string($conexao, trim($user_data['usuario_nivel']));
    $nome_da_empresa = mysqli_real_escape_string($conexao, trim($user_data['nome_da_empresa']));
    $CNPJ = mysqli_real_escape_string($conexao, trim($user_data['CNPJ']));
    $CEP = mysqli_real_escape_string($conexao, trim($user_data['CEP']));
    $logradouro = mysqli_real_escape_string($conexao, trim($user_data['logradouro']));
    $complemento = mysqli_real_escape_string($conexao, trim($user_data['complemento']));
    $numero = mysqli_real_escape_string($conexao, trim($user_data['numero']));
    $bairro = mysqli_real_escape_string($conexao, trim($user_data['bairro']));
    $cidade = mysqli_real_escape_string($conexao, trim($user_data['cidade']));
    $estado = mysqli_real_escape_string($conexao, trim($user_data['estado']));
  }
} else (header('Location: sistema.php'));


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
    <link rel="stylesheet" href="../login/css/style.css">
    <link rel="shortcut icon" href="../../images/favicon.png" />
</head>

<body> 
    <?php 
   // var_dump($complemento);
    //die;
    ?>
    <div>
        <div class="container-scroller">
        </div>
        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="center">
                            <a class="btn btn-sm btn-primary " href="listar.php" role="button">Voltar</a>
                            <h4 class="card-title mt-4 ">Editar</h4>
                            <form class="form" action="SavEdit.php?usuario_id=<?php echo $usuario_id;?>"
                                method="POST">
                            <div class="form-1">
                                <div class="form-group">
                                    <label for="exampleInputUsernam">Nome</label>
                                    <input name="nome" type="text" class="form-control" value=<?php echo $nome ?>>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Usuário<label>
                                            <input name="usuario" type="text" class="form-control"
                                                value=<?php echo $usuario ?>>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputConfirmPassword1">nivel de usuário</label>
                                    <input name="usuario_nivel" type="text" class="form-control"
                                        value=<?php echo $usuario_nivel ?>>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Senha</label>
                                        <input name="senha" type="text" class="form-control" value=<?php echo $senha ?>>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputConfirmPassword1">CNPJ</label>
                                        <input name="CNPJ" type="text" class="form-control" value=<?php echo $CNPJ ?>>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">nome da empresa</label>
                                        <input name="nome_da_empresa" type="text" class="form-control"
                                            value=<?php echo $nome_da_empresa ?>>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputConfirmPassword1">CEP</label>
                                    <input name="CEP" type="text" class="form-control" value=<?php echo $CEP ?>>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputConfirmPassword1">logradouro</label>
                                    <input name="logradouro" type="text" class="form-control"
                                        value=<?php echo $logradouro ?>>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputConfirmPassword1">complemento</label>
                                    <input name="complemento" type="text" class="form-control"
                                        value=<?php echo $complemento ?>>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputConfirmPassword1">Número</label>
                                    <input name="numero" type="text" class="form-control" value=<?php echo $numero ?>>
                                </div>
                                <div class="form-echog ro">
                                   <label for=" exampleInputConfirmPassechow or">Bairro</label>
                                     <input name="bairro" type="text" class="form-control" value=<?php echo $bairro ?>>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputConfirmPassword1">Cidade</label>
                                    <input name="cidade" type="text" class="form-control" value=<?php echo $cidade ?>>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputConfirmPassword1">Estado</label>
                                    <input name="estado" type="text" class="form-control" value=<?php echo $estado ?>>
                                </div>
                                <input name="usuario_id" type="hidden" value="<?= $_GET['usuario_id'] ?>" >
                                <button class="btn btn-primary" type="submit" name="update" id="update">Editar</button>
                                </form>
                            </div>
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