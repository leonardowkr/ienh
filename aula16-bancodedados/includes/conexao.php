<?php
    $conexao = new mysqli("localhost","root","","exemplo_db"); // passamos os parametros para a conexao do banco de dados
    mysqli_set_charset($conexao, 'utf8'); // Definimos o banco de dados para trabalhar com português
    
?>