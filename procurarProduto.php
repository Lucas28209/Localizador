
<link href="cadastro.css" rel="stylesheet">
<h1>Lista de Produtos</h1>

<?php
$nome = $_POST['nome'];
$tipo = $_POST['tipo'];
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
        <th>Rua</th>
        <th>Bairro</th>
        <th>Número</th>
        <th>Cidade</th>
        </tr>
    </thead>

    <tbody>
    <?php
    require_once('conexao.php');

    $sql = mysqli_query($conexao, "SELECT produto.nome, produto.tipo, produto.quantidade, produto.codigo, produto.preco, estabelecimento.nome, endereco.rua, endereco.bairro, endereco.numero, endereco.cidade  
    FROM produto inner join estabelecimento on produto.id_estabelecimento=estabelecimento.id_estabelecimento 
    inner join endereco on estabelecimento.id_estabelecimento=endereco.id_estabelecimento
    where produto.nome='$nome' and produto.tipo='$tipo'");

    while($dados = mysqli_fetch_array($sql)) {
        ?>

        <tr>
        <td> <?= $dados[0] ?> </td>
        <td> <?= $dados[1] ?> </td>
        <td> <?= $dados[2] ?> </td>
        <td> <?= $dados[3] ?> </td>
        <td> <?= $dados[4] ?> </td>
        <td> <?= $dados[5] ?> </td>
        <td> <?= $dados[6] ?> </td>
        <td> <?= $dados[7] ?> </td>
        <td> <?= $dados[8] ?> </td>
        <td> <?= $dados[9] ?> </td>
        </tr>

    <?php } ?>
    </tbody>
</table>
</center>

<a href="procurar.html">Voltar</a>