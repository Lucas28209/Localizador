
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
        <th>Id</th>
        <th>Nome</th>
        <th>Tipo</th>
        <th>Horário de Abertura</th>
        <th>Horário de Fechamento</th>
        </tr>
    </thead>

    <tbody>
    <?php
    require_once('conexao.php');

    $sql = mysqli_query($conexao, "SELECT * FROM estabelecimento where nome='$estabelecimento'");

    while($dados = mysqli_fetch_array($sql)) {
        ?>

        <tr>
        <td> <?= $dados[0] ?> </td>
        <td> <?= $dados[1] ?> </td>
        <td> <?= $dados[2] ?> </td>
        <td> <?= $dados[3] ?> </td>
        <td> <?= $dados[4] ?> </td>
        </tr>

    <?php } ?>
    </tbody>
</table>
</center>

<!-- <a href="procurar.html">Voltar</a> -->