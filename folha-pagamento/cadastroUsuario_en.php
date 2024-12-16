<?php
    include ("includes/conexao.php");
    session_start();
    $senha = ($_POST['senha']); 
    $usuario = $_POST['usuario'];
    $sql_1 = "SELECT * FROM usuarios WHERE usuario = '$usuario'";
    $srch_1 = mysqli_query($conexao, $sql_1);
    $row_1 = mysqli_fetch_assoc($srch_1);
    if(isset($_POST['submit']) && !empty($_POST['usuario']) && !empty($_POST['senha'])){
        if(!empty($row_1['usuario'])){
            print_r("Usuário já cadastrado");
            echo '<br/>';
            print_r($row_1['usuario']);
        }
        else{          
        
        header("Location: login_en.php");
         // recebemos o nome do produto
        //$idusuario = 1;

        /*$push = "CREATE TABLE ".$usuario ." (
            idusuario INT AUTO_INCREMENT PRIMARY KEY,
            usuario VARCHAR (30),
            senha VARCHAR (50));";
           */    
        $inserir = "INSERT INTO usuarios (usuario, senha) values('$usuario','$senha')"; // Inserimos os dados na tabela de produtos
        //$conexao ->query($push);
        $conexao ->query($inserir);
    }
    }
    else{
        print_r($_REQUEST);
        header("Location: index_en.php");
        //echo"erro";
    }
    
    

?>