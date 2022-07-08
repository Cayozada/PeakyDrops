<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PeakyDrops</title>
    <!-- Cabecalho -->

    <?php 
      include("layout-admin/header.php");
    ?>
</head>
<body>
    <header>
    <?php 
      include("layout-admin/navbar-admin.php");
    ?>
    </header>

    </div>
    <h1 style="text-decoration: underline;"> Bem Vindo A Area Do Admin</h1>
    <br>
    <h1> Graficos</h1>
    <?php require_once("../bd_models/conexao.php"); ?>
    <?php
    $pdo = Conexao::conectar();
    $stmt = $pdo->prepare("select count(*) from tbProduto where idcategoria=1");
    $stmt ->execute();
    $row = $stmt ->fetch(PDO::FETCH_NUM);
    $row[0];
    ?>

    <?php
    $stmt = $pdo->prepare("select count(*) from tbProduto where idcategoria=2");
    $stmt ->execute();
    $row2 = $stmt ->fetch(PDO::FETCH_NUM);
    $row2[0];
    ?>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">
            google.charts.load('current', {'packages':['corechart']});
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {

              var data = new google.visualization.DataTable();
              data.addColumn('string', 'Pizza');
              data.addColumn('number', 'Populartiy');
              data.addRows([
                ['Camisas',<?php echo $row[0]; ?>],
                ['Moletons',<?php echo $row2[0]; ?>], // Below limit.
              ]);

              var options = {
                title: 'Grafico de Produtos por categorias',
                sliceVisibilityThreshold: .2
              };

              var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
              chart.draw(data, options);
            }

            google.charts.load('current', {packages: ['corechart', 'bar']});
            google.charts.setOnLoadCallback(drawMultSeries);

            function drawMultSeries() {
              var data = new google.visualization.DataTable();
              data.addColumn('timeofday', 'Time of Day');
              data.addColumn('number', 'Vendas');
              data.addColumn('number', 'Ganhos');

              data.addRows([
              [{v: [8, 0, 0], f: '8 am'}, 1, .25],
              [{v: [9, 0, 0], f: '9 am'}, 2, .5],
              [{v: [10, 0, 0], f:'10 am'}, 3, 1],
              [{v: [11, 0, 0], f: '11 am'}, 4, 2.25],
              [{v: [12, 0, 0], f: '12 pm'}, 5, 2.25],
              [{v: [13, 0, 0], f: '1 pm'}, 6, 3],
              [{v: [14, 0, 0], f: '2 pm'}, 7, 4],
              [{v: [15, 0, 0], f: '3 pm'}, 8, 5.25],
              [{v: [16, 0, 0], f: '4 pm'}, 9, 7.5],
              [{v: [17, 0, 0], f: '5 pm'}, 10, 10],
              ]);

            var options = {
            title: 'Vendas',
            hAxis: {
            title: 'horarios',
            format: 'h:mm a',
            viewWindow: {
            min: [7, 30, 0],
            max: [17, 30, 0]
              }
            },
            vAxis: {
            title: 'Rating (scale of 1-10)'
              }
            };

              var chart = new google.visualization.ColumnChart(
              document.getElementById('chart_div2'));

              chart.draw(data, options);
            }
        </script>
        <div class="chartsGoogle">
          <div id="chart_div" ></div>
          <div id="chart_div2"></div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
    <footer class="rodape-devs">
    <?php 
      include("layout-admin/footer-admin.php");
    ?>
    </footer>
</body> 
</html>