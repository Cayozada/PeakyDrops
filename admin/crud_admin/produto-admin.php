<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos Admin</title>
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


    <div class="div-cadastrarProdutos" >

        <form method="post" action="produto-salvar.php" enctype="multipart/form-data">

        <div>
			<input type="hidden" class="tx" placeholder="ID Produto" name="txIdProduto" value="<?php echo @$_GET['idProd'] ?>" />
		</div>

        <label class="sr-only"> Produto</label>
        <input style="width: 350px;"  type="text" name="txProduto" class="form-control" placeholder="descricao" value="<?php echo @$_GET['prod'] ?>" >
        <br>
        <?php
			$stmtCat = $pdo->prepare("select * from tbCategoria");	
			$stmtCat ->execute();				
		?>
        <div>
        <?php 
			$cat = @$_GET['categoria'];				
		?>

        
        <select style="width: 350px;" name="txCat" class="form-select">
        <option value='0'> Escolha uma categoria </option>
        <?php 
			while($rowCat = $stmtCat ->fetch(PDO::FETCH_BOTH)){							
				if($cat==$rowCat[1]){
				    $sel = "selected";	
				}
				else{
					$sel = "";	
					}
						echo "<option value='$rowCat[0]' $sel> $rowCat[1] </option>";					
					}
				?> 
        </select>
        </div>
        <br>
        <label class="sr-only"> Valor</label>
        <input style="width: 350px;"  type="text" name="txValor" class="form-control" placeholder="valor" value="<?php echo @$_GET['valor'] ?>" >
        <br>
        <button style="background-color: #2000d8;  width: 200px; width: 350px;" class="btn btn-lg btn-primary btn-block" type="submit" value="salvar">Salvar</button>
        </form>
    </div>

    <?php
	
	include("bd_models/conexao.php");
	
	$stmt =$pdo ->prepare("select p.idProduto,p.produto,c.categoria,p.valor from tbproduto p
	inner join tbcategoria c
	on p.idCategoria = c.idCategoria");
	$stmt ->execute();
    ?>

        <div class="div-itensCadastrados" ">
        <table class="table">
            <thead style="background-color: #2000d8; color: white" >
                <tr style="text-align: center; margin-left: auto; margin-right: auto;">
                    <th>Id</th>
                    <th>produto</th>
                    <th>id categoria</th>
                    <th>valor</th>
                    <th>Exclusao</th>
                    <th>Alteracao</th>
                </tr>
            </thead>
            <tbody style="font-family: 'Roboto';">
            <?php
            while($row = $stmt ->fetch(PDO::FETCH_BOTH)){?>
            <tr style="text-align: center; vertical-align: baseline;"> 
                <td><?php echo $row['idProduto'] ?></td>
                <td><?php echo $row['produto'] ?></td>
                <td><?php echo $row['categoria'] ?></td>
                <td><?php echo $row['valor'] ?></td>
                <td><?php echo "<a href='produto-excluir.php?id=$row[idProduto]'> Excluir </a>"?></td>
                <td><?php echo "<a href='?idProd=$row[0]&prod=$row[1]&categoria=$row[2]&valor=$row[3]'> Editar </a>"?></td>
            <?php } ?>
            </tbody>
        </table>
    </body>
</html>
