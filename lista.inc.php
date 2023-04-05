<?php 
$base=mysqli_connect('localhost', 'root', '', 'bdexemplo') or die("erro de conexão");
$regra1="SELECT*FROM cadastro order by nome";
$res=mysqli_query($base, $regra1);/*Executa o comando SQL, no caso para pegar todos os dados e retornar o valor da consulta em uma variavel ($res)*/

    echo "<h2>Cadastros de usuários do estado de sp</h2>
        <table>
        <tr>
            <td>Nome</td>
            <td>E-mail</td>
            <td>Cidade</td>
            <td>Comentários</td>
            <td></td>
            <td></td>
        </tr>";
    /*enquanto houver dados na tabela para serem mostrados será execuatdo tudo que esta dentro do while*/ 
    while ($mostrar=mysqli_fetch_array($res)){
        echo "<tr>
                <td>".$mostrar['nome']."</td>
                <td>".$mostrar['email']."</td>
                <td>".$mostrar['cidade']."</td>
                <td>".$mostrar['comentarios']."</td>
    <td>
        <a href='apagar.php?a=".$mostrar['nome']."'>apagar</a></td>
        <a href='alterar.php?a=".$mostrar['nome']."'>editar</a></td>
        </tr>";
} 
    
?>