<!DOCTYPE html>
<html>
<body>

<?php 
$nome        =      $_POST["nome"];
$email       =      $_POST["email"];
$cidade      =      $_POST["cidade"];
$estado      =      $_POST["estado"];
$comentarios =      $_POST["comentarios"];
$erro        =      0;

if (empty($nome) OR strstr($nome, ' ')== FALSE) {
    echo "Favor digitar seu nome corretamente.<br>"; $erro=1;
}

if (strlen($email)<8 || strstr($email, '@')==FALSE) {
    echo "Favor digitar seu email corretamente.<br>"; $erro=1;
}

if (empty($cidade) ) {
    echo "Favor digitar sua cidade.<br>"; $erro=1;
}

if (strlen($estado) !=2) {
    echo "Favor digitar seu estado corretamente.<br>"; $erro=1;
}

if (empty($comentarios) ) { 
    echo "Favor entre com algum comentarios.<br>"; $erro=1;
}

if ($erro==0) {
    echo "Todos os dados foram digitados corretamente!";
    include 'insere.inc.php';
}
?>    
</body>
</html>