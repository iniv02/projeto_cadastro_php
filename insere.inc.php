<?php 
include 'conecta_mysql.inc.php';

$nome        =      $_POST["nome"];
$email       =      $_POST["email"];
$cidade      =      $_POST["cidade"];
$estado      =      $_POST["estado"];
$comentarios =      $_POST["comentarios"];

$sql = "INSERT INTO Cadastro VALUES";
$sql .= "('$nome', '$email', '$cidade', '$estado', '$comentarios')";

if ($conexao->query ($sql) === TRUE){
    echo "<br> Usuario incluido com sucesso!";
} else {
    echo "erro: " . $sql . "<br>" . $conexao->error; 
}

$conexao->close();

?>