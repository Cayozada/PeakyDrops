<?php

	echo "Exibir Categorias <br />";
	
	include("../../bd_models/conexao.php");
	$pdo = Conexao::conectar();
	
	$stmt =$pdo ->prepare("select * from tbCategoria");
	$stmt ->execute();
	
	while($row = $stmt ->fetch(PDO::FETCH_BOTH)){
		echo $row['idCategoria'];
		echo $row['categoria'];				
		echo "<br />";
	}
?>