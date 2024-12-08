<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle de Folha de Pagamento de Funcionários</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        @charset "UTF-8";

        #formulario {
            max-width: 600px;
            display: flex;
            flex-flow: column wrap;
            align-items: center;
            gap: 10px;
            margin: 30px auto;
            background-color: #174275;
            color: rgba(255, 255, 255, 0.80);
            justify-content: center;
            width: fit-content;
            border-radius: 12px;
            //padding: 60px 100px;
            box-shadow: 0px 0px 10px 1px rgba(0, 0, 0, 0.445);
            
        }

        input{
            padding: 8px 12px;
            box-shadow: 0px 0px 5px 1px rgba(0, 0, 0, 0.200);
            text-align: left;
            height: 40px;
            width: 300px;

            border: none;
            border-radius: 5px;
        }
        button{
            border-radius: 5px;
            background-color: #0B2643;
            color: white;
            padding: 5px 20px;
            border: none;
            box-shadow: 0px 0px 5px 1px rgba(0, 0, 0, 0.200);
        }

        .form-group{
            margin: 4px;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            gap: 10px;
        }
        h2{
            padding: 8px 50px;
            margin: 0px 0px 10px 0px;
            background-color: #0B2643;
            color: white;
            border-radius: 12px;
            box-shadow: 0px 0px 5px 1px rgba(0, 0, 0, 0.200);
        }
        a{
            text-decoration: none;
            color: white;
        }
        a:hover{
            text-decoration: underline;
            color: white;
        }
       

        body {
            height: calc(100vh - 30px);
            background: linear-gradient(#0B2643,#161b33);
            //background-color: #0B2643
        }

        h1 {
            margin-bottom: 32px;
            text-align: center;
            color: rgba(255, 255, 255, 0.80);
            font-weight: bold;
        }

        * {
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>

<body>
    
    
    <form action="cadastroUsuario.php" method="POST" id="formulario">
        <h1>Folha de Pagamento de Funcionários</h1>
        <h2>Cadastro</h2>
        <div class="form-group">
            <label for="usuario">Usuário</label>
            <input type="text" name="usuario" id="usuario" placeholder="Insira o nome de usuário" required>
        </div>

        <div class="form-group">
            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha" placeholder="Insira sua senha" required>
        </div>
        <button type="submit" name="submit" value="Enviar"> Enviar</button>
        <a href="login.php">Já tem uma conta?</a>
    </form>

    
</body>

</html>