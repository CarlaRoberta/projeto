
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="img/icone.jpg">
        <title>Projeto</title>
        <link href="css/css.css" rel="stylesheet" type="text/css"/>
        <!-- Bootstrap core CSS -->
        <link href="css/bood.css" rel="stylesheet" type="text/css"/>
        <!-- Custom styles for this template -->
        <link href="css/carousel.css" rel="stylesheet" type="text/css"/>
        <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js" type="text/javascript"></script>
    </head>
    <body>

        <header>
            <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <main role="main">

            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="first-slide" src="img/slide/AURORA1.jpg" alt="First slide">
                        <div class="container">
                            <div class="carousel-caption text-left">
                                <h1>Hello, world!</h1>
                                <p>Eu não sei o que escrever aqui então vai ficar assim mesmo, eu não sei o que escrever aqui então vai ficar assim mesmo, eu não sei o que escrever aqui então vai ficar assim mesmo.</p>
                                <p><a class="btn btn-primary btn-lg" href="login.php" role="button"><span style="  color: white;font-size:150%;" class="glyphicon glyphicon-user"> <?php //echo $juncao;  ?></span></a></p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="second-slide" src="img/slide/aurora2.jpg" alt="Second slide">
                        <div class="container">
                            <div class="carousel-caption">
                                <h1>Hello, world!</h1>
                                <p>Eu não sei o que escrever aqui então vai ficar assim mesmo, eu não sei o que escrever aqui então vai ficar assim mesmo, eu não sei o que escrever aqui então vai ficar assim mesmo.</p>
                                <p><a class="btn btn-primary btn-lg" href="login.php" role="button"><span style="  color: white;font-size:150%;" class="glyphicon glyphicon-user"> <?php //echo $juncao;  ?></span></a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

        </main>
