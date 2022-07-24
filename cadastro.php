
<?php

require_once('conexao.php');


$tipo = $_POST['tipo'];
$nome = $_POST['nome'];
$senha = $_POST['senha'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];

echo $tipo;
echo $nome;
echo $senha;
echo $email;
echo $telefone;

$sql = "INSERT INTO usuario (tipo_usuario, nome_usuario, senha, email, telefone)
    VALUES ('$tipo', '$nome', '$senha', '$email', '$telefone')";

echo $sql;

if(mysqli_query($conexao, $sql)){
    echo "Usuário cadastrado com sucesso";
}else{
    echo "Erro: " . mysqli_connect_error($conexao);
}

mysqli_close($conexao);


?>
