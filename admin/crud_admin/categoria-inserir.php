<?php
    $categoria = $_POST['txCategoria'];

    //echo "$produto $idCat $valor ";

    include("../../bd_models/conexao.php");
    $pdo = Conexao::conectar();
	
    $stmt = $pdo ->prepare("insert into tbCategoria values(null,'$categoria');");
    $stmt ->execute();

    header("location:/PeakyDrops/admin/crud_admin/categoriaForm.php");
?>