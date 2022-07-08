<?php
    require_once("../bd_models/Usuario.php");

    $usuario = new Usuario();

    $usuario->setNomeUsuario($_POST['lbName']);
    $usuario->setLoginUsuario($_POST['lbUser']);
    $usuario->setSenhaUsuario($_POST['lbPass']);

    $usuario->cadastrar($usuario);

    header("Location: /PeakyDrops/crud_user/login.php");
?>