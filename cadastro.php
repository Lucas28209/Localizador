<?php

require_once('conexao.php');


$tipo = $_POST['tipo'];
$nome = $_POST['nome'];
$senha = $_POST['senha'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];

$sql = "INSERT INTO usuario (tipo_usuario, nome_usuario, senha, email, telefone)
    VALUES ('$tipo', '$nome', '$senha', '$email', '$telefone')";

//echo $sql;


if(mysqli_query($conexao, $sql)){
    echo "  <script>

    alert('Usuário cadastrado com sucesso');
    window.location.href = 'index.html';

    </script>";

}else{
    echo " <script>
    
    alert('Falha no cadastro');
    
    </script>";
}

mysqli_close($conexao);


?>