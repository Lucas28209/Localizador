<?php

require_once('conexao.php');

$codigo = $_POST['codigo'];

$sql = "DELETE FROM produto where codigo='$codigo'";

//echo $sql;


if(mysqli_query($conexao, $sql)){
    echo "  <script>

    alert('Produto excluído com sucesso');
    window.location.href = 'excluir.html';

    </script>";

}else{
    echo " <script>
    
    alert('Falha na exclusão do produto');
    
    </script>";
}

mysqli_close($conexao);


?>