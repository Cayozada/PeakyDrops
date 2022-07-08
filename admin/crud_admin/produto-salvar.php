<?php

    include("../../bd_models/conexao.php");
    include("../../bd_models/Produto.php");
    $pdo = Conexao::conectar();

    $produto = new Produto();

    $idProduto = $_POST['txIdProduto'];
    $produto = $_POST['txProduto'];
    $idCat = $_POST['txCat'];
    $valor = $_POST['txValor'];
    if(isset($_POST['moveFile']))
    {
    $nome = $_FILES['fotoProduto']['name'];
    $tempName = $_FILES['fotoProduto']['tmp_name'];
    if(isset($nome))
    {
        if(!empty($nome))
        {
            $location = "../../assets/img/";
            if(move_uploaded_file($tempName, $location.$nome))
            {
                echo 'file Uploaded';
            }
        }
    }
    }
    // $arquivo = $_FILES['fotoProduto']['tmp_name'];
    // $caminhoimagemTemp = "/PeakyDrops/assets/img";
    // $nome = $_FILES['fotoProduto']['name'];
    // $arquivo = $_FILES['fotoProduto']['tmp_name'];
    $caminhoimagem = " ../../assets/img/$nome";


    //echo "$idProduto $produto $idCat $valor";

    if($idProduto > 0){
        $stmt = $pdo->prepare("update tbProduto set produto='$produto', idCategoria='$idCat', valor='$valor', caminhoImagem='$caminhoimagem' where idProduto='$idProduto'");	
    }
    else{
        $stmt = $pdo->prepare("insert into tbProduto values(null,'$produto','$idCat','$valor', '$caminhoimagem');");	
    }    
	$stmt ->execute();

    header("location:/PeakyDrops/admin/crud_admin/produtoForm.php");

?>