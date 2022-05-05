<?php


$nomedoarquivo = isset($_FILES['file']) ? $_FILES['file']['name'] : '';
$caminhoatualarquivo = isset($_FILES['file']) ? $_FILES['file']['tmp_name'] : '';
$caminhosalvar = 'arquivo/' . $nomedoarquivo;

if (isset($_FILES['file'])) {
    $tipos_permitidos = ['jpg', 'jpeg', 'png'];
    $nomedoarquivo = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
    if (in_array($nomedoarquivo, $tipos_permitidos)) {
        $caminhos  = "C:\wamp64\www\login\arquivo";


        if (move_uploaded_file($caminhoatualarquivo, $caminhosalvar)) {
            echo "<p>Upload realizadol</p>";
            header("Location: chat.php");
        }
    } else {

        die("Não foi possivel fazer o upload. verifique se a o arquivo é jpg, jpeg, png");
    }
}

    
// if (move_uploaded_file($caminhoatualarquivo, $caminhosalvar)) {
    // header("Location: chat.php");
// } else {

    // echo "Não foi possivel fazer o upload";
// }

              
                               











/*
  
  if(isset($_FILES['arquivo'])){
    $tipos_permitidos = ['jpg', 'jpeg', 'png',];
    $extensao = pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION);            
    if (in_array($extensao, $tipos_permitidos)){
        $pasta = "C:\wamp64\www\login\arquivo";      

        if(!empty($_FILES['arquivo']['tmp_name'])){
            $temporario = $_FILES['arquivo']['tmp_name'];
            $novoNome = uniqid() . ".$extensao";
  
            if(move_uploaded_file($temporario, $pasta.$novoNome)){
                echo "<p>Upload realizadol</p>";
            }             
        }  
             
        else{
            echo "<p>Falha no Upload!</p>";
            
        }  
    }
    
}
*/
