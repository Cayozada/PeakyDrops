<!-- navbar -->
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark header-nav fixed-top">
  <a style="margin-left: 20px;" id="tituloC" class="navbar-brand" href="#">PeakyDrops</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span></span>
    <span></span>
    <span></span>
  </button>

  <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ">
    <li class="nav-item " >
        <a  class="nav-link " href="/PeakyDrops/admin/home-admin.php">Home</a>
      </li>
      <li class="nav-item ">
        <a  class="nav-link" href="#">Graficos</a>
      </li>
    <li class="nav-item active">
        <a  class="nav-link" href="/PeakyDrops/admin/crud_admin/produtoForm.php">Produtos</a>
    </li>
    <li class="nav-item active">
        <a  class="nav-link" href="/PeakyDrops/admin/crud_admin/categoriaForm.php">Categoria</a>
    </li>
      <li  class="nav-item dropdown">
        <a  class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Gerar Jsons
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><a id="dropdown-option"  class="dropdown-item" href="/PeakyDrops/admin/json/produto-json.php">Produto</a></li>
          <li><a id="dropdown-option"  class="dropdown-item" href="/PeakyDrops/admin/json/categoria-json.php">Categoria</a></li>
          <li><a id="dropdown-option"  class="dropdown-item" href="/PeakyDrops/admin/json/usuario-json.php">Usuario</a></li>
        </ul>
      </li>
      <li class="nav-item dropdown">
        <a  class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Gerar pdfs
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><a id="dropdown-option"  class="dropdown-item" href="/PeakyDrops/admin/pdfs/produto-pdf.php">Produto</a></li>
          <li><a id="dropdown-option"  class="dropdown-item" href="/PeakyDrops/admin/pdfs/categoria-pdf.php">Categoria</a></li>
          <li><a id="dropdown-option"  class="dropdown-item" href="/PeakyDrops/admin/pdfs/usuario-pdf.php">Usuario</a></li>
        </ul>
      </li>
    </ul>
    <ul style="margin-right: 10px;" class="navbar-nav ms-auto ">
      <li  class="nav-item active">
        <a id="linksLr" class="nav-link" href="/PeakyDrops/admin/auth/logout.php">Sair</a>
      </li>
    </ul>
    </div>

    <?php
    session_start();
    if($_SESSION['login-session'] == ''){
        header("Location: ../index.php");
    
    }
?>
</nav>
</body>