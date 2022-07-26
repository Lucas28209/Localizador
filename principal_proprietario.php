<!DOCTYPE html>
<?php
setcookie('varname', $_REQUEST['varname']);
include_once('conexao.php');
 if ($_REQUEST['varname']){
    $var_value = $_REQUEST['varname'];
    $sql = mysqli_query($conexao, "select nome, id_estabelecimento from estabelecimento where id_proprietario = '$var_value'");
 }//$nome = mysqli_fetch_array($sql);
//echo $nome['nome'];
?>
<html lang="pt">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="cadastro.css" rel="stylesheet">
        <style>
            li {
                list-style: none;
                background: #3a57af;
                color: rgb(0, 0, 0);
                padding: 20px;
                margin-left: 60px;
                margin-right: 60px;
                text-align: center;                
                }
            b {
                
                background: #3a57af;
                color: rgb(0, 0, 0);
                padding: 20px;
                margin-left: 80px;
                margin-right: 80px;
                text-align: center;
 
            }
            p {
                font-size: 14px;
                width: 205px;
                display: inline-block;
                margin-left: 18px;
            }
            
h2 {
  font-size: 24px;
  font-weight: 300;
  color: #4c4c4c;
  text-align: center;
  padding-top: 10px;
  margin-bottom: 10px;
}
        </style>
    </head>
    <div class="testbox">
<head>
    <title>Localizador de Produtos</title>
</head>
<body>
    <h1>Proprietário</h1>

    <a href="cadastroProduto.html"> <li>Cadastrar Produto</li></a>
    <a href="cadastroEstabelecimento.html"> <li>Cadastrar Estabelecimento</li></a>
    <a href="menuEdicao.php"> <li>Editar Produto ou Estabelecimento</li></a>
</body>
</div>
<div class="testbox">
    <h1>Perfil</h1>
    <p>Seu número de usuário é: <?php echo $var_value; ?></p>
    <hr>
    <h2>Estabelecimentos </h2>
     <?php 
   
        while($dados = mysqli_fetch_array($sql)) {
            echo "<p><br>Nome do estabelecimento: ". $dados[0]."</p> <p>Id do estabelecimento: ".$dados[1]. "<br></p>";
            //echo $dados[1];
        }
        //     echo "<p> Nome do estabelecimento". $nome['nome'][$var]. "Id do estabelecimento: ".$nome['id_estabelecimento'][$var]. "</p>";
        //     $var = $var+1;
        // }
    ?>   
    <a href="index.html"> <b>Logout</b></a>
</div>



</html>



