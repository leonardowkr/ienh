<?php
    include ("includes/conexao.php");
    session_start();
    $nome = $_POST['nome']; // recebemos o nome do produto
    //$_SESSION['idusuario'] = $_SESSION['usuario'];
    $idusuario = $_SESSION['idusuario'];
    //$idusuario = $_POST['idusuario'];
    $salariohora = $_POST['salariohora'];
    $cargahorariamensalltrabalhada = ($_POST['cargahorariamensalltrabalhada']);
    $horaextra50 = ($_POST['horaextra50']);
    $horaextra100 = ($_POST['horaextra100']); 
    $bonificacao = ($_POST['bonificacao']);
    print_r($_SESSION['idusuario']);
    
    $inserir = "INSERT INTO funcionarios (idusuario, nome, salariohora, cargahorariamensalltrabalhada, horaextra50, horaextra100, bonificacao) values('$idusuario','$nome','$salariohora','$cargahorariamensalltrabalhada', '$horaextra50', '$horaextra100', '$bonificacao')"; // Inserimos os dados na tabela de produtos
    $conexao ->query($inserir);
    header("Location: cadastro-funcionarios.php");
    ?>