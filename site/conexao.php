<?php

$servidor = "sql106.infinityfree.com";
$usuario = "if0_42192552";
$senha = "Meury030476";
$banco = "if0_42192552_shopcenter";

$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

if (!$conexao) {
    die("Erro na conexão: " . mysqli_connect_error());
}

?>