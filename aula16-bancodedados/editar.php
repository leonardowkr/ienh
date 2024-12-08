<?php
    include("includes/conexao.php");
    $nome = ($_POST['nome']); // recebemos o nome do produto
    $quantidade = ($_POST['quantidade']);
    $valor = ($_POST['valor']);
    $id = ($_POST['id']);

    $editar = "UPDATE produtos SET nome = '$nome', quantidade = '$quantidade', valor = '$valor' WHERE id = '$id';";

    $conexao ->query($editar);
    echo "Produto editado com sucesso!";
?>