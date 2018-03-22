<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="img/icone.jpg">
        <title>Faz o cadastro aí</title>

        <!-- Bootstrap core CSS -->
        <link href="css/bood.css" rel="stylesheet" type="text/css"/>

        <!-- Custom styles for this template -->
        <link href="form-validation.css" rel="stylesheet">
    </head>

    <body class="bg-light">
        <div class="container">
            <div class="py-5 text-center">
                <img class="d-block mx-auto mb-4" src="img/cont.png" alt="" width="72" height="72">
                <h2>Cadastro</h2>
                <p class="lead">Ei quando você sé cadastrar no nosso site, fara parte do nosso projeto.</p>
            </div>
            <form class="form-signin" action="inserir/inserir_pessoas.php" method="POST"  novalidate>
                <div class="row">
                    <div class="col-md-8 order-md-1">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="firstName">Primeiro Nome</label>
                                <input type="text" class="form-control" name="firstName" id="firstName" placeholder="" required>
                                <div class="invalid-feedback">
                                    OU FAZ CERTO.
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="lastName">Segundo Nome</label>
                                <input type="text" class="form-control" id="lastName" name="lastName" placeholder="" required>
                                <div class="invalid-feedback">
                                    OU FAZ CERTO.
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="email">Email </label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com" required="">
                            <div class="invalid-feedback">
                                OU FAZ CERTO.
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="password">Senha</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="*****" required>
                            <div class="invalid-feedback">
                                OU FAZ CERTO.
                            </div>
                        </div>

                    </div>
                </div>
                <center>
                    <hr class="mb-3">
                    <button class="btn btn-danger btn-lg " type="submit">Cadastrar</button>
                </center>
            </form>
        </div>
        <footer class="my-5 pt-5 text-muted text-center text-small">
            <p class="mb-1">&copy; Carla - 2018 </p>
        </footer>

        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
        <script src="../../../../assets/js/vendor/popper.min.js"></script>
        <script src="../../../../dist/js/bootstrap.min.js"></script>
        <script src="../../../../assets/js/vendor/holder.min.js"></script>
        <script>
            // Example starter JavaScript for disabling form submissions if there are invalid fields
            (function () {
                'use strict';

                window.addEventListener('load', function () {
                    // Fetch all the forms we want to apply custom Bootstrap validation styles to
                    var forms = document.getElementsByClassName('needs-validation');

                    // Loop over them and prevent submission
                    var validation = Array.prototype.filter.call(forms, function (form) {
                        form.addEventListener('submit', function (event) {
                            if (form.checkValidity() === false) {
                                event.preventDefault();
                                event.stopPropagation();
                            }
                            form.classList.add('was-validated');
                        }, false);
                    });
                }, false);
            })();
        </script>
    </body>
</html>
