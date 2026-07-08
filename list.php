<?php
include("conexao.php")

$sql = "SELECT * FROM usuarios";

$resultado = $conexao->query($sql);

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
         
        <style>
            body {
                font-family: Arial, sans-serif;
                background: #f0f0f0;
            }

            .container {
                width: 900px;
                margin: 400px auto;
                background: #fff;
                padding: 30px;
                border-radius: 10px
            }

            h1{
                text-align: center;
            }

            table{
                width:100%;
                border-collapse: collapse;
                margin-top: 20px;
            }

            th{
                background: #555;
                color:white;
                padding: 12px;
            }

            td{
                padding:10px;
                border: 1px;
            }
            </style>
    </html>