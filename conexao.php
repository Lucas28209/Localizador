<?php

$servidor="localhost";
$usuario="root";
$senha="";
$dbname="localizador";

$conexao = mysqli_connect($servidor, $usuario, $senha, $dbname);

if(!$conexao){
    die("Erro (Conexão): " . mysqli_connect_error());
}
else 
    echo "conexao";

?>