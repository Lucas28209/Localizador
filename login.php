<?php

include_once('conexao.php');

$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = mysqli_query($conexao, "SELECT * FROM usuario where email = '$email' and senha='$senha'");



if(mysqli_num_rows($sql) != 0){
    $id_user = mysqli_query($conexao, "SELECT tipo_usuario FROM usuario where email = '$email' and senha='$senha'");
    $row = mysqli_fetch_array($id_user);
    // while ($row = mysqli_fetch_array($id_user)) {
    //     echo $row['tipo_usuario']."<br>";
    // }
    if ($row['tipo_usuario'] == 1){ // 1 para proprietário
        header('location:principal_proprietario.php');
    }else{ // 0 para cliente
        header('location:principal_cliente.php');
    }    
}else {
    echo " <script>
    
    alert('Usuário não registrado');
    
    </script>";
}

?>