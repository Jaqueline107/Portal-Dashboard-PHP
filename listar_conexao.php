<?php

include("conexao.php");




$sql = "SELECT 
usuario_id,
nome,
usuario
FROM
usuario
ORDER BY nome";

$result = $conexao ->query($sql);

print_r($result);

?>
