<?php

    $id = $_GET['id'];

    include("../../bd_models/conexao.php");
    $pdo = Conexao::conectar();
	
    $stmt =$pdo ->prepare("delete from tbProduto where idProduto='$id'");
    $stmt ->execute();

    header("location:/PeakyDrops/admin/crud_admin/produtoForm.php");
?>