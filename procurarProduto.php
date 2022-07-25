
<link href="cadastro.css" rel="stylesheet">
<h1>Lista de Produtos</h1>

<?php
$nome = $_POST['nome'];
?>



<center>
<hr>
<table rules="all">

    <thead>
        <tr>
        <th>Nome</th>
        <th>Tipo</th>
        <th>Quantidade</th>
        <th>Código</th>
        <th>Preço</th>
        <th>Estabelecimento</th>
        </tr>
    </thead>

    <tbody>
    <?php
    require_once('conexao.php');

    $sql = mysqli_query($conexao, "SELECT * FROM produto where nome='$nome'");

    while($dados = mysqli_fetch_array($sql)) {
        ?>

        <tr>
        <td> <?= $dados[0] ?> </td>
        <td> <?= $dados[1] ?> </td>
        <td> <?= $dados[2] ?> </td>
        <td> <?= $dados[3] ?> </td>
        <td> <?= $dados[4] ?> </td>
        <td> <?= $dados[5] ?> </td>
        </tr>

    <?php } ?>
    </tbody>
</table>
</center>

<a href="procurarProduto.html">Voltar</a>