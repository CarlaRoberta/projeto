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
                <h2>Cadastro de Funcionarios</h2>
                <p class="lead">Cadastrar os funcionarios de sua Empresa.</p>
            </div>
            <form class="form-signin" action="inserir/inserir_funcionarios.php" method="POST"  novalidate>
                <div class="row">
                    <div class="col-md-8 order-md-1">
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label for="firstName"> Nome</label>
                                <input type="text" class="form-control" name="firstName" id="firstName" placeholder="" required>
                                <div class="invalid-feedback">
                                    OU FAZ CERTO.
                                </div>
                            </div>                           
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="insalubridade">Porcentagem da insalubridade</label>
                                <input type="number" class="form-control" id="insalubridade" name="insalubridade" placeholder="Não o símbolo: %. Exemplo caso 10%, coloque apenas 10." required="">
                                <div class="invalid-feedback">
                                    OU FAZ CERTO.
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="periculosidade">Periculosidade</label>
                                <input type="text" class="form-control" id="periculosidade" name="periculosidade" placeholder="Só responda Sim ou Não" required="">
                                <div class="invalid-feedback">
                                    OU FAZ CERTO.
                                </div>
                            </div>
                        </div>
                        <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="dependentes">Numero de dependentes</label>
                                <input type="number" class="form-control" id="dependentes" name="dependentes" placeholder="" required="">
                                <div class="invalid-feedback">
                                    OU FAZ CERTO.
                                </div>
                        </div>
                            <div class="col-md-6 mb-3">
                            <label for="salario">Salario</label>
                                <input type="number" class="form-control" id="salario" name="salario" placeholder="" required="">
                                <div class="invalid-feedback">
                                    OU FAZ CERTO.
                                </div>
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
