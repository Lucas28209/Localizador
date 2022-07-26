<?php

require_once('conexao.php');

$nome = $_POST['nome'];
$tipo = $_POST['tipo'];
$quantidade = $_POST['quantidade'];
$codigo = $_POST['codigo'];
$preco = $_POST['preco'];
$id_estabelecimento = $_POST['id_estabelecimento'];


$sql = "INSERT INTO produto (nome, tipo, quantidade, codigo, preco, id_estabelecimento)
    VALUES ('$nome', '$tipo', '$quantidade', '$codigo', '$preco', '$id_estabelecimento')";

//echo $sql;


if(mysqli_query($conexao, $sql)){
    echo "  <script>

    alert('Produto cadastrado com sucesso');
    window.location.href = 'cadastroProduto.html';

    </script>";

}else{
    echo " <script>
    
    alert('Falha no cadastro do produto');
    
    </script>";
}

mysqli_close($conexao);


?>
