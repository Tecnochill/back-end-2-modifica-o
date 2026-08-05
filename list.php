<?php
include("conexao.php")

$sql = "SELECT*FROM usuarios";

$resultados = $conexao->query($sql);

?>

<!DOCTYPE html>
<html lang="pt-br">
