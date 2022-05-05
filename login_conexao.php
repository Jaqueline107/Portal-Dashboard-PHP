<?php
session_start();
include('conexao.php');

if(empty($_POST['usuario']) || empty($_POST['senha'])) {
    header('Location: index.php');
    exit(); 
}
 

$usuario = addslashes($_POST['usuario']);
$senha =  addslashes($_POST['senha']);
$usuario_nivel = addslashes($_POST['usuario_nivel']);

$query = "SELECT * FROM usuario WHERE usuario = '{$usuario}' AND senha = 
md5('{$senha}') AND usuario_nivel = '{$usuario_nivel}'";
$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);
echo $row;
echo $usuario_nivel;

if($row == 1 && $usuario_nivel == 'admin'){
    $_SESSION['usuario']= $usuario;
    header('location: admin.php');
    exit();
} 
    elseif($row == 1 && $usuario_nivel == 'fornecedor' ){

        $_SESSION['usuario']= $usuario;
        header('location: fornecedor.php');
        exit();
    }
        elseif($row == 1 && $usuario_nivel == 'associado' ){
            $_SESSION['usuario']= $usuario;
            header('location: associado.php');
            exit();
        }
        else {
            $_SESSION['nao_autenticado'] = true;   
            header('location: index.php');
            exit();
            }
     