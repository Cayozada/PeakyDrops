<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produto-admin</title>
    <!-- Cabecalho -->
    <?php 
      include("header.php");
    ?>
</head>
<body>
    <header>
    <?php 
      include("../layout-admin/navbar-admin.php");
    ?>
    </header>

    </div>
    <h1 style="text-decoration: underline;"> Admin Produto</h1>
    <br>

    <div class="register-cat-pro" >

        <form method="post" action="produto-salvar.php" enctype="multipart/form-data">

        <div>
			<input type="hidden" class="tx" placeholder="ID Produto" name="txIdProduto" value="<?php echo @$_GET['idProd'] ?>" />
		</div>

        <label class="crud-label sr-only"> Produto</label>
        <input  type="text" name="txProduto" class="crud-input form-control" placeholder="descricao" value="<?php echo @$_GET['prod'] ?>" >
        <br>
        <?php require_once("../../bd_models/conexao.php"); ?>
        <?php
            $pdo = Conexao::conectar(); 
			$stmtCat = $pdo->prepare("select * from tbCategoria");	
			$stmtCat ->execute();				
		?>
        <div>
        <?php 
			$cat = @$_GET['categoria'];				
		?>

        
        <select name="txCat" class="crud-select form-select">
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
        <label class="crud-label sr-only"> Valor</label>
        <input type="text" name="txValor" class="crud-input form-control" placeholder="valor" value="<?php echo @$_GET['valor'] ?>" >
        <br>
        <label class="crud-label sr-only"> Imagem</label>
        <input type="file" name="fotoProduto" class="crud-input form-control" value="<?php echo @$_GET['caminhoImagem'] ?>" >
        <!-- value="<php echo @$_GET['caminhoImagem'] >" -->
        <br>
        <button class="btn-crud-bd btn-lg btn-primary btn-block" name="moveFile" type="submit" value="salvar">Salvar</button>
        </form>
        <br>
    </div>

    <?php
	$stmt =$pdo ->prepare("select p.idProduto,p.produto,c.categoria,p.valor from tbproduto p
	inner join tbcategoria c
	on p.idCategoria = c.idCategoria");
	$stmt ->execute();
    ?>

        <?php require_once("../../bd_models/Produto.php"); ?>
            <?php
                $pdo = Conexao::conectar(); 
                try {
                    $produto = new Produto();
                    $listaProduto = $produto->listar();
                    
                } catch(Exception $e) {
                    // echo '<pre>';
                    //     print_r($e);
                    // echo '</pre>';
                    echo $e->getMessage();
                }				
		    ?>

        <div class="itens-cat-pro" >
        <table class="table">
            <thead class="thead-cat-pro" >
                <tr class="tr-cat-pro">
                    <th>Id</th>
                    <th>produto</th>
                    <th>id categoria</th>
                    <th>valor</th>
                    <th>imagem</th>
                    <th>Exclusao</th>
                    <th>Alteracao</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($listaProduto as $row){ ?>
            <tr class="tr-cat-pro-bd"> 
                <td><?php echo $row['idproduto'] ?></td>
                <td><?php echo $row['produto'] ?></td>
                <td><?php echo $row['idcategoria'] ?></td>
                <td><?php echo $row['valor'] ?></td>
                <td><a target="_blank" href=" <?php echo $row['caminhoimagem'] ?> "><img class="img-bd-admin" src=" <?php echo $row['caminhoimagem'] ?> "><a></td>
                <td><?php echo "<a href='produto-excluir.php?id=$row[idproduto]'> Excluir </a>"?></td>
                <td><?php echo "<a href='?idProd=$row[0]&prod=$row[1]&categoria=$row[2]&valor=$row[3]'> Editar </a>"?></td>
            <?php } ?>
            </tbody>
        </table>
</body> 
</html>
