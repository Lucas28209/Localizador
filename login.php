<?php

include_once('conexao.php');

$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = mysqli_query($conexao, "SELECT * FROM usuario where email = '$email' and senha='$senha'");



if(mysqli_num_rows($sql) != 0){
    $tipo_user = mysqli_query($conexao, "SELECT tipo_usuario FROM usuario where email = '$email' and senha='$senha'");
    $row = mysqli_fetch_array($tipo_user);
    
    $id_usuario = mysqli_query($conexao, "SELECT id_usuario FROM usuario where email = '$email' and senha='$senha'");
    $id1 = mysqli_fetch_array($id_usuario);
    $id = $id1['id_usuario'];
    // while ($row = mysqli_fetch_array($id_user)) {
    //     echo $row['tipo_usuario']."<br>";
    // }
    if ($row['tipo_usuario'] == 1){ // 1 para proprietário
        //header('location:principal_proprietario.php');
         echo "<form method='post' id='nome' action='principal_proprietario.php'>";
         echo "<input type='hidden'  name='varname' value='$id'>";
         //echo '<input type="submit">';
         echo "</form> ";
         echo " <script> 

            document.getElementById('nome').submit();       

         </script>";

    }else{ // 0 para cliente
        //header('location:principal_cliente.php');
        echo "<form method='post' id='nome' action='principal_cliente.php'>";
        echo "<input type='hidden'  name='varname' value='$id'>";
         //echo '<input type="submit">';
         echo "</form> ";
         echo " <script> 

            document.getElementById('nome').submit();       

         </script>";
    }    
}else {
    echo " <script>
    
    alert('Usuário não registrado');
    
    </script>";
}

?>

