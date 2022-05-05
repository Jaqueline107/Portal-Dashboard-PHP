<?php


include("conexao.php");

$produto_nome = mysqli_real_escape_string($conexao, trim($_POST['produto_nome']));
$produto_descricao = mysqli_real_escape_string($conexao, trim($_POST['produto_descricao']));
$produto_estoque_minimo = mysqli_real_escape_string($conexao, trim($_POST['produto_estoque_minimo']));
$produto_estoque_atual = mysqli_real_escape_string($conexao, trim($_POST['produto_estoque_atual']));

$sql = "SELECT COUNT(*) AS TOTAL FROM cad_produto WHERE produto_nome = '$produto_nome'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);



if($row == 1) {
    $_SESSION['produto_existe'] = true;
    exit;
  }   
  else{
      
 $insert = "INSERT INTO cad_produto(produto_nome, produto_descricao, produto_estoque_minimo, 
 produto_estoque_atual, produto_data_cadastro) VALUES('$produto_nome','$produto_descricao',
 '$produto_estoque_minimo', 
 '$produto_estoque_atual', NOW())";

 echo $insert;

 $exec_insert = mysqli_query($conexao, $insert) or die (mysqli_error($conexao));
  
 

  }
?>

