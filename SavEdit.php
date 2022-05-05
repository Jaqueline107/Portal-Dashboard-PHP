
<?php
include("conexao.php");


if (isset($_POST['update'])) {

    $usuario_id = mysqli_real_escape_string($conexao, trim($_POST['usuario_id']));
    $nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
    $usuario = mysqli_real_escape_string($conexao, trim($_POST['usuario']));
    $senha = mysqli_real_escape_string($conexao, trim(md5($_POST['senha'])));
    $usuario_nivel = mysqli_real_escape_string($conexao, trim($_POST['usuario_nivel']));
    $nome_da_empresa = mysqli_real_escape_string($conexao, trim($_POST['nome_da_empresa']));
    $CNPJ = mysqli_real_escape_string($conexao, trim($_POST['CNPJ']));
    $CEP = mysqli_real_escape_string($conexao, trim($_POST['CEP']));
    $logradouro = mysqli_real_escape_string($conexao, trim($_POST['logradouro']));
    $complemento = mysqli_real_escape_string($conexao, trim($_POST['complemento']));
    $numero = mysqli_real_escape_string($conexao, trim($_POST['numero']));
    $bairro = mysqli_real_escape_string($conexao, trim($_POST['bairro']));
    $cidade = mysqli_real_escape_string($conexao, trim($_POST['cidade']));
    $estado = mysqli_real_escape_string($conexao, trim($_POST['estado']));

    $sqlUpdate = "UPDATE usuario SET  nome='$nome',
     senha='$senha', usuario='$usuario', usuario_nivel='$usuario_nivel',
      nome_da_empresa='$nome_da_empresa', CNPJ='$CNPJ', 
      CEP='$CEP', logradouro='$logradouro', complemento='$complemento', numero='$numero',
       bairro='$bairro', cidade='$cidade', estado='$estado'
       WHERE usuario_id = $usuario_id";
       
       echo $sqlUpdate;
       $result = $conexao->query($sqlUpdate);

       echo $result;
   
 



header('Location: listar.php');

}

?>
