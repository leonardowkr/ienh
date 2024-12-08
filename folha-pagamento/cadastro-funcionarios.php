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
      margin: 0px 0px 40px 0px;
    }

    .centralizado {
      margin: auto;
    }

    .column-group {
      column-count: 2;
      column-gap: 10px;
      width: 100%;
    }

    button {
      border-radius: 5px;
      background-color: #0B2643;
      color: white;
      padding: 5px 20px;
      border: none;
      box-shadow: 0px 0px 5px 1px rgba(0, 0, 0, 0.200);
    }








    .column-group-2 {
      display: flex;
      flex-direction: row;
      
      justify-content: center;
      column-gap: 20px;
      margin: 40px 0px;
      width: 100%;
      row-gap: 20px;
    }

    .card {
      
      width: 100%;
      padding: 20px;
      display: flex;
      flex: 0 0 calc(33.33% - 20px);
      //margin: 16px;

      box-shadow: 0px 0px 10px 1px rgba(0, 0, 0, 0.445);
      border: none;
      background-color: #174275;
      color: white;
      border-radius: 12px;
     
    }

    .card-text {
      padding: 15px;
      margin: 15px;
      background-color: #0B2643;
      border-radius: 5px;
      
    }

    .name {
      margin: 10px;
      border-radius: 5px;
      font-size: 1.8em;
    }

    .text-align {
      text-align: center;
    }
    .custo-total{
      color: white;
      padding: 15px;
      margin: 0px;
      background-color: #174275;
      border-radius: 5px;
      text-align: center;
      font-weight: bolder;
      font-size: 1.5em;
    }
    #creditos{
      background-color: white;
      text-align: center;
      margin: 0px;
      padding: 2px;
    }
    
    @media (max-width: 768px) {
      h1{
        margin: 0px 0px 24px 0px;
      }
      *{
        margin: 0px;
        padding: 0px;
      }
      .column-group {
        column-count: 1;
      }
      .column-group-2{
        width: calc(100vw - 32px);
        margin: 20px auto;
        flex-wrap: nowrap;
        flex-direction: column;
      }
      .card{
        flex-wrap: nowrap;
        width: 100%;
        min-width: 80vw;
      }
      .card-text{
        margin: 15px 0px;
        min-width: 100%;
      }
      #formulario {
        margin: 20px 16px;
      }
      .custo-total{
        font-size: 1em;
      }
      .custo-total{
        border-radius: 0px;
        box-shadow: 0px 10px 10px 10px rgba(0, 0, 0, 0.445);
      }
      #creditos{
        font-size: 0.8em;
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
          <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome"
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
  <div class="column-group-2">


    <?php
    include("includes/conexao.php");
    $custoTotal_global = 0;
    $idusuario = $_SESSION['idusuario'];
    $dados = mysqli_query($conexao, "SELECT * FROM funcionarios WHERE idusuario = '$idusuario';");
    while ($funcionarios = mysqli_fetch_array($dados)):
      $salario = $funcionarios["salariohora"] * $funcionarios["cargahorariamensalltrabalhada"] + $funcionarios['bonificacao'];
      $horasExtras = ($funcionarios["horaextra50"] * $funcionarios["salariohora"] * 1.5) + ($funcionarios["horaextra50"] * $funcionarios["salariohora"] * 2);
        if($salario> 0 && $salario<=1412.00){
          $prevSocial = 0.075 * $salario;
        }
        else if($salario<= 2666.68){
          $prevSocial = 0.09 * $salario;
        }
        else if($salario<= 4000.03){
          $prevSocial = 0.12 * $salario;
        }
        else if($salario>= 4000.04){
          $prevSocial = 0.14 * $salario;
      }
      
      $fgts = 0.08 * $salario;
      $ferias = 0.111 * $salario;
      $decimoTerceiroSalario = (1 / 12) * $salario;
      $encargosTrabalhistas = ($prevSocial + $fgts + $ferias + $decimoTerceiroSalario);
      $custoTotal = $salario + $encargosTrabalhistas + $horasExtras;
      $custoTotal_global += $custoTotal;
      $_SESSION['funcionarios']['id'] = $funcionarios['id'];




      ?>

      <div class="card">
        <p class="name text-align"><strong><?php print $funcionarios['nome']; ?></strong></p>
        <p class="card-text">Salário: R$ <?php print number_format($salario, 2, ',', '.');
        ?> </p>
        <p class="card-text">Horas Extras: R$ <?php print number_format($horasExtras, 2, ',', '.'); ?> </p>

        <p class="card-text">FGTS: R$ <?php print number_format($fgts, 2, ',', '.'); ?></p>




        <p class="card-text">INSS: R$ <?php print number_format($prevSocial, 2, ',', '.'); ?></p>
        <p class="card-text">Férias (anual): R$ <?php print number_format($ferias, 2, ',', '.'); ?></p>
        <p class="card-text">13° salário (anual): R$ <?php print number_format($decimoTerceiroSalario, 2, ',', '.'); ?>
        </p>
        <p class="card-text"><strong>Custo Total: R$ <?php print number_format($custoTotal, 2, ',', '.'); ?></strong>
        </p>

        <form method="POST" class="centralizado" action="remover-funcionario.php">
          <input type="hidden" name="id_funcionario" value="<?php echo $funcionarios['id']; ?>">
          <button type="submit" id="remover" name="remover">Remover</button>
        </form>
      </div>

      <?php
    endwhile;
    ?>
  </div>
  <p class="custo-total">Custo Total Folha: R$ <?php print number_format($custoTotal_global, 2, ',', '.'); ?></p>
  <p id="creditos">Desenvolvido por Leonardo Wecker. Valores podem não estar corretos e/ou atualizados (2024).</p>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
</body>

</html>