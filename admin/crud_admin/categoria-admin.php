<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categoria admin</title>
    <!-- CSS -->
    <link rel="stylesheet" href="styles/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

        <?php 
            include_once("php_models/navbar.php");
            include("bd_models/conexao.php");
        ?>
<body style="font-family: 'Roboto'; font-size:large">

<style>
        .div-cadastrarCategoria{
            width: 350px;
            justify-content: center;
            align-items: center;
            justify-items: center;
            margin-top: 100px;
            margin-left: auto;
            margin-right: auto;
          }
        .div-itensCadastrados{
            margin-top: 100px;
            margin-left: auto;
            margin-right: auto;
          }
    </style>


    <div class="div-cadastrarCategoria" >

        <form method="post" action="categoria-inserir.php" enctype="multipart/form-data">

        <label class="sr-only"> Categoria</label>
        <input style="width: 350px;"  type="text" name="txCategoria" class="form-control" placeholder="descricao" >
        <br>
        <button style="background-color: #2000d8;  width: 200px; width: 350px;" class="btn btn-lg btn-primary btn-block" type="submit" value="cadastrar">Cadastrar</button>
        </form>
    </div>

    <?php
	
	include("bd_models/conexao.php");
	
	    $stmt =$pdo ->prepare("select idCategoria, categoria from tbcategoria");//
	    $stmt ->execute();
    ?>

        <div class="div-itensCadastrados" ">
        <table class="table">
            <thead style="background-color: #2000d8; color: white" >
                <tr style="text-align: center; margin-left: auto; margin-right: auto;">
                    <th>Id</th>
                    <th>Categoria</th>
                    <th>Exclusao</th>
                </tr>
            </thead>
            <tbody style="font-family: 'Roboto';">
            <?php
            while($row = $stmt ->fetch(PDO::FETCH_BOTH)){?>
            <tr style="text-align: center; vertical-align: baseline;"> 
                <td><?php echo $row['idCategoria'] ?></td>
                <td><?php echo $row['categoria'] ?></td>
                <td><?php echo "<a href='categoria-excluir.php?id=$row[idCategoria]'> Excluir </a>"?></td>
            <?php } ?>
            </tbody>
        </table>
</body>
</html>