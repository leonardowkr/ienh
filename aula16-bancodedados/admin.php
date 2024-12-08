<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>
    <h2>Cadastro de Novo Produto</h2>
    <form method="POST" action="novo.php" enctype="multipart/form-data">
        <input type="text" name="nome" placeholder="Nome">
        <input type="number" name="quantidade" placeholder="Quantidade">
        <input type="number" name="valor" placeholder="Valor">
        <input type="file" name="InputFile">
        <button type="submit">Cadastrar</button>
    </form>
    <h2>Produtos Cadastrados</h2>
    <?php
        include("includes/conexao.php");
        $dados = mysqli_query($conexao, "SELECT * FROM produtos;");
          while($produtos = mysqli_fetch_array($dados)):
    ?>
        <form method="POST" action="editar.php">
            <p><?php print $produtos['id'] ?></p>
            <input type="hidden" name="id" value="<?php print $produtos['id'];?>">
            <input type="text" name="nome" placeholder="Nome" value="<?php print $produtos['nome'] ?>">
            <input type="number" name="quantidade" placeholder="Quantidade" value="<?php print $produtos['quantidade'] ?>"> 
            <input type="number" name="valor" placeholder="Valor" value="<?php print $produtos['valor'] ?>">
            <button type="submit">Editar</button>
        </form>

        <form method="POST" action="excluir.php">
            <input type="hidden" name="id" value=" <?php
            print $produtos['id']; ?>">
            <button type="submit">Excluir</button>
        </form>
    <?php
        endwhile;
    ?>
</body>
</html>