<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "shopcenter";

$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

if(!$conexao){
    die("Usúario não cadastrado " . mysqli_connect_error());
}

?>