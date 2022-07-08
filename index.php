<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PeakyDrops</title>
    <!-- Cabecalho -->
    <?php 
      include("layout/header.php");
    ?>
</head>
<body>
    <header>
    <?php 
      include("layout/navbar.php");
    ?>
    <?php require_once("bd_models/conexao.php"); ?>
    </header>
    <h1 style="text-decoration: underline;"> Bem Vindo A PeakyDrops</h1>
    <br>
    <h1> Produtos</h1>
    <div class="body-products">
      <div class="products-gallery">
        <div class="products">
          <img src="./assets/img/tenis-adidas.jpg" alt="">
          <h3>Tenis</h3>
          <p class="desc-products">Tenis adidas Importado da russia</p>
          <h6>$350.00</h6>
          <ul class="list-star">
            <li><i class="fa fa-star checked"></i></li>
            <li><i class="fa fa-star checked"></i></li>
            <li><i class="fa fa-star checked"></i></li>
            <li><i class="fa fa-star checked"></i></li>
            <li><i class="fa fa-star"></i></li>
          </ul>
          <button class="btn-products"> Conferir</button>
        </div>
        <div class="products">
          <img src="./assets/img/blusa-moletom-adidas.png" alt="">
          <h3>Moletons</h3>
          <p class="desc-products">Moletom adidas Importado da russia</p>
          <h6>$450.00</h6>
          <ul class="list-star">
            <li><i class="fa fa-star checked"></i></li>
            <li><i class="fa fa-star checked"></i></li>
            <li><i class="fa fa-star checked"></i></li>
            <li><i class="fa fa-star checked"></i></li>
            <li><i class="fa fa-star"></i></li>
          </ul>
          <button class="btn-products"> Conferir</button>
        </div>
        <div class="products">
          <img src="./assets/img/camisa-adidas.png" alt="">
          <h3>Camisas</h3>
          <p class="desc-products">camisa adidas Importada da russia</p>
          <h6>$70.00</h6>
          <ul class="list-star">
            <li><i class="fa fa-star checked"></i></li>
            <li><i class="fa fa-star checked"></i></li>
            <li><i class="fa fa-star checked"></i></li>
            <li><i class="fa fa-star"></i></li>
            <li><i class="fa fa-star"></i></li>
          </ul>
          <button class="btn-products"> Conferir</button>
        </div>
      </div>
    </div>
    </div>
    <br>
    <br>
    <br>
    <footer class="rodape">
    <?php 
      include("layout/footer.php");
    ?>
    </footer>
</body> 
</html>