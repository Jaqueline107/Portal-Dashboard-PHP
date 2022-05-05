<?php

session_start();
include("conexao.php");

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


$sql = "SELECT COUNT(*) AS TOTAL FROM usuario WHERE usuario = '$usuario'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if($row == 1) {
    $_SESSION['usuario_existe'] = true;
    header('location: cadastro.php');
    exit;
  }   
  else{ 

    $insert = "INSERT INTO usuario(
     nome,
     usuario,
     senha,
     usuario_nivel,
     nome_da_empresa,
     CNPJ,
     CEP,
     logradouro,
     complemento,
     numero,
     bairro,
     cidade,
     estado
     )
      VALUES(
     '$nome',
     '$usuario',
     '$senha',
     '$usuario_nivel',
     '$nome_da_empresa',
     '$CNPJ',
     '$CEP',
     '$logradouro',
     '$complemento',
     '$numero',
     '$bairro',
     '$cidade',
     '$estado')";
     
 $exec_insert = mysqli_query($conexao, $insert); 
    echo $insert;
      
    
  if($conexao->query($sql) === TRUE){

    $_SESSION['status_cadastro'] = true;
}

$conexao->close();

header('Location: index.php');
exit;
  }
?>
<?php
/*
$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
$usuario = mysqli_real_escape_string($conexao, trim($_POST['usuario']));
$senha = mysqli_real_escape_string($conexao, trim(md5($_POST['senha'])));
$usuario_nivel = mysqli_real_escape_string($conexao, trim($_POST['usuario_nivel']));
