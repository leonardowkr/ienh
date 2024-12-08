<?php
include("includes/conexao.php");
session_start();
$_SESSION["usuario"] = ($_POST['usuario']);
$_SESSION["senha"] = ($_POST['senha']);

$usuario = $_SESSION["usuario"];
$senha = $_SESSION["senha"];


if (isset($_POST['submit']) && !empty($_POST['usuario']) && !empty($_POST['senha'])) { // verifica se os campos foram preenchidos

    $sql_2 = "SELECT senha FROM usuarios WHERE usuario = '$usuario'"; // verifica se há o usuario consta no banco
    $srch_2 = mysqli_query($conexao, $sql_2);
    if (mysqli_num_rows($srch_2) > 0) {

        $row_2 = mysqli_fetch_assoc($srch_2);
        if ($row_2['senha'] != $senha) { // verifica senha
            echo "Senha incorreta";
        } else {
            //header("Location: login.php");
            // recebemos o nome do produto
            //$idusuario = 1;
            $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' and senha = '$senha'";
            $sqlIdUsuario = "SELECT idusuario FROM usuarios WHERE usuario = '$usuario';";


            $srch = mysqli_query($conexao, $sqlIdUsuario);
            $result = $conexao->query($sql);

            if (mysqli_num_rows($srch) > 0) {
                // Obtendo o idusuario da consulta
                $row = mysqli_fetch_assoc($srch);
                echo $row["idusuario"];
                // Armazenando o idusuario na sessão
                $_SESSION['idusuario'] = $row['idusuario'];

                // Agora, você pode acessar o idusuario da sessão
                //echo "ID do usuário: " . $_SESSION['idusuario'];  // Exibindo o idusuario da sessão
            }
            header("Location: cadastrar-funcionario.php");
        }
    } else {
        //header("Location: index.php");
        echo "Usuário não encontrado. ";
    }
} else {
    echo "erro";
}
?>