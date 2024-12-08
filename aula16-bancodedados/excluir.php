<?php
    include("includes/conexao.php");
    $id = ($_POST['id']);
    $excluir = "DELETE FROM produtos WHERE id = '$id';";
    $conexao->query($excluir);
    echo "Produto deletado com sucesso!";
?>