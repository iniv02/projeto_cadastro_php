<?php 
$hostname = "localhost";
$bancodedados = "bdexemplo";
$usuario = "root";
$senha = "";

$conexao = mysqli_connect ($hostname, $usuario, $senha, $bancodedados);

mysqli_set_charset($conexao, 'utf8');


if ($conexao->connect_error){
    die("Falha ao realizar a conexao: " . $conexao->connect_error);
} else {
    echo "conectado";
}
?>
