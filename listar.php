<?php
include('header.php');
include("conexao.php");



//"SELECT * FROM usuarios ORDER BY id DESC "
$sql = "SELECT * FROM `usuario`";

$result = $conexao->query($sql);

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Stellar Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../../vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="../../vendors/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="../../vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <!-- endinject -->
  <!-- Layout styles -->
  <link rel="stylesheet" href="../../css/style.css"> <!-- End layout styles -->
  <link rel="shortcut icon" href="../../images/favicon.png" />
</head>

<body>
  <br>
  <br>
  <br>
  <br>
  <!-- partial -->
  <div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-bodyl "  >
              <h4 class="card-title">Tabela de usuários</h4>
              </p>
              <div class="scroll-table table-bg" id="caixa_tabela">
                <table class="table">
                  <thead>
                    <tr>
                      <th style="width: 30px;"><h6>ID</h6></th>
                      <th><h6>Usuário</h6></th>
                      <th><h6>Senha</h6></th>
                      <th> <h6>Nome</h6></th>
                      <th><h6>Data de cadastro</h6></th>
                      <th><h6>Nivel</h6></th>
                      <th><h6>CNPJ</h6></th>
                      <th><h6>CEP</h6></th>
                      <th><h6>Lougradouro</h6> </th>
                      <th><h6>Complemento</h6> </th>
                      <th><h6>Número </h6></th>
                      <th><h6>Bairro</h6></th>
                      <th><h6>Cidade </h6></th>
                      <th><h6>Estado</h6></th>
                      <th><h6> Nome da empresa</h6></th>
                      <th><h6>Editar</h6></th>
                      
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    while ($user_data = mysqli_fetch_assoc($result)) {
                      echo "<tr>";
                      echo "<td>" . $user_data['usuario_id'] . "</td>";
                      echo "<td>" . $user_data['usuario'] . "</td>";
                      echo "<td>" . $user_data['senha'] . "</td>";
                      echo "<td>" . $user_data['nome'] . "</td>";
                      echo "<td>" . $user_data['data_cadastro'] . "</td>";
                      echo "<td>" . $user_data['usuario_nivel'] . "</td>";
                      echo "<td>" . $user_data['CNPJ'] . "</td>";
                      echo "<td>" . $user_data['CEP'] . "</td>";
                      echo "<td>" . $user_data['logradouro'] . "</td>";
                      echo "<td>" . $user_data['complemento'] . "</td>";
                      echo "<td>" . $user_data['numero'] . "</td>";
                      echo "<td>" . $user_data['bairro'] . "</td>";
                      echo "<td>" . $user_data['cidade'] . "</td>";
                      echo "<td>" . $user_data['estado'] . "</td>";
                      echo "<td>" . $user_data['nome_da_empresa'] . "</td>";
                      echo"<td>
                      <a class='btn btn-sm btn-primary' href='edit.php?usuario_id=$user_data[usuario_id]'>
                     <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil-fill' viewBox='0 0 16 16'>
                     <path d='M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z'/>
                     </svg>
                      </td>";
                      echo "<tr>";
                    }
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:../../partials/_footer.html -->
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
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page -->
  <!-- End custom js for this page -->
  <?php
include("footer.php");
?>
</body>

</html>
