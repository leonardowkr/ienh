<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle de Folha de Pagamento de Funcionários</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        @charset "UTF-8";

#formulario {
    display: flex;
    flex-flow: column wrap;
    align-items: center;
    gap: 10px;
    margin: auto;
    background-color: #174275;
    color: rgba(255, 255, 255, 0.80);
    
    width: fit-content;
    border-radius: 12px;
    padding: 60px 100px;
    box-shadow: 0px 0px 10px 1px rgba(0, 0, 0, 0.445);
}
h2{
    padding: 8px 50px;
    margin: 0px 0px 10px 0px;
    background-color: white;
    color: #174275;
    border-radius: 3px;
}
a{
    text-decoration: none;
    color: white;
}
a:hover{
    text-decoration: underline;
}
input {
    padding: 5px 40px;
}

body {
    background-color: #0B2643;
}

h1 {
    text-align: center;
    color: rgba(255, 255, 255, 0.80);
}

* {
    font-family: Arial, Helvetica, sans-serif;
}
    </style>
</head>

<body>
    <h1>Controle de Folha de Pagamento de Funcionários</h1>
    
    <form action="loginUsuario.php" method="POST" id="formulario">
        <h2>Login</h2>
        <label for="usuario">Usuário</label>
        <input type="text" name="usuario" id="usuario" placeholder="Insira o nome de usuário">

        <label for="senha">Senha</label>
        <input type="password" name="senha" id="senha" placeholder="Insira sua senha">
        <button type="submit" name="submit" value="Enviar"> Enviar</button>
        <a href="index.php">Criar nova conta</a>
    </form>
</body>

</html>