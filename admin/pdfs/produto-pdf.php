<?php
	require_once("../../bd_models/conexao.php");
	$pdo = Conexao::conectar();

	$resultado ="";
    $resultado2 ="";

		$stmt = $pdo -> prepare("select * from tbproduto");       
		$stmt ->execute();

		while($row = $stmt->fetch(PDO::FETCH_BOTH)){
			$resultado .= $row['idProduto'] . "<br /> ";
			$resultado2 .= $row['produto'] . "<br />";				
		}	

	// include autoloader
	include("../api/api-pdf/dompdf/autoload.inc.php");
	
	//referenciar o DomPDF com namespace
	use Dompdf\Dompdf;
	
	//Criando a Instancia
	$dompdf = new DOMPDF();

	// Carrega seu HTML (Conteúdo)
	$dompdf->load_html(
		"		
            <style>	
            table, th, td, tr {
                border: 1px solid black;
                border-collapse: collapse;
                width:100%;
                text-align: center;
                }
            
            </style>
          
			<h1 style='color:#06f9f9;background:black; text-align: center;'> Produtos em estoque </h1>
            <table>
                    <thead>
                        <tr>
                            <th colspan='2'>
                                Produtos
                            </th>
                        </tr>
                    </thead>
                    <tr>
                        <th>id</th>
                        <th>Descricao</th>
                    </tr>
                    <tr>
                        <td>$resultado</td>
                        <td>$resultado2</td>
                    </tr>
            </table>										
		"
	);
	
	$dompdf->setPaper('A4', 'portrait'); //landscape	
		
	//Renderizar o html
	$dompdf->render();

	//Exibir a página
	$dompdf->stream(
		"categorias.pdf", 
		array(
			"Attachment" => false //Para realizar o download somente alterar para true
		)
	);
?>