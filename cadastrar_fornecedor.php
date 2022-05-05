<?php


include("conexao.php");
include("painel_fornecedor.php");



$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT); 


$sql = "SELECT COUNT(*) AS TOTAL FROM cad_fornecedor WHERE fornecedor_id = '$fornecedor_id'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);
echo $sql;


$insert = "INSERT INTO 
		  		   		cad_fornecedor
		  		   	(
		  		   		fornecedor_razao_social,
		  		   		fornecedor_cnpj,
		  		   		fornecedor_cep,
		  		   		fornecedor_end,
		  		   		fornecedor_numero,
		  		   		fornecedor_complemento,
		  		   		fornecedor_bairro,
		  		   		fornecedor_cidade,
		  		   		fornecedor_estado,
		  		   		fornecedor_email,
		  		   		fornecedor_tel,
		  		   		fornecedor_cel,
		  		   		fornecedor_contato
		  		   	)
		  		  	VALUES
		  		  	(
		  		   		'".mysqli_real_escape_string($conexao, $dados['fornecedor_razao_social'])."',
		  		   		'".mysqli_real_escape_string($conexao, $dados['fornecedor_cnpj'])."',
		  		   		'".mysqli_real_escape_string($conexao, $dados['fornecedor_cep'])."',
		  		   		'".mysqli_real_escape_string($conexao, $dados['fornecedor_end'])."',
		  		   		'".mysqli_real_escape_string($conexao, $dados['fornecedor_numero'])."',
		  		   		'".mysqli_real_escape_string($conexao, $dados['fornecedor_complemento'])."',
		  		   		'".mysqli_real_escape_string($conexao, $dados['fornecedor_bairro'])."',
		  		   		'".mysqli_real_escape_string($conexao, $dados['fornecedor_cidade'])."',
		  		   		'".mysqli_real_escape_string($conexao, $dados['fornecedor_estado'])."',

		  		   		'".mysqli_real_escape_string($conexao, $dados['fornecedor_email'])."',
		  		   		'".mysqli_real_escape_string($conexao, $dados['fornecedor_tel'])."',
		  		   		'".mysqli_real_escape_string($conexao, $dados['fornecedor_cel'])."',
		  		   		'".mysqli_real_escape_string($conexao, $dados['fornecedor_contato'])."'
		  		   		)";
$exec_insert_fornecedor = mysqli_query($conexao, $insert) or die (mysqli_error($conexao));
#echo $insert_fornecedor;

if (!$exec_insert_fornecedor){
        $msg=utf8_encode("Ops, ocorreu um erro no cadastro! Revise os dados!!!");
        echo "<script type='text/javascript'>alert('".utf8_decode($msg)."');</script>";
        echo "<script language='JavaScript'>window.history.go(-1);</SCRIPT>";
    }
    else {
        $msg="Fornecedor cadastrado com sucesso!!!";
        echo "<script type='text/javascript'>alert('".utf8_decode($msg)."');</script>";
        echo "<SCRIPT language='JavaScript'>window.location.href='fornecedor_cadastrar.php';</SCRIPT>";
    }


?>

