<?php
    include ("includes/conexao.php");
    $nome = ($_POST['nome']); // recebemos o nome do produto
    $quantidade = ($_POST['quantidade']);
    $valor = ($_POST['valor']);

    $inserir = "INSERT INTO produtos (nome, quantidade, valor) values('$nome','$quantidade','$valor')"; // Inserimos os dados na tabela de produtos


    $conexao ->query($inserir);
    $ultimo_id = $conexao-> insert_id; // pegamos o id do produto cadastrado
    if (isset($_FILES["InputFile"])){
        $file = $_FILES["InputFile"]["name"];
        $file_tmp = $_FILES["InputFile"]["tmp_name"];
        $tamanho = $_FILES["InputFile"]["size"];
        $tipo = $_FILES["InputFile"]["type"];
        $ext = pathinfo($file, PATHINFO_EXTENSION);

        // Construir o caminho da imagem
        $nome_arquivo = 'imagem_'.$ultimo_id.'.'.$ext;
        $pasta = 'img/';
        // upload da imagem
        move_uploaded_file($file_tmp, $pasta.$nome_arquivo);
        $editar = "UPDATE produtos SET imagem = '$nome_arquivo' WHERE id = '$ultimo_id';";
        $conexao->query($editar);
    }
   
?>