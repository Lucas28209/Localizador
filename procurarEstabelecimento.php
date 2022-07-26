
<link href="cadastro.css" rel="stylesheet">
<h1>Lista de Estabelecimentos</h1>

<?php
$estabelecimento = $_POST['estabelecimento'];
?>



<center>
<hr>
<table rules="all">

    <thead>
        <tr>
        <th>Nome</th>
        <th>Tipo</th>
        <th>Horário de Abertura</th>
        <th>Horário de Fechamento</th>
        <th>Rua</th>
        <th>Bairro</th>
        <th>Número</th>
        <th>Cidade</th>
        </tr>
    </thead>

    <tbody>
    <?php
    require_once('conexao.php');

    $sql = mysqli_query($conexao, "SELECT estabelecimento.nome, estabelecimento.tipo, estabelecimento.hora_abre, estabelecimento.hora_fecha, 
    endereco.rua, endereco.bairro, endereco.numero, endereco.cidade
     FROM estabelecimento inner join endereco on estabelecimento.id_estabelecimento = endereco.id_estabelecimento 
    where nome='$estabelecimento'");

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
        </tr>

    <?php } ?>
    </tbody>
</table>
</center>

<!-- <a href="procurar.html">Voltar</a> -->