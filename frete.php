<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar CEP</title>
    <!-- Cabecalho -->
    <?php 
      include("layout/header.php");
    ?> 
</head>

<body style="overflow-y: hidden;">
        <header>
        <?php 
            include("layout/navbar.php");
            include("bd_models/conexao.php");
        ?>
        </header>

        <div class="body-cep">

        <form class="" method="post" action="api/api-cep.php">

        <h1 style="font-size: 30px;">Consultar CEP</h1>
        <br>
        <label class="crud-label sr-only"> CEP</label>
        <input   type="text" name="cep" class="crud-input form-control" placeholder="cep" value="">
        <br>     
        <label class="crud-label sr-only"> Logradouro</label>
        <input   type="text" name="logradouro" class="crud-input form-control" placeholder="logradouro" value="<?php echo @$_GET['logradouro'] ?>" >
        <br>
        <label class="crud-label sr-only"> Bairro</label>
        <input   type="text" name="bairro" class="crud-input form-control" placeholder="bairro" value="<?php echo @$_GET['bairro'] ?>" >
        <br>
        <label class="crud-label sr-only"> Localidade</label>
        <input   type="text" name="localidade" class="crud-input form-control" placeholder="localidade" value="<?php echo @$_GET['localidade'] ?>"  >
        <br>
        <label class="crud-label sr-only"> UF</label>
        <input   type="text" name="uf" class="crud-input form-control" placeholder="estado" value="<?php echo @$_GET['uf'] ?>" >
        <br>
        <button class="btn-crud-bd btn-lg btn-primary btn-block" type="submit" > Consultar </button>
        </form>
        </div>
</body>
</html>