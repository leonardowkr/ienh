<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle de Folha de Pagamento de Funcionários</title>
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
            padding: 20px;
            width: fit-content;
            border-radius: 12px;
            padding: 60px 100px;
            box-shadow: 0px 0px 10px 1px rgba(0, 0, 0, 0.445);
        }

        input {
            padding: 3px 40px;
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

    <form action="cadastro.php" id="formulario" method="POST">
        <label for="salario">Salário por hora</label>
        <input type="text" name="salariohora" id="salario" placeholder="R$ 0,00">

        <label for="nome">Nome Funcionário</label>
        <input type="text" name="nome" id="nome" placeholder="Insira nome do funcionário">

        <label for="cargaHoraria">Carga horária mensal</label>
        <input type="text" name="cargahorariamensalltrabalhada" id="cargahorariamensalltrabalhada"
            placeholder="Insira carga horária (h)">
        <label for="horaextra50">Horas extras 50%</label>
        <input type="text" name="horaextra50" id="horaextra50" placeholder="">

        <label for="horaextra100">Horas extras 100%</label>
        <input type="text" name="horaextra100" id="horaextra100" placeholder="">

        <label for="bonificacao">Bonificação</label>
        <input type="text" name="bonificacao" id="bonificacao" placeholder="">
        <button type="submit" name="submit" value="Enviar"> Enviar</button>
    </form>
</body>

</html>