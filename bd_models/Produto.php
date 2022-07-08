<?php

require_once('conexao.php');

class Produto{

    private $idProduto;
    private $produto;
    private $idCategoria;
    private $caminhoImagem;

    public function getIdProduto(){
        return $this->idProduto;
    }
    public function setIdProduto($idServico){
        $this->idServico = $idServico;
    }
    public function getProduto(){
        return $this->produto;
    }
    public function setProduto($produto){
        $this->produto = $produto;
    }
    public function getIdCategoria(){
        return $this->idCategoria;
    }
    public function setIdCategoria($idCategoria){
        $this->idCategoria = $idCategoria;
    }
    public function getFotoProduto(){
        return $this->caminhoImagem;
    }
    public function setFotoProduto($caminhoImagem){
        $this->caminhoImagem = $caminhoImagem;
    }

    public function listar(){
        $pdo = Conexao::conectar();
        $querySelect = "SELECT idproduto, produto, idcategoria, valor, caminhoimagem FROM tbproduto";
        $resultado = $pdo->query($querySelect);
        $lista = $resultado->fetchAll();
        return $lista;   
    }

    public function img(){
        $pdo = Conexao::conectar();
        $querySelect = "SELECT caminhoimagem FROM tbproduto";
        $resultado = $pdo->query($querySelect);
        $lista = $resultado->fetchAll();
        return $lista;   
    }
}
