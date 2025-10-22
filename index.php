<!DOCTYPE html>
<html lang="pt-br">

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hamburgueria</title>
</head>

<body class="bg-secondary">
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">Início</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="index.php?tela=pedidos">📲 cadastro de pedidos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?tela=produtos">🛒 cadastro de produtos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?tela=registro">🔍 registro de pedidos</a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="index.php?tela=controle">📋 controle de estoque de ingredientes</a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="index.php?tela=clientes">👩🏻‍💻 cadastro de clientes</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container mt-5">
    <?php
    $tela = isset($_GET['tela']) ? $_GET['tela']: '';

    switch ($tela) {
      case 'pedidos':
        include_once('cadastrarpedidos.php');
        break;
      case 'produtos':
        include_once('cadastrarprodutos.php');
        break;
      case 'registro':
        include_once('registro.php');
        break;
        case 'controle':
        include_once('controle.php');
        break;
         case 'clientes':
        include_once('cadastrarclientes.php');
        break;
       
       

    }



    ?>
  </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script>

</html>