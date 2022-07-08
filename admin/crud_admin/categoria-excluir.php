<?php

    $id = $_GET['id'];

    include("../../bd_models/conexao.php");
    $pdo = Conexao::conectar();
	
    $stmt =$pdo ->prepare("delete from tbCategoria where idCategoria='$id'");
    $stmt ->execute();

    header("location:/PeakyDrops/admin/crud_admin/categoriaForm.php");
?>