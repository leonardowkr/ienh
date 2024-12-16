<?php
  
  include("includes/conexao.php");
    session_start();
    $id = $_SESSION['funcionarios']['id'];
    $dados_1 = mysqli_query($conexao, "SELECT * FROM funcionarios WHERE id = '$id';");
    $funcionarios_1 = mysqli_fetch_array($dados_1);

  if (isset($_POST['remover'])) {
    // Lógica para remover algo
    
    //echo 'id aa excluir: ' . $id . '';
    //print_r( 'id a excluir: ' . $funcionarios_1['id'] . '');
    $sqlIdUsuario = "DELETE FROM funcionarios WHERE id = '$id';";


    $srch = mysqli_query($conexao, $sqlIdUsuario);
    //echo "Id a excluir: ".$id."";
    header("Location: cadastro-funcionarios_en.php");
  }
?>