<?php
    require_once("../../bd_models/Usuario.php");

    $login = $_POST['lbUser'];
    $senha = $_POST['lbPass'];

    try {
        $usuario = new Usuario();
        $listUsers = $usuario->listar();
        
    } catch(Exception $e) {
        echo $e->getMessage();
    }

    $count = count($listUsers);
    for ($i = 0; $i < $count; $i++) {   
        if(($login == $listUsers[$i]["loginusuario"]) && ($senha == $listUsers[$i]["senhausuario"])){
            session_start();
            $_SESSION['login-session'] = $login;
            $_SESSION['senha-session'] = $senha;
            $_SESSION['id-session'] = $listUsers[$i]["idusuario"];
            header("Location: /PeakyDrops/admin/home-admin.php");
            break;

        }else if($i == ($count - 1)){
            header("Location: /PeakyDrops/crud_user/login.php?auth=false");
        }
    }


    /*if (($login == 'adm') && ($senha == '123')){
        session_start();
        $_SESSION['login-session'] = $login;
        $_SESSION['senha-session'] = $senha;
        header("Location: restrito/index-restrita.php");
    }
    else{
        
            header("Location: funcArea.php?auth=false");

    }*/

?>