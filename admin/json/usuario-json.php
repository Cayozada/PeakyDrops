<?php

    include("../../bd_models/conexao.php");

    $pdo = Conexao::conectar();
    $stmt = $pdo->prepare("select * from tbUsuario");	
    $stmt ->execute();

    $data = array();
    while($row = $stmt ->fetch(PDO::FETCH_ASSOC)){        
        $data[] = $row;                   					
    }	

    echo json_encode($data);
?>