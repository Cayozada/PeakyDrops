<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <!-- Cabecalho -->
    <?php 
      include("layout/header.php");
    ?>
</head>
<body class="body-register-login">
    <div class="login-register-page">
        <div class="form-register">
            <form class="register-form" method="POST" action="/PeakyDrops/crud_user/cadastrar-usuario.php"> <!-- /PeakyDrops/crud_user/auth/valida-login -->
            <h5>Cadastro</h5>
            <label  class="label" for="">Nome</label>
            <input name="lbName"  class="input-login-register form-control" placeholder="Nome" type="text" >
            <label  class="label" for="">Usuário</label>
            <input name="lbUser"  class="input-login-register form-control" placeholder="Usuário" type="text" >
            <label  class="label" for="">Email</label>
            <input name="lbEmail"  class="input-login-register form-control" placeholder="Email" type="text" >
            <label  class="label" for="">Senha</label>
            <input name="lbPass"  maxlength="10" class="input-login-register form-control" placeholder="Senha" type="password" >
            <br>
            <button class="btn-login-register btn-lg btn-primary btn-block" type="submit" > Registrar-se </button>

            <a class="back-message" href="/PeakyDrops/index.php">Voltar</a>
            </form>

        </div>

    </div>
    
</body>
</html>