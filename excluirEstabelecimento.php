<?php

require_once('conexao.php');

$id = $_POST['id'];

$sql = "DELETE FROM estabelecimento where id_estabelecimento='$id'";

//echo $sql;


if(mysqli_query($conexao, $sql)){
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