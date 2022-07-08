<?php
    $cep = $_POST['cep'];

    $url = "https://viacep.com.br/ws/$cep/json/";
    $json = file_get_contents($url);    
    $data = json_decode($json);

    $logradouro = $data->logradouro; 
    $bairro = $data->bairro;
    $localidade = $data->localidade;
    $uf = $data->uf; 



    header("location:/PeakyDrops/frete.php?&logradouro= ".$logradouro."&bairro=".$bairro. " &localidade=" .$localidade."&uf= ".$uf." ");


?>