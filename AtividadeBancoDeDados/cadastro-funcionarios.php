<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Folha de Pagamento de Funcionários</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap');
    @charset "UTF-8";


    #formulario {
      display: flex;
      flex-flow: row wrap;
      align-items: center;
      justify-content: center;
      gap: 10px;
      margin: 20px auto 20px auto;
      background-color: #174275;
      color: rgba(255, 255, 255, 0.80);
      max-width: 700px;
      border-radius: 12px;
      padding: 40px 40px;
      box-shadow: 0px 0px 10px 2px rgba(0, 0, 0, 0.200);
    }

    .form-group {
      //margin: 10px 0px;
      display: flex;
      flex-direction: column;
      align-items: flex-start;
      gap: 8px;
    }

    input {
      width: 10px;
      //padding: 3px 40px;
      margin: 0px 0px 20px 0px;
    }

    body {
      background-color: #0B2643;
    }

    h1 {
      text-align: center;
      font-weight: bold;
      color: white;
      margin: 0px 0px 40px 20px;
    }


    .column-group {
      column-count: 2;
      column-gap: 40px;
      width: 100%;
    }

    .card-body {
      display: flex;
      flex-flow: column wrap;
      justify-content: space-around;
      align-items: baseline;

    }

    .card {
      box-shadow: 0px 0px 10px 1px rgba(0, 0, 0, 0.445);
      border: none;
      background-color: #174275;
      color: white;
      border-radius: 12px;
    }

    .container {
      //margin-top: 40px;
      //argin-bottom: 20px;

    }

    button {
      border-radius: 5px;
      background-color: #0B2643;
      color: white;
      padding: 5px 20px;
      border: none;
      box-shadow: 0px 0px 5px 1px rgba(0, 0, 0, 0.200);
    }

    @media (max-width: 768px) {
      .column-group {
        column-count: 1;
      }

      #formulario {
        margin: 20px 16px;
      }
    }
  </style>
</head>

<body>
<?php
session_start();  
?>
  <form action="cadastro.php" id="formulario" method="POST">
    <h1>Folha de pagamento</h1>


    <div class="column-group">
      <div class="column">
        <div class="form-group">
          <label for="salario">Salário por hora</label>
          <input type="text" class="form-control" name="salariohora" id="salario" placeholder="R$ 0,00" required>
        </div>
        <div class="form-group">
          <label for="nome">Nome Funcionário</label>
          <input type="text" class="form-control" name="nome" id="nome" placeholder="Insira nome do funcionário"
            required>
        </div>
        <div class="form-group">
          <label for="cargaHoraria">Carga horária mensal</label>
          <input type="text" class="form-control" name="cargahorariamensalltrabalhada"
            id="cargahorariamensalltrabalhada" placeholder="0 h" required>
        </div>
      </div>


      <div class="column">
        <div class="form-group">
          <label for="horaextra50">Horas extras 50%</label>
          <input type="text" class="form-control" name="horaextra50" id="horaextra50" placeholder="0 h" required>
        </div>
        <div class="form-group">
          <label for="horaextra100">Horas extras 100%</label>
          <input type="text" class="form-control" name="horaextra100" id="horaextra100" placeholder="0 h" required>
        </div>
        <div class="form-group">
          <label for="bonificacao">Bonificação</label>
          <input type="text" class="form-control" name="bonificacao" id="bonificacao" placeholder="R$ 0,00" required>
        </div>
      </div>
    </div>

    <button type="submit" name="submit" value="Enviar"> Enviar</button>
  </form>

  <?php
  include("includes/conexao.php");
  $idusuario = $_SESSION['idusuario'];
  $dados = mysqli_query($conexao, "SELECT * FROM funcionarios WHERE idusuario = '$idusuario';");
  while ($funcionarios = mysqli_fetch_array($dados)):
    $salario = $funcionarios["salariohora"] * $funcionarios["cargahorariamensalltrabalhada"] + $funcionarios['bonificacao'];
    $horasExtras = ($funcionarios["horaextra50"] * $funcionarios["salariohora"] * 1.5) + ($funcionarios["horaextra50"] * $funcionarios["salariohora"] * 2);
    $prevSocial = 0.20 * $salario;
    $fgts = 0.08 * $salario;
    $ferias = 0.111 * $salario;
    $decimoTerceiroSalario = (1 / 12) * $salario;
    $encargosTrabalhistas = ($prevSocial + $fgts + $ferias + $decimoTerceiroSalario);
    $custoTotal = $salario + $encargosTrabalhistas + $horasExtras;
    $_SESSION['funcionarios']['id'] = $funcionarios['id'];




    ?>


    <div class="container">
      <div class="card">
        <div class="card-body">
          <p class="card-text"><?php print $funcionarios['nome']; ?></p>
          <p>Salário: R$ <?php print number_format($salario, 2, ',', '.');
          ; ?> </p>
          <p>Horas Extras: R$ <?php print number_format($horasExtras, 2, ',', '.'); ?> </p>
          <p>Encargos Trabalhistas: R$ <?php print number_format($encargosTrabalhistas, 2, ',', '.'); ?></p>
          <p>FGTS: R$ <?php print number_format($fgts, 2, ',', '.'); ?></>
          </p>
          <p>INSS: R$ <?php print number_format($prevSocial, 2, ',', '.'); ?></>
          </p>
          <p>Férias (anual): R$ <?php print number_format($ferias, 2, ',', '.'); ?></>
          </p>
          <p>13° salário (anual): R$ <?php print number_format($decimoTerceiroSalario, 2, ',', '.'); ?></>
          </p>
          <p><strong>Custo Total: R$ <?php print number_format($custoTotal, 2, ',', '.'); ?></strong> </p>

          <form method="POST" action="remover-funcionario.php">
            <input type="hidden" name="id_funcionario" value="<?php echo $funcionarios['id']; ?>">
            <button type="submit" id="remover" name="remover">Remover</button>
          </form>

        </div>
      </div>
    </div>
    <?php
  endwhile;

  ?>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
</body>

</html>