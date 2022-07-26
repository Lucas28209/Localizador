<?php

require_once('conexao.php');

$id = $_POST['id'];

$sql = "DELETE FROM endereco where id_estabelecimento='$id'";
$sql3 = "DELETE FROM produto where id_estabelecimento='$id'";
$sql2 = "DELETE FROM estabelecimento where id_estabelecimento='$id'";

//echo $sql;


if(mysqli_query($conexao, $sql) and (mysqli_query($conexao, $sql3)) and (mysqli_query($conexao, $sql2)) ){ 
    
    echo "  <script>

    alert('Estabelecimento excluído com sucesso');
    window.location.href = 'excluir.html';

    </script>";
    

}else{
    echo " <script>
    
    alert('Falha na exclusão do estabelecimento');
    
    </script>";
}

mysqli_close($conexao);


?>