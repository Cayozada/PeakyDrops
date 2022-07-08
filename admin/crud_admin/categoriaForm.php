<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categoria-admin</title>
    <!-- Cabecalho -->
    <?php 
      include("header.php");
    ?>
</head>
<body class="body-content">
    <header>
    <?php 
      include("../layout-admin/navbar-admin.php");
    ?>
    </header>

    </div>
    <h1 style="text-decoration: underline;"> Admin Categoria</h1>
    <br>
    <div class="register-cat-pro" >

        <form method="post" action="/PeakyDrops/admin/crud_admin/categoria-inserir.php" enctype="multipart/form-data">

        <label class="crud-label sr-only"> Categoria</label>
        <input  type="text" name="txCategoria" class="crud-input form-control" placeholder="descricao" >
        <br>
        <button class="btn-crud-bd btn-lg btn-primary btn-block" type="submit" value="cadastrar">Cadastrar</button>
        </form>
        <br>
        </div>

        
        <?php require_once("../../bd_models/conexao.php"); ?>
        <?php
        $pdo = Conexao::conectar();
        $stmt =$pdo ->prepare("select idCategoria, categoria from tbcategoria");//
        $stmt ->execute();
        ?>

        <div class="itens-cat-pro" >
        <table class="table">
            <thead class="thead-cat-pro" >
                <tr class="tr-cat-pro">
                    <th>Id</th>
                    <th>Categoria</th>
                    <th>Exclusao</th>
                </tr>
            </thead>
            <tbody>
            <?php
            while($row = $stmt ->fetch(PDO::FETCH_BOTH)){?>
            <tr class="tr-cat-pro-bd"> 
                <td><?php echo $row['idCategoria'] ?></td>
                <td><?php echo $row['categoria'] ?></td>
                <td><?php echo "<a href='categoria-excluir.php?id=$row[idCategoria]'> Excluir </a>"?></td>
            <?php } ?>
            </tbody>
        </table>
</body> 
</html>