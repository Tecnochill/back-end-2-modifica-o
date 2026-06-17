<?php

$servidor= "localhost";
$usuario= "root";
$senha="";
$banco= "escola";

$conexao= new mysqli($servidor, $usuario, $senha, $banco);


if($conexao ->connect_error){
    die("Erro de conexão" . $conexao->correct_error);
}
?>