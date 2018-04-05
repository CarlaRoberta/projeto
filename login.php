<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
         <link rel="icon" href="img/iconec.png">
        <title>Login</title>

        <!-- Bootstrap core CSS -->
<!--        <link href="dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>-->
        <link href="css/bood.css" rel="stylesheet" type="text/css"/>
        <!-- Custom styles for this template -->
        <link href="css/singin.css" rel="stylesheet" type="text/css"/>
    </head>

    <body class="text-center">
        <form class="form-signin " action="verificar/verificar_login.php" method="POST">
            <img class="mb-4" src="img/cont.png" alt=""width="30%" height="30%" >
            <h1 class="h3 mb-3 font-weight-normal">Bem Vindo ao CILD.A</h1>
            <label for="inputEmail" class="sr-only">Endereço de e-mail:</label>
            <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required autofocus>
            <label for="inputPassword" class="sr-only">Senha</label>
            <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
            <div class="checkbox mb-3">
                <label>
                    <a style="color: palevioletred" href="cadastro.php"> Me Cadastar</a>
                </label>
            </div>
            <button class="btn btn-lg btn-danger btn-block" type="submit">Entrar</button>
            <p class="mt-5 mb-3 text-muted">&copy; Cild.a - 2018</p>
        </form>
    </body>
</html>
