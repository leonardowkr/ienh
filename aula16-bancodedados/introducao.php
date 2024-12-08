<?php
    // Tag de abertura de comentario
    echo "Olá mundo!"; // Imprime uma mensagem
    $nome = "Joao"; // Vriavel do tipo String
    $idade = 20;
    // 
    for($i=0; $i < 10;$i++){
        echo "Mais uma repetição";
        $i++;
    }

    function saudacao($nome){
        echo "Olá, $nome!";
    }
    echo saudacao("Leonardo");
    $frutas = array("Maçã", "Banana", "Morango");
    echo $frutas[2];
    $matriz = array(
        array(1,2,3),
        array(4,5,6),
        array(7,8,9),
    )
    //echo $matriz[0][0]; // 1
    //echo $matriz[0][1]; // 4
    // Foreach
    //foreach($frutas as $fruta){
        //echo $fruta;
    //}
?>
