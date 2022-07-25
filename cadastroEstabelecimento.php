<?php

require_once('conexao.php');

$id_estabelecimento = $_POST['id_estabelecimento'];
$nome = $_POST['nome'];
$tipo = $_POST['tipo'];
$hora_abre = $_POST['hora_abre'];
$hora_fecha = $_POST['hora_fecha'];
$id_proprietario = $_POST['id_proprietario'];

$sql = "INSERT INTO estabelecimento (id_estabelecimento, nome, tipo, hora_abre, hora_fecha, id_proprietario)
    VALUES ('$id_estabelecimento', '$nome', '$tipo', '$hora_abre', '$hora_fecha', '$id_proprietario')";

//echo $sql;


if(mysqli_query($conexao, $sql)){
    echo "  <script>

    alert('Estabelecimento cadastrado com sucesso');
    window.location.href = 'cadastroEstabelecimento.html';

    </script>";

}else{
    echo " <script>
    
    alert('Falha no cadastro do estabelecimento');
    
    </script>";
}

mysqli_close($conexao);


?>