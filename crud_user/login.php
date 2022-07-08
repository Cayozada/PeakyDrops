<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <!-- Cabecalho -->
    <?php 
      include("layout/header.php");
    ?>
</head>
<body class="body-register-login">
    <div class="login-register-page">
        <div class="form-login">
            <form method="POST"  class="login-form" action="/PeakyDrops/crud_user/auth/valida-login.php">
            <h5>Login</h5>
            <label  class="label" for="">Usuário</label>
            <input  name="lbUser" class="input-login-register form-control" placeholder="Usuário" type="text"  >
            <label  class="label" for="label-hidden">Senha</label>
            <input  name="lbPass" maxlength="10" class="input-login-register form-control" placeholder="Senha" type="password" >
            <br>
            <button class="btn-login-register btn-lg btn-primary btn-block" type="submit" > Entrar </button>
            <p class="message">Nao possui uma conta? <a class="message-a" href="/PeakyDrops/crud_user/register.php">Registrar-se</a></p>

            <a class="back-message" href="/PeakyDrops/index.php">Voltar</a>
            </form>
        </div>

    </div>

    <div class="div-message" id="divMessage">
        <p style="margin:0;">Usuário incorreto/Nao Cadastrado!</p>
    </div>

        <?php
            if(isset($_GET['auth'])){
                if ($_GET['auth'] == "false"){
                    echo("<script>
                    setTimeout(() => {
                        document.getElementById('divMessage').style.bottom = '500px';
                        console.log(document.getElementById('divMessage').style.bottom)
                    }, 500);
                    </script>");
                }
            }
        ?>
    
</body>
</html>