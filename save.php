<?php
include("conexao.php");

$nome = $_POST("nome");
$sobrenome = $_POST("sobrenome");
$date = $_POST("date");
$tel = $_POST("tel");
$email = $_POST("nome");


$stmt = $conexao ->prepare(

    "INSERT INTO usuarios
    (nome, sobrenome)"
)
